<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBlade extends Component
{
    protected $navLinks;
    protected $appName;
    protected $accentColor;

    /**
     * Create a new component instance.
     */
    public function __construct(array $navLinks, string $appName, string $accentColor)
    {
        $this->navLinks = $navLinks;
        $this->appName = $appName;
        $this->accentColor = $accentColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-blade')->with([
            'navLinks' => $this->navLinks,
            'appName' => $this->appName,
            'accentColor' => $this->accentColor
        ]);
    }
}
