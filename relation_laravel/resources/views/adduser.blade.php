<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="from-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control">
            </div>

            <div class="from-group">
                <input type="submit" value="submit" class="form-control btn btn-success">
            </div>
        </form>
    </div>
</div>
</body>
</html>
