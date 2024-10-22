@extends('layout')


@section('content')
<div class="card">
    <div class="card-header">
        <h3>All Users Here</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped table-borderd">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </table>
    </div>
</div>
@endsection
