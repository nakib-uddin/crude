@extends('auth.layouts')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hishab List</title>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Hishab List</h1>

        @if(session()->has('success'))
            <div class="bg-green-200 p-2 mb-4">{{ session('success') }}</div>
        @endif

        <div class="mb-4">
            <a href="{{ route('hishab.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Add Entry</a>
        </div>

        <div>
            <table class="table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 ">Date</th>
                        <th class="p-2 ">Type</th>
                        <th class="p-2 ">Category</th>
                        <th class="p-2 ">Amount</th>
                        <!-- Add more table headers as needed -->
                        <th class="p-2">Edit</th>
                        <th class="p-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hishabs as $hishab)
                        <tr class="border-b border-gray-300">
                            <td class="p-2">{{  $hishab->created_at->format('d-M-y') }}</td>
                            <td class="p-2 ">{{ $hishab->type }}</td>
                            <td class="p-2 ">{{ $hishab->category }}</td>
                            <td class="p-2 ">{{ $hishab->amount }}</td>
                            <!-- Add more table cells as needed -->
                            <td class="p-2 ">
                                <a href="{{ route('hishab.edit', ['hishab' => $hishab->id]) }}" class="bg-blue-500 text-white py-2 px-4 rounded">Edit</a>
                            </td>
                            <td class="p-2 ">
                                <form method="post" action="{{ route('hishab.destroy', ['hishab' => $hishab->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
@endsection
