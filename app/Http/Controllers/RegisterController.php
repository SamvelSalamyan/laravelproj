<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
        public $timestamps = true;

    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('home'));
        }

        $validateFields = $request->validate([
        'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('home'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'Error Enter'
        ]);

    }
}
