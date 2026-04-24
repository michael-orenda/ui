<div class="row g-3">

    @foreach($items as $item)
        <div class="col-md-3">
            <x-ui::molecules.stat-card
                :label="$item['label']"
                :value="$item['value']"
            />
        </div>
    @endforeach

</div>