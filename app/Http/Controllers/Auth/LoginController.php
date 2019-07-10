<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
      public function logout()
      {
        Auth::logout();
        return redirect('/');

      }
    
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'mantenerSesion']);   
    }

    public function mantenerSesion()
    {
        return view('login');
    }
    
    public function login()
        {
            $credentials = $this->validate(request(), [
                'email' => 'email|required|string',
                'password' => 'required'
            ]);

             //   return $credentials;
            if(Auth::attempt($credentials))
            {
                return redirect()->route('vistas');
            }
            
              return back()
              ->withErrors(['email' =>trans('auth.failed')])
              ->withInput(request(['email']));
        }
}