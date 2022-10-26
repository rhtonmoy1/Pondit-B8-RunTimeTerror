<x-master>
    <x-slot:title>
        Product List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Product Trash List</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                    <a href="{{ route('products.index') }}">
                        <button type="button" class="btn btn-sm btn-outline-info">List</button>
                    </a>
                </div>
               
            </div>
        </div>

        <x-forms.message />

        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Title</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->title }}</td>
                    <td class="d-flex">
                        <form action="{{ route('products.restore', $product->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <button class="btn btn-sm btn-outline-warning" onclick="return confirm('Are you sure want to restore?')">Restore</button>
                        </form>
                        <form action="{{ route('products.delete', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</x-master>