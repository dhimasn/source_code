<?
	include('conn.php');
	$date = date('Ymd');
	$q=mysql_query('select * from chat where date='.$date.' order by id desc');
	while($r=mysql_fetch_array($q)){
		echo "<div class='message-line'><b>$r[username] :</b> $r[message]</div>";
	}
	
?>
