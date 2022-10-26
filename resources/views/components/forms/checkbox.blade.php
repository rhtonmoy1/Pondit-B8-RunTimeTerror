@props(['name', 'label' => '', 'checkedItems' => [], 'checklist' => [], 'id' => null])

<div class="mb-3">
    @if($label)
        <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif
</div>

@foreach($checklist as $key => $value)
    <div class="mb-3 form-check">
        <input 
            name="{{ $name }}" 
            type="checkbox" 
            id="{{$key.$id}}Input"
            value="{{ $key }}"
            @if(in_array($key, $checkedItems))
                checked
            @endif
            {{ $attributes->merge(['class' => 'form-check-input']) }}
        >
        <label class="form-check-label" for="{{$key.$id}}Input">{{ $value }}</label>
    </div>
@endforeach

@error($name)
    <div class="form-text text-danger">{{ $message }}</div>
@enderror