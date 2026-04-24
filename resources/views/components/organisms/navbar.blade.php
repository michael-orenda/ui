<nav class="navbar navbar-expand-lg bg-light">

    <div class="container-fluid">

        <span class="navbar-brand">
            {{ $brand ?? 'App' }}
        </span>

        <div class="d-flex gap-2">
            {{ $slot }}
        </div>

    </div>

</nav>