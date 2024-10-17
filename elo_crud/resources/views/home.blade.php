@extends('layout')

@section('title')
All Users Data
@endsection

@section('content')

            <a href="{{ route('user.create') }}" class="btn btn-success btn-sm mb-3 mt-2">Add New</a>
            <table class="table table-striped table-borderd">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delte</th>
                </tr>

                @foreach ($users as $user)
                    <tr>
                        <td>$user->id</td>
                        <td>$user->name</td>
                        <td>$user->email</td>
                        <td>$user->age</td>
                        <td>$user->city</td>
                        <td><a href="{{ route('user.show',$user->id) }}" class="btn btn-warning">View</a></td>
                        <td><a href="{{ route('user.update',$user->id) }}" class="btn btn-success">Update</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>

@endsection
