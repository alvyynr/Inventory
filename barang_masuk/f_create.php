<?php 
include "../koneksi.php";   
include "../session.php";
if(isset($_POST['create'])){
    $id_barang = $_POST['id_barang'];
    $id_admin = $rowSession['id_admin'];
    $nama_admin = $rowSession['nama_admin'];
    $jumlah=$_POST['jumlah'];
    $sql = mysqli_query($koneksi,"INSERT INTO barang_masuk VALUES('', '$id_barang', '$id_admin', '$nama_admin', '$jumlah', NOW(), 'Masuk')") or die($koneksi);
    $sqlUpdate = mysqli_query($koneksi, "UPDATE barang SET stok=stok+$jumlah WHERE id_barang='$id_barang'") or die($koneksi);
    if ($sql) {
		echo "<script>alert('Data Berhasil dimasukan!');
		window.location.replace('index.php')</script>";
	} else {
		echo "<script>alert('Data Gagal dimasukan!');
		window.location.replace('index.php')</script>";
	}
}

?>