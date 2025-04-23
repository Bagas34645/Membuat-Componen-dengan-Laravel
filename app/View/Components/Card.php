<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $image;
    public $link;
    public $linkText;

    public function __construct($title, $image = null, $link = null, $linkText = null)

    {
        $this->title = $title;
        $this->image = $image;
        $this->link = $link;
        $this->linkText = $linkText;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
