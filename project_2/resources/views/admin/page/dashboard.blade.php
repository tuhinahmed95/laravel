@extends('admin.partial.layout')
@section('title')
    Dashboard
@endsection

@section('content')
    <h4>Hello {{ auth()->user()->email }}</h4>
@endsection