<button {{ $attributes->merge(['class' => 'px-4 py-2 rounded bg-primary text-white hover:bg-secondary transition']) }}>
    {{ $slot }}
</button>
