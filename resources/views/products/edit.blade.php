<div>
    <h2>Edit Products</h2>
</div>

<div>
    <a href="{{ route('products.index') }}">&lt;&lt;Back</a>
</div>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <div>
        <strong>Name:</strong>
        <input type="text" name="name" value="{{ $product->name }}" placeholder="Name">
    </div>
    <div>
        <strong>Description:</strong>
        <textarea style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
    </div>
    <div>
        <strong>Price:</strong>
        <input type="number" name="price" value="{{ $product->price }}">
    </div>
    <div>
        <strong>Category:</strong>
        <select name="category_id">
            @foreach ($categories as $category)
                @if ($category->id == $product->category_id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
