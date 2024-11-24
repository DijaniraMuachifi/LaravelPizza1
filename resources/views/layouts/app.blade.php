<!DOCTYPE html>
<html lang="en">
@php
    use App\Models\Cart;
    use App\Models\Category;
    use App\Models\Order;
    use App\Models\Pizza;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;
    $category = Category::all();
    $pizzas = Pizza::paginate(10); // Paginação para 10 itens por página
    if (Auth::check()) {
      $userId = Auth::id();
      $sessionId = Session::getId();
      $mycart = Cart::where('user_id', $userId)->orWhere('session', $sessionId)->get();
    } else {
      $sessionId = Session::getId();
      $mycart=Cart::where('session', $sessionId)->get();
    }

@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet" />
    <style>
        body {
            background-color: #fff5e6;
            font-family: 'Arial', sans-serif;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #ff5733;
            transition: background-color 0.5s;
        }

        header.scrolled {
            background-color: #c0392b;
        }

        .carousel-item {
            width: 100%;
            height: 100vh;
            transition: transform 0.5s ease;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
        }

        .category-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px auto;
            text-align: center;
            font-weight: bold;
            color: #fff;
        }

        .search-area {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .search-area input {
            flex: 6;
            margin-right: 10px;
            border-radius: 20px;
            border: 2px solid #ff5733;
        }

        .search-area select,
        .search-area input[type="checkbox"],
        .search-area button {
            flex: 1;
            margin-left: 5px;
            border-radius: 20px;
        }

        .category-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        footer {
            background-color: #ff5733;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        @keyframes scrollAnimation {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        .scrolling {
            animation: scrollAnimation 0.3s forwards;
        }

        .navbar {
            padding: 1rem;
            /* Padding for better spacing */
        }

        .navbar-nav .nav-link {
            color: white;
            /* Default link color */
            margin-right: 20px;
            /* Spacing between links */
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #f0e68c;
            /* Highlight color on hover */
        }

        .dropdown-menu {
            background-color: #ff5733;
            /* Dropdown background color */
            border: none;
            /* Remove border for a cleaner look */
        }

        .dropdown-item {
            color: white;
            /* Default dropdown text color */
        }

        .dropdown-item:hover {
            background-color: #c0392b;
            /* Darker background on hover */
            color: #fff;
            /* Keep text white on hover */
        }

        footer {
            background-color: #f8f9fa;
            /* Light background for the footer */
            color: #212529;
            /* Dark text for the footer */
        }
    </style>
</head>

<body>
    <header class="text-white">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <h1 class="m-0">Pizza</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    @if (Auth::check() && Auth::user()->role == 'admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="categoriesDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu text-white" aria-labelledby="categoriesDropdown">
                                <a class="dropdown-item text-white" href="{{ route('category.index') }}">List</a>
                                <a class="dropdown-item text-white" href="{{ route('category.create') }}">New</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="pizzasDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pizzas
                            </a>
                            <div class="dropdown-menu text-white" aria-labelledby="pizzasDropdown">
                                <a class="dropdown-item text-white" href="{{ route('pizza.index') }}">List</a>
                                <a class="dropdown-item text-white" href="{{ route('pizza.create') }}">New</a>
                                <a class="dropdown-item text-white" href="{{ route('pizza.search') }}">Search</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="ordersDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Orders
                            </a>
                            <div class="dropdown-menu text-white" aria-labelledby="ordersDropdown">
                                <a class="dropdown-item text-white" href="{{ route('order.index') }}">List</a>
                                <a class="dropdown-item text-white" href="{{ route('order.new') }}">New</a>
                                <a class="dropdown-item text-white" href="{{ route('order.dispatch') }}">Dispatch</a>
                            </div>
                        </li>
                    @elseif(Auth::check() && Auth::user()->role == 'user')
                        <a class="text-white mx-3" href="{{ route('home') }}" class="nav-link">Home</a>
                        <a class="text-white mx-3" href="{{ route('home') }}#pizzas" class="nav-link">Pizzas</a>
                        <a class="text-white mx-3" href="{{ route('home') }}#categories"
                            class="nav-link">Categories</a>
                        <a class="text-white mx-3" href="{{ route('mycart') }}" class="nav-link">My order</a>
                    @else
                        <a class="text-white mx-3" href="{{ route('welcome') }}" class="nav-link">Home</a>
                        <a class="text-white mx-3" href="{{ route('welcome') }}#pizzas" class="nav-link">Pizzas</a>
                        <a class="text-white mx-3" href="{{ route('welcome') }}#categories"
                            class="nav-link">Categories</a>
                    @endif
                    @if (count($mycart) > 0 || (Auth::check() && Auth::user()->role == 'user'))
                        <a href="{{ route('cart.view') }}" class="text-white mx-3">MyCart
                            ({{ count($mycart) }})</a>
                    @endif

                </ul>
            </div>
            <div class="ml-auto">
                @if (Auth::check())
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <form action="{{ route('logout') }}" method="GET">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                @else
                    <a class="text-white" href="{{ route('login') }}">Login</a>
                @endif
            </div>
        </nav>
    </header>

    @yield('content')
    <footer class="text-center py-3 mt-4">
        <p>&copy; 2024 Pizza | by Dijanira Muachifi | U2FELP</p>
    </footer>

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/chart.js') }}"></script>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
