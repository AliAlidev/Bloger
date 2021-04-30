<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isNull;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        session(['username' => $fullName, 'userid' => $user->id]);
        return Redirect::route('home');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
