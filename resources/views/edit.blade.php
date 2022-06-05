@extends('layout')
@section('content')

<br><br><br><br><br>

<center>
<table>
<form action = "{{route('edit', $stEdit->id)}}" method = "post">
<!-- <form action = "edit/{{$stEdit->id}}" method = "post"> -->
{{@csrf_field()}}

    <tr>
            <td>Name:</td>
            <td><input type = "text" value = "{{$stEdit->name}}" name = "name" ></td>
    </tr>
    <tr>
            <td>Age:</td>
            <td><input type = "number" value = "{{$stEdit->age}}" name = "age"></td>
    </tr>
    <tr>
            <td>City:</td>
            <td><input type = "text" value = "{{$stEdit->city}}" name = "city"></td>
    </tr>
    <tr>
            <td>Country:</td>
            <td><input type = "text" value = "{{$stEdit->country}}" name = "country"></td>
    </tr>
    <tr><td colspan = "2"><center><input type = "submit" value = "Edit User" class="btn btn-primary mb-2" style="width: 100px"></center></td></tr>
    
</form>
</table>
</center>
    
@endsection
