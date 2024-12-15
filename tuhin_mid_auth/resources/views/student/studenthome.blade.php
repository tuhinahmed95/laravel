@extends('auth.layout')

@section('title')
All Student Details
@endsection

@section('content')
    <a href="{{ route('student.create') }}" class="btn btn-success">Add New</a>
    <table class="table table-striped">
        <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Age</th>
            <th>GPA</th>
            <th>City</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->roll }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->gpa }}</td>
            <td>{{ $student->city }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
@endsection
