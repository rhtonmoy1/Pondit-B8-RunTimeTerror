@props(['name',  'label' => '', 'value' => null])

<div class="mb-3">
    @if($label)
        <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif

    <textarea
        name="{{ $name }}"
        id="{{ $name }}Input"
        
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
    {{ $value }}
    </textarea>

    @error($name)
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror


    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>
   
   <script>
       ClassicEditor
           .create( document.querySelector( '#descriptionInput' ) )
           .catch( error => {
               console.error( error );
           } );
   </script>
</div>
