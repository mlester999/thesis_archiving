@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-gray-700 text-sm font-bold mb-2 ml-3']) }}>
    {{ $value ?? $slot }}
</label>
