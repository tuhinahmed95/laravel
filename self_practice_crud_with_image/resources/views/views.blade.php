<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="text-center bg-success">Single Student Details Here</h1>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3>Single Student Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <td>{{ $student->id }}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $student->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>

                        <tr>
                            <th>Age</th>
                            <td>{{ $student->age }}</td>
                        </tr>

                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{ asset('uploads/'. $student->image) }}" alt="" width="100">
                            </td>
                        </tr>

                        <tr>
                            <th>City</th>
                            <td>{{ $student->city }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('student.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
