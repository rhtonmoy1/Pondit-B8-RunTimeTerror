@props(['name', 'label' => '', 'options' => [], 'selected' => null])

<div class="mb-3">
    @if($label)
        <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif
    <select name="{{ $name }}" id="{{ $name }}Input" {{ $attributes->merge(['class' => 'form-control']) }}>
        <option value="">Select One</option>
        @foreach($options as $key => $option)
            <option value="{{ $key }}" @if($selected == $key) selected @endif >{{ $option }}</option>
        @endforeach
    </select>

    @error($name)
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror

</div>