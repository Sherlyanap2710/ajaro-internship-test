<html>
	<head>
		<title> Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="input.css"></link>
	</head>
<body>
	<h3><div class="jdl"  action="update.php">KELOLA DATA BARANG</div></h3>
	<br>
	<br>
<form action = "inputPelanggan.php" method = "post" p align = "center">
	<table width=50% height=5% align="center">
	<tr>
	<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
	<table width=50% height=5% align="center">
	<tr>
	<td><b><div class=tabel>Kode:</div></b></td>
	<td><input class="atr" type="text" name="kode"></td>
	</tr>
	<tr>
	<td><b><div class=tabel>Nama:</div></b></td>
	<td><input class="atr" type="text" name="nama"></td>
	</tr>
	<tr>
	<td><b><div class=tabel>Deskripsi:</div></b></td>
	<td><input class="hh" name="deskripsi"></td>
	</tr>
	<tr>
	<td><b><div class=tabel>Stok:</div></b></td>
	<td><input class="atr" type="text" name="stok"></td>
	</tr>
	<tr>
	<td><b><div class=tabel>Harga:</div></b></td>
	<td><input class="atr" type="text" name="harga"></td>
	</tr>
	<tr>
	<td><b><div class=tabel>Berat:</div></b></td>
	<td><input class="atr" type="text" name="berat">gram</td>
	</tr>
	</table>

	
	<p align="center"><input class = "btn" type=submit value="Tambah"></p>
	</form>
	
</body>
</html>