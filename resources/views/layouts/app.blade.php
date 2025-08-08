<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #333;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-4 d-flex justify-content-between">
        <ul class="navbar-nav flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('products.index') }}">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('categories.index') }}">Categorias</a>
            </li>
        </ul>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-light">Logout</button>
        </form>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
