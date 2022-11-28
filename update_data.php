<?php

require_once('config.php');

$id = $_POST['id'];

$nama = $_POST['nama'];
$brand = $_POST['brand'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$query = "UPDATE barang SET nama='$nama' ,brand='$brand', satuan='$satuan',jumlah='$jumlah',harga='$harga' WHERE id='$id'";

$result = mysqli_query($conn, $query);

if ($result == true) {
    header("location:index.php");
}
