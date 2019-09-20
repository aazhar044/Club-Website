<?php


require 'config.php';
require 'test.php';

$mem_arrary = array(); //array for memid

if(isset($_POST['submit'])){

	$confirm = "SELECT`mem_id`FROM members WHERE name= '$name' AND email= '$em' ";

	echo Please provide your Member-ID: $confirm for registration confirmation;

}

?>

<html>
<head>
	<title>Confirm</title>
</head>
<body>
	<h2>confirmation page</h2>
	<p></p>
</body>
</html>
