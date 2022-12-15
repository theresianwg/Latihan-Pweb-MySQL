<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "Delete from tambah_foto Where id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses Dilarang...");
}