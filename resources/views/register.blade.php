@extends('Layouts.app')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <!-- form content / register area -->
            <div class="register-area">
                <!-- heading -->
                <h3>Sign Up, New Account</h3>
                <form action="/register" method="POST" role="form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullName" id="exampleInputName1"
                            placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-info">
                                <input type="radio" name="gender" value="Male"> Male
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="gender" value="Female"> Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2"
                            placeholder="Re-Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="exampleInputName1"
                            placeholder="address">
                    </div>
                    <div class="checkbox form-group">
                        <label>
                            <input type="checkbox" name="agreeConditions"> I agree with all terms and conditions.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">SignUp</button>&nbsp;
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- banner end -->
@endsection
