<!DOCTYPE html>
<html>
<head>
	<!-- <meta http-equiv="refresh" content="5"> -->
	<title></title>
</head>
<body>
<?php
	$websites = array("youtube.com","google.com","salesforce.com","facebook.com");
	date_default_timezone_set("Asia/Kolkata");
	echo "<h1>Current Time ".date("h:i:s")."</h1>";
	foreach ($websites as $value) {
		$command = "ping -c compartment ".$value;
		echo "<strong>Address : ".$value."</strong>";
		echo "<pre>";
		echo shell_exec($command);
		echo "</pre>";

	}
?>
</body>
</html>