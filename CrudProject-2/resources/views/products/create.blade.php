<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel Crud </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="bg-dark py-3"> 
        <h3 class="text-white text-center">Simple Laravel Crud</h3>
    </div>
        <div class="container"> 
            <div class="row d-flex justify-content-center"> 
                <div class="col-md-10"> 
                    <div class="card borde-0 shadow-lg my-4"> 
                        <div class="card-header bg-dark"> 
                            <h3 class="text-white">Create Products</h3>
                        </div>
                        <form action="{{ route('products.store')}}" method="POST"> 
                            @csrf
                            <div class="card-body"> 
                                <div class="md-3"> 
                                    <label for="" class="form-label h5">Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="name" name="name">
                                </div>
                                <div class="md-3"> 
                                    <label for="" class="form-label h5">Sku</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="sku" name="sku">
                                </div>
                                <div class="md-3"> 
                                    <label for="" class="form-label h5">Price</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="price" name="price">
                                </div>
                                <div class="md-3"> 
                                    <label for="" class="form-label h5">Description</label>
                                    <textarea name="description" class="form-control"  cols="30" rows="10"></textarea>
                                </div>
                                <div class="md-3"> 
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control form-control-lg" placeholder="name" name="image">
                                </div>
                                <div class="d-grid"> 
                                    <button class="btn btn-success btn-lg">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>