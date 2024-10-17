@extends('layout')

@section('title')
All Users Data
@endsection

@section('content')
    <div class="row">
        <div class="col-8">
            <a href="" class="btn btn-success btn-sm mb-3">Add New</a>
            <table class="table table-striped table-borderd">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delte</th>
                </tr>

                @foreach ($users as $user)

                @endforeach
            </table>
        </div>
    </div>
@endsection
