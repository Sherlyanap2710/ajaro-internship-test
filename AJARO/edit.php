<html>
	<head>
		<title> Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="input.css"/>
	</head>
	<body>
		<h3><div class="jdl">EDIT KELOLA DATA BARANG</div></h3>
		
	<?php
	include("connect.php");
	$id = $_GET ['id'];
	$query_mysql = mysql_query("SELECT * FROM barang where id='$id'")or die(mysql_error());
	//$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
		?>
		
		<form action="update.php" method="post" p align="center">
		<table width
			<table width=50% height=5% align="center">
	
	</table>
	<br>
	<table width=50% height=5% align="center">
	<tr>
	<td><b>Kode:</b></td>
	<td><input class="atr" type="text" name="kode" readonly value="<?php echo $data['kode']?>"></td>
	</tr>
	<tr>
	<td><b>Nama:</b></td>
	<td><input class="atr" type="text" name="nama" value="<?php echo $data['nama']?>"></td>
	</tr>
	<tr>
	<td><b>Deskripsi:</b></td>
	<td><input class="hh" name="deskripsi" value="<?php echo $data['deskripsi']?>"></td>
	</tr>
	<tr>
	<td><b>Stok:</b></td>
	<td><input class="atr" type="text" name="stok" value="<?php echo $data['stok']?>"></td>
	</tr>
	<tr>
	<td><b>Harga:</b></td>
	<td><input class="atr" type="text" name="harga" value="<?php echo $data['harga']?>"></td>
	</tr>
	<tr>
	<td><b>Berat:</b></td>
	<td><input class="atr" type="text" name="berat" value="<?php echo $data['berat']?>"><i>gram</i></td>
	</tr>
	</table>
	<p align="center"><input class = "btn" type=submit value="Update"></p>
	</form>
	<?php
		}
	?>
</body>
	