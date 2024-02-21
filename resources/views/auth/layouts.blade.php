<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="font-sans bg-gray-100">

    <nav class=" bg-slate-400 p-4 navbar fixed-top sticky-top">
        <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-xl font-bold">Home </a>
        

            <button class="lg:hidden block text-blue-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="hidden  lg:flex space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-600 mt-2">Login</a>
                    <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-600 mt-2">Register</a>
                @else
                    <div class="flex items-center">
                        <!-- Placeholder for profile icon -->
                        <span class="bg-secondary text-white p-2 rounded-full me-2">Profile</span>
                        {{ Auth::user()->name }}
                    </div>
      
                @endguest
            </div>
        </div>
    </nav>
 <div class="w3-sidebar w3-bar-block  bg-slate-300 shadow-black" style="width:15%">
                @guest
                   
                @else
                <a href="{{ route('product.index') }}" class="w3-bar-item w3-button w3-hover-black">Product</a>
                 <a href="{{ route('supplier.index') }}" class="w3-bar-item w3-button w3-hover-black">Supplier</a>
                <a href="{{ route('categories.index') }}" class="w3-bar-item w3-button w3-hover-black">Category</a>
                <a href="{{ route('customer.index') }}" class="w3-bar-item w3-button w3-hover-black">Customer</a>
                <a href="{{ route('signout') }}" class="w3-bar-item w3-button w3-hover-black">Signout</a>
      
                @endguest

</div>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
