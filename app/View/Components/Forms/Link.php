<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div>
            <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
        </div>
blade;
    }
}
