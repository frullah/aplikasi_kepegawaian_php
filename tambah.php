<?php

require "./koneksi.php";
require "./helper.php";

$data = (object)null;

?>

<!DOCTYPE html>
<html lang="id">
<? include "./templates/html_head.php" ?>
<body>
  <main class="container small-container py-4">
    <h4 class="mb-4">Tambah Data Pegawai</h4>
    
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