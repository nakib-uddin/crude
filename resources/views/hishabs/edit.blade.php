@extends('auth.layouts')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit an Entry</title>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Edit an Entry</h1>

        @if($errors->any())
            <ul class="text-red-500">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="post" action="{{ route('hishab.update', ['hishab' => $hishab]) }}" class="space-y-4">
            @csrf
            @method('put')

            <div class="flex flex-col">
                <label class="mb-1">Type</label>
                <input type="text" name="type" placeholder="Type" value="{{ $hishab->type }}" class="py-2 px-3 border rounded">
            </div>
            <div class="flex flex-col">
                <label class="mb-1">Category</label>
                <select name="category" class="py-2 px-3 border rounded">
                    <!-- Populate with your category options -->
                  
                 <option value="{{ $hishab->category }}">{{  $hishab->category }}</option>
        
                    
                </select>
            </div>
            <div class="flex flex-col">
                <label class="mb-1">Amount</label>
                <input type="text" name="amount" placeholder="Amount" value="{{ $hishab->amount }}" class="py-2 px-3 border rounded">
            </div>
            <!-- Add more form fields as needed -->

            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
            </div>
        </form>
    </div>

</body>
</html>
@endsection
