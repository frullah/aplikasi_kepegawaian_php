<?php

if (empty($_GET['id'])) {
  exit(header("Location: index.php"));
}

require "./koneksi.php";
require "./helper.php";

$db = new Database();
$deleted_count = $db
  ->execute("DELETE FROM pegawai WHERE id = ?", [$_GET['id']])
  ->rowCount();

if ($deleted_count > 0) {
  Helper::set_flash('success', 'Berhasil manghapus data pegawai');
} else {
  Helper::set_flash('danger', 'Data pegawai tidak ditemukan');
}

header("Location: index.php");

?>
