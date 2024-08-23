@extends('layouts.app')

@section('main')

<div class="container">
    <div class="row">
            <div class="col-sm-8 mt-3">
                <div class="card">
                    <p>Name : <b>{{$product->name}}</b></p>
                    <p>Description : <b>{{$product->description}}</b></p>
                    <img src="/products/{{$product->image}}" alt="" class="rounded" width="100%">
                </div>
            </div>
    </div>
</div>

@endsection
