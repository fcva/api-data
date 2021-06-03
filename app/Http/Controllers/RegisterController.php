<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registro(Request $request)
    {

    	$request->validate([
    		'name' => 'required|max:36',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:8'
    	]);

    	$user = new User();

    	$user->name = $request->name;
    	$user->username = $request->username;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);

    	$user->save();

    	return 'ok';
    }
}
