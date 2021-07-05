CREATE TABLE `pegawai` (
  `id` integer PRIMARY KEY NOT NULL,
  `nip` varchar(18),
  `name` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(1) COMMENT 'l = laki-laki, p = perempuan',
  `tanggal_lahir` date,
  `gaji` bigint
);

CREATE TABLE `kehadiran` (
  `id` integer PRIMARY KEY NOT NULL,
  `id_pegawai` integer NOT NULL,
  `tanggal` datetime
);

ALTER TABLE `kehadiran` ADD FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`);
