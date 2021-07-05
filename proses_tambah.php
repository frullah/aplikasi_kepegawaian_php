<?php

require "./koneksi.php";
require "./helper.php";

$db = new Database();
$sql = "INSERT INTO pegawai (id, nip, nama, jenis_kelamin, tanggal_lahir, gaji)
  VALUES(NULL, :nip, :nama, :jenis_kelamin, :tanggal_lahir, :gaji)
";

try {    
  $db->insert($sql, [
    'nama' => $_POST['nama'],
    'nip' => $_POST['nip'],
    'jenis_kelamin' => $_POST['jenis_kelamin'] ?: null,
    'tanggal_lahir' => $_POST['tanggal_lahir'] ?: null,
    'gaji' => $_POST['gaji'] ?: 0
  ]);

  Helper::set_flash('success', 'Berhasil menambahkan data pegawai');
  header('location: index.php');
} catch (Throwable $e) {
  Helper::set_flash('danger', 'Gagal menambahkan data pegawai');
  header('location: tambah.php');
}
