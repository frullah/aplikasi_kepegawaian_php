<?php

if (empty($_POST['id'])) {
  exit(header("Location: index.php"));
}

require "./koneksi.php";
require "./helper.php";

$db = new Database();
$sql = "UPDATE UAS1.pegawai SET
  nip=:nip,
  nama = :nama,
  jenis_kelamin = :jenis_kelamin,
  tanggal_lahir = :tanggal_lahir,
  gaji = :gaji
WHERE id = :id";

try {    
  $result = $db->execute($sql, [
    'id' => $_POST['id'],
    'nama' => $_POST['nama'],
    'nip' => $_POST['nip'],
    'jenis_kelamin' => $_POST['jenis_kelamin'] ?: null,
    'tanggal_lahir' => $_POST['tanggal_lahir'] ?: null,
    'gaji' => $_POST['gaji'] ?: 0
  ]);

  if ($result->rowCount() > 0) {
    Helper::set_flash('success', 'Berhasil merubah data pegawai');
  } else {
    Helper::set_flash('danger', 'Gagal merubah data pegawai');
  }
} catch (Throwable $e) {
  Helper::set_flash('danger', 'Gagal menambahkan data pegawai');
}

header("Location: index.php");
