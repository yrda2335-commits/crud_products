@if ($errors->any())
    <div style="color: #b91c1c; margin-bottom: 1rem;">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form action="{{ $formAction }}" method="POST">
    @csrf
    @if ($formMethod !== 'POST') @method($formMethod) @endif
    <p>
        <label for="product_name">Product name</label><br>
        <input id="product_name" name="product_name" type="text" value="{{ old('product_name', $product->product_name ?? '') }}" required maxlength="255" style="width: 100%; padding: .6rem;">
    </p>
    <p>
        <label for="product_price">Product price</label><br>
        <input id="product_price" name="product_price" type="number" value="{{ old('product_price', $product->product_price ?? '') }}" required min="0" step="0.01" style="width: 100%; padding: .6rem;">
    </p>
    <p>
        <label for="product_category">Product category</label><br>
        <input id="product_category" name="product_category" type="text" value="{{ old('product_category', $product->product_category ?? '') }}" required maxlength="255" style="width: 100%; padding: .6rem;">
    </p>
    <button type="submit">{{ $buttonText }}</button>
    <a href="{{ route('products.index') }}">Cancel</a>
</form>
