<
!DOCTYPE html>
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
                        <h3>Registration Form</h3>
                    </div> <!-- card-header div শেষ -->
                    <div class="card-body"> <!-- card-body div শুরু -->
                        <form action="{{ route('registerSave') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="username">
                            </div>

                            <div class="mb-3">
                                <label for="useremail" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="useremail">
                            </div>

                            <div class="mb-3">
                                <label for="userpassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="userpassword">
                            </div>

                            <div class="mb-3">
                                <label for="userpassword-confirm" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="userpassword-confirm">
                            </div>
                            <button type="submit" class="btn btn-success">Registration</button>
                            <a href="/" class="btn btn-primary">Back</a>
                        </form>
                    </div> <!-- card-body div শেষ -->

                    @if ($errors->any())
                    <div class="card-footer text-body-secondary">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
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
