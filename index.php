<?php
	error_reporting(E_ALL);
	include('functions.php');
	include('static/header.php');
?>

<!-- Upload Form -->
<div id='uploader'>
	<form action='process.php' method='POST' enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		<input name="userfile" type="file" />
		<p><input type='submit' value='Upload &rarr;'></p>
	</form>
</div>

<?php
	//Do not display errors if this is first page visit
	
	// Errors
	$error_div = "<div id='errors'><h2 id='errors'>".$errors_html."Errors</h2></div>";
?>
	
<?php
	include('static/footer.php');
?>