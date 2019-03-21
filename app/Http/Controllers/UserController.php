<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{
    /**
     *filter pages on user/ ...
     */

    public function __construct()
    {
        parent::__construct();
        $this->middleware('authuser', ['except' => ['logout', 'getProfile', 'postProfile']]);
    }
    /**
     * Store a newly created resource in storage.
     *user logs are
     */
    public function getSignin()
    {
        self::$data['pageTitle'] .= 'Signin Page';

        return view('forms.signin', self::$data);
    }

    public function getsignup()
    {
        self::$data['pageTitle'] .= 'Signup page';
        self::$data['errors_top'] = false;
        return view('forms.signup', self::$data);
    }

    public function postSignup(SignupRequest $request)
    {
        User::save_new($request);
        User::snedEmail($request);
        return redirect('home');

    }

    public function postSignin(SigninRequest $request)
    {
        if (User::authUser($request['email'], $request['password'])) {
            $rn = !empty($request['rn']) ? $request['rn'] : 'home';
            return redirect($rn);
        } else {
            self::$data['pageTitle'] .= 'Signin Page';
            self::$data['auth_error'] = '* Wrong email or password';
            return view('forms.signin', self::$data);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('user/signin');
    }

    public function getProfile()
    {

        $userProfile = User::getUser();
        self::$data['pageTitle'] .= 'Profile';
        self::$data['errors_top'] = false;
        self::$data['getProfile'] = $userProfile;
        return view('forms.profile', self::$data);

    }
    public function postProfile(Profile $request)
    {

        $rn = !empty($request['rn']) ? $request['rn'] : 'home';

        User::upadte_user($request);
        // User::snedEmail($request);
        return redirect($rn);

    }

}