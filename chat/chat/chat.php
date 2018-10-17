<?
	session_start();
	if($_SESSION['username'] == ""){
		header('location:index.php');
	}else{
		
?>
<html>
<head>
<title>Chat sederhana ajax</title>
<link rel='stylesheet' type='text/css' href='style.css'>
<script type='text/javascript' src='jquery.min.js'></script>
</head>
<body>
<div id='wrapper'>
	<div id='menu'>
    	<h2>Aplikasi Chat Sederhana</h2>
		<p class='welcome'>Welcome <?=$_SESSION['username'];?></p>
		<p class='logout'><a href="../logout.php?id=<?=$_SESSION['username'];?>">Logout</a></p>
		<div style="clear:both"></div>
	</div>
    
    <div id="chatline">
	<div id='chatbox'>
	<? include('message-line.php');?>
	</div>
    
    <div id="input">
	<form name='message' action="">
	<input type=text name='message-input' id='message-input' />
	<input type=submit name='message-submit' id='message-submit' value=send />
	</form>
    </div>
    </div>
    
	<div id='online'>
		<? include('user-online.php');?>
	</div>
</div>
<!--ajax dimulai dari sini-->
<script language='javascript' type="text/javascript" src="chatting.js">
</script>
</body>
</html>
<?
	}
?>