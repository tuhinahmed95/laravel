@extends('layouts.app')


@section('content')

<form action="" method="POST">
    <div class="form-group">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="" class="form-label">Image</label>
        <input type="text" name="image" class="form-control">
    </div>

    <div class="form-group">
        <label for="" class="form-label">Quantity</label>
        <input type="text" name="quantity" class="form-control">
    </div>

    <div class="form-group">

        <input type="submit" class="form-control btn btn-success mt-2">
    </div>
</form>


@endsection
