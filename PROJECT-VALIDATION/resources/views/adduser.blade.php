<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-4"> 
                <h1>Add New User</h1>
                {{-- @if ($errors->any())
                    <ul class="alert alert-danger"> 
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                @endif --}}
                <form action=" {{ route('addUser') }} " method="POST"> 
                    @csrf
                    <div class="mb-3"> 
                        <label for="" class="form-label">Name</label>
                        <input type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" name="username">
                        <span class="text-danger"> 
                            @error('username')

                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3"> 
                        <label for="" class="form-label">Email</label>
                        <input value="{{old('useremail')}}" type="email" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                        <span class="text-danger"> 
                            @error('useremail')
                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3"> 
                        <label for="" class="form-lable">Password</label>
                        <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password" >
                        <span class="text-danger"> 
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3"> 
                        <label for="" class="form-label">Age</label>
                        <input type="number" value="{{old('userage')}}" class="form-control @error('userage') is-invalid @enderror" name="userage">
                        <span class="text-danger"> 
                            @error('userage')
                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3"> 
                        <label for="" class="form-label">City</label>
                        <select class="form-control" name="usercity" > 
                            <option value="delli">Delli</option>
                            <option value="mumbai">Mumbai</option>
                            <option value="goa">Goa</option>
                            <option value="pune">Pune</option>
                        </select>
                        <span> 
                            @error('usercity')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>