<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upadte  Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-success text-center text-light">Student Form</h1>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h1>Update Student</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-labek">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-labek">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-labek">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('uploads/'.$student->image) }}" alt="" width="100">
                            @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city" class="form-labek">City</label>
                            <input type="text" name="city" class="form-control" value="{{ $student->city }}">
                            @error('city')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-success mt-2">Upadte</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
