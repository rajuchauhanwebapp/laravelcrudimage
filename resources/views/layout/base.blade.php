<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @yield('title')

   {{-- Bootstrap CSS CDN --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
</head>
<body>
   {{-- Navbar --}}
   <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top py-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link btn btn-info btn-sm px-4" href="{{ route('home') }}">User List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-light btn-sm px-4" href="{{ route('create_user') }}">Add New User</a>
            </li>
          </ul>
        </div>
      </div>
   </nav>
   {{-- End Navbar --}}
   <div class="container-fluid" style="margin-top:80px">
      <h3 class="text-center text-primary border-bottom py-2 text-uppercase">Crud Operation with image</h3>
   </div>

   @yield('main-content')

   {{-- Bootstrap JS CDN --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{ asset('js/myscript.js') }}"></script>
</body>
</html>