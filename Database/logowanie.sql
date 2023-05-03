-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Maj 2023, 22:40
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logowanie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Adres` text NOT NULL,
  `Kodpocztowy` text NOT NULL,
  `Miasto` text NOT NULL,
  `Nrtel` text NOT NULL,
  `Adresemail` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `role` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `Imie`, `Nazwisko`, `Adres`, `Kodpocztowy`, `Miasto`, `Nrtel`, `Adresemail`, `updated_at`, `created_at`, `role`) VALUES
(1, 'dagmara', '$2y$10$BP43LS.VepmFs8naYa3Ra.0yjKvlKpDLf14kuMbPalL.lt96uTGt6', '', '', '', '0', '', '0', '', NULL, NULL, NULL),
(6, 'dagmara5', '$2y$10$CqsMQf2/vRARcTLdqi0a7OD2DtwynPJLq2lU4qkp1dz7TdE0rCuXm', '', '', '', '0', '', '0', '', NULL, NULL, NULL),
(7, 'dagmara7', '$2y$10$szUjyQDY.M/sxuZSNqZBveKdR0dMZhcgMxtuJAM0ZYh8KBUUg4Pg6', '', '', '', '0', '', '0', '', NULL, NULL, NULL),
(8, 'tomek1', '$2y$10$kMyoBnyeZJFRU050pvRe2O4bSIR5iF3neBio9JNiPJ6Dtxent.qB.', 'Tomasz', 'Barczycki', 'Podolany', '59-500', 'Złotoryja', '6963541666', 't0m3q01@gmail.com', '2023-04-28 15:14:11', '2023-04-28 15:14:11', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
