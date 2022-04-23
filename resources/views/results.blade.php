<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="
{{ URL::asset('css/app.css'); }} " />

        <title>Interest App V2</title>

    </head>
    
    <body>
    
       <x:mainnav />
       
	@if ($yearCalc)
	
		<p>Total years: {{ count($yearCalc) }}</p>
	
		@for($i = 0; $i < count($yearCalc); $i++)
					
			<x:singleyearresult
				:yearCount="$i"
				:yearStart="$yearCalc[$i]->previousTotalYear"
				:intRate="$yearCalc[$i]->yearInterestRate"
				:intCalc="$yearCalc[$i]->interestCalculated"
				:yearStartPlusInterest="$yearCalc[$i]->thisYearPlusInterest"
				
			/>
			
		@endfor
		
	@endif
       
    </body>
    
</html>
