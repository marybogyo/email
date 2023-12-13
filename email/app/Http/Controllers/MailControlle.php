<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;


class MailControlle extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from tesztmariann7474@gmail.com',
            'body' => 'This is for testing email using smtp.'
        ];
        
        //Mail::to('foloslegesideirni@gmail.com')
 //->send(new DemoMail($mailData));
        foreach(['patrikhamar460@gmail.com','beasuhi333@gmail.com','kissadam990202@gmail.com','testemil9779@gmail.com','tesztmarci96@gmail.com','bratis.marianna@gmail.com'] as $recipient){
            Mail::to($recipient)
            ->send(new DemoMail($mailData));
        }
        dd("Email is sent successfully.");
    }
 
}
