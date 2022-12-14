<?php

namespace App\View\Components\ui\form;

use Illuminate\View\Component;

class formGroup extends Component
{
    public $errortext;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($errorname=null)
    {
        $this->errortext = $errorname;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.form.form-group');
    }
}
