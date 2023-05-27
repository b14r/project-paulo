@props(['value'])

<label {{ $attributes->merge(['class' => 'font-logo font-semibold text-2xl text-gray-800 tracking-widest']) }}>
    {{ $value ?? $slot }}
</label>
