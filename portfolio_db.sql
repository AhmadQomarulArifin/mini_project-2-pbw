SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `about` (
  `id` int NOT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `about` (`id`, `subtitle`, `description`) VALUES
(1, 'Deskripsi diri, skill, dan pengalaman.', 'Saya adalah mahasiswa Universitas Mulawarman yang sedang berusaha untuk mengembangkan kemampuan dan pola pikir saya. Saya sangat senang mempelajari hal baru dan mencoba menerapkannya secara langsung. Saya percaya hasil yang baik datang dari proses yang dijalani dengan sungguh-sungguh.');


CREATE TABLE `certificates` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `issuer` varchar(100) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `description` text,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `certificates` (`id`, `title`, `issuer`, `year`, `description`, `image`) VALUES
(1, 'Pertamina Goes To Kampus', 'Event', '2024', 'Sertifikat kegiatan Pertamina Goes To Kampus', 'cert-1.jpg'),
(2, 'Inforsa', 'Organisasi', '2026', 'Anggota Departemen HRD Himpunan Inforsa', 'cert-2.jpg'),
(3, 'Dicoding', 'Dicoding', '2026', 'Penerapan Data Science dengan Microsoft Fabric', 'cert-3.jpg');


CREATE TABLE `experiences` (
  `id` int NOT NULL,
  `title` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `experiences` (`id`, `title`) VALUES
(1, 'Staff HRD Organisasi Inforsa (2025)'),
(2, 'Staff Rohis SMKN 7 Samarinda (2022)'),
(3, 'Staff Forum Anak Kec. Samarinda Kota (2023)'),
(4, 'Kepala Bidang Keagamaan OSIS SMPN 21 (2019)');



CREATE TABLE `profile` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `intro` text,
  `email` varchar(100) DEFAULT NULL,
  `github` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `profile` (`id`, `name`, `role`, `intro`, `email`, `github`, `photo`) VALUES
(1, 'Ahmad Qomarul Arifin', 'Mahasiswa Sistem Informasi 2024', NULL, 'ahmadqomarularifiin@gmail.com', 'https://github.com/AhmadQomarulArifin', 'profile.jpg');



CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `level` int DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `skills` (`id`, `name`, `level`, `color`) VALUES
(1, 'Komunikasi', 85, 'bg-success'),
(2, 'Belajar', 75, 'bg-info'),
(3, 'Bermain Game', 70, 'bg-primary'),
(4, 'Olahraga', 65, 'bg-warning');


ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `experiences`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


