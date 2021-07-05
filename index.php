<?php

require "./koneksi.php";
require "./helper.php";

$db = new Database();

$employees = $db->find_all("SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html lang="en">
<? include "./templates/html_head.php" ?>
<body>
  <main class="container py-4">
    <h4 class="mb-4">Aplikasi Kepegawaian</h4>
    
    <section class="mb-3">
      <a class="btn btn-primary" href="tambah.php">Tambah Data Pegawai</a>
    </section>
    
    <table class="table table-responsive table-bordered">
      <thead>
        <th>No.</th>
        <th class="fit">NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
      </thead>
      <tbody>
        <? $row = 1 ?>
        <? foreach ($employees as $employee): ?>
          <tr>
            <td><?= $row++ ?></td>
            <td class="fit"><?= $employee['nip'] ?></td>
            <td><?= $employee['nama'] ?></td>
            <td><?= Helper::jenis_kelamin($employee['jenis_kelamin']) ?></td>
            <td><?= Helper::format_date($employee['tanggal_lahir']) ?></td>
          </tr>
        <? endforeach ?>
      </tbody>
    </table>
  </main>
</body>
</html>