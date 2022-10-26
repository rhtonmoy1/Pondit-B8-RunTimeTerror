<x-master>
    <x-slot:title>
        Color Details
    </x-slot>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Color Create</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
            </div>
            <a href="{{ route('colors.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <x-forms.errors />

    <form action="{{ route('colors.store') }}" method="post">
        @csrf

        <x-forms.input type="text" name="title" label="Title" :value="old('title')" required placeholder="Enter Title" />

        <x-forms.input type="color" name="color_code" label="Color Code" :value="old('color_code')" required />

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>