<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lacuna\RestPki\Authentication;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    use AuthenticatesUsers;

    public function loginCa(Request $request)
    {

        $user = User::where('token_ca', $request['token_ca'])->first();

        if (!empty($user)) {

            if (Auth::loginUsingId($user->id)) {
                // Authentication passed...
                return redirect()->action('HomeController@index');
            }

        }else {
            return redirect()->back();
        }
    }
}
