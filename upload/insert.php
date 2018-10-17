<?php
include "koneksi.php";
$filename=$_POST['file'];
   if($filename==''){
	   echo"Pilih berkas untuk diunggah!";
   }
   else{

	  $query=mysql_query("SELECT * FROM `foto`")or die("Database error");
	  while($data=mysql_fetch_array($query)){
	  $id=$data['id'];
	  for($i=1;$i<=$id;$i++){
	  }
	  }
	  mysql_query("INSERT INTO `foto` (`id`, `foto`) VALUES ('$i', '$filename')");
	  
   }
?>