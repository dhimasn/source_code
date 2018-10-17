<?		
	include('conn.php');
	
	if(isset($_POST['login'])){
	$q="select * from user where username='".$_POST['username']."'";
	$h=mysql_query($q);
	$r=mysql_fetch_array($h);
		
		if($r['password'] == ($_POST['password'])){
			
			$q2="update user set status='on' where username='$_POST[username]' and password='$r[password]'";
			$h2=mysql_query($q2);
			session_start();
			session_register('username');
			$_SESSION['username'] = $r['username'];
			header('location:../');
			header('location:chat.php');
		}else{
			echo "failed";
		}
	
	}
?>