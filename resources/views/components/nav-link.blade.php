@props([
    'active' => false
])

<a class="flex items-center justify-center {{$active ? 'bg-white/10 py-0.5 px-2 rounded-lg' : ''}} text-center" {{ $attributes }}>
    {{ $slot }}
</a>
