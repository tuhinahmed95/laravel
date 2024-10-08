<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h1>Welcome Page</h1>
                </div>
                <div class="card-body">
                    <form action="#">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control">

                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control">

                        <label for="password">Password</label>
                        <input type="text" id="password" class="form-control">

                        <label for="password">Confirm Password</label>
                        <input type="text" id="password" class="form-control">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
