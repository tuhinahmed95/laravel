<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloqouent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 bg-warning mb-3"> 
                <h4>User Information</h4>
            </div>
            <div class="col-8">
                <a href="" class="btn btn-success btn-sm mb-3">Add New</a>
                <table class="table table-striped table-bordered">

                    <tr> 
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($users as $user )
                        <tr> 
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->age}}</td>
                            <td>{{ $user->city}}</td>
                            <td><a href="" class="btn btn-success">View</a></td>
                            <td><a href="" class="btn btn-warning">Update</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>