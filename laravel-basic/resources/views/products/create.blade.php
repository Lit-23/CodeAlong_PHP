<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input id="qty" type="text" name="qty" placeholder="Qty">
        </div>
        <div>
            <label for="price">Price</label>
            <input id="price" type="text" name="price" placeholder="Price">
        </div>
        <div>
            <label for="description">Description</label>
            <input id="description" type="text" name="description" placeholder="Description">
        </div>
        <button type="submit">Save a new Product</button>
    </form>
</body>
</html>