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
            <div class="col-5 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1>Rsigistration Form</h1>
                    </div>
                    <div class="cord-body">
                        <form action="{{ route('registerSave') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Name</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>

                            <div class="mb-3">
                                <label for="useremail" class="form-label">Email</label>
                                <input type="text" name="useremail" class="form-control" id="useremail">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="password">
                            </div>

                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="text" name="confirm-password" class="form-control" id="confirm-password">
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="/" class="btn btn-secondary">Back</a>
                        </form>
                    </div>

                    @if ($errors->any())
                    <div class="card-footer text-body-secondary">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>

</body>
</html>
