<x-admin.master>
    <x-slot:title>
        Size List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Size</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    {{-- <a href="{{ route('size.pdf') }}">
                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                    </a> --}}
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                    <a href="{{ route('sizes.trash') }}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>
                <a href="{{ route('sizes.create') }}">
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
                    <th>Size</th>
                    
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sizes as $size)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $size->size }}</td>
                    

                    <td class="d-flex">
                        <a class="btn btn-sm btn-outline-info" href="{{ route('sizes.show', $size->id) }}">Show</a>

                        <a class="btn btn-sm btn-outline-info" href="{{ route('sizes.edit', $size->id) }}">Edit</a>

                        <form action="{{ route('sizes.destroy', $size->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</x-admin.master>
