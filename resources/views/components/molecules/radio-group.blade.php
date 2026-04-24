@props([
    'id' => null,
    'name' => null,
])

<div class="form-check">

    <x-ui::atoms.radio
        class="form-check-input"
        :id="$id"
        :name="$name"
        {{ $attributes }}
    />

    <x-ui::atoms.label
        class="form-check-label"
        :for="$id"
    >
        {{ $slot }}
    </x-ui::atoms.label>

</div>