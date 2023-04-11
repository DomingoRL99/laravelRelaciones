<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard("sanctum")->check()){
            return "el usuario ya está logeado";
        }
        
        if (Auth::attempt($data)){
            return Auth::user()->createToken("token");
        }
        return 'error';
    }

    public function whoAmI(Request $request){
        return Auth::user();
    }

    public function logout(Request $request){
        Auth::guard("sanctum")->user()->tokens()->delete();
    }

    public function test(Request $request){
        return "puedes ver esto sin estar logeado :)";
        }
    }   
