<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
   {
       $mailData = [
           'title' => 'Mail from tesztgyongyiteszt@gmail.com',
           'body' => 'This is for testing email using smtp.'
       ];
       
       //Mail::to('beasuhi333@gmail.com')
        //->send(new DemoMail($mailData));
      foreach(['patrikhamar460@gmail.com','beasuhi333@gmail.com','testemil9779@gmail.com', 'tesztmarci96@gmail.com', 'tesztbibanka@gmail.com','s.v.gyongyi@gmail.com', 'americanviking6@gmail.com'] as $recipient)

        Mail::to($recipient)
        ->send(new DemoMail($mailData));
       dd("Email is sent successfully.");
   }

}
