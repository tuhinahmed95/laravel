<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1>Login Form</h1>
                </div>
                <form action="{{ route('loginMatch') }}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>


                    </div>
                    <button class="btn btn-success">Login</button>
                    <a href="/" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
