@extends('layout')
@section('content')

<br><br><br><br><br>

<center>
<table>
<form action="add" method="post">
{{@csrf_field()}}
    <tr>
            <td>Name:</td>
            <td><input type="text" placeholder="Enter Name" name="name" ></td>
    </tr>
    <tr>
            <td>Age:</td>
            <td><input type="number" placeholder="Enter Age" name="age"></td>
    </tr>
    <tr>
            <td>City:</td>
            <td><input type="text" placeholder="Enter City" name="city"></td>
    </tr>
    <tr>
            <td>Country:</td>
            <td><input type="text" placeholder="Enter Country" name="country"></td>
    </tr>
    <tr><td colspan="2"><center><input type="submit" value = "Add User" class="btn btn-primary mb-2" style="width: 100px"></center></td></tr>
    
</form>
</table>
</center>

@endsection
