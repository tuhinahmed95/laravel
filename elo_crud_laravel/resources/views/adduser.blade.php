@extends('layout')

@section('title')
Add User
@endsection

@section('content')
<form action="#" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
</form>
@endsection
