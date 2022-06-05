<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Students</title>

    <style>
        table, th, td 
        {
            border: 2px solid;
            border-collapse: collapse;
        }
    </style>

</head>

<body>

@extends('layout')
@section('content')
    <table class="table table-striped">

        <tr style="background-color: Lavender;">
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->country}}</td>
            <td>
                <form action="/edit/{{$student->id}}" method="get"><input type="submit" value="Edit"></form>
            </td>
            <td> 
                <form action="{{route('delete', $student->id)}}" method="get"><input type="submit" value="Delete"></form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>

@endsection
        
    