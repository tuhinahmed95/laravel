@extends('auth.layout')

@section('title')
Home Page
@endsection

@section('content')
<div>
    <a href="{{ route('auth.register') }}" class="btn btn-success">Registration</a>
    <button class="btn btn-secondary">Login</button>
</div>
@endsection
