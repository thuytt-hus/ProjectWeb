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
        $data = array();
        $data['cats'] = $items;
        return view('admin.content.email.scholar.send', $data);
    }

    public function sendemail(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $subject = $request->subject;
        $email = $request->email;
        $message = $request->message;

        $item = new EmailScholarModel();
        $item->subject = $subject;
        $item->email = $email;
        $item->message = $message;
        $item->save();

        Mail::to($email)->send(new SendMail($subject, $message));
        return redirect('/admin/sendmail/scholar');

    }

}
