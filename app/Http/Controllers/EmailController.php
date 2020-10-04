<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {

        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'email' => $request->email,
            'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
            $message->to($data['0c3daa85c0-e74466@inbox.mailtrap.io'])
                ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
