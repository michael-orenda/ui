<div x-data="datatable" class="ui-datatable">

    {{-- Toolbar --}}
    @isset($toolbar)
        <div class="mb-3">
            {{ $toolbar }}
        </div>
    @endisset

    {{-- Table --}}
    <table class="table">

        @isset($head)
            <thead>
                {{ $head }}
            </thead>
        @endisset

        <tbody>
            @forelse($items as $item)
                <tr>
                    {{ $row($item) }}
                </tr>
            @empty
                <tr>
                    <td colspan="100%">
                        <x-ui::molecules.empty-state />
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>