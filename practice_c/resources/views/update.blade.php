@extends('layout')

@section('title')
Update User
@endsection

@section('content')
    <form action="{{ route('student.update',$students->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $students->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $students->email }}">
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" value="{{ $students->city }}">
        </div>

        <div class="form-group">
            <input type="submit" value="submit" class="btn btn-success mt-2">
        </div>
    </form>
@endsection
