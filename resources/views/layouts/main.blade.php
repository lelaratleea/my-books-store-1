<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelarat's Books Store - {{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/lec04-styles.css') }}">
</head>
<body>
    <header id="app-main-header">
        <h1>Lelarat's Books Store - <span @class($titleClasses ?? [])>{{ $title }}</span></h1>

        <nav>
            <ul class="app-cmp-links">
                <li @class(['app-cl-active' => Route::is('products.*')])>
                    <a href="{{ route('products.list') }}">Products</a>
                </li>
                <li @class(['app-cl-active' => Route::is('categories.*')])>
                    <a href="{{ route('categories.list') }}">Categories</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <br>
    <footer id="app-main-footer">
        &copy; Copyright Week-03, 2026 Lelarat's Books Store.
    </footer>
</body>
</html>