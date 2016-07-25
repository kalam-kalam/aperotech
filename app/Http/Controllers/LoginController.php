<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {

            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);


            $credentials = $request->only('username', 'password');



            if (Auth::attempt($credentials))
            {

                return redirect('admin/index')->with( ['message'=>'success']);
            }else{

                return back()->withInput($request->only('username'))
                    ->with(['message'=> 'identifiant ou mot de passe erroné']);
            }
        }
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with(['message'=>'success logout']);
    }
}

