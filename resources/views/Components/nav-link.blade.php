@props(['active' => false])

<a class="{{  $active ? 'bg-gray-200 px-3 rounded-md' : 'hover:bg-gray-200 px-3 rounded-md' }} text-sm/6 font-semibold text-gray-900"
aria-current="{{ $active ? 'page' : '' }}"
{{ $attributes }}
>
{{ $slot }}

</a>
