<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];
$komentar = $_POST['komentar'];

$insert = pg_query($conn, "INSERT INTO comment_table (id, tanggal, nama, komentar) VALUES(NULL, NOW(), '{$nama}', '{$komentar}')");

if ($insert) {
	echo "Komentar Anda sudah disimpan.";
}
?>