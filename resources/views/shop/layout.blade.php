<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toy Store | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.html">ToyLand</a>
        <div>
            <a class="nav-link d-inline text-white" href="{{ route('shopindex') }}">Home</a>
            <a class="nav-link d-inline text-white" href="{{ route('shopabout') }}">About</a>
            <a class="nav-link d-inline text-white" href="{{ route('shopcontact') }}">Contact</a>
            <a class="nav-link d-inline text-white" href="{{ route('shopproducts') }}">Products</a>
        </div>
    </div>
</nav>

@yield('content');

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    © 2026 ToyLand Store
</footer>

</body>
</html>
