<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css" media="screen" type="text/css">
<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="upload.js"></script>

</head>
<title>Buku Tamu</title>
<body>
<div class="content">

<h2>Aplikasi Web Dinamis</h2>
<p><a href="index.php">Home</a> . <a href="profil.php">Profil</a> . <a href="show_produk.php">Produk</a> . <a href="#">Buku Tamu</a></p>
<div class="form">
<form method="post" action="" id="form">
   <fieldset>Nama: </fieldset>
   <fieldset>
   <input type="text" name="name" class="input" id="nama">
   <span class="nama" id="error"></span>
   </fieldset>
   
   <fieldset>E-mail: </fieldset>
   <fieldset>
   <input type="text" name="email" class="input" id="email">
   <span class="email" id="error"></span>
   </fieldset>
   
   <fieldset>Website: </fieldset>
   <fieldset>
   <input type="text" name="website" class="input" id="website">
   <span class="website" id="error"></span>
   </fieldset>
   
   <fieldset>Komentar: </fieldset>
   <fieldset>
   <textarea name="comment" rows="5" cols="40" class="input" id="komentar"></textarea>
   </fieldset>
   
   <fieldset style="margin:10px 0px;">Jenis Kelamin: </fieldset>
   <fieldset style="margin:10px 0px;">
   <input type="radio" name="gender" value="Laki-laki" id="gender">Laki-laki
   <input type="radio" name="gender" value="Perempuan" id="gender">Perempuan
   <span class="gender" id="error"></span>
   </fieldset>
   
   <fieldset>
   <input type="submit" name="submit" value="Submit" class="kirim"> <input type="reset" value="Reset">
   </fieldset>
</form>
</div>

<div class="form2">
<h3>Komentar:</h3>
<?php include "bukutamu.php"; ?>
</div>
</div>
</body>
</html>