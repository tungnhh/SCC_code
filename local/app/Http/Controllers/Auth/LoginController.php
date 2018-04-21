<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request) {
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:8'
        ];
        $messages = [
            'email.required' => 'Email must required',
            'email.email' => 'Invalite Email',
            'password.required' => 'Password must required',
            'password.min' => 'Passwords must contain at least 8 characters',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->email;
            $password = bcrypt($request->password);

            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email or Password is incorrect']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
}
