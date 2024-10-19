@extends('layout')

@section('title')
Add User
@endsection

@section('content')
<form action="{{ route('user.update',$user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Name</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" value="{{ $user->age }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" value="{{ $user->city }}" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="update" class="btn btn-success mt-2">
    </div>
</form>
@endsection
