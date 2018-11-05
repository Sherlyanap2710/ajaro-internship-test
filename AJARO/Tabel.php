<html>
	<head>
		<title> Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="input.css"></link>
	</head>
	<body>
		<h3><div class="jdl">KELOLA DATA BARANG</div></h3>
	<br>
	<br>
	<table width=80% height=5% align="center">
	<tr>
		<td><b><h3>Data Barang</td></b></h3>
		<td><p align="right"><a href = "input.php"><Button class="btn"><B>Tambah</B></Button></a>
		</tr>
	</table>
	<br>
		<table width=80% height=40% align="center" border=1>
			<tr align="center">
				<td height="25" width=30%><div class=awal><b>Kode</b></td></div>
				<td height="25" width=30%><div class=awal><b>Nama</b></td></div>
				<td height="25" width=25%><div class=awal><b>Harga</b></td></div>
				<td height="25" width=25%><div class=awal><b>Aksi</b></td></div>
			</tr>
			
			<?php
			//Koneksi kedatabase
			include ("connect.php");
			//Mengambil data dari tabel barang
			$tampil = mysql_query("Select * from barang");
			while ($data = mysql_fetch_array($tampil)){
			?>
			
			<tr align = "center">
				<td><?php echo $data['kode']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['harga']; ?> </td>
				<td class = "eh"><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a> <a href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a></td>
			</tr>
			
			<?php
			}
			?>
			</table>
	</body>
</html>