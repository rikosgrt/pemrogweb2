<!-- resources/views/components/button.blade.php -->

<button {{ $attributes->merge(['class' => 'btn btn-primary']) }}>
    {{ $slot }}
</button>
