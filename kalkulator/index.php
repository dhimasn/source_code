<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kalkulator</title>
</head>

<body>
 
<form name="fform" method ="post" action = "hasil.php">
<tr>
         <font color="#000000">
            <blink> <h1>
<center>
<p>
KALKULATOR</p>
</center>
</h1>
</blink>
            </font>
             
            <center>
              <table width="259" bgcolor="#000000">
<tr>
                  <td colspan="5"><center>
<table width="253" bgcolor="#FFFFFF">
<tr>
                      <td>Bilangan Pertama:</td>
                      <td><input size="16" name="bil1" 
type="text" /></td>
                    </tr>
<tr>
                      <td>Bilangan Kedua:</td>
                      <td><input size="16" name="bil2" 
type="text" /></td>
                    </tr>
<tr>
                      <td>Hasil :</td>
                      <td><input size="16" name="bil3" 
type="text" value="<?php if (isset($_GET['bil3'])) echo 
$_GET['bil3']?>" /></td>
                    </tr>
</table>
</center>
</td>
                </tr>
<center>
<tr>
                  <td width="31"><input value="+"  
type="submit" name ="tambah" /></td>
                  <td width="27"><input value="-"  
type="submit" name = "kurang" /></td>
                  <td width="31"><input value="*"  
type="submit" name = "kali" /></td>
                  <td width="27"><input value="/"  
type="submit" name = "bagi" /></td>
                  <td width="94"><input value="Bersihkan" 
type="submit" name = "input" /></td>
                </tr>
</center>
</table>
</center>
</form>
</body>
</html>