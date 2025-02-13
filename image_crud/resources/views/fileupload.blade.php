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
            <h1 class="text-center bg-info ">File Upload</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a href="" class="btn btn-success">Add New</a>
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div> --}}

                <div class="form-group">
                    <label for="image" class="form-label">FileUpload</label>
                    <input type="file" name="image" class="form-control" accept="images/*">

                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            @if (session('status'))
            <div class="alert alert-success mt-1 mb-1">{{ session('status') }}</div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-6">

        </div>
    </div>
</div>
</body>
</html>
