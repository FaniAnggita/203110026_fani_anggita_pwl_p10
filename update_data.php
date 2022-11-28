<?php

// memanggil config database
require_once('config.php');

// menerima data form yang telah dikirim dari method POST
$id = $_POST['id'];
$nama = $_POST['nama'];
$brand = $_POST['brand'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// Query proses update data
$query = "UPDATE barang SET nama='$nama' ,brand='$brand', satuan='$satuan',jumlah='$jumlah',harga='$harga' WHERE id='$id'";

// melakukan eksekusi query
$result = mysqli_query($conn, $query);

// jika eksekusi query berhasil, maka akan redirect ke halaman index.php
if ($result == true) {
    echo "<script>alert('data berhasil diperbarui!');</script>";
    header("location:index.php");
}
