@props([
    'label' => null,
    'id' => null,
    'error' => null,
])

<div {{ $attributes }}>

    @if($label)
        <x-ui::atoms.label :for="$id" class="form-label">
            {{ $label }}
        </x-ui::atoms.label>
    @endif

    {{ $slot }}

    @if($error)
        <x-ui::atoms.error-text class="text-danger">
            {{ $error }}
        </x-ui::atoms.error-text>
    @endif

</div>