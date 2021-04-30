<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function SignOut()
    {
        session(['username' => null]);
        return redirect('/');
    }

    public function LogIn(Request $request)
    {
        if (is_null($request->userName))
            return back()->with('status', 'you should enter user name');
        if (is_null($request->password))
            return back()->with('status', 'you should enter password');

        $user = User::where('name', $request->userName)->where('password', hash('sha256', $request->password))->first();
        if (!is_null($user)) {
            session(['username' => $request->userName, 'userid' => $user->id]);
            return redirect('/');
        } else
            return back()->with('status', 'user not found try another one');
    }
}
