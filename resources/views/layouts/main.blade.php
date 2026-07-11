<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelarat's Books Store - @yield('title')</title>
</head>
<body>
    <h1>Lelarat's Books Store - @yield('title')</h1>
    
    <nav>
        <a href="{{ route('products.list') }}">Products</a>
        <a href="{{ route('categories.list') }}">Categories</a>
    </nav>

    @yield('content')

    <br>
    <footer>
        &copy; Copyright Week-03, 2026 Lelarat's Books Store.
    </footer>
</body>
</html>