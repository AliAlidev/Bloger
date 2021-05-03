<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\slider;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function index()
    {
        $sliderData = slider::all();
        return view('login', ['slider_data' => $sliderData]);
    }

    public function SignOut()
    {
        session(['username' => null]);
        return redirect('/');
    }

    public function LogIn(Request $request)
    {
        $request->validate([
            'userName' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('name', $request->userName)->where('password', hash( 'sha256',$request->password))->first();
       
        if (!is_null($user)) {
            session(['username' => $request->userName, 'userid' => $user->id]);
            return redirect('/');
        } else
            return back()->withErrors('user not found try another one');
        // throw ValidationException::withMessages(['user not found try another one']);
    }
}
