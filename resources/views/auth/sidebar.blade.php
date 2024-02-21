
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
<body>

 <div class="w3-sidebar w3-bar-block  bg-slate-300 shadow-black"style="width:15%">
                @guest
                   
                @else
                <a href="{{ route('product.index') }}" class="w3-bar-item w3-button w3-hover-black">Product</a>
                 <a href="{{ route('supplier.index') }}" class="w3-bar-item w3-button w3-hover-black">Supplier</a>
                <a href="{{ route('categories.index') }}" class="w3-bar-item w3-button w3-hover-black">Category</a>
                <a href="{{ route('customer.index') }}" class="w3-bar-item w3-button w3-hover-black">Customer</a>
                <a href="{{ route('signout') }}" class="w3-bar-item w3-button w3-hover-black">Signout</a>
      
                @endguest

</div>

</body>
</html>
