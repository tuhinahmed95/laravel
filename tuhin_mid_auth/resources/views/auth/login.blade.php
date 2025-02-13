@extends('auth.layout')

@section('title')
    Login Form
@endsection

@section('content')
<form action="{{ route('loginMatch') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-success mt-2">Login</button>
    <a href="/" class="btn btn-secondary mt-2">Back</a>
</form>
@endsection
