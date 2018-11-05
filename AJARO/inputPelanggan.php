<?php
include("connect.php");
$Kode = $_POST["kode"];
$Nama = $_POST["nama"];
$Deskripsi = $_POST["deskripsi"];
$Stok = $_POST["stok"];
$Harga = $_POST["harga"];
$Berat = $_POST["berat"];


# Perkisa, jika form kosong berikan pesan error
	if (trim($Kode)=="") {
		echo "Kode belum diisi";
	}
	elseif (trim($Nama)=="") {
		echo "Nama masih kosong, isi dengan benar";
	}
	elseif (trim($Deskripsi)=="") {
		echo "Deskripsi masih kosong, isi dengan benar";
	}
	elseif (trim($Stok)=="") {
		echo "Stok belum diisi, isi dengan benar";
	}
	elseif (trim($Harga)=="") {
		echo "Harga belum diisi, isi dengan benar";
	}
	elseif (trim($Berat)=="") {
		echo "Berat belum diisi, isi dengan benar";
	}
	else {
		
$input="insert into barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$Kode','$Nama','$Deskripsi','$Stok','$Harga','$Berat')";
$hasil = mysql_query($input,$conn);
echo "<br>Input Data Berhasil<br>";
	}
?>

