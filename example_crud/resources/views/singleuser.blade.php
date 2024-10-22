@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="bg-info">Singel User Details</h3>
    </div>
    <table class="table table-striped">
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
@endsection
