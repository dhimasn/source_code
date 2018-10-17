<?php
session_start();
include "koneksi.php";
error_reporting(0);

if (empty($_SESSION['username']) AND empty($_SESSION['password'])){include "index.php";}
else{
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="css.css" type="text/css" media="screen">
<title>Login Multi User!</title>
</head>
<body>
<div id="content">
<h2>Selamat Datang <?=$_SESSION[username]?>!</h2>
<?php
if ($_SESSION[user_akses] == "gratis") { echo "<p>Kamu login sebagai user Gratis! <a href='logout.php' title='Keluar!'>Keluar</a></p>"; }
if ($_SESSION[user_akses] == "premium"){echo "<p>Kamu login sebagai user Premium! <a href='logout.php' title='Keluar!'>Keluar</a></p>";}
if ($_SESSION[user_akses] == "admin"){echo "<p>Kamu login sebagai user Admin! <a href='logout.php' title='Keluar!'>Keluar</a></p>";}
if ($_SESSION[user_akses] == ""){echo "<p>Kamu tidak memiliki akses kesini!</p>";}
?>
</div>
</body>
</html>
<?php } ?>