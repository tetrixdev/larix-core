<?php

namespace LarixLabs\Larix\Components\Classes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use LarixLabs\Larix\Components\Classes\Button\ButtonColor;

class Button extends Component
{
    public $isLink;

    /**
     * Create a new component instance.
     */
    public function __construct(public string  $type = 'button',
                                public ?string $color = 'primary',
                                public         $attributes = [])
    {
        // $color - Validation and set $class
        $allowedColors = ['primary', 'secondary', 'danger', 'success', 'warning', 'info'];
        if ($color !== null && !in_array($color, $allowedColors)) {
            throw new \InvalidArgumentException("Invalid styling value provided. Allowed values are: " . implode(', ', $allowedColors));
        }

        // $isLink
        $this->isLink = $this->attributes->has('href');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larix::button');
    }
}
