<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;

class AdminDashboardFooter extends Component
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
        $segment = \Request::segment(2);
        return view('components.admin-dashboard-footer', compact('segment'));
    }
}
