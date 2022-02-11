<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GoogleLogin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public function __construct()
    {
        // dd($token);
        $this->url = url('auth/google');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.google-login');
    }
}
