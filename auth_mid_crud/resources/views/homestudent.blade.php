<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h1>All Student List</h1>
                </div>

                <div class="card-body">
                <a href="{{ route('studnent.create') }}" class="btn btn-success d-inline">Add New Student</a>

                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>

                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->city }}</td>
                            <td>
                                <a href="{{ route('studnent.show',$student->id) }}" class="btn btn-success">View</a>
                            </td>
                            <td>
                                <a href="{{ route('studnent.edit',$student->id) }}" class="btn btn-warning">Update</a>
                            </td>
                            <td>
                                <form action="{{ route('studnent.destroy',$student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('login') }}" class="btn btn-success">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
