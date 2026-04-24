<div class="container" style="max-width: 400px; margin-top: 80px;">

    <form action="{{ $action }}" method="{{ $method }}">
        @csrf

        <h3 class="mb-4 text-center">Forgot Password</h3>

        <p class="text-muted text-center">
            Enter your email and we’ll send you a reset link.
        </p>

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

        {{-- Submit --}}
        <div class="d-grid mt-3">
            <x-ui::atoms.button class="btn btn-primary">
                Send Reset Link
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