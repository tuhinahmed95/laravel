@extends('layout')

@section('title')
    All Users Data
@endsection

@section('content')
<div class="col-8">
    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm mb-3">Add New</a>
    <table class="table table-striped table-bordered">

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

        @foreach ($users as $user )
            <tr> 
                <td>{{ $user->id}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->age}}</td>
                <td>{{ $user->city}}</td>
                <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-success">View</a></td>
                <td><a href="" class="btn btn-warning">Update</a></td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>
    
</div>
@endsection