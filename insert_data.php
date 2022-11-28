<?php
// memanggil config database
require_once('config.php');

// menerima data form yang telah dikirim dari method POST
$nama = $_POST['nama'];
$brand = $_POST['brand'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// menyisipkan data ke tabel barang
$sql = "INSERT INTO barang(nama,brand,satuan,jumlah,harga) VALUES ('$nama','$brand', '$satuan', '$jumlah', '$harga')";
// melakukan proses query
$result = $conn->query($sql);
