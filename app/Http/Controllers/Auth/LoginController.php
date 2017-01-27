<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Session;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
     public function index(){
        if(!Auth::check()){
            return view('auth.login');
        }else{
            return redirect('/admin/dashboard');
        }    
    }
    public function postLogin(Request $request){
        $input = [
                'username' => $request->input('username'),
                'password' => $request->input('password')
        ];
       if(Auth::attempt($input)){
             if(Auth::user()->role == 'Admin'){ 
              return redirect('/admin');
             }elseif (Auth::user()->role == 'Kasir') {
               return redirect('/kasir');
             } elseif (Auth::user()->role == 'Pelayan') {
               return redirect('/pelayan');
             }elseif (Auth::user()->role == 'Pantry') {
               return redirect('/pantry');
             }elseif (Auth::user()->role == 'CS') {
               return redirect('/customer');
             }elseif (Auth::user()->role == 'Koki') {
               return redirect('/koki');
             }    
        }else{
             Session::flash('failed','Username atau password salah !');
             return redirect('/');   
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
