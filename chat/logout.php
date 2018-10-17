<?
session_start();
	include('chat/conn.php');
	$user=$_REQUEST['username'];
	$q=mysql_query("update user set status='off' where username='$_SESSION[username]'");
	
	session_start();
	
	session_unset();
	
	session_destroy();
	
	header('location:index.php');
?>