@extends('auth.layouts')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Customer</title>
    @vite('resources/css/app.css')

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4 flex justify-center items-center">Edit a Customer</h1>

        @if($errors->any())
            <ul class="text-red-500">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="post" action="{{ route('customer.update', ['customer' => $customer]) }}"class="max-w-md mx-auto">
            @csrf
            @method('put')

            <div class="flex flex-col">
                <label class="mb-1">Name</label>
                <input type="text" name="name" placeholder="Name" value="{{ $customer->name }}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex flex-col">
                <label class="mb-1">Phone</label>
                <input type="text" name="phone" placeholder="Phone" value="{{ $customer->phone }}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex flex-col">
                <label class="mb-1">Email</label>
                <input type="text" name="email" placeholder="Email" value="{{ $customer->email }}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex flex-col">
                <label class="mb-1">Address</label>
                <input type="text" name="address" placeholder="Address" value="{{ $customer->address }}"class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            
            <div class="flex flex-col">
                <label class="mb-1">Status</label>
                <input type="text" name="status" placeholder="Status" value="{{ $customer->status }}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded mt-3">Update</button>
            </div>
        </form>
    </div>

</body>
</html>
@endsection
