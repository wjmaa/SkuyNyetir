<?php
//koneksi ke database
include 'config.php';
//ambil data dari form
$nama_lengkap = $_REQUEST["nama_lengkap"];
$alamat = $_REQUEST["alamat"];
$hp = $_REQUEST["hp"];
$email = $_REQUEST["email"];
$tempat_lahir = $_REQUEST["tempat_lahir"];
$tanggal_lahir = $_REQUEST["tanggal_lahir"];
$jenis_kelamin = $_REQUEST["jenis_kelamin"];
$pilih_pengajar = $_REQUEST["pilih_pengajar"];
$transmisi = $_REQUEST["jenis_transmisi"];
$pertemuan = $_REQUEST["banyak_pertemuan"];
$harga = $_REQUEST["harga"];

//query insert data
$query = "INSERT INTO pengguna VALUES('','$nama_lengkap','$alamat','$hp','$tempat_lahir','$tanggal_lahir','$email','$jenis_kelamin','$pilih_pengajar','$transmisi','$pertemuan','$harga')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

//cek apakah data berhasil ditambahkan
if($result) {
  echo "<script>alert('Data berhasil ditambahkan!'); window.location='registrasi.php';</script>";
} else {
  echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>