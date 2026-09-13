<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>{{ $product->product_name }}</title></head>
<body style="font-family: Arial, sans-serif; max-width: 640px; margin: 2rem auto; padding: 0 1rem;">
    @if (session('success')) <p style="color: #166534;">{{ session('success') }}</p> @endif
    <h1>{{ $product->product_name }}</h1>
    <dl>
        <dt><strong>Category</strong></dt><dd>{{ $product->product_category }}</dd>
        <dt><strong>Price</strong></dt><dd>${{ number_format((float) $product->product_price, 2) }}</dd>
    </dl>
    <p><a href="{{ route('products.edit', $product) }}">Edit</a> | <a href="{{ route('products.index') }}">Back to products</a></p>
</body>
</html>
