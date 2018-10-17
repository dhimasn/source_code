<?php
include_once "../include/koneksi.php";
include_once "classAdmin.php";

$id=$_REQUEST['id'];
?>
<div id="content">
	<?php
	//proses delete berita
	if (!empty($id) && $id != "") {
		$admin=new Admin;
		$admin->Delete($id);
	
	} else {
		die ("Access Denied");	
	}
	?>
</div>