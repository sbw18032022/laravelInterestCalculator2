<?php

namespace App\Http\Controllers\Calcs;

//	This class represents a year.
class IntYear {

	//	The total result from the previous year.
	public $previousTotalYear;
	
	//	The current year's interest rate.
	public $yearInterestRate;
	
	//	The interest calculated.
	public $interestCalculated;
	
	//	The previous total year ammount plus the calculated interest.
	public $thisYearPlusInterest;
	
	//	Constructor
	public function __construct($pty, $yir){
		
		$this->previousTotalYear = $pty;
		$this->yearInterestRate = $yir;
	
	}
	
}

?>
