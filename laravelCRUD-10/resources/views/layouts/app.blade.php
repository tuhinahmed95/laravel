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

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{$message}}</strong>
        </div>

        @endif

        @yield('main')

</body>
</html>
