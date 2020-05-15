<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableRow extends Component
{
    public $id;
    public $width;
    public $person;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $width, $person)
    {
        $this->id = $id;
        $this->width = $width;
        $this->person = $person;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table-row');
    }
}
