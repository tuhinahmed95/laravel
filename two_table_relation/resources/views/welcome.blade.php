<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h1>All Studen & Course</h1>
                </div>
                <div class="card-body">
                    <a href="{{ route('student.create') }}" class="btn btn-success">Add New</a>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Student_Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Student_Id</th>
                        </tr>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <ul>
                                    @foreach ($student->courses as $course)
                                    <li>{{ $course->course_name }}</li>
                                    <li>{{ $course->student_id }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
