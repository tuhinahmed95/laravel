@extends('admin.partial.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>User Create Form</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <label for="name" class="form-group">Name</label>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
