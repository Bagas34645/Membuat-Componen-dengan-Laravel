<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $dismissible;

    public function __construct($type = 'primary', $dismissible = false)

    {
        $this->type = $type;
        $this->dismissible = $dismissible;
    }

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
