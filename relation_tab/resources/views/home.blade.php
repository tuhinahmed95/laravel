@extends('layout')

@section('title')
All Data Here
@endsection

@section('content')
<a href="{{ route('student.create') }}" class="btn btn-success">Add New Student</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>PHONE</th>
        <th>GPA</th>
        <th>COLLEGE_NAME</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->contact->phone }}</td>
        <td>{{ $student->contact->gpa}}</td>
        <td>{{ $student->contact->college_name }}</td>
        <td>
            <a href="#" class="btn btn-warning">View</a>
            <a href="#" class="btn btn-success">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
