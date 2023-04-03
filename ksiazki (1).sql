-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Kwi 2023, 10:31
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
-- Baza danych: `bookstore`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `Okładka` text DEFAULT NULL,
  `Tytuł` text NOT NULL,
  `Autor` text NOT NULL,
  `Wydawnictwo` text NOT NULL,
  `Liczba stron` int(11) NOT NULL,
  `Seria` text DEFAULT NULL,
  `Tom` int(11) DEFAULT NULL,
  `Gatunek` text NOT NULL,
  `Cena` float NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`Okładka`, `Tytuł`, `Autor`, `Wydawnictwo`, `Liczba stron`, `Seria`, `Tom`, `Gatunek`, `Cena`, `ID`) VALUES
('https://ecsmedia.pl/c/babel-czyli-o-koniecznosci-przemocy-b-iext126543318.jpg', 'Babel', 'Rebecca Kuang', 'Fabryka Słów', 899, NULL, NULL, 'Fantastyka', 99.99, 1),
('https://ecsmedia.pl/c/kosiarze-zniwa-smierci-tom-1-w-iext126684420.jpg', 'Kosiarze', 'Neal Shusterman', 'Uroboros', 512, 'Żniwa Śmierci', 1, 'Fantastyka', 54.99, 2),
('https://ecsmedia.pl/c/wszyscy-jestesmy-lotrami-villains-tom-1-w-iext126805233.jpg', 'Wszyscy jesteśmy łotrami', 'Foody Amanda, Herman Christine Lynn', 'Young', 520, 'Villains', 1, 'Fantastyka', 49.99, 3),
('https://ecsmedia.pl/c/piata-pora-roku-peknieta-ziemia-tom-1-w-iext48002542.jpg', 'Piąta pora roku', 'Jemisin N.K.', 'SQN', 376, 'Pęknięta Ziemia', 1, 'Post-apo', 39.99, 4),
('https://ecsmedia.pl/c/ostatnie-zyczenie-wiedzmin-tom-1-w-iext121324546.jpg', 'Ostatnie Życzenie', 'Andrzej Sapkowski', 'Supernova', 330, 'Wiedźmin', 1, 'Fantastyka', 59.99, 5),
('https://ecsmedia.pl/c/glebia-challengera-w-iext126878017.jpg', 'Głębia Challengera', 'Neal Shusterman', 'W.A.B', 336, NULL, NULL, 'Young Adult', 44.99, 6),
('https://ecsmedia.pl/c/wojna-makowa-tom-1-w-iext126017742.jpg', 'Wojna Makowa', 'Rebecca Kuang', 'Fabryka Słów', 640, 'Trylogia wojen makowych', 1, 'Fantastyka', 79.99, 7);

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
