<div class="container" style="max-width: 400px; margin-top: 80px;">

    <form action="{{ $action }}" method="{{ $method }}">

        @csrf

        <h3 class="mb-4 text-center">Login</h3>

        {{-- Email --}}
        <x-ui::molecules.form-field label="Email" id="email">
            <x-ui::atoms.input
                type="email"
                name="email"
                id="email"
                class="form-control"
                required
            />
            
            @error('email')
                <x-ui::atoms.error-text class="text-danger">
                    {{ $message }}
                </x-ui::atoms.error-text>
            @enderror
        </x-ui::molecules.form-field>

        {{-- Password --}}
        <x-ui::molecules.form-field label="Password" id="password">
            <x-ui::atoms.input
                type="password"
                name="password"
                id="password"
                class="form-control"
                required
            />

            @error('password')
                <x-ui::atoms.error-text class="text-danger">
                    {{ $message }}
                </x-ui::atoms.error-text>
            @enderror
        </x-ui::molecules.form-field>

        {{-- Remember --}}
        <x-ui::molecules.checkbox-group id="remember" name="remember">
            Remember me
        </x-ui::molecules.checkbox-group>

        {{-- Actions --}}
        <div class="d-grid mt-3">
            <x-ui::atoms.button class="btn btn-primary" type="submit">
                Login
            </x-ui::atoms.button>
        </div>

        {{-- Footer slot --}}
        @isset($footer)
            <div class="mt-3 text-center">
                {{ $footer }}
            </div>
        @endisset

    </form>

</div>