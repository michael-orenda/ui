@props(['label', 'id'])

<div class="mb-3">

    <x-ui::atoms.label :for="$id" class="form-label">
        {{ $label }}
    </x-ui::atoms.label>

    {{ $slot }}

</div>