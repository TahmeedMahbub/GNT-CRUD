@extends('layout')
@section('content')

<br><br><br><br><br>

<center>
    Do you want to delete <b>{{$student->name}}</b>'s Information?
    

    <form action="{{route('deleteSub', $student->id)}}" method="post">
        {{@csrf_field()}}
        <input type="number" name="age" placeholder="Enter your age to delete" style="width: 250px;">
        <input type="submit">
    </form><br>

    @if(Session::has('message'))
        <p class="alert alert-danger">{{ Session::get('message') }}</p>
    @endif
</center>


@endsection