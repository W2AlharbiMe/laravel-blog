@props(['bghover' => 'hover:bg-indigo-100'])

@php
    $classes = $bghover;
    $classes .= ' block px-4 py-2 text-sm leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out';
@endphp

<a
    {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
