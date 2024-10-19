@extends('layout')

@section('title')
All Users Data
@endsection

@section('content')
<div class="card">
    <div class="card-header">User Data</div>
    <div class="card-body">
        <table class="table table-striped">
            <a href="{{ route('user.create') }}" class="btn btn-success">Add New</a>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>Action</th>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">View</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                        <a href="#" class="btn btn-success">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
