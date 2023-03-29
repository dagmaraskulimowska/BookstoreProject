-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Mar 2023, 18:45
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bookstore`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `Tytuł` text COLLATE utf8_polish_ci NOT NULL,
  `Autor` text COLLATE utf8_polish_ci NOT NULL,
  `Wydawnictwo` text COLLATE utf8_polish_ci NOT NULL,
  `Liczba stron` int(11) NOT NULL,
  `Seria` text COLLATE utf8_polish_ci DEFAULT NULL,
  `Gatunek` text COLLATE utf8_polish_ci NOT NULL,
  `Cena` float NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`Tytuł`, `Autor`, `Wydawnictwo`, `Liczba stron`, `Seria`, `Gatunek`, `Cena`, `ID`) VALUES
('Babel czyli o konieczności przemocy', 'Rebecca Kuang', 'Fabryka Słów', 899, NULL, 'Fantastyka', 99.99, 1),
('Kosiarze', 'Neal Shusterman', 'Uroboros', 512, 'Żniwa Śmierci Tom 1', 'Fantastyka', 54.99, 2),
('Wszyscy jesteśmy łotrami', 'Foody Amanda, Herman Christine Lynn', 'Young', 520, 'Villains Tom 1', 'Fantastyka', 49.99, 3),
('Piąta pora roku', 'Jemisin N.K.', 'SQN', 376, 'Pęknięta Ziemia Tom 1', 'Post-apo', 39.99, 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
