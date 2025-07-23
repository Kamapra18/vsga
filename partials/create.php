<?php
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_user = $_POST['nama_user'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $upload_path = '../upload/' . $gambar;

    if (move_uploaded_file($tmp, $upload_path)) {
        $query = "INSERT INTO donasi_buku (nama_user, judul_buku, penulis, gambar) 
                    VALUES ('$nama_user', '$judul_buku', '$penulis', '$gambar')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Donasi berhasil disimpan!'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan donasi!'); history.back();</script>";
        }
    } else {
        echo "<script>alert('Gagal upload gambar!'); history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='../index.php';</script>";
}
?>