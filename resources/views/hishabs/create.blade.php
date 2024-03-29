@extends('auth.layouts')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Entry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold mb-8">Create an Entry</h1>
        <div>
            @if($errors->any())
                <ul class="text-red-500">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <fo rm action="{{ route('hishab.store') }}" method="post" class="max-w-md mx-auto">
            @csrf
            @method('post')

            <div class="mb-4">
    <label for="category" class="block text-sm font-medium text-gray-600">Category</label>
    <select name="category" id="category" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        <option value="">Select an option</option>
        @foreach($datas as $category)
            <option value="{{ $category }}">{{ $category }}</option>
        @endforeach
    </select>
</div>

            
     


            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-600">Amount</label>
                <input type="text" name="amount" id="amount" placeholder="Amount"
                       class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            
            <div>
                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Save
                </button>
            </div>
        </fo>
    </div>
</body>
</html>
@endsection
