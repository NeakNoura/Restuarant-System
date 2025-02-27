<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for Banner */
        .banner {
            background: url('{{ asset("images/banner2.jpg") }}') no-repeat center center;
            background-size: cover;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Restaurant Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/customers') }}">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/items') }}">Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/orders') }}">Orders</a>
                    </li>
                </ul>
                <div>
                    <a href="{{ route('logout') }}" class="btn btn-outline-light"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    

    <!-- Banner Section -->
    <div class="banner">
        
    </div>

    <!-- Cards Section -->
    <div class="container card-container mt-4">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                <img src="{{ asset('images/banner1.jpg') }}" class="card-img-top" alt="Card 1">

                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text">Manage all customer information efficiently.</p>
                        <a href="{{ url('/customers') }}" class="btn btn-primary">Manage Customer</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/banner2.jpg') }}" class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Items</h5>
                        <p class="card-text">Browse and manage items offered by your restaurant.</p>
                        <a href="{{ url('/items') }}" class="btn btn-primary">Manage Item</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/banner3.jpg') }}" class="card-img-top" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">Track and manage order efficiently and seamlessly.</p>
                        <a href="{{ url('/orders') }}" class="btn btn-primary">Manage Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center">Explore Our Features</h2>
        <p class="text-center">Use the navigation menu to explore Customers, Items, and Orders.</p>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 Restuarant Phnom Penh</p>
    </footer>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>