@props(['active' => false])

@php
$classes = 'nav-link ';
$classes .= $active ? 'nav-link-active' : 'nav-link-default';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
