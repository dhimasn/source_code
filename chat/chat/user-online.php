<h3>User Online:</h3>
<?
	include('conn.php');
	$q1="select * from user where status='on'";
	$h1=mysql_query($q1);
	while($row=mysql_fetch_array($h1)){
		echo "<div class=user-online>$row[username]</div>";
	}
?>