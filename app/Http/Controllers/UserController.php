<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('created_at','desc')->paginate(5);
        return view('show',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($request->fullName))
            return back()->with('status', 'please enter full name');
        if (is_null($request->gender))
            return back()->with('status', 'you should select gender');
        if (is_null($request->password))
            return back()->with('status', 'please enter password');
        if ($request->password != $request->confirmPassword)
            return back()->with('status', 'password confirmaion error');
        if (!$request->agreeConditions)
            return back()->with('status', 'you should agree conditions before you signup');

        $fullName = $request->fullName;
        $gender = $request->male ? 'male' : 'female';
        $email = $request->email;
        $password = hash("sha256", $request->password);
        $address = $request->address;

        // check duplication
        $user = User::where('email', $email)->count();
        if ($user > 0)
            return back()->with('status', 'you should try another email address because it is already taken');

        //there is two method to insert into dataase
        // first method:

        // $user = new User;
        // $user->name = $fullName;
        // $user->gender = $gender;
        // $user->email = $email;
        // $user->password = $password;
        // $user->save();

        // second method
        $user = User::create([
            'name' => $fullName,
            'gender' => $gender,
            'email' => $email,
            'address' => $address,
            'password' => $password
        ]);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $userdata = User::find($id);
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('updateuser')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (is_null($request->fullName))
            return back()->with('status', 'please enter full name');
        if (is_null($request->gender))
            return back()->with('status', 'you should select gender');
        if (is_null($request->password))
            return back()->with('status', 'please enter password');
        if ($request->password != $request->confirmPassword)
            return back()->with('status', 'password confirmaion error');

        $fullName = $request->fullName;
        $gender = $request->gender;
        $password = hash("sha256", $request->password);
        $address = $request->address;

        $user = User::where('id', $id)->update([
            'name' => $fullName,
            'gender' => $gender,
            'password' => $password,
            'address' => $address
        ]);

        session(['username' => $fullName]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);
        session(['username' => null]);
        return redirect('/');
    }

    public function destroy1($id)
    {
        $user = User::destroy($id);
        session(['username' => null]);
        return redirect('/user');
    }
}
