<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function signupForm()
    {
        if(Auth::check()){
            return redirect()->route('account');
        }else{
            return view('auth.signup');
        }
    }

    public function signup (SignupRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->birthday=$request->get('birthday');
        $user->password = Hash:: make($request->get('password'));
        $user->save();

        Auth:: Login($user);

        return redirect()-route('/');
    }

    public function loginform()
    {
        if(Auth::check()){
            return redirect()->route('account');
        }else{
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        $credentials= $request->only('name','password');
        $remenberLogin= ($request->get('remember')) ? true: false;

        if(Auth::guard('web')->attempt($credentials, $remenberLogin)){
            $request->session()->regenerate();
            return redirect()->route('account');
        } else{
            $error = 'La contraseña o el usuario son incorrectos o no existen, intentalo de nuevo';
            return view('auth.login', compact('error'));
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}








