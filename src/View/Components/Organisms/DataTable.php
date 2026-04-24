<?php

namespace MichaelOrenda\Ui\View\Components\Organisms;

use Illuminate\View\Component;

class DataTable extends Component
{
    public function __construct(
        public iterable $items = []
    ) {}

    public function render()
    {
        return view('ui::components.organisms.data-table');
    }
}