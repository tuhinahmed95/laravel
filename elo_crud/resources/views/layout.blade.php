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
        <div class="col-sm-8 bg-success-subtle text-white py-2">
            <h2>Eloquent Crud</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-8 bg-warning-subtle">
            @yield('title')
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
