@extends('layout')

@section('title')
View Users Data
@endsection

@section('content')
<table class="table table-striped table-borderd">
    <tr>
        <th width="8opx">Name :</th>
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
<div>
    <a href="{{ route('user.index') }}" class="btn btn-success">Back</a>
</div>
@endsection
