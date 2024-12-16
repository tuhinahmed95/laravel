@extends('layout')

@section('title')
    Update Student
@endsection

@section('content')
<form action="{{ route('student.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="from-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}">
    </div>

    <div class="form-group">
        <label for="email" class="from-label">Email</label>
        <input type="email" name="email" class="form-control" value ="{{ $student->email }}">
    </div>

    <div class="form-group">
        <label for="age" class="from-label">Age</label>
        <input type="text" name="age" class="form-control" value="{{ $student->age }}">
    </div>

    <div class="form-group">
        <label for="city" class="from-label">City</label>
        <input type="text" name="city" class="form-control" value="{{ $student->city }}">
    </div>
    <button class="btn btn-success mt-2">StudentCreate</button>
</form>
@endsection
