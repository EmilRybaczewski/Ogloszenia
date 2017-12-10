-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2017, 20:30
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
  `Nazwa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`Id_kategorii`, `Nazwa`) VALUES
(1, 'Sprzet Mysliwski'),
(2, 'Odziez Mysliwska'),
(3, 'Optyka'),
(4, 'Noze Mysliwskie'),
(5, 'Luki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `Id` int(11) NOT NULL,
  `Tytul` text NOT NULL,
  `Opis` text NOT NULL,
  `Cena` float NOT NULL,
  `Id_kategorii` int(11) NOT NULL,
  `Id_usera` int(11) NOT NULL,
  `Main_zdj` varchar(64) NOT NULL,
  `Data_wyg` int(11) NOT NULL,
  `Wyroznienie` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`Id`, `Tytul`, `Opis`, `Cena`, `Id_kategorii`, `Id_usera`, `Main_zdj`, `Data_wyg`, `Wyroznienie`) VALUES
(1, 'Garłacz Myśliwski', 'Bardzo dobry prawie nie używany jak nowy nie oszukuje i to w dobrej cenie OKAZJA nigdy nie miałeś lepszego garłacza. Idealny od polowania na jelenie i dziki i somsiada.', 2000, 1, 2, 'zdjecia/garlacz.jpg', 1514631600, 0),
(2, 'Karambit', 'Replika kosy z CSka idealna do oprawiania jeleni', 100, 2, 2, 'zdjecia/karambit.jpg', 1514631600, 0),
(3, 'Bla Bla', 'bla bla ds', 20, 2, 1, 'zdjecia/karambit1.jpg', 1514631600, 0),
(4, 'bla', 'bla', 2, 4, 2, 'zdjecia/garlacz1.jpg', 1514631600, 0),
(7, 'Patryk', 'dsdsdsddddddddddd', 0.45, 1, 1, 'Koala.jpg', 0, 0),
(8, 'sd', 'sds', 0.18, 2, 1, './zdjecia/Desert.jpg', 1515516590, 0);

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

--
-- Zrzut danych tabeli `parametry_ogloszenia`
--

INSERT INTO `parametry_ogloszenia` (`Id`, `Id_ogloszenia`, `Atrybut`, `Wartosc`) VALUES
(1, 1, 'Magazynek', 'Pinc panie pinc'),
(2, 2, 'ostrze', '2 metry');

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
  `Email` text NOT NULL,
  `telefon` int(9) NOT NULL,
  `Pracownik` tinyint(1) NOT NULL DEFAULT '0',
  `Potwierdzenie` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `usery`
--

INSERT INTO `usery` (`Id_usera`, `Imie`, `Nazwisko`, `Login`, `Haslo`, `Email`, `telefon`, `Pracownik`, `Potwierdzenie`) VALUES
(1, 'Mireksd', 'Handlarzsd', 'Mirek', 'mirek123', 'Mirek@test.plsd', 932932932, 0, 0),
(2, 'Janusz', 'Kowalski', 'Jan', 'janusz123', 'janusz@test.pl', 123123123, 0, 0),
(4, 'Adam Geralt', 'von Pierdolec', 'hrabia', 'pierdolec', 'Pierdolec@gmail.com', 123456789, 1, 1),
(5, 'Janusz', 'Tracz', 'Tracz', 'tracz123', 'Janusz@Tracz.com', 123456789, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `Id_wiad` int(11) NOT NULL,
  `Id_usera_wys` int(11) NOT NULL,
  `Id_usera_odb` int(11) NOT NULL,
  `Wiadomosc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `wiadomosci`
--

INSERT INTO `wiadomosci` (`Id_wiad`, `Id_usera_wys`, `Id_usera_odb`, `Wiadomosc`) VALUES
(1, 1, 2, 'DEJ ZADARMO MAM HOROM CURKE'),
(2, 2, 1, 'Proszę do mnie nie pisać więcej'),
(3, 1, 2, 'TO POLOWA CENY I JESTEM JESZCZE DZISAJ'),
(4, 2, 1, 'Już panu coś mówiłem'),
(8, 1, 2, 'ZA BRAME BO CIE ODCHOLUJE '),
(9, 1, 2, 'sdsadasdasdasdas');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `Id_zdjecia` int(11) NOT NULL,
  `Id_ogloszenia` int(11) NOT NULL,
  `zdjecie` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`Id_zdjecia`, `Id_ogloszenia`, `zdjecie`) VALUES
(1, 1, 'zdjecia/garlacz1.jpg'),
(2, 1, 'zdjecia/garlacz2.jpg');

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
-- Indexes for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
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
-- Indexes for table `wiadomosci`
--
ALTER TABLE `wiadomosci`
  ADD PRIMARY KEY (`Id_wiad`);

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
  MODIFY `Id_kategorii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `parametry_ogloszenia`
--
ALTER TABLE `parametry_ogloszenia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `usery`
--
ALTER TABLE `usery`
  MODIFY `Id_usera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `wiadomosci`
--
ALTER TABLE `wiadomosci`
  MODIFY `Id_wiad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `Id_zdjecia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
