<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $href;
    public $class;
    public $variant;

    public function __construct($href = '#', $class = '', $variant = 'primary')
    {
        $this->href = $href;
        $this->class = $class;
        $this->variant = $variant;
    }

    public function render()
    {
        return view('components.button');
    }
}
