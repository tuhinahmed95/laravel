@extends('layout')

@section('title')
View Sinlge User
@endsection

@section('content')
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <td>{{ $students->id }}</td>
    </tr>

    <tr>
        <th>Name</th>
        <td>{{ $students->name }}</td>
    </tr>

    <tr>
        <th>Email</th>
        <td>{{ $students->email}}</td>
    </tr>

    <tr>
        <th>City</th>
        <td>{{ $students->city }}</td>
    </tr>
</table>
<a href="{{ route('student.index') }}" class="btn btn-success">Back</a>
@endsection
