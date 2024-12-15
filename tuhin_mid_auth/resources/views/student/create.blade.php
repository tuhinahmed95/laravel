@extends('auth.layout')

@section('title')
    Create Student
@endsection

@section('content')
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="roll" class="form-label">Roll</label>
            <input type="roll" name="roll" class="form-control">
        </div>

        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control">
        </div>

        <div class="form-group">
            <label for="gpa" class="form-label">Gpa</label>
            <input type="number" name="gpa" class="form-control">
        </div>

        <div class="form-group">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" class="form-control">
        </div>

        <button class="btn btn-success mt-2">CreateStudent</button>
    </form>
@endsection
