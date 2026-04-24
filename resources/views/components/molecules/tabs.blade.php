<div x-data="tabs('{{ $default ?? '' }}')" {{ $attributes }}>

    <div class="d-flex gap-2">
        {{ $tabs }}
    </div>

    <div class="mt-3">
        {{ $slot }}
    </div>

</div>