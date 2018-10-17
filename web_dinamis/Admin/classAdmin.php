<?php
class Admin{
	
	//-----------menampilakan daftar berita--------------
	public function TampilBerita(){
		$query=mysql_query("SELECT * FROM berita ORDER BY id ASC")or die("MySQL error!");
		$hasil=mysql_num_rows($query);
		if($hasil=='0'){
			echo "<tr><td colspan='5'><h4 align='center'>Tidak Ada Berita Yang Bisa Ditampilkan!</h4></td></tr>";
		}else{
			while($isi=mysql_fetch_array($query))
			$data[]=$isi;
			return $data;
		}	
	}
	
	//-----------input data berita-------------------------
	public function Input($lokasi, $judul, $text, $date){
		//insert ke tabel
		$sql=mysql_query("SELECT * FROM berita");
		while($isi=mysql_fetch_array($sql)){
			$id=$isi['id'];
			for($i=1;$i<=$id;$i++){}
		}
		$query = "INSERT INTO berita VALUES('$i','$judul','$text','$lokasi','$date')";
		$sql_input = mysql_query ($query) or die (mysql_error());
		if ($sql_input) {
				echo"<script>alert('Data Berita telah berhasil ditambahkan !',document.location.href='index.php')</script>";
		} else {
				echo"<script>alert('Data Berita gagal ditambahkan !',document.location.href='index.php')</script>";
		}
	}
	
	//-----------delete data berita-------------------------
	public function Delete($id){
		  $query = "DELETE FROM berita WHERE id='$id'";
			  $sql = mysql_query ($query);
			  if ($sql) {
				  echo"<script>alert('Data Berita telah berhasil dihapus !',window.location='index.php')</script>";	
			  } else {
				  echo"<script>alert('Data Berita gagal dihapus !',window.location='index.php')</script>";	
			  }
			  echo "Klik <a href='index.php'>di sini</a> untuk kembali ke halaman data berita";
		  
	}
	
	//-----------delete komentar-------------------------
	public function DeleteKomen($id){
		  $query = "DELETE FROM bukutamu WHERE id='$id'";
			  $sql = mysql_query ($query);
			  if ($sql) {
				  echo"<script>alert('Data Komentar telah berhasil dihapus !',window.location='index.php')</script>";	
			  } else {
				  echo"<script>alert('Data Komentar gagal dihapus !',window.location='index.php')</script>";	
			  }
			  echo "Klik <a href='index.php'>di sini</a> untuk kembali ke halaman data bukutamu";
		  
	}
	
}
?>