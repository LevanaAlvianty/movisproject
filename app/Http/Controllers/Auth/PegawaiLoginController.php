<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class PegawaiLoginController extends Controller
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
    protected $redirectTo = '/pegawai/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * @return property guard use for login
     *
     */
    public function guard()
    {
        return auth()->guard('pegawai');
    }

    public function showLoginForm()
    {
        return view('auth.pegawai-login');
    }

}
