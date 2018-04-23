<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;
use Auth;


class LogoutController extends Controller
{
    function logout()
    {
    	Auth::logout();
    	return redirect('login');
    }
}
