<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;

class MailController extends Controller
{

   // 发送邮件
    public function send(Request $request)
    {
        $to_mail =   $request->input('to_mail');
        Mail::raw('自如初-测试邮件发送' , function(Message $message)use ($to_mail){
            // 邮件接收者
            $message->to($to_mail);
            // 邮件主题
            $message->subject('hello world');
        });
    }


}








?>
