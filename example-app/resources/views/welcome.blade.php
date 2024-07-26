@extends('layouts.masterlayout')

@section('content')
    <h1>Home Page</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis optio perferendis recusandae labore eligendi dicta asperiores cum exercitationem, expedita laudantium.</p>
@endsection

@section('title')
    Home
@endsection

@push('scripts')
    <script src="/example.js"></script>
    <script src="/jquery.js"></script>
    <script src="/bootstrap.js"></script>
@endpush

@push('style')
    <link rel="stylesheet" href="css/bootstrap.css">
@endpush

@prepend('style')
    <style> 
        main{ 
            background-color: tan
        }
    </style>
@endprepend