<?php

if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST")
{
	$file_name		= strip_tags($_FILES['upload_file']['name']);
	$file_id 		= strip_tags($_POST['upload_file_ids']);
	$file_size 		= $_FILES['upload_file']['size'];
	$files_path		= 'upload/';
	$file_location 	= $files_path . $file_name;
	
	if(move_uploaded_file(strip_tags($_FILES['upload_file']['tmp_name']), $file_location)){
		echo $file_id;
		 include "koneksi.php";
		 if($file_location==''){
			 echo"Pilih berkas untuk diunggah!";
		 }
		 else{
	  
			$query=mysql_query("SELECT * FROM `foto`")or die("Database error");
			while($data=mysql_fetch_array($query)){
			$id=$data['id'];
			for($i=1;$i<=$id;$i++){
			}
			}
			mysql_query("INSERT INTO `foto` (`id`, `foto`) VALUES ('$i', '$file_location')");
		 }
	}else{
		echo 'system_error';
	}
	
	
}
?>