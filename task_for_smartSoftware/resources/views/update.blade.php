<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upadate Studens Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-success text-center text-light p-2">Upadated Student</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Form</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                        </div>

                        <div class="form-group">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" value="{{ $student->age }}">
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                            <small><img src="{{ asset('uploads/'. $student->image) }}" alt="" width="100"></small>
                        </div>

                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" value="{{ $student->city }}">
                        </div>
                        <button class="btn btn-success mt-2">Upadate</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
