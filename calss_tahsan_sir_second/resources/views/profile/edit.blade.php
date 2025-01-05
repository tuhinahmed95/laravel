@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
        </div>
    </form>
</div>

@endsection
