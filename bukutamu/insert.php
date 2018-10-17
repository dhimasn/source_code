<?php
include "koneksi.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$website=$_POST['website'];
$komen=$_POST['komentar'];
$gender=$_POST['gender'];

$query=mysql_query("SELECT * FROM `bukutamu`")or die("DATABASE ERROR");
	while($data=mysql_fetch_array($query)){
		$j=$data['id'];
		for($i=1;$i<=$j;$i++){}	
	}
	$insert=mysql_query("INSERT INTO `bukutamu` (
`id` ,`nama` ,`email` ,`website` ,`komentar` ,`gender`) VALUES ('$i', '$nama', '$email', '$website', '$komen', '$gender');")or die("Gagal menyimpan komentar");
	if($insert){
?>
		<div class="box_comment">
        <b><?=$nama;?></b> <i><mail to='<?=$email;?>'>(<?=$email;?>)</mail></i><br/>
        <i><a href="<?=$website;?>"><?=$website;?></a></i>
        <p>--> <?=$komen;?></p>
        </div>
<?		
	}
?>