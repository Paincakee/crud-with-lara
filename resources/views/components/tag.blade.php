@props([
    'size' => 'xs'
    ])

<a href="" class="bg-white/10 px-3 py-1 rounded-xl text-{{$size}} hover:bg-white/25 transition-colors duration-300">{{ $slot }}</a>
