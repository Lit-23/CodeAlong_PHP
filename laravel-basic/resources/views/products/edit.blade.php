<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input id="qty" type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="price">Price</label>
            <input id="price" type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="description">Description</label>
            <input id="description" type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>