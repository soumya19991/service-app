<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoggedController extends Controller
{
    //
    public function register()
    {
        return view('logged.register');
    }
    public function storeUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 3,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'User created successfully.');
    }
    public function login()
    {
        return view('logged.loggin');
    }
    public function logged_login(Request $request)
    {
        // return $request->all(); 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // return auth()->user();

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // return redirect()->route('dashboard');
            if(auth()->user()->role_id === 1){
                return redirect()->route('dashboard');
            }
        }

        return redirect()->route('login')->with('error', 'Invalid email or password.');
    }   
    public function logged_logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
