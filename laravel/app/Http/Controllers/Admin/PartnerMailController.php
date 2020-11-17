<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendMail;
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

        return view('admin.content.email.partner.index', $data);
    }

    public function send()
    {

        return view('admin.content.email.partner.send');
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

        Mail::to($email)->send(new SendMail($subject, $message));
        return redirect('/admin/sendmail/partner');

    }
}
