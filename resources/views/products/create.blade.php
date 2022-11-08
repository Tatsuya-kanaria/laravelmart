<h1>New Products</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="name">
    <textarea name="description" cols="30" rows="10"></textarea>
    <input type="number" name="price">
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Create</button>
</form>

<a href="{{ route('products.index') }}">&lt;&lt;Back</a>
