<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    //
 

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
            'passwordAgain.required'=>'Please enter your confirm password!',
            'passwordAgain.same' => "Confirm password doesn't match. Please enter again"

        ]);
        $user =new User;
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->password = bcrypt($request ->password);
        $user ->phoneNumber = $request ->phone;
        $user ->workplace = $request ->place;
        $user ->dateOfBirth = $request ->dob;
        $user ->role=1; // User
        $user ->save();

        if( Auth::attempt(['email' => $request ->email, 'password' =>$request ->password])) {
                return redirect()->intended('users/subject/list');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email or Password is incorrect']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        return redirect('users/subject/list')->with('thongbao',"Register successfully");

    }
}
