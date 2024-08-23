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
          <a class="navbar-brand text-light" href="">Products</a>
        </div>
      </nav>

    <div class="container">
        <div class="text-end">
            <a href="products/create" class="btn btn-dark mt-2">New Product</a>
        </div>

        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product )
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->name}}</td>
                    <td><img src="products/{{$product->image}}" alt="" class="rounded-circle" width="30" height="30"></td>
                    <td>
                        <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                        <a href="products/{{$product->id}}/edit" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>
