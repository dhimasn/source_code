<h3>Buku Tamu</h3>
<a href="index.php"><button name="tampil">Tampil Berita</button></a></td>
<table id="berita">
<tr style=" background:#222; font-weight:bold; color:#fff; height:40px;">
<td>ID</td><td>NAMA</td><td>EMAIL</td><td>WEBSITE</td><td>KOMENTAR</td><td>GENDER</td><td>OPTION</td>
</tr>
<?php
include "../include/koneksi.php";

$query=mysql_query("SELECT * FROM `bukutamu` ORDER BY `id` ASC")or die("DATABASE ERROR");
	while($data=mysql_fetch_array($query)){
		$id=$data['id'];
		$nama=$data['nama'];
		$email=$data['email'];
		$website=$data['website'];
		$komentar=$data['komentar'];
		$gender=$data['gender'];
	
?>
<tr>
<td><?=$id;?></td>
<td><?=$nama;?></td>
<td><?=$email;?></td>
<td><?=$website;?></td>
<td><?=$komentar;?></td>
<td><?=$gender;?></td>
<td><a href="index.php?page=delkom&id=<?=$id;?>"  onclick="return confirm('Anda yakin akan menghapus Komentar <?=$nama;?> ?')"><button name="delete">Hapus</button></a></td>
</tr>
<?		
	}
?>
</table>