<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript" src="upload.js"></script>

<title>Upload Foto</title>
</head>

<body>

<div id="formBg">
<h2>Upload Foto</h2>
<p>Pilih File:</p>
<form method="post" action="upload.php" id="fBg">
<fieldset id="add">
<input type="file" name="bgrn" id="bgrn"/>
</fieldset>
<div id="displayBg"> <h1 align="center"><font color="#ffffff">Display</font></h1> </div>
<fieldset>
 minimal: 1280x960 pixel / <br/>
 minimal: 100kb
</fieldset>
<fieldset>
<input type="submit" name="kirim" id="kirimBg" value="Unggah" >
</fieldset>
</form>
</div>

</body>
</html>