<?php

namespace App\View\Components;

use Illuminate\View\Component;

class singleyearresult extends Component
{

	public $yearCount;
	public $yearStart;
	public $intRate;
	public $intCalc;
	public $yearStartPlusInterest;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($yearCount, $yearStart, $intRate, $intCalc, $yearStartPlusInterest)
    {
        
        $this->yearCount = $yearCount;
        $this->yearStart = $yearStart;
        $this->intRate = $intRate;
        $this->intCalc = $intCalc;
        $this->yearStartPlusInterest = $yearStartPlusInterest;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.singleyearresult');
    }
}
