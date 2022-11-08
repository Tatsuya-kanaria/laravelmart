<div>
    <h2>New Products</h2>
</div>
<div>
    <a href="{{ route('products.index') }}">&lt;&lt;Back</a>
</div>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div>
        <strong>Name:</strong>
        <input type="text" name="name" placeholder="Name">
    </div>
    <div>
        <strong>Description:</strong>
        <textarea style="height:150px" name="description" placeholder="Description"></textarea>
    </div>
    <div>
        <strong>Price:</strong>
        <input type="number" name="price" placeholder="Price">
    </div>
    <div>
        <strong>Category:</strong>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
