@extends('layout')

@section('title')
All Data Here
@endsection

@section('content')
<h3><a href="{{ route('student.create') }}" class="btn btn-success">Add New</a></h3>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
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
        <td>{{ $student->city }}</td>
        <td><a href="{{ route('student.show',$student->id) }}" class="btn btn-warning">View</a></td>
        <td><a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">Upadte</a></td>
        <td>
            <form action="{{ route('student.destroy',$student->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
