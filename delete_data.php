<?php

// memanggil config database
require_once('config.php');

// menerima data id dari form yang telah dikirim dari method GET
$id = $_GET['id'];

// query untuk proses hapus data
$query = "DELETE FROM barang WHERE id='$id'";

// melakukan eksekusi query
$result = mysqli_query($conn, $query);

// jika eksekusi query berhasil, maka akan redirect ke halaman index.php
if ($result == true) {
    header("location:index.php");
}
