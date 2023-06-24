<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>
<body class="antialiased" style="display: flex; gap: 2rem">
    @foreach($products as $product)
        <div class="flex:1">
            <img src="{{$product->image}}" style="max-width: 100%;">
            <h2>{{$product->name }}</h2>
            <p>${{ $product->price }}</p>
        </div>
    @endforeach
        <p>
        <form action="{{route('checkout')}}" method="post">
            @csrf
            <button type="submit"> checkout</button>
        </form>
        </p>


</body>
</html>
