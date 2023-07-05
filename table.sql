DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `isbn` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` smallint(5) unsigned NOT NULL DEFAULT '0',
  `price` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `book` (`id`, `isbn`, `title`, `author`, `stock`, `price`) VALUES
('1', '3674622904', 'Aut libero et neque enim autem.', 'Prof. Estevan Muller V', '46', '77.26'),
('2', '6578355359', 'Vitae rem minima laudantium quibusdam id.', 'Onie Sporer', '10', '66.54'),
('3', '7035414622', 'Alias repellendus nihil ea qui ex est.', 'Matteo Turner', '78', '15.54'),
('4', '0352063602', 'Dolorum autem voluptas qui qui.', 'Lorenz Haag', '78', '16.57'),
('5', '4445213942', 'Odit voluptatem qui nemo nulla.', 'Alanis Ledner', '98', '87.56'),
('6', '3002641731', 'Possimus distinctio eaque alias iste qui sed.', 'Ramon Marvin PhD', '43', '91.04'),
('7', '5820341414', 'Quisquam error neque nihil voluptatem eos fugit impedit dignissimos.', 'Jett Bergstrom', '44', '77'),
('8', '8406993634', 'Sint mollitia exercitationem dolores doloremque voluptatibus.', 'Selena Hills', '70', '55.67'),
('9', '2239918470', 'Ut libero quia similique in deleniti consequatur.', 'Hilda Effertz', '4', '91.26'),
('10', '7209415637', 'Qui est laboriosam et esse labore aliquam labore.', 'Prof. Grayson Fritsch', '3', '52.12'),
('11', '1196478953', 'Ut recusandae accusamus ut autem est.', 'Fatima Turner', '7', '18.8'),
('12', '3458367578', 'Vel dolor qui dicta.', 'Jerrod Renner', '89', '38.43'),
('13', '506967546X', 'Soluta corporis omnis illum quia nam iste natus.', 'Bo Feil', '64', '39.92'),
('14', '4822801152', 'Quaerat vel dolores et cum eos.', 'Helmer Hahn', '87', '73.19'),
('15', '9217272671', 'Explicabo sint aliquam nihil.', 'Prof. Kelsie Kuhic', '5', '62.02'),
('16', '5783970115', 'Sit quidem laudantium deleniti rem non magni aut.', 'Pink Beatty', '88', '33.89'),
('17', '0094086060', 'In quasi hic hic hic aut sit.', 'Travon Quitzon', '85', '57.22'),
('18', '8158279473', 'Incidunt voluptate reiciendis veritatis eum nihil quisquam dignissimos.', 'Sierra Shanahan', '81', '26.36'),
('19', '2281406245', 'Ut repellendus vel aperiam.', 'Princess Gerlach', '95', '27.95'),
('20', '3411333855', 'Et et amet et rem qui.', 'Amber DuBuque', '78', '65.52');