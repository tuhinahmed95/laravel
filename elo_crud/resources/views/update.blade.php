@extends('layout')

@section('title')
Update User Data
@endsection

@section('content')
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-labe">Name</label>
            <input type="text" value="{{ $user->name }}" class="form-control" name="username">
        </div>

        <div class="mb-3">
            <label for="useremail" class="form-labe">Email</label>
            <input type="email" value="{{ $user->email }}" class="form-control" name="useremail">
        </div>

        <div class="mb-3">
            <label for="userage" class="form-labe">Age</label>
            <input type="number" value="{{ $user->age }}" class="form-control" name="userage">
        </div>

        <div class="mb-3">
            <label for="usercity" class="form-labe">City</label>
            <input type="text" value="{{ $user->city }}" class="form-control" name="usercity">
        </div>

        <div class="mb-3">
            <input type="submit" value="save" class="btn btn-success">
        </div>
    </form>
@endsection
