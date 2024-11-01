@extends('layout')

@section('title')
Add New Student
@endsection

@section('content')
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="adress">Adress</label>
        <input type="text" class="form-control" name="adress">
    </div>

    <div class="form-group">
        <input type="submit" value="submit" class="btn btn-success">
    </div>
</form>
@endsection
