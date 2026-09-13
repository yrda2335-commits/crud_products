<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Edit Product</title></head>
<body style="font-family: Arial, sans-serif; max-width: 640px; margin: 2rem auto; padding: 0 1rem;">
    <h1>Edit Product</h1>
    @include('products.form', ['formAction' => route('products.update', $product), 'formMethod' => 'PUT', 'buttonText' => 'Update product'])
</body>
</html>
