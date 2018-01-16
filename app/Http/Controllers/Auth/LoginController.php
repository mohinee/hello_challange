<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
use Redirect;
use Session;
use App\Models\currencyList as currencyList;
use App\Models\auditLog as auditLog;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        auditLog::insert("Login Request". " email: ".$request::input('email')." password: ".$request::input('pass'));
        
        if($request::input('pass') == 'magic'){
            $currencies = currencyList::getCurrency();
            return view('home',['currencies'=>$currencies]);
        }else{
            return view('/welcome',['message'=>'Login Failed']);
        }

    }
}
