<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$insert = pg_query($conn, "INSERT INTO comment_table (id, tanggal, nama, komentar) VALUES(NULL, NOW(), '{$nama}', '{$komentar}')");

if ($insert) {
	echo "Komentar Anda sudah disimpan.";
}
