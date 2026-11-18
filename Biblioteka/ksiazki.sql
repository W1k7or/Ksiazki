-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 17, 2026 at 07:52 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `Id` int(11) NOT NULL,
  `Tytul` varchar(255) NOT NULL,
  `Autor` varchar(255) NOT NULL,
  `Rok` int(11) DEFAULT NULL,
  `Gatunek` varchar(100) NOT NULL,
  `Okladka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ksiazki`
--

INSERT INTO `ksiazki` (`Id`, `Tytul`, `Autor`, `Rok`, `Gatunek`, `Okladka`) VALUES
(1, 'Dracula', 'Bram Stoker', 1897, 'Horror gotycki', 'covers/dracula.jpg'),
(2, 'Frankenstein', 'Mary Shelley', 1818, 'Horror Gotycki', 'covers/frankenstein.jpg'),
(3, 'Trudna Droga z Piekła', 'Marilyn Manson', 1998, 'Autobiografia', 'covers/trudna-droga-z-piekla.jpg'),
(4, 'Deman', 'Artur Urbanowicz', 2017, 'Horror / thriller psychologiczny', 'covers/Deman.jpg'),
(5, 'Doktor Jeckyll i Pan Hyde', 'Robert Louis Stevenson', 1886, 'Horror gotycki', 'covers/jekyll-hyde.jpg'),
(6, 'Rok 1984', 'George Orwell', 1932, 'Dystopia', 'covers/1984.jpg'),
(7, 'Nowy Wspaniały Swiat', 'Aldous Huxley', 1932, 'Dystopia', 'covers/brave-new-world.jpg'),
(8, 'Portret Doriana Greya', 'Oscar Wilde', 1890, 'Powieść gotycka', 'covers/dorian-grey.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
