<div class="d-flex justify-content-between align-items-center py-2 border-bottom">

    <div class="d-flex align-items-center gap-2">
        <x-ui::atoms.avatar />
        <div>
            <div>{{ $name }}</div>
            <div class="text-muted small">{{ $email }}</div>
        </div>
    </div>

    {{ $actions ?? '' }}

</div>