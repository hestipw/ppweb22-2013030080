<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>mhs</title>
</head>
<body>
	<h1>TUGAS PEMROGRAMAN WEB</h1>
	<h2>Nama = Hesti Putri Wahyuni</h2>
	<h2>NPM = 2013030080</h2>
	<h2>Kelas = 2A- Sistem Informasi</h2>
	

<?php include 'menu.php';?>
<table width='80%' border='1'>
<thead>
<tr>
<th width='5%'>No.</th>
<th width='15%'>NPM</th>
<th width='25%'>Nama</th>
<th>Alamat</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM mhs";
$res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
$i++;
echo "<tr>
<td>$i</td>
<td><a href='mhs_detil.php?npm=".$dat['npm']."'>".

$dat["npm"]."</a></td>

<td>".$dat["nama"]."</td>
<td>".$dat["alamat"]."</td>

</tr>";

}
}
?>
</tbody>
</table>
</body>
</html>