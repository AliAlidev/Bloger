@extends('Layouts.app')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <!-- form content / login area -->
            <div class="login-area">
                <!-- heading -->
                <h3>Sign In, To Your Account</h3>
                <form action="/submit" method="GET" role="form" id="login-form">
                    <div class="form-group">
                        <input type="text" name="userName" class="form-control" id="exampleInputUser1"
                            placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="checkbox form-group">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
                <div style="float:left; padding-top: 10px">
                    @if ($errors->any)
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
@endsection
