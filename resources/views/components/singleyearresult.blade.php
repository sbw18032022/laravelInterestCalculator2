
<!--	Component for a single year result.		-->
<div class="singleYear">
	<label for="txtYear">Year:</label>
	<p id="txtYear">{{ $yearCount + 1 }}</p>
	
	<label for="txtPrevious">Previous Year Total:</label>
	<p id="txtPrevious">{{ $yearStart }}</p>
	
	<label for="txtIntrate">Interest Rate:</label>
	<p id="txtIntrate">{{ $intRate }}</p>
	
	<label for="txtInterest">Interest Due:</label>
	<p id="txtInterest">{{ $intCalc }}</p>
	
	<label for="txtTotal">Total:</label>
	<p id="txtTotal">{{ $yearStartPlusInterest }}</p>
	
</div>
