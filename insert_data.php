<?php
require_once('config.php');

$nama = $_POST['nama'];
$brand = $_POST['brand'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = "INSERT INTO barang(nama,brand,satuan,jumlah,harga) VALUES ('$nama','$brand', '$satuan', '$jumlah', '$harga')";
$result = $conn->query($sql);
