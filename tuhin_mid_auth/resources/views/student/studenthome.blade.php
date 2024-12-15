@extends('auth.layout')

@section('title')
All Student Details
@endsection

@section('content')
    <a href="#" class="btn btn-success">Add New</a>
    <table class="table table-striped">
        <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Age</th>
            <th>GPA</th>
            <th>City</th>
        </tr>
    </table>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
@endsection
