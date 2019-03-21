<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends MainController
{

    public function mail()
    {
        $name = 'Krunal';
        Mail::to('yinonsade@gmail.com')->send(new SendMailable($name));

        return 'Email was sent';
    }
}