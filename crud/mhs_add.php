<!DOCTYPE html>
<html>
<head>
<title>mhs add</title>
</head>
<body>
<?php include 'menu.php';?>
<br>
<form name="myform" action="mhs_proc.php" method="POST">
NPM
<br><input type="text" name="npm" id="npm">
<br>Nama
<br><input type="text" name="nama" id="nama" size="30">
<br>Alamat
<br><input type="text" name="alamat" id="alamat" size="50">
<br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN">
</form>
</body>
</html>