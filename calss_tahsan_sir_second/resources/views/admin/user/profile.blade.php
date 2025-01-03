@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{ route('user.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
    </form>
</div>

@endsection
