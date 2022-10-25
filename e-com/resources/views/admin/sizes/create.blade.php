<x-admin.master>
    <x-slot:title>
        Size Create
    </x-slot>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Size Create</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
            </div>
            <a href="{{ route('categories.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <x-forms.errors />

    <form action="{{ route('sizes.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <x-forms.input type="text" name="size" label="Size" :value="old('size')" required placeholder="Enter Size" />
        



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-admin.master>
