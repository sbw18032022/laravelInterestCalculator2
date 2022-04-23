<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\calcs\IntYear;

//	This controller calculates the interest for the years requested.
class InterestCalculatorController extends Controller
{

    //	Calculates the interest over time
    public function CalcInterest(){
    	
    	//	Get initial values from the form
    	$iniInterest = request("txtInterest");
    	$iniAmmount = request("txtAmmount");
    	$iniNoyrs = request("txtNoyrs");
    	
    	//	Total amount after interest.
    	$totalAfterInterest = 0;
    	
    	//	Years array.
    	$years = array();
    	
    	//	Instance of first year.
    	$yrOne = new IntYear($iniAmmount, $iniInterest);
    	
    	//	Calculate the interest ammount.
    	$yrOne->interestCalculated = $this->SimpleInterestCalculate($yrOne->previousTotalYear, $yrOne->yearInterestRate);
    	
    	//	Add up the ammount. 
    	$yrOne->thisYearPlusInterest = $yrOne->previousTotalYear + $yrOne->interestCalculated;
    	
    	//	Add year to array.
    	array_push($years, $yrOne);
    	
    	//	Calculate the rest of the years.
    	for($i = 1; $i < $iniNoyrs; $i++){
    		
    		//	Get the previous year's total
    		$previousYearTotal = $years[$i-1]->thisYearPlusInterest;
    		
    		//	New year instance
    		$yr = new IntYear($previousYearTotal, $iniInterest);
    		
    		//	Calculate interest for this year
    		$yr->interestCalculated = $this->SimpleInterestCalculate($yr->previousTotalYear, $iniInterest);
    		
    		//	Sum of previous year's total and this year's interest
    		$yr->thisYearPlusInterest = $yr->previousTotalYear + $yr->interestCalculated;
    		
    		//	Push to years
    		array_push($years, $yr);
    		
    	}
    	
    	//	Year results
    	return View("results", ["yearCalc" => $years]);

    		
    }
    
    
    //	The actual interest calculation.
    private function SimpleInterestCalculate($amnt, $pctge){
    	return ($pctge * $amnt) / 100;
    }
    
}
