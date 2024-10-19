@extends('layout')

@section('title')
Single User Detaila
@endsection

@section('content')
<table class="table table-striped">
    <tr>
        <th>Name:</th>
        <td>{{ $user->name }}</td>
    </tr>

    <tr>
        <th>Email:</th>
        <td>{{ $user->email }}</td>
    </tr>

    <tr>
        <th>Age:</th>
        <td>{{ $user->age }}</td>
    </tr>

    <tr>
        <th>Citt:</th>
        <td>{{ $user->city }}</td>
    </tr>
</table>
<a href="{{ route('user.index') }}" class="btn btn-success">Back</a>
@endsection
