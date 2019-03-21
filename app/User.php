<?php

namespace App;

use DB;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Mail;
use Session;

class User extends Model
{
    public static function authUser($email, $password)
    {
        $auth = false;

        $user = DB::table('users AS u')
            ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')
            ->where('u.email', '=', $email)
            ->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                $auth = true;
                if ($user->rid == 6) {
                    Session::put('is_admin', true);
                }
                self::setUserSession($user, ',welcome back!');
            }
        }

        return $auth;
    }

    public static function save_new($request)
    {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->phone = $request['telephone'];
        $user->aname = $request['a-name'];
        $user->aline1 = $request['a-line1'];
        $user->aline2 = $request['a-line2'];
        $user->acity = $request['a-city'];
        $user->aregion = $request['a-region'];
        $user->apostalcode = $request['a-postal-code'];
        $user->acountry = $request['a-country'];

        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUES($uid, 7)");
        self::setUserSession($user, ',signup successfully!');

    }

    public static function getUser()
    {
        $userId = Session::get('user_id');
        $profile = DB::table('users AS u')
            ->where('u.id', '=', $userId)
            ->get()
            ->toArray();
        return $profile;
    }

    private static function setUserSession($user, $ms)
    {
        Session::put('user_name', $user->name);
        Session::put('user_id', $user->id);
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', $user->name . ',signup successfully!');

    }

    public static function snedEmail($request)
    {

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => 'Hey from E2.1.8',
        );
        Mail::send('emails.newUser', $data, function ($message) use ($data) {
            $message->from('yinon-sade@hotmail.com');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
    }

    public static function upadte_user($request)
    {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->phone = $request['telephone'];
        $user->aname = $request['a-name'];
        $user->aline1 = $request['a-line1'];
        $user->aline2 = $request['a-line2'];
        $user->acity = $request['a-city'];
        $user->aregion = $request['a-region'];
        $user->apostalcode = $request['a-postal-code'];
        $user->acountry = $request['a-country'];
        $id = Session::get('user_id');
        DB::table('users')
            ->where('id', $id)
            ->update($user->attributes);
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', $user->name . ',you update your profile successfully!');

    }

}