<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendMail;
use App\Model\Admin\EmailScholarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ScholarMailController extends Controller
{
    public function index()
    {
        $items = DB::table('scholar')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        $emails = DB::table('email_scholar')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $list = array();
        $list['emails'] = $emails;

        return view('admin.content.email.scholar.index', $data, $list);
    }


    public function store(Request $request)
    {
        $items = $request->partner;
        $email = "";
        if (isset($items)) {
            foreach ($items as $item) {
                $email = $email . '  ' . $item;
            }

            $data = array();
            $data['cat'] = trim($email);
            return view('admin.content.email.partner.send', $data);
        } else {
            return redirect('/admin/sendmail/partner');
        }
    }

    public function sendemail(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required',
        ], [
            'required' => ':attribute bắt buộc nhập.',
            'email' => ':attribute chưa đúng định dạng'
        ], [
            'subject' => 'Tiêu đề',
            'email' => 'Email',
            'message' => 'Nội dung',
        ]);

        $subject = $request->subject;
        $email = $request->email;
        $message = $request->message;
        $documents = $request->documents;
        $data = array();
        if (!empty($documents)) {
            foreach ($documents as $document) {
                if ($document->getError() == 1) {
                    $max_size = $document->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
                    $error = 'The document size must be less than ' . $max_size . 'Mb.';
                    return redirect()->back()->with('flash_danger', $error);
                }
                $data[] = [
                    'file' => $document->getRealPath(),
                    'options' => [
                        'mime' => $document->getClientMimeType(),
                        'as' => $document->getClientOriginalName()
                    ],
                ];
            }
        }

        $recipients = explode('  ', $email);
        foreach ($recipients as $recipient) {
            if (!empty($recipient)) {
                Mail::to($recipient)->send(new SendMail($subject, $message, $data));
            }
        }

        $item = new EmailScholarModel();
        $item->subject = $subject;
        $item->email = $email;
        $item->message = $message;

        if (!empty($documents)) {
            foreach ($documents as $document) {
                $name = $document->getClientOriginalName();
                $document->move('uploads', $name);
                $item->document = $name;
                $item->save();
            }
        }
        $item->save();

        return redirect('/admin/sendmail/scholar');

    }

}
