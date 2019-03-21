<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends MainController
{

    public function home()
    {
        self::$data['pageTitle'] .= 'Home Page';
        return view('content.home', self::$data);

    }

    public function welcome()
    {
        self::$data['pageTitle'] .= 'Welocome Page';
        return view('content.welcome', self::$data);

    }

    public function terms()
    {
        self::$data['pageTitle'] .= 't&c';
        return view('content.terms', self::$data);

    }

    public function content($url)
    {
        Content::getAll($url, self::$data);
        return view('content.content', self::$data);

    }
    public function getContact()
    {
        self::$data['pageTitle'] .= 'Contact Page';
        return view('forms.contact', self::$data);
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
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
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'THANK YOU, Your Email Was Sent');
        return redirect('home');
    }

}