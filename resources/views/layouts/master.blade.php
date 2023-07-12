<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>

        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn-sm btn-primary">logout</button>
        </form>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>