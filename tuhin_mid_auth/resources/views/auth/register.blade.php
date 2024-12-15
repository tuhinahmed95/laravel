@extends('auth.layout')

@section('title')
    Registration Form
@endsection

@section('content')
<form action="{{ route('registerMatch') }}" method="POST">
    @csrf
    <div class="form-gropu">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-gropu">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-gropu">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-gropu">
        <label for="password" class="form-label">Pasword Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
    <button class="btn btn-success mt-2">Registration</button>
    <a href="/" class="btn btn-secondary mt-2">Back</a>
</form>
@endsection
