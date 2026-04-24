<div class="container" style="max-width: 450px; margin-top: 60px;">

    <form action="{{ $action }}" method="{{ $method }}">
        @csrf

        <h3 class="mb-4 text-center">Register</h3>

        {{-- Name --}}
        <x-ui::molecules.form-field
            label="Name"
            id="name"
            :error="$errors->first('name')"
        >
            <x-ui::atoms.input
                name="name"
                id="name"
                class="form-control"
                required
            />
        </x-ui::molecules.form-field>

        {{-- Email --}}
        <x-ui::molecules.form-field
            label="Email"
            id="email"
            :error="$errors->first('email')"
        >
            <x-ui::atoms.input
                type="email"
                name="email"
                id="email"
                class="form-control"
                required
            />
        </x-ui::molecules.form-field>

        {{-- Password --}}
        <x-ui::molecules.form-field
            label="Password"
            id="password"
            :error="$errors->first('password')"
        >
            <x-ui::atoms.input
                type="password"
                name="password"
                id="password"
                class="form-control"
                required
            />
        </x-ui::molecules.form-field>

        {{-- Confirm Password --}}
        <x-ui::molecules.form-field
            label="Confirm Password"
            id="password_confirmation"
        >
            <x-ui::atoms.input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                class="form-control"
                required
            />
        </x-ui::molecules.form-field>

        {{-- Submit --}}
        <div class="d-grid mt-3">
            <x-ui::atoms.button class="btn btn-primary">
                Register
            </x-ui::atoms.button>
        </div>

        {{-- Footer --}}
        @isset($footer)
            <div class="mt-3 text-center">
                {{ $footer }}
            </div>
        @endisset

    </form>

</div>