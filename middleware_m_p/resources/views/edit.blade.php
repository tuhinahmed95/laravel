@extends('layouts')

@section('title')
Update Data Here
@endsection

@section('content')
<form action="{{ route('student.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
    </div>

    <div class="form-group">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $student->email }}">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" value="{{ $student->city }}">
    </div>

    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" name="submit" value="Submit">
    </div>
</form>
@endsection
