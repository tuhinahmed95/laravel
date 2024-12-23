@extends('layout')


@section('content')
<h3><a href="{{ route('user.create') }}" class="btn btn-success text-light">Add New User</a></h3>

<div class="card">
    <div class="card-header">
        <h3>All Users Here</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped table-borderd">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td><a href="{{ route('user.show',$user->id) }}" class="btn btn-warning">View</a></td>
                    <td><a href="{{ route('user.edit',$user->id) }}" class="btn btn-success">Update</a></td>
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
