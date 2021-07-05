<div class="mb-3">
  <label for="nip">NIP</label>
  <input value="<?= $data->nip ?>" class="form-control" type="text" name="nip" pattern="[0-9]{18}" placeholder="Nomor Induk Pegawai">
</div>

<div class="mb-3">
  <label for="nama">Nama</label>
  <input value="<?= $data->nama ?>" class="form-control" type="text" name="nama" required pattern="[a-zA-Z\. ]{1,64}">
</div>

<div class="mb-3">
  <label for="jenis_kelamin">Jenis kelamin</label>
  <select class="form-select" data-selected="<?= $data->jenis_kelamin ?>" type="text" name="jenis_kelamin" value="l">
    <option value="">Pilih jenis kelamin</option>
    <option value="l">Laki-laki</option>
    <option value="p">Perempuan</option>
  </select>
</div>

<div class="mb-3">
  <label for="tanggal_lahir">Tanggal lahir</label>
  <input value="<?= $data->tanggal_lahir ?>" class="form-control" type="date" name="tanggal_lahir">
</div>

<div class="mb-3">
  <label for="gaji">Gaji</label>
  <input value="<?= $data->gaji ?>" class="form-control" type="number" name="gaji" required>
</div>