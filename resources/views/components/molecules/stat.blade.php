@props([
    'label' => null,
    'value' => null,
])

<div {{ $attributes }}>
    <div class="text-muted small">{{ $label }}</div>
    <div class="fw-bold">{{ $value }}</div>
</div>