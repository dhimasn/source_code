<?php
include "../include/koneksi.php";
$email = $_POST['email'];
$password = $_POST['password'];

$login = mysql_query("SELECT * FROM user WHERE email='$email' AND password='$password'");
$hasil = mysql_num_rows($login);
$r = mysql_fetch_array($login);

if ($hasil > 0)
{
	session_start();
	session_register("user_id");
	session_register("username");
	session_register("password");
	$_SESSION[user_id]     = $r[user_id];
	$_SESSION[username]     = $r[username];
	$_SESSION[password]     = $r[password];
	header('location:home.php');
}
else{ echo "LOGIN GAGAL! <br> <a href='index.php'><< Kembali</a>"; }
?>