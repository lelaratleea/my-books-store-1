<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wannida's Book Store - @yield('title')</title>
</head>

<body>
    <header>
        <h1>Wannida's Book Store - @yield('title')</h1>
        <nav>
            <a href="{{ route('products.list') }}">Products</a>
        </nav>
    </header>

    @yield('content')

    <footer>
        <?php echo "&copy; Copyright Week-03, 2026 Wannida's Books Store."; ?>
    </footer>
</body>

</html>
