<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Student Details</h1>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>All Student Details</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('student.create') }}" class="btn btn-success">Add New</a>
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Image</th>
                    </tr>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                            @if ($student->image)
                                <img src="{{ asset('uploads/'. $student->image) }}" alt="" width="100">
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
