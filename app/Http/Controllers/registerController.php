<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
class registerController extends Controller
{


public function registerform(){
    return view('USER.register');
}
public function register(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create a new user
    $user = register::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Log the user in
    // ...

    // Redirect to the home page
    // return redirect()->route('home');
}

}
