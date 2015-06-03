<?php
	$link = mysql_connect("localhost","root","12345678") or die ("No conecta");
	mysql_select_db("integra");
	$query = "SELECT foto FROM users WHERE id='$id'";
	$res = mysql_query($query, $link);
	$registro = mysql_fetch_array($res);
	header("Content-Type: image/jpg");
	echo $registro['foto'];
?>