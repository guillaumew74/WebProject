#table exemple
INSERT INTO events(`owner`,`title`,`date`,`description`,`validated`,`imageLink`, `vote`)
VALUES
('remi.papin@viacesi.fr','Sotie Bowling','2019-01-1','Une sortie booling dans lyon, très conviviale avec tout le cesi.','false','https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg','3'),
('niels.boeckx@viacesi.fr','Sortie Ski','2019-01-4','Une sortie ski organisé avec ski mania.','false','https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg','2'),
('zacharia.azzouziclausel@viacesi.fr','Sortie parc tête dor','2019-01-20','Une sortie champètre dans le parc le plus cèlebre de lyon.','false','https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg','1'),
('tblanc@cesi.fr','Sortie pédagogique','2019-03-15','Sortie pédagogique a eurexpo au mondiale des metiers.','false','https://www.digischool.fr/images/article/5-conseils-pour-reussir-un-changement-d-orientation-lg-4776.jpg','12'),
('remi.papin@viacesi.fr','Soirée centrale','2019-05-10','Soirée étudiante sur le campus avec tous les èleves de centrale etc...','false','https://www.opitrip.com/blog/wp-content/uploads/fete-777x437.jpg','1'),
('niels.boeckx@viacesi.fr','Maks club','2019-11-10','Soirée étudiante de folie au meilleur club de lyon, attention sortez vos plus beau soulier.','false','https://www.opitrip.com/blog/wp-content/uploads/fete-777x437.jpg','20'),
('zacharia.azzouziclausel@viacesi.fr','Sortie java','2019-03-4','Sortie sur les designes patternes les plus celebres et quelque implémentations dans des réalisations simples.','false','https://upload.wikimedia.org/wikipedia/fr/thumb/2/2e/Java_Logo.svg/220px-Java_Logo.svg.png','30'),
('guillaume.woreth@viacesi.fr','Sortie PHP','2019-04-4','Sortie sur la réalisation dun site web en php avec laravel, boostrap et jquerry.','false','https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png','100');

#VRAI table events
INSERT INTO `events` (`idEvents`, `owner`, `title`, `date`, `description`, `validated`, `imageLink`, `like`, `vote`, `recurent`, `payable`, `created_at`, `updated_at`)
VALUES
(1, 'remi.papin@viacesi.fr', 'Sotie Bowling', '2019-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
(2, 'niels.boeckx@viacesi.fr', 'Sortie Ski', '2019-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
(3, 'zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2019-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 1, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
(4, 'remi.papin@viacesi.fr', 'Sotie Bowling', '2019-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
(5, 'niels.boeckx@viacesi.fr', 'Sortie Ski', '2019-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
(6, 'zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2019-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 1, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),

COMMIT;


INSERT INTO `users` (`id`, `name`, `lastName`, `location`, `state`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
(1, 'Zacharia', 'Azzouzi', 'Lyon', 2, 'zacharia.azzouziclausel@viacesi.fr', NULL, '$2y$10$h6ucQuo8QqiWMH9UjCdM.e7C0KuB3mdDwfQ6XngruuxfqfHC4DAgu', '1H1mWZhiAzZHNecWbBRCuVTfrOedMgCYtNrxgjTU0lR8MZiLB2e8kkV4ZzAR', '2019-01-22 11:53:34', '2019-01-22 14:45:34'),
(2, 'Niels', 'Boeckx', 'Lyon', 2, 'niels.boeckx@viacesi.fr', NULL, '$2y$10$82Vx1r/lbZzKt8To.qlgOeAOHBfSm9tH8ZV8DPYIsLwcZPD49Qghe', NULL, '2019-01-24 17:40:39', '2019-01-24 17:40:39'),
(3, 'Rémi', 'Papin', 'Lyon', 2, 'remi.papin@viacesi.Fr', NULL, '$2y$10$abvo7p26XXjpdYX1P7jYH.SQIGQ8fA8.cNKNONuHfcwEhWLitQsf2', NULL, '2019-01-24 17:41:28', '2019-01-24 17:41:28'),
(4, 'Guillaume', 'Woreth', 'Lyon', 2, 'guillaume.woreth@viacesi.fr', NULL, '$2y$10$fNgDQgo9D/ttrIj3Lgy0MO6Bg11srl44cUoO0foJNbj3ecILqvr16', NULL, '2019-01-24 17:42:14', '2019-01-24 17:42:14'),
(5, 'CESI1', 'CESI1', 'Angoulême', 1, 'bdewebsite1@gmail.com', NULL, '$2y$10$ZYUPHGlwfzn0VSs33SNXU.Okyj3qPnW4FficylBe1R3B5JINJoSAO', NULL, '2019-01-24 17:36:49', '2019-01-24 17:38:16'),
(6, 'USER1', 'USER1', 'Lyon', 0, 'bdewebsite2@gmail.com', NULL, '$2y$10$ZKqxxmIf9uzhkLHFSfdi7OryNRCZH49TvRkU4eahwxJ9Qhlafsu3K', NULL, '2019-01-24 17:39:47', '2019-01-24 17:39:47');

INSERT INTO `articles` (`idArticles`, `name`, `quantity`, `price`, `imageLink`, `categorie`)
VALUES
(1, 'Tasse', 25, 5, 'https://cdn1.ideecadeau.fr/media/catalog/product/l/a/la-tasse-magique-ideecadeau-fr_5451-4ed425a6.jpg', 'goodies'),
(3, 'Pull', 656, 26, 'https://media.idkids.fr/media/productstorage/images/okaidi/0089069/thumbs/0125959_800.jpg', 'vetement'),
(2, 'Porte-Clefs', 58, 3, 'https://media.rs-online.com/t_large/F7757728-01.jpg', 'goodies'),
(4, 'Coque', 54, 12, 'https://images-na.ssl-images-amazon.com/images/I/4136yBNhmzL._SY355_.jpg', 'vetement'),
(5, 'Casquette', 69, 45, 'https://www.vondutch.fr/2957-thickbox_default/casquette-baseball-homme-von-dutch-relief-bleu-marine.jpg', 'vetement'),
(6, 'T-shirt', 800, 36, 'https://frenchrocket.fr/word.html/wp-content/uploads/2018/10/Tshirt-Bleu-flecked-rouge-face-700x904.jpg', 'vetement');
COMMIT;

INSERT INTO photos (`ImageLink`)
VALUES
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('');



INSERT INTO comments (`comments`, `idEvents`)
VALUES
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('',''),
('','');

























