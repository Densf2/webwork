
<form method="GET" action="">
	<select name="param1[key]">
		<option value="mark">Mark</option>
		<option value="engine">Engine</option>
		<option value="year">Year</option>
	</select>
	
	<select name="param1[val]">
		<option value="audi">Audi</option>
		<option value="renault">Reanult</option>
	</select>
	<br />
	<select name="param2[key]">		
		<option value="">Engine</option>
		<option value="year">Year</option>
		<option value="mark">Mark</option>
	</select>
	<input name="param2[val]">
	
	<br />
	<select name="param3[key]">
		<option value="">Type</option>
		<option value="mark">Mark</option>
		<option value="engine">Engine</option>
	</select>
	
	<input name="param3[val]">
	
	<br />	
<button type="submit">Submit</button>
</form>

<?php
	if( !empty($_GET) )
 //var_dump( $_GET );
	
?>