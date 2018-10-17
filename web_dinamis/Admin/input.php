<?php
include_once "../include/koneksi.php";
include_once "classAdmin.php";
if($_POST['kirim']){
	$judul=$_POST['judul'];
	$berita=htmlentities($_POST['berita']);
	$pecah = explode("\n", $berita);

    $text = "";

    for ($i=0; $i<=count($pecah)-1; $i++)
     {
      $part = str_replace($pecah[$i], $pecah[$i]."<br/>", $pecah[$i]);
       $text .= $part;
     }
	 
	$foto=$_FILES['file']['name'];
	$lokasi="image/".$foto;
		move_uploaded_file ($_FILES['file']['tmp_name'], $lokasi);
	$admin=new Admin;
	$admin->Input($lokasi, $judul, $text, $date);
}else{

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<h4 align="center">Input Berita</h4>
<div id="input">
<form action="input.php" method="post" enctype="multipart/form-data">
<fieldset>
<input type="text" name="judul" placeholder="Judul Berita" class="judul">
</fieldset>
<fieldset>
<textarea name="berita" placeholder="Isi Berita" class="berita"></textarea>
</fieldset>
<fieldset>
<input type="file" name="file">
</fieldset>
<fieldset>
<input type="submit" name="kirim" value="Kirim">
<input type="reset" name="reset" value="Reset">
<a href="index.php?page=tampil"><input type="button" value="kembali"></a>
</fieldset>
</form>
</div>
</body>
</html>
<?
}
?>