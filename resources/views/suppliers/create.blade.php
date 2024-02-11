<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Supplier</title>
</head>
<body>
    <h1>Create a Supplier</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('supplier.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Contact Person</label>
            <input type="text" name="contact_person" placeholder="Contact Person">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone_number" placeholder="Phone Number">
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>
        <div>
            <label>City</label>
            <input type="text" name="city" placeholder="City">
        </div>
        <div>
            <label>State</label>
            <input type="text" name="state" placeholder="State">
        </div>
        <div>
            <label>ZIP Code</label>
            <input type="text" name="zip_code" placeholder="ZIP Code">
        </div>
        <div>
            <label>Country</label>
            <input type="text" name="country" placeholder="Country">
        </div>
        <div>
            <label>Tax ID</label>
            <input type="text" name="tax_id" placeholder="Tax ID">
        </div>
        <div>
            <input type="submit" value="Save a new supplier">
        </div>
    </form>
</body>
</html>
