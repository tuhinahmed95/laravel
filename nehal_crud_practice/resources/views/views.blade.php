@extends('layout')

@section('title')
    Single Student Details
@endsection

@section('content')
    <table class="table table-striped">
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
            <th>Age</th>
            <td>{{ $student->age }}</td>
        </tr>

        <tr>
            <th>City</th>
            <td>{{ $student->city }}</td>
        </tr>
    </table>
    <a href="{{ route('student.index') }}" class="btn btn-success">Back</a>

@endsection
