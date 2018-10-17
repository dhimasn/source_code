<?php
session_start();
error_reporting(0);

if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	include "login.php";
	echo "<script>document.write('Anda belum masuk!'); window.location = 'login.php'</script>";
}
else{
	include "home.php";	
}
?>