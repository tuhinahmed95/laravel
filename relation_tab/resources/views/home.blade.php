@extends('layout')

@section('title')
All Data Here
@endsection

@section('content')
<a href="{{ route('student.create') }}" class="btn btn-success">Add New Student</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>PHONE | GPA | College_Name |</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->address }}</td>
        <td>
            @foreach ($student->contacts as $contact)
            {{ $contact->phone }} , {{ $contact->gpa }} , {{ $contact->college_name }}
             @endforeach
        </td>

       
    </tr>
    @endforeach
</table>
@endsection

{{--
@extends('layout')

@section('title')
All Data Here
@endsection

@section('content')
<a href="{{ route('student.create') }}" class="btn btn-success">Add New Student</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>PHONE</th>
        <th>GPA</th>
        <th>COLLEGE_NAME</th>
        <th>Action</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->gpa }}</td>
        <td>{{ $contact->college_name }}</td>
        <td>{{ $contact->student->name }}</td>
        <td>{{ $contact->student->email }}</td>
        <td>{{ $contact->student->address }}</td>

        <td>
            <a href="#" class="btn btn-warning">View</a>
            <a href="#" class="btn btn-success">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection --}}

