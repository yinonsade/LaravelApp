<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Emails extends Model
{

    public static function emailSend($request)
    {
        $request->validate($request, [
            'name' => 'min:2',
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
        );

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('yinon-sade@hotmail.com');
            $message->subject($data['subject']);

        });

    }

    public static function newOrder()
    {

        $lastorder = Order::getLast();
        $data = array(
            'name' => 'e218',
            'subject' => 'new order',
            'bodyMessage' => $lastorder[0],
        );

        Mail::send('emails.neworder', $data, function ($message) use ($data) {
            $message->from('yinon-sade@hotmail.com');
            $message->to('yinon-sade@hotmail.com');
            $message->subject($data['subject']);

        });

    }

    public static function newInvoice()
    {

        $lastorder = Order::getLast();
        $data = array(
            'name' => 'e218',
            'to' => $lastorder[0]->email,
            'subject' => 'Thank you for your order',
            'bodyMessage' => $lastorder[0],
        );

        Mail::send('emails.invoice', $data, function ($message) use ($data) {
            $message->from('yinon-sade@hotmail.com');
            $message->to($data['to']);
            $message->subject($data['subject']);
            $message->bcc('yinon-sade@hotmail.com');

        });

    }

}