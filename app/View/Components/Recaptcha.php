<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Recaptcha extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $siteKey;

    public function __construct()
    {
        $this->siteKey = config('services.recaptcha.key');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.recaptcha');
    }
}
