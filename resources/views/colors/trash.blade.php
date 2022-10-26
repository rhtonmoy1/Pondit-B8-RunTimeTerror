<x-master>
    <x-slot:title>
        Trashed Color List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Colors</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{ route('colors.pdf') }}">
                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                    </a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                    <a href="{{ route('colors.index') }}">
                        <button type="button" class="btn btn-sm btn-outline-danger">List</button>
                    </a>
                </div>
                <a href="{{ route('colors.create') }}">
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
                    <th>Color Code</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colors as $color)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $color->title }}</td>
                    <td>
                        <div style="background-color: {{$color->color_code}};">{{ $color->color_code }}</div>
                    </td>

                    <td class="d-flex">
                        <form action="{{ route('colors.restore', $color->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <button class="btn btn-sm btn-outline-warning" onclick="return confirm('Are you sure want to restore?')">Restore</button>
                        </form>
                        <form action="{{ route('colors.delete', $color->id) }}" method="post">
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