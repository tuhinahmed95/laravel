@extends('layouts')

@section('title')
Add New Data
@endsection

@section('content')
<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city">
    </div>

    <div class="form-group">
        <input type="submit" class="form-control" name="submit" value="Submit">
    </div>
</form>
@endsection
