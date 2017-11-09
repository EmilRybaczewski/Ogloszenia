-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lis 2017, 22:18
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dupsko`
--

CREATE TABLE `dupsko` (
  `ID` int(11) NOT NULL,
  `Imie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `dupsko`
--

INSERT INTO `dupsko` (`ID`, `Imie`) VALUES
(1, 'MIREK'),
(2, 'JANUSZ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `Id_kategorii` int(11) NOT NULL,
  `Nazwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogłoszenia`
--

CREATE TABLE `ogłoszenia` (
  `Id` int(11) NOT NULL,
  `Tytul` text NOT NULL,
  `Opis` text NOT NULL,
  `Id_kategorii` int(11) NOT NULL,
  `Id_usera` int(11) NOT NULL,
  `Main_zdj` int(11) NOT NULL,
  `Data_wyg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `parametry_ogloszenia`
--

CREATE TABLE `parametry_ogloszenia` (
  `Id` int(11) NOT NULL,
  `Id_ogloszenia` int(11) NOT NULL,
  `Atrybut` text NOT NULL,
  `Wartosc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usery`
--

CREATE TABLE `usery` (
  `Id_usera` int(11) NOT NULL,
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Login` text NOT NULL,
  `Haslo` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `Id_usera_wys` int(11) NOT NULL,
  `Id_usera_odb` int(11) NOT NULL,
  `Wiadomosc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `Id_zdjecia` int(11) NOT NULL,
  `Id_ogloszenia` int(11) NOT NULL,
  `zdjecie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `dupsko`
--
ALTER TABLE `dupsko`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`Id_kategorii`);

--
-- Indexes for table `ogłoszenia`
--
ALTER TABLE `ogłoszenia`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parametry_ogloszenia`
--
ALTER TABLE `parametry_ogloszenia`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usery`
--
ALTER TABLE `usery`
  ADD PRIMARY KEY (`Id_usera`);

--
-- Indexes for table `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`Id_zdjecia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dupsko`
--
ALTER TABLE `dupsko`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `Id_kategorii` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `ogłoszenia`
--
ALTER TABLE `ogłoszenia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `parametry_ogloszenia`
--
ALTER TABLE `parametry_ogloszenia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `usery`
--
ALTER TABLE `usery`
  MODIFY `Id_usera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `Id_zdjecia` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
