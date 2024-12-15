@extends('auth.layout')

@section('title')
    Dashboard
@endsection

@section('content')
<div>
    <a href="{{ route('student.studenthome') }}" class="btn btn-success">StudentCreate</a>
    <a href="/" class="btn btn-secondary">Back</a>
</div>
@endsection
