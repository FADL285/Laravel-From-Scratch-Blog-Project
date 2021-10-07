@props(['active' => false])

@php
    $classes = "hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white block px-4 py-2 text-sm overflow-ellipsis whitespace-nowrap overflow-hidden ";
    $classes .= $active ? "bg-blue-500 text-white" : "text-gray-700";
@endphp

<a {{ $attributes(["class" => $classes]) }}
   role="menuitem" tabindex="-1" id="menu-item-0">
    {{ $slot }}
</a>
