-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `title`) VALUES
(1,	'indoor'),
(2,	'outdoor'),
(3,	'accesories'),
(4,	'furniture'),
(5,	'compost');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` datetime NOT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users1_idx` (`users_id`),
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `weight` decimal(4,2) DEFAULT NULL,
  `vat` decimal(10,0) NOT NULL DEFAULT 20,
  `stock` int(11) DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_categories1_idx` (`categories_id`),
  CONSTRAINT `fk_products_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `title`, `description`, `price`, `weight`, `vat`, `stock`, `categories_id`) VALUES
(1,	'Kentia ',	'Avec ses grandes feuilles vertes et majestueuses, cette magnifique plante d’intérieur donnera sans effort un côté tropical à n’importe quelles pièces de votre habitation. Le kentia apprécie une bonne luminosité, mais on évitera une exposition directe au soleil ! Arroser la plante dès que le substrat devient sec.\r\n\r\nCette plante prendra facilement place dans un salon ou une grande pièce à vivre ! ',	24.60,	1.20,	20,	33,	1),
(2,	'Pachira',	'Avec son tronc tressé et ses jolies feuilles étoilées, le Pachira détonne et attire l’attention dans une pièce ! Cet arbuste apprécie une exposition lumineuse sans soleil direct. On l’arrose régulièrement, mais sans excès ! Le Pachira sera sublimé dans une pièce lumineuse et spacieuse. ',	12.90,	0.90,	20,	26,	1),
(3,	'Ficus Robusta',	'Le Ficus Robusta est une jolie plante d’intérieur également surnommé le caoutchouc ! On aime ses feuilles épaisses d’un vert profond. Cette plante apprécie les espaces lumineux, mais n’apprécie guère le soleil direct. Au contraire le robusta aime l’humidité, attention toutefois à ne pas trop l’arroser !\r\n\r\nDans une chambre ou un salon, ce ficus sera du plus bel effet. ',	30.00,	1.40,	20,	12,	1),
(4,	'Ficus lyrata',	'Semblable à un arbuste cette plante impressionne avec ses grandes feuilles nervurées d’un beau vert pale. Dépolluante cette plante d’intérieur apprécie le soleil et demande un arrosage régulier. À placer sans hésiter dans un salon ! ',	22.10,	1.10,	20,	43,	1),
(5,	'Yucca',	'Cette jolie plante grasse apportera facilement un côté exotique à n’importe quelles pièces de la maison. Le Yucca aime le soleil et en redemande ! Attention toutefois à ne pas trop l’arroser ! Cette plante se plaira à côté d’une fenêtre et dans une pièce très lumineuse !',	27.30,	2.10,	20,	32,	1),
(6,	'Sansevière',	'La Sansevière est une petite plante dépolluante aux feuilles vertes marbrées. Cette plante apprécie la lumière, mais redoute le soleil direct. Comme toutes les plantes grasses, un arrosage par semaine suffit. Cette plante sera parfaite sur une commode ou sur un meuble de votre salon ! ',	15.90,	0.40,	20,	54,	1),
(7,	'Monstera Deliciosa',	'La Monstera Deliciosa est une plante atypique que l’on adore ! En effet cette plante d’intérieur possède des feuilles découpées qui sont du plus bel effet ! Avec son vert profond, cette plante sera parfaite dans une chambre ou un salon ! La Monstera aime la lumière, mais gare aux excès d’eau !',	43.20,	3.50,	20,	12,	1),
(8,	'Caladium',	'Le Caladium est l’une de ces plantes qui attirent l’attention au premier coup d’œil, avec ses larges feuilles aux couleurs roses, le Caladium ne laisse personne indifférent ! Cette plante adore le soleil et demande un arrosage attentif et régulier. À placer sans modération dans le salon ou une jolie pièce à vivre ! ',	22.50,	0.50,	20,	27,	1),
(9,	'Fishbone Cactus',	'Ce cactus atypique aux feuilles tombantes sera parfait sur la commode d’un salon. Cette plante adore la lumière sans soleil direct et demande un arrosage très régulier. Une plante méconnue avec beaucoup de charme ! ',	7.50,	0.30,	20,	35,	1),
(10,	'Senecio Rowleyanus',	'Le Senecio Rowleyanus, il s’agit d’une plante tombante très décorative dotée de feuilles en forme de petites perles. Cette plante d’intérieur aimera une situation ensoleillée et demandera un arrosage régulier. À exposer sans modération dans toute la maison ! ',	8.90,	0.30,	20,	10,	1),
(11,	'Aloe Vera',	'Cette plante est l’une de nos plantes d’intérieur préférées ! Avec ses longues tiges épaisses, l’Aloe Vera prendra aisément place dans une cuisine ou un salon à vous de choisir. À arroser régulièrement et à placer dans une zone très lumineuse ! ',	9.90,	0.60,	20,	20,	1),
(12,	'Campanule',	'Cette plante vivace, rustique et robuste est facile à cultiver. Elle apprécie les sols légers et plutôt calcaires. On la plante du printemps jusqu\'en automne, mais est dite bisanuelle. Cette dernière supporte là la fois les hautes et les basses températures, jusqu’à -20°C. Elles préfèrent le soleil, mais supportent également la mi-ombre. Elles se ressèment spontanément.',	21.90,	1.20,	20,	25,	2),
(13,	'Chrysanthème',	'Plante vivace robuste et facile à entretenir, elle supporte les aléas climatiques et s’adapte à tous les sols. Une large palette de couleurs arbore ses fleurs qui persistent jusqu’au début de l’hiver. Elles prennent une multitude de formes : pompons, \"japonais\", simples, incurvées.',	18.90,	1.10,	20,	30,	2),
(14,	'Euphorbe',	'Cette plante à l’allure exotique qui peut aller du vert au jaune est simple à cultiver et surtout très robuste. Mise en place au printemps ou à la fin de l’été, elle supporte des températures allant jusqu’à -15°C comme des températures chaudes.',	18.10,	1.40,	20,	32,	2),
(15,	'Ancolie',	'Les ancolies sont des plantes herbacées rustiques et vivaces très élégantes. On compte une grande variété d’espèces avec une jolie palette de couleurs. Elle supporte le chaud et le froid, jusqu’à – 20° et apprécie les sols légers et humides.',	19.60,	1.30,	20,	20,	2),
(16,	'Lavatères',	'Cette plante installée dans le jardin au printemps croit très rapidement. Elle s’adapte à tous les sols, bien qu’ayant une préférence pour ceux bien drainés. Elle supporte des températures allant jusqu’à – 15°.',	19.90,	1.60,	20,	21,	2),
(17,	'Romarin',	'Cette plante simple d’entretien offre des petites fleurs bleues. Elle est très décorative. Pouvant se cultiver même sur un sol pauvre, elle supporte de très basses températures allant jusqu’à -21° ainsi que la sécheresse.',	12.90,	2.20,	20,	30,	2),
(18,	'Pots 30x30',	'Pots en poterie couleur classique, vendus par lot de 2 unités.',	35.00,	3.00,	20,	80,	3),
(19,	'Pots 15x15',	'Pots en poterie couleur classique, vendus par lot de 2 unités.',	25.00,	2.00,	20,	120,	3),
(20,	'Pot 45x45',	'Pots en poterie couleur classique, vendus à l\'unité.',	55.00,	5.50,	20,	50,	3),
(21,	'Chaises de jardin',	'Chaise d\'extérieur classique, en métal et bois vendues par lot de 4 unités',	140.00,	8.00,	20,	60,	4),
(22,	'Table de jardin',	'Table d\'extérieur 200x120, en métal et bois.',	120.00,	10.00,	20,	24,	4),
(23,	'Terreau 20L',	'Sac de terreau terre fertile 20L.',	8.00,	10.00,	20,	230,	5),
(24,	'Terreau 50L',	'Sac de terreau terre fertile 50L.',	20.00,	24.00,	20,	150,	5);

DROP TABLE IF EXISTS `products_has_orders`;
CREATE TABLE `products_has_orders` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `title` varchar(150) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `vat` decimal(10,0) NOT NULL DEFAULT 20,
  `weight` decimal(4,2) DEFAULT NULL,
  `products_has_orderscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`orders_id`,`products_id`),
  KEY `fk_products_has_orders_orders1_idx` (`orders_id`),
  KEY `fk_products_has_orders_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_orders_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2021-02-03 10:16:47
