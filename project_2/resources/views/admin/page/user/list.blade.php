@extends('admin.partial.layout')
@section('title')
    User list
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>User list</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table">
                            <thead>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ( $users as $key => $data )
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>
                                            <a href="{{ route('admin.user.edit',$data->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('admin.user.delete',$data->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection