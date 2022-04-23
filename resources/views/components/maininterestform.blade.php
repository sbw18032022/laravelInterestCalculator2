
<!--	The interest form component.	-->
<div id="mainInterestForm">
	<h1>Interest Calculator Form</h1>
	<form id="frmMainInterestForm" name="frmMainInterestForm" action="/getinerestdata" method="post">
		@csrf
		<div>
			<label for="txtInterest">
				Interest % :
			</label>
			<input type="number" step="0.1" name="txtInterest" />
		</div>
		<div>
			<label for="txtAmmount">
				Ammount:
			</label>
			<input type="number" step="0.1" name="txtAmmount"/>
		</div>
		<div>
			<label for=""txtNoyrs>
				Time:
			</label>
			<input type="number" step="1" name="txtNoyrs" />
		</div>
		<div>
			<input type="submit" value="SUBMIT" />
			<input type="reset" value="RESET" />
		</div>
	</form>
</div>
