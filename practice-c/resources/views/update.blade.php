@extends('layout')

@section('title')
Update User Here
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="bg-warning text-white">Update Single User </h2>
    </div>
    <div class="card-body">
        <form action="{{ route('user.update',$user->id )}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="{{ $user->name }}" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="{{ $user->email }}" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" value="{{ $user->age }}" name="age" class="form-control">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" value="{{ $user->city }}" name="city" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" value="save" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection
