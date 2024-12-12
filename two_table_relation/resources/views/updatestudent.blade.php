<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1>Create Student & Course</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.update',$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Student Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="courses">Courses (comma-separated)</label>
                            <input type="text" name="courses[]" id="courses" class="form-control" placeholder="Enter course names, separated by commas" value="{{ implode(',', $student->courses->pluck('course_name')->toArray()) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
