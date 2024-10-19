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
                <th>View</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td><a href="{{ route('user.show',$user->id) }}" class="btn btn-warning">View</a></td>
                    <td> <form action="{{ route ('user.destroy',$user->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form></td>

                    <td> <a href="{{ route('user.edit',$user->id) }}" class="btn btn-success">Edit</a></td>

                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
