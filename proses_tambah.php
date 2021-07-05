<?php

require "./koneksi.php";

$db = new Database();
$sql = "INSERT INTO pegawai (id, nip, nama, jenis_kelamin, tanggal_lahir, gaji)
  VALUES(NULL, :nip, :nama, :jenis_kelamin, :tanggal_lahir, :gaji)
";
$id = $db->insert($sql, [
  'nama' => $_POST['nama'],
  'nip' => $_POST['nip'],
  'jenis_kelamin' => $_POST['jenis_kelamin'] ?: null,
  'tanggal_lahir' => $_POST['tanggal_lahir'] ?: null,
  'gaji' => $_POST['gaji'] ?: 0
]);

// var_dump($id);