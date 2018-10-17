<?php
include "koneksi.php";
$query=mysql_query("SELECT * FROM `file`")or die("Database error");
	  while($data=mysql_fetch_array($query)){
	  $id=$data['id'];
	  $lokasi=$data['file'];
	  $name=$data['nama'];
	  $tanggal=$data['tanggal'];
	  list($folder, $file) = explode("/", $lokasi);	  
	  list($nama, $type) = explode(".", $file);
	  switch($type)
				{
			//allowed file types
			case 'jpg';
			$imgshow="<img src='$lokasi'>";
			$jenis="Image";
			break;
			case 'jpeg';
			$imgshow="<img src='$lokasi'>";
			$jenis="Image";
			break;
			case 'png';
			$imgshow="<img src='$lokasi'>";
			$jenis="Image";
			break;
            case 'gif';
			$imgshow="<img src='$lokasi'>";
			$jenis="Image";
			break;
            case 'mp3';
			$imgshow="<audio controls>
						<source src='$nama.ogg' type='audio/ogg'>
						<source src='$lokasi' type='audio/mp3'>
						Your browser does not support the audio element.
					  </audio>";
			$jenis="Audio";
			break;
			case 'mp4';
			$jenis="Video";
			$imgshow="<video width='320' height='200' controls>
						<source src='$lokasi' type='video/mp4'>
						<source src='$nama.ogg' type='video/ogg'>
						<source src='$nama.webm' type='video/webm'>
						Your browser does not support the video tag.
					  </video>";
			break;
			case '3gp';
			$jenis="Video";
			$imgshow="<video width='320' height='200' controls>
						<source src='$lokasi' type='video/$type'>
						<source src='$nama.ogg' type='video/ogg'>
						<source src='$nama.webm' type='video/webm'>
						Your browser does not support the video tag.
					  </video>";
			break;
			}
?>
<li><span><?=$jenis;?><p style="color:#FFF; margin:5px 0px;"><?=$nama;?>.<?=$type;?></p></span><?=$imgshow;?></li>
<?
	  }
?>