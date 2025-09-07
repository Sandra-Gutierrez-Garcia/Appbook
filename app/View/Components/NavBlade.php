<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBlade extends Component
{
    protected $appName;

    /**
     * Create a new component instance.
     */
    public function __construct(string $appName)
    {
        $this->appName = $appName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-blade')->with([
            'appName' => $this->appName,
        ]);
    }
}
