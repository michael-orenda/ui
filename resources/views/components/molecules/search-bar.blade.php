@props([
    'name' => 'q',
])

<form {{ $attributes }}>

    <div class="input-group">
        <x-ui::atoms.input
            class="form-control"
            :name="$name"
            placeholder="Search..."
        />

        <x-ui::atoms.button class="btn btn-primary">
            Search
        </x-ui::atoms.button>
    </div>

</form>