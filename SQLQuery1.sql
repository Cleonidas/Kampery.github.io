DROP DATABASE WYPO;

create database wypo;
use wypo;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `SAMOCHODY`(
  `ID` int(11) NOT NULL,
  `Samochod` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Cena` INT(11) NOT NULL,
  `Typ` CHAR(1) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

INSERT INTO `SAMOCHODY` (`ID`, `Samochod`, `Cena`,`Typ`) VALUES
(1, "Camp1", 240, 'C'),
(2, "Camp2", 210, 'C'),
(3, "Camp3", 150, 'C'),
(4, "Limo1", 400, 'L'),
(5, "Limo2", 300, 'L'),
(6, "Limo3", 200, 'L');

CREATE TABLE `wypozyczenia` (
  `IDwypozyczenia` int(11) NOT NULL,
  `Samochod` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Telefon` int(11) NOT NULL,
  `Od` date NOT NULL,
  `Do` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`IDwypozyczenia`);


-- AUTO_INCREMENT dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `IDwypozyczenia` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


 