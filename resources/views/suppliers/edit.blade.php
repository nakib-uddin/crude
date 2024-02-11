<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Supplier</title>
</head>
<body>
    <h1>Edit a Supplier</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('supplier.update', ['supplier' => $supplier])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$supplier->name}}">
        </div>
        <div>
            <label>Contact Person</label>
            <input type="text" name="contact_person" placeholder="Contact Person" value="{{$supplier->contact_person}}">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="{{$supplier->email}}">
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone_number" placeholder="Phone Number" value="{{$supplier->phone_number}}">
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Address" value="{{$supplier->address}}">
        </div>
        <!-- Add more fields as needed -->

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
