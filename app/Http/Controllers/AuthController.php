<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Route;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Flight;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {

       // Validator::make($request->all(),[
          //  'name' =>'required',
          ///  'email'=> 'required|email',
          //  'password' =>'required|confirmed',
      //  ])->validate();
// dd($request);
       $flight = new User();
       $flight->name = $request->name;
       $flight->email = $request->email;
       $flight->alamat = $request->alamat;
       $flight->password = $request->password;
       $flight->save();



return redirect('/login');

   // User::create()([
     //   'name' =>$request->name,
     //   'email' =>$request->email,
      //  'password'=> Hash::make([$request->password]),


//]);


    }

    public function login()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }

            

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');


        //Validator::make($request->all()[
        //'email' => $request->name->email,
        //'password'=>$request->name->hash::make('password');
       // ]);
    }

}
