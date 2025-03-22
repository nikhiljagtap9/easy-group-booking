@props(['type' => 'text', 'name', 'label' => '', 'value' => '', 'options' => [], 'className' => ''])

<div class="mb-3">
    @if ($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif

    @if ($type === 'select')
        <select name="{{ $name }}" id="{{ $name }}"
            {{ $attributes->merge(['class' => 'form-select ' . $className . ($errors->has($name) ? ' is-invalid' : '')]) }}>
            <option value="">Select {{ $label }}</option>
            @foreach($options as $key => $option)
                <option value="{{ $key }}" {{ old($name, $value) == $key ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
    @else
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            value="{{ old($name, $value) }}" 
            {{ $attributes->merge(['class' => 'form-control ' . $className . ($errors->has($name) ? ' is-invalid' : '')]) }}>
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
