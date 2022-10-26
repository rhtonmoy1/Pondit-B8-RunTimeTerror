<x-master>
    <x-slot:title>
        Edit Caousel
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Carousel</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
            </div>
            <a href="{{ route('carousels.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <x-forms.errors />

    <form action="{{ route('carousels.update', $carousel->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <x-forms.input type="text" name="name" label="Name" :value="old('name', $carousel->name)" required placeholder="Enter name" />

        <img src="{{ asset('storage/carousels/'.$carousel->image) }}" height="250" />

        <x-forms.input type="file" name="image" label="Image"/>

        <div class="mb-3 form-check">
            <input 
            name="is_active" 
            type="checkbox" 
            class="form-check-input" 
            id="isActiveInput"
            @if($carousel->is_active) checked @endif
            >
            <label class="form-check-label" for="isActiveInput">Is Active ?</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>