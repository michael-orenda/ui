@props([
    'id' => null,
])

<div class="form-check">

    <x-ui::atoms.checkbox
        class="form-check-input"
        :id="$id"
        {{ $attributes }}
    />

    <x-ui::atoms.label
        class="form-check-label"
        :for="$id"
    >
        {{ $slot }}
    </x-ui::atoms.label>

</div>