@extends('layout')
@section('content')
    <h1>This is Customer Page</h1>

    @foreach ($pass_cus_arr as $cus)
        <li> {{$cus}} </li>
    @endforeach
@endsection
