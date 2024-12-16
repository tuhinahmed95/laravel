@extends('layout')

@section('title')
    Create Student
@endsection

@section('content')
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name" class="from-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="from-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="age" class="from-label">Age</label>
            <input type="text" name="age" class="form-control">
        </div>

        <div class="form-group">
            <label for="city" class="from-label">City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <button class="btn btn-success mt-2">StudentCreate</button>
    </form>
@endsection
