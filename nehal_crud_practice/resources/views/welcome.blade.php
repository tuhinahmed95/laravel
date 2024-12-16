@extends('layout')

@section('title')
Al Student Details
@endsection

@section('content')
<a href="{{ route('student.create') }}" class="btn btn-success">Add New</a>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->city }}</td>
        <td>
            <a href="{{ route('student.show',$student->id) }}" class="btn btn-warning">View</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
