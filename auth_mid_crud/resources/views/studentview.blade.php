<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1>Single Student View</h1>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <td>{{ $studnet->id }}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $studnet->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $studnet->email }}</td>
                        </tr>

                        <tr>
                            <th>Address</th>
                            <td>{{ $studnet->address }}</td>
                        </tr>

                        <tr>
                            <th>City</th>
                            <td>{{ $studnet->city }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('studnent.index') }}" class="btn btn-success">Back</a>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
