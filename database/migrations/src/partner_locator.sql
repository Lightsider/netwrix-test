-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.3.0.6393
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;



-- Dumping structure for table test4.partner_locator
CREATE TABLE IF NOT EXISTS `partner_locator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `countries_covered` varchar(1000) NOT NULL,
  `states_covered` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Dumping data for table test4.partner_locator: ~39 rows (approximately)
INSERT INTO `partner_locator` (`id`, `company`, `status`, `logo`, `address`, `website`, `phone`, `countries_covered`, `states_covered`) VALUES
	(1, 'Napole IT', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', '8223 Molson Way, Liverpool, New York, United States, 13090', 'https://example1.com', '+777(315) 727-0303', '["US"]', '["NY"]'),
	(2, '123 srl', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'Viale dell’Industria, 50,Jesi (AN), Italy, 60035', 'https://example2.com', '+739 0731 288064', '["IT"]', '[""]'),
	(3, 'Entioatsing Inc', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', '10251 Trademark St Unit A, Rancho Cucamonga, California, United States, 91730', 'https://example3.com', '+777 909-257-7270', '["US"]', '["CA"]'),
	(4, 'WeVlan', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'Via Ungaretti, 33, Montecorvino Pugliano (Sa), Italy, 84090', 'https://example1.com', '+7 7828 1776820', '["IT"]', '[""]'),
	(5, 'ABA-IT', 'Premium Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png', '112 Bureaux de la Colline, Saint Cloud Cedex, France, 92213', 'https://example.com', '+33 1 84 76 00 60', '["FR"]', '[""]'),
	(6, 'Sync', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'Houston, Texas, United States', 'https://example2.com', '(713) 299-5999', '["US"]', '["IL","NY","TX"]'),
	(7, 'LLP', 'Premium Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png', '107-111 Fleet Street, London, United Kingdom, EC4A 2AB', 'https://example.com', '+0773 111005', '["GB"]', '[""]'),
	(8, 'BARTEA', 'Premium Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png', '58 RUE JEAN DUVERT, BLANQUEFORT, France, 33290', 'https://example3.com', '+33 5 24 07 99 99', '["FR"]', '[""]'),
	(9, 'ITZafy', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', '313 S Rohlwing Road, Addison, Illinois, United States, 60101', 'https://example.com', '+77(630) 396-6300', '["US"]', '["IL"]'),
	(10, 'LELAYE55', 'Premium Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png', 'Avenida Dom Joao Segundo, Lote 42, Escritorio 602, Lisboa, Portugal, 1990-095', 'https://example1.com', '+771218248480', '["PT"]', '[""]'),
	(11, 'Caribbean Products', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'P.O. Box 10015, Grand Cayman, Cayman Islands, KY1-1001', 'https://example.com', '+99(345) 916-2401', '["AW","KY","GD","JM","TT"]', '[""]'),
	(12, 'Professional software', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'Via Roma, 39, Campodarsego (PD), Italy, 35011', 'https://example.com', '+7799657098', '["IT"]', '[""]'),
	(13, 'Segreguards GmbH', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'Marktstrasse 10, Vallendar, Germany, 56179', 'https://example2.com', '+77 960 986 00', '["DE"]', '[""]'),
	(14, 'SHUSDEC', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'ul. Bociana 22A, Krakow, Poland, 31-231', 'https://example.com', '(812)481235091', '["PL"]', '[""]'),
	(15, 'Local PC Ltd', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'Unit 7 / 950 Ferry Road, Christchurch, New Zealand, 8023', 'https://example3.com', '+123 03 961 7286', '["NZ"]', '[""]'),
	(16, 'Software & Services', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', 'Awans, Belgium', 'https://example2.com', '+7 (322) 204-0266', '["BE"]', '[""]'),
	(17, 'Electron', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', '38251 S Groesbeck Hwy, Clinton Township,Michigan, United States, 48036', 'https://example1.com', '+1 (146) 757-1200 x5105', '["US"]', '["MI"]'),
	(18, 'ICCD prods', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', '5694 Mission Center Road, Ste 602, San Diego, California, United States, 92108', 'https://example.com', '+77 (858) 618-3870', '["US"]', '["CA"]'),
	(19, 'COMMAS-Techline', 'Elite Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png', 'ул. Яшина, д. 40, Хабаровск, Russian Federation', 'https://example.com', '+7 (4212) 99-46-99', '["RU"]', '[""]'),
	(20, 'XIREL BG Ltd.', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', '1712 , Mladost 3, bl. 306, ent.2, Sofia, Bulgaria', 'https://example3.com', '+777888329043', '["BG"]', '[""]'),
	(21, 'Seretyus', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', '760 NE Hazel Dell Ave, Vancouver, United States', 'https://example2.com', '+7772183883', '["US"]', '["CA","WA"]'),
	(22, 'Dimension Values', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'Bryanston, Botswana', 'https://example1.com', '+1236772510387', '["BW"]', '[""]'),
	(23, 'DAD d.o.o.', 'Premium Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png', 'Tbilisijska 85, Ljubljana, Slovenia', 'https://example.com', '+98744790011', '["SI"]', '[""]'),
	(24, 'KINSST', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', '17503 Burbank Blvd, Encino, United States', 'https://example3.com', '+7 855-4482178', '["US"]', '["CA"]'),
	(25, 'Communications Russia', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', 'Трехпрудный пер., д. 9, стр. 2, БЦ Трехпрудный, оф. 303-305, Москва, Russian Federation', 'https://example.com', '+7 (312) 664-23-56', '["RU"]', '[""]'),
	(26, 'Service Srl', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', 'Italy, 50145', 'https://example2.com', '+77 5155095', '["IT"]', '[""]'),
	(27, 'Derersedia', 'Elite Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png', 'France', 'https://example3.com', '+77632908453', '["FR"]', '[""]'),
	(28, 'Guringer GmbH', 'Elite Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png', 'Schulhausstrasse, Switzerland', 'https://example.com', '+7 (0)43 843 23 45', '["CH"]', '[""]'),
	(29, 'HeavyMesh', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', '20 Camden St, Suite 200, Toronto, Ontario, Canada', 'https://example1.com', '(995) 64789675', '["CA"]', '["ON"]'),
	(30, 'ABCSoft Voronezh', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', 'ул. Кривошеина, 9, Воронеж, Russian Federation', 'https://example.com', '+7 (812) 239-30-50', '["RU"]', '[""]'),
	(31, 'Wise Srl', 'Elite Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png', 'Via della Borsa, 1/a, Castelfranco Veneto, Italy, 31033', 'https://example.com', '+777423723453', '["IT"]', '[""]'),
	(32, 'Development Point', 'Distributor', 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png', '17 Avenida 19-70 Zona 10 Edificio Torino, Nivel 12 Oficina 1207, Guatemala City, Guatemala', 'https://example2.com', '+456-2458-4288', '["CR","GT"]', '[""]'),
	(33, 'Pushton Technology', 'MSP Partner', 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png', '23625 Commerce Park, #130, Beachwood, United States', 'https://example3.com', '+7 (216) 223-7016', '["US"]', '["OH"]'),
	(34, 'SQLSS', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'Unit 15 Pavillion Business Park, Leeds, United Kingdom', 'https://example.com', '+0345 459 1995', '["GB"]', '[""]'),
	(35, 'Xirel High', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'Mladost 1, bl. 54, Sofia, Bulgaria', 'https://example1.com', '+77 3396763', '["BG"]', '[""]'),
	(36, '4B Tech, PT.', 'Elite Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png', 'Jl. Engku Putri, Komp. Ruko Purimas, blok A-7, Batam Center, Kepri-29400, Indonesia', 'https://example3.com', '+777127033322', '["ID","SG"]', '[""]'),
	(37, 'Checkpoint', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', '4120 Rio Bravo Suite 215, El Paso, United States', 'https://example2.com', '(915)-581-9999', '["US"]', '["TX"]'),
	(38, 'MMMD Srl', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'Via P. Borsellino 2, Reggio Emilia, Italy', 'https://example1.com', '+1366646046', '["IT"]', '[""]'),
	(39, 'Security Chile', 'Preferred Partner', 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png', 'Lavalle 1675, piso 4 oficina 5, Buenos Aires, Argentina', 'https://example1.com', '+54 11 5039999', '["AR"]', '[""]');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
