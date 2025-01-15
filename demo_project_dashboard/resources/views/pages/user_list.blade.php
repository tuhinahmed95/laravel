@extends('layouts.admin.master')
@section('content')
<div class="content mt-p" style="margin-top: 200px;">
    <h1 class="btn btn-success">User List</h1>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        {{-- {{ $users }} --}}
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.userEdit', $user->id) }}"><i class="fa-solid fa-pencil text-light bg-info p-2 fs-6 rounded"></i></a>

                    <a href=""><i class="fa fa-trash text-light bg-danger p-2 fs-6 rounded"></i></a>
                </td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
