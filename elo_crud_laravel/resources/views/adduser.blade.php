@extends('layout')

@section('title')
Add User
@endsection

@section('content')
<form action="{{ route('user.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="submit" class="btn btn-success mt-2">
    </div>
</form>
@endsection
