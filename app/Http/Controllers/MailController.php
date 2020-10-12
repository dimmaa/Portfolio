<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'name'=> "Dims",
            'verification_code' => "BlaBlaBla",
        ];

        Mail::to('mijndeveloper@gmail.com')->send(new SignupEmail());
    }
}
