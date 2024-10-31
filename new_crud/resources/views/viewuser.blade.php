@extends('layout')

@section('title')
View Singel User
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-borderd">
            <tr>
                <th>Id :</th>
                <td>{{ $user->id }}</td>
            </tr>

            <tr>
                <th>Name :</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>Email :</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>Age :</th>
                <td>{{ $user->age }}</td>
            </tr>

            <tr>
                <th>City :</th>
                <td>{{ $user->city }}</td>
            </tr>
        </table>
        <a href="{{ route('user.index') }}" class="btn btn-success">Back</a>
    </div>
</div>
@endsection
