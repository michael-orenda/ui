@props(['type' => 'primary'])

<div class="alert alert-{{ $type }}" {{ $attributes }}>
    {{ $slot }}
</div>