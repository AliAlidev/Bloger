@extends('Layouts.app')

@section('content')
    <h1 style="padding-top: 100px;text-align:center"> {{ $goalitem->title }} </h1>
    <p style="font-size: 25px; padding-left: 200px; padding-right: 200px; padding-top: 50px">
        {{ $goalitem->description }}
    </p>
@endsection
