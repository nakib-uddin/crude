<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier List</title>
</head>
<body>
    <h1>Supplier List</h1>
    <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
    </div>
<div>
    <a href="{{route('supplier.create')}}"> Create Supplier</a>
</div>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>ZIP Code</th>
                <th>Country</th>
                <th>Tax ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{$supplier->id}}</td>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->contact_person}}</td>
                <td>{{$supplier->email}}</td>
                <td>{{$supplier->phone_number}}</td>
                <td>{{$supplier->address}}</td>
                <td>{{$supplier->city}}</td>
                <td>{{$supplier->state}}</td>
                <td>{{$supplier->zip_code}}</td>
                <td>{{$supplier->country}}</td>
                <td>{{$supplier->tax_id}}</td>
                <td><a href="{{route('supplier.edit', ['supplier' => $supplier->id])}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('supplier.destroy', ['supplier' => $supplier->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
