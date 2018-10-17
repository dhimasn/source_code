<?php 
error_reporting(0);

$change="";
$abc="";


 define ("MAX_SIZE","4000");
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 $errors=0;
 if(empty($_POST[file])){
 }
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	$image =$_FILES["bgrn"]["name"];
	$uploadedfile = $_FILES['bgrn']['tmp_name'];
     
 
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['bgrn']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		
		
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			$change='<div class="msgdiv">Unknown Image extension </div> ';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['bgrn']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
	$errors=1;
}


if($extension=="jpg" || $extension=="jpeg" )
{
$uploadedfile = $_FILES['bgrn']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);

}
else if($extension=="png")
{
$uploadedfile = $_FILES['bgrn']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);

}
else 
{
$src = imagecreatefromgif($uploadedfile);
}

echo $scr;

list($width,$height)=getimagesize($uploadedfile);


$newheight=720;
$newwidth=($width/$height)*$newheight;
$tmp=imagecreatetruecolor($newwidth,$newheight);


imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



$filename = "file/". $_FILES['bgrn']['name'];




imagejpeg($tmp,$filename,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
}}

}


 if(!$errors) 
 { 
 if($filename==''){
	 echo"Pilih file";
 }else{
 	echo"
		<img src='$filename' id='imgBg'>
		<input type='text' name='file' value='$filename' id='file'>";
 }
 }

?>
