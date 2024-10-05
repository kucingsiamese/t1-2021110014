<!DOCTYPE html>
<html>
<head>
    <title>Product App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
        <a class="navbar-brand" href="{{ route('products.index') }}">Products</a>
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>
</body>
</html>
