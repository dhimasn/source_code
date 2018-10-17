<h4 align="center">Daftar Berita</h4>
<a href="index.php?page=input"><button name="input">Input Berita</button></a> <a href="index.php?page=bukutamu"><button name="input">Lihat Data Buku Tamu</button></a>
<table id="berita">
<tr style=" background:#222; font-weight:bold; color:#fff; height:40px;">
<td width="4%">ID</td><td>JUDUL</td><td width="35%">BERITA</td><td width="30%">FOTO</td><td width="10%">TANGGAL</td><td width="5%">OPTION</td>
</tr>
<?php
include_once "../include/koneksi.php";
include_once "classAdmin.php";
$admin= new Admin;
$tampilBerita=$admin->TampilBerita();
if($tampilBerita){
	foreach($tampilBerita as $data) {
		$id=$data['id'];
		$judul=$data['judul'];
		$berita=$data['berita'];
		$foto=$data['foto'];
			if(empty($foto)){
				$img="";
			}else{
				$img="<img width='80' src='$foto'>";
			}
		$tanggal=$data['tanggal'];
		
?>
<tr>
<td><?=$id;?></td>
<td><?=$judul;?></td>
<td><?=$berita;?></td>
<td><?=$img;?></td>
<td><?=$tanggal;?></td>
<td><a href="index.php?page=delete&id=<?=$id;?>" onclick="return confirm('Anda yakin akan menghapus berita <?=$judul;?> ?')"><button id="<?=$id;?>" name="hapus" class="hapus">Hapus</button></a></td>
</tr>
<?
	}
}
?>
</table>