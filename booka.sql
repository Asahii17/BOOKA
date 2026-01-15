-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2026 pada 02.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `cost_price` decimal(15,2) NOT NULL,
  `sell_price` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `seller_id`, `category_id`, `title`, `description`, `image`, `stock`, `cost_price`, `sell_price`, `created_at`) VALUES
(1, 2, 1, 'Laskar Pelangi', 'Novel inspiratif tentang perjuangan anak-anak Belitong.', 'laskar_pelangi.jpg', 15, 50000.00, 85000.00, '2025-01-10 02:00:00'),
(2, 2, 2, 'Psychology of Money', 'Pelajaran abadi mengenai kekayaan, ketamakan, dan kebahagiaan.', 'psychology_money.jpg', 20, 65000.00, 98000.00, '2025-01-10 02:05:00'),
(3, 2, 5, 'One Piece Vol. 100', 'Komik petualangan bajak laut topi jerami.', 'one_piece_100.jpg', 50, 30000.00, 45000.00, '2025-01-11 03:00:00'),
(4, 3, 3, 'Sapiens: Riwayat Singkat Umat Manusia', 'Buku sejarah manusia dari zaman batu hingga abad ke-21.', 'sapiens.jpg', 8, 80000.00, 125000.00, '2025-01-12 04:00:00'),
(5, 3, 3, 'Atomic Habits', 'Perubahan kecil yang memberikan hasil luar biasa.', 'atomic_habits.jpg', 12, 70000.00, 105000.00, '2025-01-12 04:15:00'),
(6, 3, 4, 'Sejarah Dunia yang Disembunyikan', 'Mengungkap fakta-fakta sejarah yang jarang diketahui.', 'sejarah_dunia.jpg', 5, 90000.00, 150000.00, '2025-01-13 01:00:00'),
(7, 2, 1, 'Bumi Manusia', 'Karya sastra klasik Pramoedya Ananta Toer.', 'bumi_manusia.jpg', 10, 60000.00, 110000.00, '2025-01-14 02:00:00'),
(8, 3, 2, 'Rich Dad Poor Dad', 'Apa yang diajarkan orang kaya pada anak-anak mereka tentang uang.', 'rich_dad.jpg', 25, 55000.00, 88000.00, '2025-01-14 02:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id`, `buyer_id`, `book_id`, `qty`) VALUES
(1, 4, 3, 2),
(2, 5, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_by`, `created_at`) VALUES
(1, 'Fiksi & Novel', 1, '2025-01-01 01:30:00'),
(2, 'Bisnis & Ekonomi', 1, '2025-01-01 01:31:00'),
(3, 'Sains & Teknologi', 1, '2025-01-01 01:32:00'),
(4, 'Sejarah & Budaya', 1, '2025-01-01 01:33:00'),
(5, 'Komik & Manga', 1, '2025-01-01 01:34:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `payment_proof` varchar(255) DEFAULT NULL,
  `status` enum('pending','waiting_approval','approved','shipping','finished','rejected','refund') DEFAULT 'pending',
  `expedition_name` varchar(50) DEFAULT NULL,
  `tracking_number` varchar(100) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `refund_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `invoice_number`, `buyer_id`, `total_price`, `payment_proof`, `status`, `expedition_name`, `tracking_number`, `order_date`, `refund_time`) VALUES
(1, 'INV/20250110/001', 4, 183000.00, 'proof1.jpg', 'finished', 'JNE', 'JNE123456789', '2025-01-10 03:00:00', NULL),
(2, 'INV/20250112/002', 5, 125000.00, 'proof2.jpg', 'shipping', 'SiCepat', 'SCP987654321', '2025-01-12 07:00:00', NULL),
(3, 'INV/20250114/003', 4, 85000.00, 'proof3.jpg', 'waiting_approval', NULL, NULL, '2025-01-14 09:30:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_at_transaction` decimal(15,2) NOT NULL,
  `cost_at_transaction` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `book_id`, `seller_id`, `qty`, `price_at_transaction`, `cost_at_transaction`) VALUES
(1, 1, 1, 2, 1, 85000.00, 50000.00),
(2, 1, 2, 2, 1, 98000.00, 65000.00),
(3, 2, 4, 3, 1, 125000.00, 80000.00),
(4, 3, 1, 2, 1, 85000.00, 50000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `role` enum('admin','seller','buyer') NOT NULL,
  `address` text DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expires_at` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `nik`, `role`, `address`, `reset_token`, `reset_expires_at`, `last_activity`, `created_at`) VALUES
(1, 'admin@gmail.com', '1', 'Super Administrator', NULL, 'admin', 'Kantor Pusat Libraria', NULL, NULL, '2026-01-15 00:48:28', '2025-01-01 01:00:00'),
(2, 'seller1@bookstore.com', '1', 'Toko Buku Sejahtera', '3201123456789001', 'seller', 'Jl. Merdeka No. 10, Jakarta', NULL, NULL, '2026-01-15 08:30:00', '2025-01-02 02:00:00'),
(3, 'seller2@bookstore.com', 'password', 'Pustaka Abadi', '', 'seller', 'Jl. Sudirman No. 45, Bandung', NULL, NULL, '2026-01-14 15:00:00', '2025-01-03 03:00:00'),
(4, 'buyer1@bookstore.com', '1', 'Budi Santoso', '3202987654321002', 'buyer', 'Perumahan Griya Asri Blok A1', NULL, NULL, '2026-01-15 09:15:00', '2025-01-05 04:00:00'),
(5, 'buyer2@bookstore.com', 'password', 'Siti Aminah', NULL, 'buyer', 'Apartemen Melati Lt. 12', NULL, NULL, '2026-01-13 20:00:00', '2025-01-06 07:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indeks untuk tabel `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `unique_nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
