<x-master>
    <x-slot:title>
        Product Edit
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product Edit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('products.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <x-forms.errors />

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <x-forms.select name="category_id" label="Category" :options="$categories" :selected="old('category_id', $product->category_id)" required/>

        <x-forms.input type="text" name="title" label="Title" :value="old('title', $product->title)" required placeholder="Enter name" />

        <img src="{{ asset('storage/products/'.$product->image) }}" height="250" />

        <x-forms.input type="file" name="image" label="Image"/>

        {{-- select, checkbox, radio, texarea --}}

        <x-forms.textarea name="description" :value="old('description', $product->description)" label="Description" />

        <x-forms.checkbox name="colors[]" id="color" :checklist="$colors" :checkedItems="$selectedColors" label="Colors"/>

        <x-forms.checkbox name="is_active" :checklist="[1 =>'Is Active']" :checkedItems="[$product->is_active]" label="Colors"/>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>