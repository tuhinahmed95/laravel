@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h2 class="text-muted">Product Edit #{{$products->id}}</h2>
                    <form action="/products/{{$products->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name',$products->name)}}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description', $products->description) }}</textarea>

                            @if ($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" value="{{ old('image',$products->image)}}">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark mt-2">Submin</button>


                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

