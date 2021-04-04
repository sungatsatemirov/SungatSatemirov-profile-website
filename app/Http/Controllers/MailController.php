<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Nursultan Nazarbaev';
        $objDemo->receiver = 'Satemirov Sungat';

        Mail::to("190103481@stu.sdu.edu.kz")->send(new DemoMail($objDemo));
    }
}
