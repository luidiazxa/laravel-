<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        
        $name = $request->get('name');
        $email = $request->get('email'); 
        $bio = $request->get('bio');
        
        $users = User::orderBy('id', 'DESC')
        ->name($name)
        ->email($email)
        ->bio($bio)
        ->paginate(5);
        
       return view('users', compact('users'));
    }
}
