<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register form
    public function create()
    {
        return view('users.register');
    }
    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'lname' => ['required', 'min:3'],
            'fname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/index');
    }
    // logout users
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    // show login form
    public function login(){
        return view('users.login');
    }
    // Authenticate User
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/index');
        }
        else{
         return back()->withErrors(['email'=>'Les informations d\'identification invalides'])->onlyInput('email');
        }
    }
}