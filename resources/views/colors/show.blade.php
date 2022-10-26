<x-master>
    <x-slot:title>
        Category Details
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Colors Details</h1>
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

    <h1>Title: {{ $color->title }}</h1>
    {{-- <p>Is Active?: {{ $color->is_active ? 'Yes' : 'No' }} </p> --}}
    <div style="background-color: {{$color->color_code}}; height:300px; display:flex;align-items:center; justify-content:center; font-size:27px;">
        THe color is like this
    </div>
</x-master>