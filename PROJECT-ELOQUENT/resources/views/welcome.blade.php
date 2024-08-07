<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloqouent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="bg-primary text-white text-center">User Information</h1>
                <table class="table table-striped table-bordered mt-5">
                    @foreach ($users as $user )
                        <tr> 
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->age}}</td>
                            <td>{{ $user->city}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>