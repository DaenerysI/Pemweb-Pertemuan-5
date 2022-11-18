SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `data_mahasiswa`;
CREATE TABLE `data_mahasiswa`  (
  `nama_mahasiswa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nim` int(9) NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prodi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB;

INSERT INTO `data_mahasiswa` VALUES ('Bintang', '120140040', 'Laki-laki', 'Teknik Informatika');
INSERT INTO `data_mahasiswa` VALUES ('Faqih', '123123123', 'Laki-laki', 'Teknik Pertambangan');
INSERT INTO `data_mahasiswa` VALUES ('Mamat', '434402089', 'Laki-laki', 'Teknik Industri');
INSERT INTO `data_mahasiswa` VALUES ('Ahmad', '793402083', 'Laki-laki', 'Teknik Pertambangan');
INSERT INTO `data_mahasiswa` VALUES ('Yadi', '493402089', 'Laki-laki', 'Teknik Industri');
INSERT INTO `data_mahasiswa` VALUES ('Adul', '123213167', 'Laki-laki', 'Teknik Industri');
INSERT INTO `data_mahasiswa` VALUES ('Indra', '489234098', 'Laki-laki', 'Teknik Informatika');
INSERT INTO `data_mahasiswa` VALUES ('Wisnu', '555555555', 'Laki-laki', 'Teknik Mesin');
INSERT INTO `data_mahasiswa` VALUES ('Raisa', '124212209', 'Perempuan', 'Teknik Industri');
INSERT INTO `data_mahasiswa` VALUES ('Luna', '593402089', 'Perempuan', 'Teknik Pertambangan');
INSERT INTO `data_mahasiswa` VALUES ('Maya', '321231331', 'Perempuan', 'Matematika');
INSERT INTO `data_mahasiswa` VALUES ('Intan', '122221331', 'Perempuan', 'Teknik Pertambangan');
INSERT INTO `data_mahasiswa` VALUES ('Rizky', '412345123', 'Laki-laki', 'Teknik Industri');
INSERT INTO `data_mahasiswa` VALUES ('Jimin', '122210009', 'Laki-laki', 'Teknik Industri');
INSERT INTO `data_mahasiswa` VALUES ('Adam', '458295254', 'Laki-laki', 'Matematika');
INSERT INTO `data_mahasiswa` VALUES ('Dani', '888222165', 'Laki-laki', 'Teknik Mesin');
INSERT INTO `data_mahasiswa` VALUES ('Raditya', '912402089', 'Laki-laki', 'Teknik Informatika');
INSERT INTO `data_mahasiswa` VALUES ('Dika', '129847812', 'Laki-laki', 'Teknik Mesin');
INSERT INTO `data_mahasiswa` VALUES ('Risma', '313123666', 'Perempuan', 'Teknik Elektro');
INSERT INTO `data_mahasiswa` VALUES ('Putri', '212234752', 'Perempuan', 'Teknik Mesin');
INSERT INTO `data_mahasiswa` VALUES ('Alka', '120140041', 'Perempuan', 'Teknik Informatika');
SET FOREIGN_KEY_CHECKS = 1;
