<?php
include('functions.php');

// http://stackoverflow.com/questions/7511610/how-do-i-get-the-php-uploads-directory
$userdir=$tmp_dir = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
// http://php.net/manual/en/features.file-upload.post-method.php
$userfile=$_FILES['userfile']['tmp_name'];

$userdata = csv_to_array($userfile);

var_dump($userdata);

$fp = fopen('processed/processed_file.csv', 'w');

fputcsv($fp, $initial_line);

foreach ($userdata as $line) {
    fputcsv($fp, $line);
}

fclose($fp);
?>
<!-- Redirect to index after -->
<script type="text/javascript">
<!--
<?php
	
	echo 'window.open("processed/processed_file.csv");';	

?>
window.location = "index.php"
//-->
</script>
