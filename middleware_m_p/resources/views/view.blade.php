@extends('layouts');

@section('title')
Single User Here
@endsection

@section('content')
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <td>{{ $student->id }}</td>
        </tr>

        <tr>
            <th>Name</th>
            <td>{{ $student->name }}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>{{ $student->email }}</td>
        </tr>

        <tr>
            <th>City</th>
            <td>{{ $student->city }}</td>
        </tr>
    </table>
@endsection
