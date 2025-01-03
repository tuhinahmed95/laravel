@extends('layout')

@section('title')
Update User Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('user.update',$user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" value="{{ $user->age }}">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="{{ $user->city }}">
            </div>

            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection
