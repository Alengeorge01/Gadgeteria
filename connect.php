<?php
	$link = mysqli_connect("localhost","root","") or die("Connection Error");
	mysqli_select_db($link,"appliances")or die("Connection Error");
?>