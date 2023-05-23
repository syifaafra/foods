<?php
session_start();
include 'koneksi.php';

$pesan = pg_query($conn, "SELECT * FROM tabel_komentar ORDER BY tanggal");

while ($row = pg_fetch_array($pesan)) {
    echo "<small>Oleh <b>{$row['nama']}</b> pada {$row['tanggal']}</small>";
    echo "<p>{$row['komentar']}</p>";
    echo "<hr>";
}
?>
