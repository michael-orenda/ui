<div x-data="modal">

    <div x-show="open" class="modal d-block" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    {{ $slot }}
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" @click="hide">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>