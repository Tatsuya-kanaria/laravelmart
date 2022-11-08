@foreach ($products as $product)
    {{ $product->name }}
    {{ $product->description }}
    {{ $product->price }}
    <a href="{{ route('products.show', $product->id) }}">Show</a>
    <a href="{{ route('products.edit', $product->id) }}">edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="post" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">DELETE</button>
    </form>
@endforeach

<a href="{{ route('products.create') }}">New</a>
