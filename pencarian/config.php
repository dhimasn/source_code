<?php
  $dbhost = 'localhost'; //server hosting kamu
  $dbuser = 'root'; //username mysql kamu biasanya root
  $dbpass = ''; //password mysql kamu
  $dbname = 'buku'; //nama database yang kamu buat
  mysql_connect("$dbhost","$dbuser","$dbpass"); //koneksi ke mysql
  mysql_select_db("$dbname") or error(mysql_error()); //memilih nama database
  ?>