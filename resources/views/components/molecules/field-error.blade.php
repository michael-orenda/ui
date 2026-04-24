@if($message)
    <x-ui::atoms.error-text class="text-danger">
        {{ $message }}
    </x-ui::atoms.error-text>
@endif