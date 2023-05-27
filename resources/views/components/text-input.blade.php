@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 rounded-lg outline-none w-full py-2 px-8 text-2xl font-logo tracking-widest']) !!}>
