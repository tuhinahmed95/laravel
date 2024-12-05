<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="bg-warning">Login Form</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('loginMatch') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button class="btn btn-success">Login</button>
                        <a href="/" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

