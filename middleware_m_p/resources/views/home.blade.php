@extends('layouts')

@section('title')
All Data Show Here
@endsection

@section('content')
<a href="{{ route('student.create') }}" class="btn btn-success">Add New Data</a>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delte</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->city }}</td>
            <td>
                <a href="{{ route('student.show',$student->id) }}" class="btn btn-warning">View</a>
            </td>
            <td>
                <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">Update</a>
            </td>
            <td>
                <form action="{{ route('student.destroy',$student->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
