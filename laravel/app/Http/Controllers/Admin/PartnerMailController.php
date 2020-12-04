<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendMail;
use App\Model\Admin\EmailModel;
use App\Model\Admin\EmailPartnerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PartnerMailController extends Controller
{
    public function index()
    {
        $items = DB::table('partner')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        $emails = DB::table('email_partner')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $list = array();
        $list['emails'] = $emails;

        return view('admin.content.email.partner.index', $data, $list);
    }


    public function store(Request $request)
    {
        $items = $request->partner;
        if (isset($items)) {
            $data = array();
            $data['cats'] = $items;
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
        ]);

        $subject = $request->subject;
        $email = $request->email;
        $message = $request->message;

        $item = new EmailPartnerModel();
        $item->subject = $subject;
        $item->email = $email;
        $item->message = $message;
        $item->save();

        Mail::to($email)->send(new SendMail($subject, $message));
        return redirect('/admin/sendmail/partner');

    }

}
