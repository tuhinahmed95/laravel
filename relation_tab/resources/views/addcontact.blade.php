@extends('layout')

@section('title')
Add New Contact
@endsection

@section('content')
<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="phon">Phone</label>
        <input type="number" class="form-control" name="phone">
    </div>

    <div class="form-group">
        <label for="gap">GPA</label>
        <input type="number" class="form-control" name="gpa">
    </div>

    <div class="form-group">
        <label for="college">College_Name</label>
        <input type="text" class="form-control" name="college">
    </div>

    <div class="form-group">
        <input type="submit" value="submit" class="btn btn-success">
    </div>
</form>
@endsection
