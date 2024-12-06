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
        <div class="card">
            <div class="card-header">
                <h1 class="bg-info ">Dashboard</h1>
            </div>
            <div class="card-body">
                <div>
                    <a href="{{ route('inner') }}" class="btn btn-success">InnerPage</a>
                    <a href="/" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
