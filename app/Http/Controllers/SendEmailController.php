<?php

namespace App\Http\Controllers;

use App\Mail\notifyEmail;
use App\Mail\notifyEmail2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
  public function sendEmail(Request $request)
    {
        $formData = $request->all(); 
        Config::set('mail.mailer', 'sendmail'); // Use the sendmail mailer

    // Config::set('mail.mailer', 'smtp'); // Set the mailer to use SMTP

    try {
        Mail::to('ba.abuzubaida@std.alaqsa.edu.ps')->send(new notifyEmail2($formData));
        echo 'sent successfully';
    } catch (\Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    // Mail::to('besanayman2002@gmail.com')->send(new notifyEmail);
    // if(Mail::failures()){
    //     echo 'sorry';
    // }
    // else{
    //     echo 'sent successfully';
    // }

}
}