<?php
include "include/koneksi.php";
$query=mysql_query("SELECT * FROM berita ORDER BY id DESC")or die("MySql Error!");
while($data=mysql_fetch_array($query)){
	$id=$data['id'];
	$judul=$data['judul'];
	$berita=$data['berita'];
	$foto=$data['foto'];
		if(empty($foto)){
			$img="";
		}else{
			$img="<img src='admin/$foto'>";
		}
	$tanggal=$data['tanggal'];
?>
	
    <div class="isi">
    	<b><?=$judul;?></b><br/>
        <?=$img;?><br/>
        <span><?=$berita;?></span><br/>
        <i><?=$tanggal;?></i>
    </div>
    
<?
	
}
?>