<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navbar with Sidebar and Footer</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 56px;
    }
    .sidebar a {
      color: #fff;
      display: block;
      padding: 10px 15px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 250px; /* Sidebar width */
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top mb-5">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">BrandName</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href=" {{ route('admin.userList') }} ">User</a>
    <a href="{{ route('admin.edit') }}">UserEdit</a>
    <a href="#">Logout</a>
  </div>

  <!-- Content Section -->
    @yield('content')

  <!-- Footer -->
  <footer class="bg-dark text-light text-center py-3 mt-5">
    <p>&copy; 2025 Your Website. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
