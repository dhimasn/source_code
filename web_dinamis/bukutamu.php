<?php
include "include/koneksi.php";

$query=mysql_query("SELECT * FROM `bukutamu` ORDER BY `id` DESC")or die("DATABASE ERROR");
	while($data=mysql_fetch_array($query)){
		$nama=$data['nama'];
		$email=$data['email'];
		$website=$data['website'];
		$komentar=$data['komentar'];
	
?>
		<div class="box_comment">
        <b><?=$nama;?></b> <i><mail to='<?=$email;?>'>(<?=$email;?>)</mail></i><br/>
        <i><a href="<?=$website;?>"><?=$website;?></a></i>
        <p>--> <?=$komentar;?></p>
        </div>
<?		
	}
?>