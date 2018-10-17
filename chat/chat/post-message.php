<?
	session_start();
	$date = date('Ymd');
	include('conn.php');
	$q=mysql_query("insert into chat(username, message, date)values('$_SESSION[username]', '$_POST[text]', '$date')");
?>