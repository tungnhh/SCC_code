<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Validator;

class HomeController extends Controller
{
    //
    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request) {
        $validator = Validator::make($request->all(),
            [
                'email' => 'required',
                'password' => 'required|min:8',
            ],
            [
                'email.required' => 'Please enter your email!',
                'password.required' => 'Please enter your password!',
                'password.min' => 'The password has at least 8 character',
            ]);
        if($validator->fails())
            return redirect('login')->withErrors($validator)->withInput();
        else
        {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
                return redirect('/');
            else
                return redirect('login')->with('message','Email or Password is not correct.Please try again!');
        }

    }
    function getRegister(){
        return view('register');
    }

    protected function postRegister(Request $request){
        $this->validate($request,[
            'name' =>'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|min:8|regex:/^[a-zA-Z0-9!$#%]+$/',
            'passwordAgain' => 'required|same:password'
        ],[
            'name.required' => 'Please enter your name!',
            'email.required' => 'Please enter your email!',
            'email.email' => 'Please enter valid email!',
            'email.unique' => 'The email address you have entered is already registered',
            'password.required'=>'Please enter your password!',
            'password.min' =>'The password has at least 8 character',
            'password.regex' =>'The password accept character: a-z,A-Z,0-9',
            'passwordAgain.required'=>'Please enter your confirm password!',
            'passwordAgain.same' => "Confirm password doesn't match. Please enter again"

        ]);
        $user =new User;
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->pass = bcrypt($request ->password);
        $user ->phoneNumber = $request ->phone;
        $user ->workplace = $request ->place;
        $user ->dateOfBirth = $request ->dob;
        $user ->role=0;
        $user ->save();

        return redirect('users/subject/list')->with('thongbao',"Register successfully");

    }

}
