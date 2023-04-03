-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Kwi 2023, 12:02
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
  `Okładka` text COLLATE utf8_polish_ci NOT NULL,
  `Tytuł` text COLLATE utf8_polish_ci NOT NULL,
  `Autor` text COLLATE utf8_polish_ci NOT NULL,
  `Wydawnictwo` text COLLATE utf8_polish_ci NOT NULL,
  `Liczba stron` int(11) NOT NULL,
  `Seria` text COLLATE utf8_polish_ci DEFAULT NULL,
  `Tom` int(11) DEFAULT NULL,
  `Gatunek` text COLLATE utf8_polish_ci NOT NULL,
  `Cena` float NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`Okładka`, `Tytuł`, `Autor`, `Wydawnictwo`, `Liczba stron`, `Seria`, `Tom`, `Gatunek`, `Cena`, `ID`) VALUES
('https://ecsmedia.pl/c/babel-czyli-o-koniecznosci-przemocy-b-iext126543318.jpg', 'Babel czyli o konieczności przemocy', 'Rebecca Kuang', 'Fabryka Słów', 899, NULL, NULL, 'Fantastyka', 99.99, 1),
('https://ecsmedia.pl/c/kosiarze-zniwa-smierci-tom-1-w-iext126684420.jpg', 'Kosiarze', 'Neal Shusterman', 'Uroboros', 512, 'Żniwa Śmierci', 1, 'Fantastyka', 54.99, 2),
('https://ecsmedia.pl/c/wszyscy-jestesmy-lotrami-villains-tom-1-w-iext126805233.jpg', 'Wszyscy jesteśmy łotrami', 'Foody Amanda, Herman Christine Lynn', 'Young', 520, 'Villains', 1, 'Fantastyka', 49.99, 3),
('https://ecsmedia.pl/c/piata-pora-roku-peknieta-ziemia-tom-1-w-iext48002542.jpg', 'Piąta pora roku', 'Jemisin N.K.', 'SQN', 376, 'Pęknięta Ziemia', 1, 'Post-apo', 39.99, 4),
('https://ecsmedia.pl/c/ostatnie-zyczenie-wiedzmin-tom-1-w-iext121324546.jpg', 'Ostatnie Życzenie', 'Andrzej Sapkowski', 'Supernova', 330, 'Wiedźmin', 1, 'Fantastyka', 59.99, 5),
('https://ecsmedia.pl/c/glebia-challengera-w-iext126878017.jpg', 'Głębia Challengera', 'Neal Shusterman', 'W.A.B', 336, NULL, NULL, 'Young Adult', 44.99, 6),
('https://ecsmedia.pl/c/wojna-makowa-tom-1-w-iext126017742.jpg', 'Wojna Makowa', 'Rebecca Kuang', 'Fabryka Słów', 640, 'Trylogia wojen makowych', 1, 'Fantastyka', 79.99, 7),
('https://ecsmedia.pl/c/kicia-kocia-co-zasiejemy-w-ogrodku-b-iext123681465.jpg', 'Kicia Kocia', 'Głowińska Anita', 'Media Rodzina', 24, NULL, NULL, 'Dla dzieci', 9.99, 8),
('https://ecsmedia.pl/c/terapeutka-b-iext122206742.jpg', 'Terapeutka', 'B. A. Paris', 'Albatros', 384, NULL, NULL, 'Thriller/Kryminał', 39.99, 9),
('https://ecsmedia.pl/c/park-jurajski-b-iext117184319.jpg', 'Park Jurajski', 'Crichton Micheal', 'Vesper', 512, NULL, NULL, 'Horror', 59.99, 10),
('https://ecsmedia.pl/c/the-love-hypothesis-b-iext123198878.jpg', 'The Love Hypothesis', 'Ali Hazelwood', 'MUZA', 416, NULL, NULL, 'Obyczajowa', 44.9, 11),
('https://ecsmedia.pl/c/psychologia-sprzedazy-b-iext126407000.jpg', 'Psychologia sprzedaży', 'Brian Tracy', 'MT Biznes', 218, NULL, NULL, 'Biznes', 49.99, 12),
('https://ecsmedia.pl/c/nawyki-warte-miliony-jak-nauczyc-sie-zachowan-przynoszacych-bogactwo-b-iext124023148.jpg', 'Nawyki warte miliony', 'Brian Tracy', 'OnePress', 320, NULL, NULL, 'Rozwój osobisty', 49, 13),
('https://ecsmedia.pl/c/november-9-b-iext123143444.jpg', 'November 9', 'Hoover Colleen', 'Wydawnictwo Otwarte', 336, NULL, NULL, 'Romans', 49.99, 14),
('https://ecsmedia.pl/c/habit-i-zbroja-wydanie-ksiazkowe-b-iext123078052.jpg', 'Habit i zbroja', 'Pitera Paweł', 'Wydawnictwo Otwarte', 349, NULL, NULL, 'Historyczne', 39.99, 15),
('https://ecsmedia.pl/c/dna-nastolatka-co-siedzi-w-mlodych-b-iext103314005.jpg', 'DNA Nastolatka', 'Jacek Ponikiewski', 'Złote Myśli', 80, NULL, NULL, 'Naukowe', 29.99, 16),
('https://ecsmedia.pl/c/ocalala-z-chinskiego-gulagu-b-iext121934920.jpg', 'Ocalała z chińskiego gułagu', 'Haitiwaji Gulbahar, Morgat Rozenn', 'W.A.B.', 240, NULL, NULL, 'Literatura faktu', 44.99, 17),
('https://ecsmedia.pl/c/o-kocie-ktory-ratowal-ksiazki-b-iext126470206.jpg', 'O kocie, który ratował książki', 'Sosuke Natsukawa', 'Flow Books', 272, NULL, NULL, 'Piękna', 49.99, 18);

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
