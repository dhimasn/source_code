<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css" media="screen" type="text/css">
<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="upload.js"></script>

</head>
<title>Web Dinamis</title>
<body>
<div class="content">
<h2>Aplikasi Web Dinamis</h2>
<p><a href="index.php">Home</a> . <a href="profil.php">Profil</a> . <a href="show_produk.php">Produk</a> . <a href="buku.php">Buku Tamu</a></p>

<h3>Produk</h3>
<span>Daftar Produk:</span>

<div id="isi">
<?php include "produk.php"; ?>
</div>

</div>
</body>
</html>