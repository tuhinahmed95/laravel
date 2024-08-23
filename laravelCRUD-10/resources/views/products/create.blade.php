<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="/">Products</a>
        </div>
      </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form action="/products/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark mt-2">Submin</button>


                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
