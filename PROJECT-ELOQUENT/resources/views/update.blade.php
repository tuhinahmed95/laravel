@extends('layout')

@section('title')
    Update User Data
@endsection

@section('content')
    <form action="" method="POST"> 
        <div class="mb-3"> 
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="mb-3"> 
            <label for="useremail" class="form-label">User Email</label>
            <input type="email" name="useremail" class="form-control">
        </div>

        <div class="mb-3"> 
            <label for="userage" class="form-label">User Age</label>
            <input type="number" name="userage" class="form-control">
        </div>

        <div class="mb-3"> 
            <label for="usercity" class="form-label">User City</label>
            <input type="text" name="usercity" class="form-control">
        </div>
        <div class="mb-3"> 
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
@endsection