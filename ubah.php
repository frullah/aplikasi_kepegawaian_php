<?php

if (empty($_GET['id'])) {
  exit(header("Location: 'index.php'"));
}

require "./koneksi.php";
require "./helper.php";

$db = new Database();
$list_pegawai = $db->find_all(
  "SELECT * FROM pegawai WHERE id = :id",
  ['id' => $_GET['id']]
);

if (empty($list_pegawai)) {
  exit(header("Location: 'index.php'"));
}

$data = (object)$list_pegawai[0];

?>

<!DOCTYPE html>
<html lang="en">
<? include "./templates/html_head.php" ?>
<body>
  <main class="container py-4">
    <h4 class="mb-4">Ubah Data Pegawai</h4>
    
    <section class="mb-3">
      <a class="btn btn-danger" href="index.php">Kembali</a>
    </section>

    <form action="proses_tambah.php" method="post">
      <? include "./templates/pegawai/form.php" ?>
      <button class="btn btn-primary" type="submit">Tambah</button>
    </form>
  </main>
</body>
</html>