<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 960px; margin: 2rem auto; padding: 0 1rem; color: #1f2937; }
        .header { display: flex; justify-content: space-between; align-items: center; gap: 1rem; }
        .button { display: inline-block; padding: .65rem 1rem; border: 0; border-radius: 4px; background: #2563eb; color: white; text-decoration: none; cursor: pointer; }
        .danger { background: #dc2626; } .muted { color: #6b7280; }
        table { width: 100%; border-collapse: collapse; margin-top: 1.5rem; } th, td { padding: .8rem; border-bottom: 1px solid #e5e7eb; text-align: left; } th { background: #f3f4f6; }
        .actions { display: flex; gap: .5rem; align-items: center; } .actions form { margin: 0; }
        .alert { padding: .75rem 1rem; background: #dcfce7; color: #166534; margin: 1rem 0; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="header">
        <div><h1>Products</h1><p class="muted">Manage your product catalogue.</p></div>
        <a class="button" href="{{ route('products.create') }}">Add product</a>
    </div>

    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <table>
        <thead><tr><th>Name</th><th>Category</th><th>Price</th><th>Actions</th></tr></thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_category }}</td>
                    <td>${{ number_format((float) $product->product_price, 2) }}</td>
                    <td class="actions">
                        <a href="{{ route('products.show', $product) }}">View</a>
                        <a href="{{ route('products.edit', $product) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?')">
                            @csrf @method('DELETE')
                            <button class="button danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="muted">No products found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
</body>
</html>
