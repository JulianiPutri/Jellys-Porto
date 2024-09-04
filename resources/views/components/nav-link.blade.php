@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active? 'rounded-md bg-orange-900 text-white' : 'text-orange-300 
    hover:bg-orange-700 hover:text-white' }}  px-3 py-2 text-sm font-medium " 
    aria-current="{{ $active? 'page' : false }}">
    {{ $slot }}
</a>