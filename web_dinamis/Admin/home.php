<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css.css" type="text/css" media="screen">
<title>Admin</title>
</head>
<body>
<div id="wrapp">
<a href="logout.php" class="logout">Log Out</a>
<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'input': include "input.php";
	break;
	case 'delete' : include "delete.php"; 
	break;
	case 'bukutamu' : include "bukutamu.php"; 
	break;
	case 'delkom' : include "delkom.php"; 
	break;
	case 'main' :
	default : include 'tampil.php';	
}
?>
</div>
</body>
</html>