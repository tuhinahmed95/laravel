@extends('layout')

@section('title')
All Data Here
@endsection

@section('content')
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->city }}</td>
    </tr>
    @endforeach
</table>
@endsection
