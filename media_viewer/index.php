<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
<link rel="stylesheet" href="all.css" type="text/css" media="screen">
<script type="text/javascript" src="js/uploader.js"></script>
<link type="text/css" href="css/uploader.css" rel="stylesheet" />
<script>
 $(document).ready(function() { 
	$('#gallery').click( function(){ 
		$("#showGallery").show('slow');
		$("#showForm").hide('slow');
	});
	$('#form').click( function(){ 
		$("#showGallery").hide('slow');
		$("#showForm").show('slow');
	});
 });
</script>
<title>Media Viewer</title>
</head>

<body>
<header>
<h1 style="margin-left:200px;"><a href="">Aplikasi Media Viewer</a></h1>
<p align="right" style="margin:-30px 200px;"><a href="#gallery" id="gallery">Gallery</a> . <a href="#form" id="form">Upload</a></p>
</header>

<div id="wrapper">
<div id="showGallery">

<?php
include "gallery.php";
?>

</div>

<div id="showForm">

<?php
include "form.php";
?>

</div>
</div>

<footer>
</footer>
</body>
</html>