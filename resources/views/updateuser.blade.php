@extends('Layouts.app')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <!-- form content / register area -->
            <div class="register-area">
                <!-- heading -->
                <h3>Update, user Account</h3>
                <form action="/user/{{ $user->id }}" method="POST" role="form" id="register-form">
                    @csrf
                    <!-- change POST method to PUT method in order to do update functionality-->
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullName" id="exampleInputName1"
                            value={{ $user->name }}>
                    </div>
                    <div class="form-group">
                        <div class="btn-group" data-toggle="buttons">
                            @if ($user->gender == "Male")
                                <label class="btn btn-info active">
                                    <input type="radio" name="gender" value="Male" checked> Male
                                </label>
                                <label class="btn btn-info">
                                    <input type="radio" name="gender" value="Female"> Female
                                </label>
                            @else
                                <label class="btn btn-info">
                                    <input type="radio" name="gender" value="Male"> Male
                                </label>
                                <label class="btn btn-info active">
                                    <input type="radio" name="gender" value="Male" checked> Female
                                </label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="exampleInputName1"
                            placeholder="address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2"
                            placeholder="Re-Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='{{ url('userdelete/'.$user->id) }}'">Delete</button>
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
