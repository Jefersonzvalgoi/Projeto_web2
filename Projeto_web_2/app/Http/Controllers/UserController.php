<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request){
        $credential = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]
        );

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return back()->withErrors([
            'auth_error' => 'Usuario ou senha inválidos!!'])->onlyInput('user_email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('showLogin');
    }

    public function showLogin(){
        return view('index');
    }

    public function showRegister(){
        return view('pages.cadastro');
    }

    public function register(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                //os campos aqui são os names dos campos do formulario HTML
                'email'=>'required|string',
                'password' => 'required|min:8',
                'name' => 'required|string',
                'phone' => 'required|string'
            ]
        );
        if($validator->fails()){
            return redirect()->route('user.showRegister')
            ->withErrors($validator)->withInput();
        }
        User::create($request->all());
        Auth::attempt(['email'=> $request->email,'password'=> $request->password]);
        $request->session()->regenerate();
        return redirect()->intended(route('home'));

    }

}
