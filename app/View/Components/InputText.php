<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $label;
    public $id;
    public $type;
    public $placeholder;
    public $name;
    public $default;

    public function __construct($label, $id, $type, $placeholder, $name, $default='')
    {
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->default = $default;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-text');
    }
}
