<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\VarDumper\VarDumper;
use App\Models\User;

class LoginController extends Controller 
{
    /* protected $redirectTo = '/usuarios.index'; */

    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        $remember = $request->has('remember');
    
        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();
            return redirect()->intended(route('usuarios.index'));

        } else {
            return redirect('login');
        }
    }
    


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('home');
    }
}
