<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
