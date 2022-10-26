<x-master>
    <x-slot:title>
        Product List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Products</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{ route('products.pdf') }}">
                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                    </a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                    <a href="{{ route('products.trash') }}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>
                <a href="{{ route('products.create') }}">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="plus"></span>
                        Add New
                    </button>
                </a>
            </div>
        </div>

        <x-forms.message />

        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $serialNo ++ }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category?->name }}</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-outline-info" href="{{ route('products.show', $product->id) }}">Show</a>

                        <a class="btn btn-sm btn-outline-info" href="{{ route('products.edit', $product->id) }}">Edit</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}

</x-master>