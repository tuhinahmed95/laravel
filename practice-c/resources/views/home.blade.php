@extends('layout')

@section('title')
    All Users Data
@endsection

@section('content')
<a href="{{ route('user.create') }}" class="btn btn-success">Create New User</a>
<div class="card">
    <div class="card-header">
        <h3 class="bg-info">All Users Here</h3>
    </div>
    <div class="card-body">
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

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td><a href="{{ route('user.show',$user->id) }}" class="btn btn-success">View</a></td>
                    <td><a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning text-light">Edit</a></td>
                    <td>
                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
