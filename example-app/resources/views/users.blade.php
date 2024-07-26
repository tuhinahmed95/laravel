@extends('layouts.masterlayout')
@section('content')
    <h1>Users Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore harum distinctio perferendis voluptatem aspernatur nesciunt eveniet debitis est! Magni blanditiis unde quas, nobis fuga recusandae. Eius pariatur, dolore nulla assumenda eveniet quis voluptatibus aliquam placeat mollitia enim expedita. Id doloribus voluptatibus incidunt assumenda, similique voluptate eaque sequi enim soluta!</p>   
    {{-- <h3>Name : {{$passdata}}</h3> --}}
    {{-- <h3>City :  {{ !empty($address)? $address: "No City" }}</h3> --}}

    @foreach ($user as $id => $u)
        <h3>{{$id}} {{$u["name"]}} |  {{$u["phone"]}} | {{$u["name"]}}</h3>
    @endforeach
@endsection
