@props([
    'href' => '#',
    'variant' => 'primary',
    'icon' => null,
])

@php
    $baseClasses = "px-6 py-3 rounded-lg transition-all duration-300 focus:ring-4 flex items-center gap-2";
    $variantClasses = match($variant) {
        'primary' => 'bg-pink-600 text-white hover:bg-pink-700 focus:ring-pink-300',
        'secondary' => 'bg-gray-600 text-white hover:bg-gray-700 focus:ring-gray-300',
        'outline' => 'border border-pink-600 text-pink-600 hover:bg-pink-600 hover:text-white focus:ring-pink-300',
        default => 'bg-pink-600 text-white hover:bg-pink-700 focus:ring-pink-300'
    };
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClasses $variantClasses"]) }}
    style="transform: scale(1); transition: transform 0.3s ease-in-out;"
    onmouseover="this.style.transform='scale(1.05)'"
    onmouseout="this.style.transform='scale(1)'"
>
    @if($icon)
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            @if($icon === 'briefcase')
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
            @elseif($icon === 'mail')
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            @elseif($icon === 'folder')
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/>
            @endif
        </svg>
    @endif
    {{ $slot }}
</a>
