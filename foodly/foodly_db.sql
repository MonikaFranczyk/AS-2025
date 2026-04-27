-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 16, 2026 at 08:58 AM
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
-- Database: `foodly`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_platnosc`
--

CREATE TABLE `kat_platnosc` (
  `ID_PLATNOSC` bigint(20) NOT NULL,
  `NAZWA` varchar(50) NOT NULL,
  `AKTYWNA` char(1) DEFAULT 'Y' CHECK (`AKTYWNA` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `kat_platnosc`
--

INSERT INTO `kat_platnosc` (`ID_PLATNOSC`, `NAZWA`, `AKTYWNA`) VALUES
(1, 'KARTA', 'Y'),
(2, 'BLIK', 'Y'),
(3, 'GOTOWKA', 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_status_dostawy`
--

CREATE TABLE `kat_status_dostawy` (
  `ID_STATUS` bigint(20) NOT NULL,
  `NAZWA` varchar(100) NOT NULL,
  `AKTYWNA` char(1) DEFAULT 'Y' CHECK (`AKTYWNA` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `kat_status_dostawy`
--

INSERT INTO `kat_status_dostawy` (`ID_STATUS`, `NAZWA`, `AKTYWNA`) VALUES
(1, 'PRZYJETA', 'Y'),
(2, 'W_DRODZE', 'Y'),
(3, 'DOSTARCZONA', 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_status_zamowienia`
--

CREATE TABLE `kat_status_zamowienia` (
  `ID_STATUS` bigint(20) NOT NULL,
  `NAZWA` varchar(100) NOT NULL,
  `AKTYWNA` char(1) DEFAULT 'Y' CHECK (`AKTYWNA` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `kat_status_zamowienia`
--

INSERT INTO `kat_status_zamowienia` (`ID_STATUS`, `NAZWA`, `AKTYWNA`) VALUES
(1, 'KOSZYK', 'Y'),
(2, 'ZLOZONE', 'Y'),
(3, 'OPLACONE', 'Y'),
(4, 'W_REALIZACJI', 'Y'),
(5, 'DOSTARCZONE', 'Y'),
(6, 'ANULOWANE', 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_typ_dania`
--

CREATE TABLE `kat_typ_dania` (
  `ID_TYP_DANIA` bigint(20) NOT NULL,
  `NAZWA` varchar(100) NOT NULL,
  `AKTYWNA` char(1) DEFAULT 'Y' CHECK (`AKTYWNA` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `kat_typ_dania`
--

INSERT INTO `kat_typ_dania` (`ID_TYP_DANIA`, `NAZWA`, `AKTYWNA`) VALUES
(1, 'NAPÓJ', 'Y'),
(2, 'PRZYSTAWKA', 'Y'),
(3, 'DANIE_GŁÓWNE', 'Y'),
(4, 'DESER', 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu_item`
--

CREATE TABLE `menu_item` (
  `ID_MENU_ITEM` bigint(20) NOT NULL,
  `ID_RESTAURACJI` bigint(20) NOT NULL,
  `NAZWA` varchar(200) NOT NULL,
  `CENA` decimal(10,2) NOT NULL CHECK (`CENA` > 0),
  `ID_TYP_DANIA` bigint(20) DEFAULT NULL,
  `AKTYWNY` char(1) DEFAULT 'Y' CHECK (`AKTYWNY` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`ID_MENU_ITEM`, `ID_RESTAURACJI`, `NAZWA`, `CENA`, `ID_TYP_DANIA`, `AKTYWNY`) VALUES
(1, 1, 'Woda mineralna', 5.00, 1, 'Y'),
(2, 1, 'Cola', 7.00, 1, 'Y'),
(3, 1, 'Sok pomarańczowy', 8.00, 1, 'Y'),
(4, 1, 'Herbata', 6.00, 1, 'Y'),
(5, 1, 'Bruschetta', 14.00, 2, 'Y'),
(6, 1, 'Sałatka grecka', 18.00, 2, 'Y'),
(7, 1, 'Zupa dnia', 15.00, 2, 'Y'),
(8, 1, 'Carpaccio', 22.00, 2, 'Y'),
(9, 1, 'Spaghetti Carbonara', 28.00, 3, 'Y'),
(10, 1, 'Burger wołowy', 30.00, 3, 'Y'),
(11, 1, 'Pierś z kurczaka', 27.00, 3, 'Y'),
(12, 1, 'Pizza Margherita', 26.00, 3, 'Y'),
(13, 1, 'Tiramisu', 16.00, 4, 'Y'),
(14, 1, 'Sernik', 15.00, 4, 'Y'),
(15, 1, 'Lody waniliowe', 12.00, 4, 'Y'),
(16, 1, 'Brownie', 17.00, 4, 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `restauracja`
--

CREATE TABLE `restauracja` (
  `ID_RESTAURACJI` bigint(20) NOT NULL,
  `NAZWA` varchar(200) NOT NULL,
  `ADRES` varchar(300) DEFAULT NULL,
  `AKTYWNA` char(1) DEFAULT 'Y' CHECK (`AKTYWNA` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `restauracja`
--

INSERT INTO `restauracja` (`ID_RESTAURACJI`, `NAZWA`, `ADRES`, `AKTYWNA`) VALUES
(1, 'Foodly Bistro', 'ul. Smaczna 1, Warszawa', 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `restauracja_user`
--

CREATE TABLE `restauracja_user` (
  `ID_USER` bigint(20) NOT NULL,
  `ID_RESTAURACJI` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `restauracja_user`
--

INSERT INTO `restauracja_user` (`ID_USER`, `ID_RESTAURACJI`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `ID_ROLA` bigint(20) NOT NULL,
  `NAZWA` varchar(50) NOT NULL,
  `AKTYWNA` char(1) DEFAULT 'Y' CHECK (`AKTYWNA` in ('Y','N'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID_ROLA`, `NAZWA`, `AKTYWNA`) VALUES
(1, 'ADMIN', 'Y'),
(2, 'KLIENT', 'Y'),
(3, 'DOSTAWCA', 'Y'),
(4, 'PRACOWNIK_RESTAURACJI', 'Y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID_USER` bigint(20) NOT NULL,
  `LOGIN` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `AKTYWNY` char(1) DEFAULT 'Y' CHECK (`AKTYWNY` in ('Y','N')),
  `DATA_DODANIA` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `LOGIN`, `PASSWORD`, `EMAIL`, `AKTYWNY`, `DATA_DODANIA`) VALUES
(1, 'admin', 'admin', 'admin@email.com', 'Y', '2026-01-05 14:15:23'),
(2, 'klient', 'klient', 'klient@email.com', 'Y', '2026-01-05 14:15:23'),
(3, 'dostawca', 'dostawca', 'dostawca@email.com', 'Y', '2026-01-05 14:15:23'),
(4, 'restauracja', 'restauracja', 'restauracja@email.com', 'Y', '2026-01-05 14:15:23'),
(8, 'user', 'user', 'admin@user.pl', 'Y', '2026-01-16 07:44:20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE `user_role` (
  `ID_USER` bigint(20) NOT NULL,
  `ID_ROLA` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`ID_USER`, `ID_ROLA`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(8, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `ID_ZAMOWIENIA` bigint(20) NOT NULL,
  `ID_KLIENTA` bigint(20) NOT NULL,
  `ID_RESTAURACJI` bigint(20) NOT NULL,
  `ID_STATUS` bigint(20) DEFAULT NULL,
  `ID_PLATNOSC` bigint(20) DEFAULT NULL,
  `MENU_ITEM_LISTA` longtext DEFAULT NULL,
  `ADRES_DOSTAWY` varchar(300) DEFAULT NULL,
  `KOSZT_DOSTAWY` decimal(10,2) DEFAULT NULL,
  `KWOTA_CALKOWITA` decimal(10,2) DEFAULT NULL,
  `DATA_UTWORZENIA` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `zamowienie`
--

INSERT INTO `zamowienie` (`ID_ZAMOWIENIA`, `ID_KLIENTA`, `ID_RESTAURACJI`, `ID_STATUS`, `ID_PLATNOSC`, `MENU_ITEM_LISTA`, `ADRES_DOSTAWY`, `KOSZT_DOSTAWY`, `KWOTA_CALKOWITA`, `DATA_UTWORZENIA`) VALUES
(19, 2, 1, 4, 1, '{\"4\":{\"id\":4,\"name\":\"Herbata\",\"price\":\"6.00\",\"qty\":1},\"6\":{\"id\":6,\"name\":\"Sa\\u0142atka grecka\",\"price\":\"18.00\",\"qty\":1},\"5\":{\"id\":5,\"name\":\"Bruschetta\",\"price\":\"14.00\",\"qty\":1}}', 'jj', 10.00, 48.00, '2026-01-14 08:03:55'),
(20, 2, 1, 6, 1, '{\"4\":{\"id\":4,\"name\":\"Herbata\",\"price\":\"6.00\",\"qty\":\"4\"},\"9\":{\"id\":9,\"name\":\"Spaghetti Carbonara\",\"price\":\"28.00\",\"qty\":1}}', 'Mickiewicza 12, Krków', 10.00, 62.00, '2026-01-16 07:24:21'),
(21, 2, 1, 4, 3, '{\"12\":{\"id\":12,\"name\":\"Pizza Margherita\",\"price\":\"26.00\",\"qty\":1},\"4\":{\"id\":4,\"name\":\"Herbata\",\"price\":\"6.00\",\"qty\":\"2\"},\"1\":{\"id\":1,\"name\":\"Woda mineralna\",\"price\":\"5.00\",\"qty\":1}}', 'Mickiewicza 12, Kraków', 10.00, 53.00, '2026-01-16 07:25:26'),
(22, 2, 1, 4, 1, '{\"12\":{\"id\":12,\"name\":\"Pizza Margherita\",\"price\":\"26.00\",\"qty\":1},\"8\":{\"id\":8,\"name\":\"Carpaccio\",\"price\":\"22.00\",\"qty\":1},\"5\":{\"id\":5,\"name\":\"Bruschetta\",\"price\":\"14.00\",\"qty\":2}}', 'Mickiewicza 12, Kraków', 10.00, 86.00, '2026-01-16 07:45:41'),
(23, 2, 1, 6, 3, '{\"2\":{\"id\":2,\"name\":\"Cola\",\"price\":\"7.00\",\"qty\":1},\"6\":{\"id\":6,\"name\":\"Sa\\u0142atka grecka\",\"price\":\"18.00\",\"qty\":1},\"5\":{\"id\":5,\"name\":\"Bruschetta\",\"price\":\"14.00\",\"qty\":1}}', 'Mickiewicza 12, Kraków', 10.00, 49.00, '2026-01-16 07:48:46');

--
-- Wyzwalacze `zamowienie`
--
DELIMITER $$
CREATE TRIGGER `TRG_ONE_OPEN_CART` BEFORE INSERT ON `zamowienie` FOR EACH ROW BEGIN
    DECLARE v_count INT;

    IF NEW.ID_STATUS IS NULL THEN
        SELECT COUNT(*)
        INTO v_count
        FROM ZAMOWIENIE
        WHERE ID_KLIENTA = NEW.ID_KLIENTA
          AND ID_STATUS IS NULL;

        IF v_count > 0 THEN
            SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Użytkownik może mieć tylko jeden aktywny koszyk';
        END IF;
    END IF;
END
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kat_platnosc`
--
ALTER TABLE `kat_platnosc`
  ADD PRIMARY KEY (`ID_PLATNOSC`),
  ADD UNIQUE KEY `NAZWA` (`NAZWA`);

--
-- Indeksy dla tabeli `kat_status_dostawy`
--
ALTER TABLE `kat_status_dostawy`
  ADD PRIMARY KEY (`ID_STATUS`),
  ADD UNIQUE KEY `NAZWA` (`NAZWA`);

--
-- Indeksy dla tabeli `kat_status_zamowienia`
--
ALTER TABLE `kat_status_zamowienia`
  ADD PRIMARY KEY (`ID_STATUS`),
  ADD UNIQUE KEY `NAZWA` (`NAZWA`);

--
-- Indeksy dla tabeli `kat_typ_dania`
--
ALTER TABLE `kat_typ_dania`
  ADD PRIMARY KEY (`ID_TYP_DANIA`),
  ADD UNIQUE KEY `NAZWA` (`NAZWA`);

--
-- Indeksy dla tabeli `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`ID_MENU_ITEM`),
  ADD KEY `FK_MI_REST` (`ID_RESTAURACJI`),
  ADD KEY `FK_MI_TYP` (`ID_TYP_DANIA`);

--
-- Indeksy dla tabeli `restauracja`
--
ALTER TABLE `restauracja`
  ADD PRIMARY KEY (`ID_RESTAURACJI`);

--
-- Indeksy dla tabeli `restauracja_user`
--
ALTER TABLE `restauracja_user`
  ADD PRIMARY KEY (`ID_USER`,`ID_RESTAURACJI`),
  ADD KEY `fk_ru_restauracja` (`ID_RESTAURACJI`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_ROLA`),
  ADD UNIQUE KEY `NAZWA` (`NAZWA`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `LOGIN` (`LOGIN`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indeksy dla tabeli `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ID_USER`,`ID_ROLA`),
  ADD KEY `FK_UR_ROLA` (`ID_ROLA`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`ID_ZAMOWIENIA`),
  ADD KEY `FK_ZAM_KLIENT` (`ID_KLIENTA`),
  ADD KEY `FK_ZAM_REST` (`ID_RESTAURACJI`),
  ADD KEY `FK_ZAM_STATUS` (`ID_STATUS`),
  ADD KEY `FK_ZAM_PLAT` (`ID_PLATNOSC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kat_platnosc`
--
ALTER TABLE `kat_platnosc`
  MODIFY `ID_PLATNOSC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kat_status_dostawy`
--
ALTER TABLE `kat_status_dostawy`
  MODIFY `ID_STATUS` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kat_status_zamowienia`
--
ALTER TABLE `kat_status_zamowienia`
  MODIFY `ID_STATUS` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kat_typ_dania`
--
ALTER TABLE `kat_typ_dania`
  MODIFY `ID_TYP_DANIA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `ID_MENU_ITEM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restauracja`
--
ALTER TABLE `restauracja`
  MODIFY `ID_RESTAURACJI` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID_ROLA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `ID_ZAMOWIENIA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD CONSTRAINT `FK_MI_REST` FOREIGN KEY (`ID_RESTAURACJI`) REFERENCES `restauracja` (`ID_RESTAURACJI`),
  ADD CONSTRAINT `FK_MI_TYP` FOREIGN KEY (`ID_TYP_DANIA`) REFERENCES `kat_typ_dania` (`ID_TYP_DANIA`);

--
-- Constraints for table `restauracja_user`
--
ALTER TABLE `restauracja_user`
  ADD CONSTRAINT `fk_ru_restauracja` FOREIGN KEY (`ID_RESTAURACJI`) REFERENCES `restauracja` (`ID_RESTAURACJI`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ru_user` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `FK_UR_ROLA` FOREIGN KEY (`ID_ROLA`) REFERENCES `role` (`ID_ROLA`),
  ADD CONSTRAINT `FK_UR_USER` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `FK_ZAM_KLIENT` FOREIGN KEY (`ID_KLIENTA`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_ZAM_PLAT` FOREIGN KEY (`ID_PLATNOSC`) REFERENCES `kat_platnosc` (`ID_PLATNOSC`),
  ADD CONSTRAINT `FK_ZAM_REST` FOREIGN KEY (`ID_RESTAURACJI`) REFERENCES `restauracja` (`ID_RESTAURACJI`),
  ADD CONSTRAINT `FK_ZAM_STATUS` FOREIGN KEY (`ID_STATUS`) REFERENCES `kat_status_zamowienia` (`ID_STATUS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
