<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function homepage(){
        if(auth()->check()){
            return view('homepage-feed');

        }else {
            return view('homepage');
        }
    }

    public function register(Request $request){
        $incomingField = $request->validate([
            'first_name' => ['required','min:4', 'max:30'],
            'last_name' => ['required','min:4', 'max:30'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required', 'min:8'],
            'phone_number' =>['required', 'min:8'],
            'gender' =>'required',
            'address' => 'required'
        ]);

        $incomingField['password'] = bcrypt($incomingField['password']);

        $user = Users::create($incomingField);
//        auth()->login($user);

        return redirect('/')->with('success', 'Thank you for creating an accout');
    }

    public function login(Request $request){
        $loginField = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['email'=>$loginField['loginemail'], 'password'=>$loginField['loginpassword']])){
            $request->session()->regenerate();
//            return "Congrats";
            return redirect('/')->with('success', 'You have successfully loggged in.');
        }else{
            return redirect('/')->with('failure', 'Invalid login');
        }


    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'You are now logged out.');

    }

}
