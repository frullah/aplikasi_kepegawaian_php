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
    <h4 class="mb-4">Tambah Data Pegawai</h4>
    
    <section class="mb-3">
      <a class="btn btn-danger" href="index.php">Kembali</a>
    </section>

    
    <form action="proses_tambah.php" method="post">
      <div class="mb-3">
        <label for="nip">NIP</label>
        <input class="form-control" type="text" name="nip" pattern="[0-9]{18}" placeholder="Nomor Induk Pegawai">
      </div>

      <div class="mb-3">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" required pattern="[a-zA-Z]{1,64}">
      </div>

      <div class="mb-3">
        <label for="jenis_kelamin">Jenis kelamin</label>
        <select class="form-select" type="text" name="jenis_kelamin">
          <option value="">Pilih jenis kelamin</option>
          <option value="l">Laki-laki</option>
          <option value="p">Perempuan</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="tanggal_lahir">Tanggal lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir">
      </div>

      <button class="btn btn-primary" type="submit">Tambah</button>
    </form>
  </main>
</body>
</html>