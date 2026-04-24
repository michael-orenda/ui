@props([
    'label' => null,
])

<div class="d-flex align-items-center gap-2" {{ $attributes }}>

    @if($label)
        <x-ui::atoms.label class="mb-0">
            {{ $label }}
        </x-ui::atoms.label>
    @endif

    {{ $slot }}

</div>