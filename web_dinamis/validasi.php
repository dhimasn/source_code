<?php

   if (empty($_POST["nama"])) {
   } else {
     $name =($_POST["nama"]);
     // check nama
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Hanya huruf saja";
	   echo "$nameErr";
     }
	 else{
		 echo"<img src='ok.png' width='20px'>";
	 }
   }
  
   if (empty($_POST["email"])) {
   } else {
     $email =($_POST["email"]);
     // check email
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Format email salah";
	   echo "$emailErr";
     }else{
		 echo"<img src='ok.png' width='20px'>";
	 }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website =($_POST["website"]);
     // check URL
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "URL salah";
	   echo "$websiteErr";
     }else{
		 echo"<img src='ok.png' width='20px'>";
	 }
   }

   if (empty($_POST["gender"])) {
   } else {
     $gender =($_POST["gender"]);
	 
		 echo"<img src='ok.png' width='20px'>";
	 
   }


?>