INSERT INTO `users` (`id`, `name`, `lastName`, `location`, `state`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
(1, 'Zacharia', 'Azzouzi', 'Lyon', 2, 'zacharia.azzouziclausel@viacesi.fr', NULL, '$2y$10$h6ucQuo8QqiWMH9UjCdM.e7C0KuB3mdDwfQ6XngruuxfqfHC4DAgu', '1H1mWZhiAzZHNecWbBRCuVTfrOedMgCYtNrxgjTU0lR8MZiLB2e8kkV4ZzAR', '2019-01-22 11:53:34', '2019-01-22 14:45:34'),
(2, 'Niels', 'Boeckx', 'Lyon', 2, 'niels.boeckx@viacesi.fr', NULL, '$2y$10$82Vx1r/lbZzKt8To.qlgOeAOHBfSm9tH8ZV8DPYIsLwcZPD49Qghe', NULL, '2019-01-24 17:40:39', '2019-01-24 17:40:39'),
(3, 'Rémi', 'Papin', 'Lyon', 2, 'remi.papin@viacesi.Fr', NULL, '$2y$10$abvo7p26XXjpdYX1P7jYH.SQIGQ8fA8.cNKNONuHfcwEhWLitQsf2', NULL, '2019-01-24 17:41:28', '2019-01-24 17:41:28'),
(4, 'Guillaume', 'Woreth', 'Lyon', 2, 'guillaume.woreth@viacesi.fr', NULL, '$2y$10$fNgDQgo9D/ttrIj3Lgy0MO6Bg11srl44cUoO0foJNbj3ecILqvr16', NULL, '2019-01-24 17:42:14', '2019-01-24 17:42:14'),
(5, 'CESI1', 'CESI1', 'Angoulême', 1, 'bdewebsite1@gmail.com', NULL, '$2y$10$ZYUPHGlwfzn0VSs33SNXU.Okyj3qPnW4FficylBe1R3B5JINJoSAO', NULL, '2019-01-24 17:36:49', '2019-01-24 17:38:16'),
(6, 'USER1', 'USER1', 'Lyon', 0, 'bdewebsite2@gmail.com', NULL, '$2y$10$ZKqxxmIf9uzhkLHFSfdi7OryNRCZH49TvRkU4eahwxJ9Qhlafsu3K', NULL, '2019-01-24 17:39:47', '2019-01-24 17:39:47');

#12 event passé non validé      F

INSERT INTO events (`owner`, `title`, `date`, `description`, `validated`, `imageLink`, `like`, `vote`, `recurent`, `payable`, `created_at`, `updated_at`)
VALUES
('remi.papin@viacesi.fr', 'Sotie Bowling', '2018-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr', 'Sortie Ski', '2018-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
('zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2018-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 0, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr', 'Sotie Bowling', '2018-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr', 'Sortie Ski', '2018-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
('zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2018-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 0, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr', 'Sotie Bowling', '2018-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr', 'Sortie Ski', '2018-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
('zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2018-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 0, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
('guillaume.woreth@viacesi.fr', 'Soirée fondue', '2018-02-12', 'Soirée fromage et raclette dans un bouchon lyonnais très agrèable.', 0, 'uploads/test.png', 4, 10, '0', 0, NULL, '2019-01-22 13:18:14'),
('tblanc@cesi.fr', 'Sortie pédagogique', '2018-03-15', 'Sortie pédagogique a eurexpo au mondiale des metiers.', 0, 'https://www.digischool.fr/images/article/5-conseils-pour-reussir-un-changement-d-orientation-lg-4776.jpg', 1, 12, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr', 'Soirée centrale', '2018-05-10', 'Soirée étudiante sur le campus avec tous les èleves de centrale etc...', 0, 'https://www.opitrip.com/blog/wp-content/uploads/fete-777x437.jpg', 3, 1, '0', 0, NULL, '2019-01-24 08:14:25'),

#12 event futur non validé

('remi.papin@viacesi.fr','Sortie Skate','2019-03-01','Une sortie au skate park de Ecully, venez nombreux, initiation pour les débutants',0,'https://i.ytimg.com/vi/0XnXTek83wg/maxresdefault.jpg',0, 3, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr','Création de jeux en java','2019-04-01','Viens develloper ton jeu en java !',0,'https://upload.wikimedia.org/wikipedia/fr/thumb/2/2e/Java_Logo.svg/220px-Java_Logo.svg.png',0, 4, '0', 0, NULL, '2019-01-24 08:14:25'),
('tblanc@cesi.fr','Soirée raclette','2019-01-30','Les savoyards t invitent a venir partager leur culture',0,'https://cdn6.elektronik-star.de/out/pictures/generated/product/3/700_700_75/10030526_0002_ambiente_Klarstein_Raclette_grill.jpg',0, 3, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr','Création de jeux en C','2019-02-05','Viens develloper ton jeu en C !',0,'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1200px-ISO_C%2B%2B_Logo.svg.png',0, 5, '0', 0, NULL, NULL),
('zacharia.azzouziclausel@viacesi.fr','Soirée BDE','2019-11-01','Une soirée au MASK CLUB',0,'http://maks-club.com/wp-content/uploads/2018/03/LOGO-SITE.png',0, 3, '0', 0, NULL, NULL),
('guillaume.woreth@viacesi.fr','footing','2019-06-04','Une sortie pour les amateurs de course a pied',0,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_z4MqUZSessVBUTJHB7GO4CErfKnsN6CGUgCWRwAno6gssmejrQ',0, 3, '0', 0, NULL, '2019-01-24 08:14:25'),
('niels.boeckx@viacesi.fr','Urbex','2019-02-25','Viens découvrir des lieux impressionnants',0,'https://i.ytimg.com/vi/CWnZvVaYpsU/maxresdefault.jpg',0, 7, '0', 0, NULL, NULL),
('guillaume.woreth@viacesi.fr','Sortie ski','2019-03-01','Une sortie qui te permettra d affronté tout le domaine de Courchevel',0,'http://www.travelski.com/blog/wp-content/uploads/2017/11/DavidAndre-domaineskiable-50-950x634.jpg',0, 10, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr','Battle Dev','2019-03-25','Viens dévelloper ton application dans une ambiance relax',0,'https://cibul.s3.amazonaws.com/review_la-battle-dev-revient-en-force-le-22-mars_00.jpg',0, , '0', 0, NULL, NULL),
('tblanc@cesi.fr','Nuit de l info','2019-03-14','Viens dévelloper ton application dans une ambiance relax',0,'https://cibul.s3.amazonaws.com/event_la-nuit-de-l-info-2016_26453.jpg',0, 3, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr','Devellopement réseau','2019-05-07','Viens apprendre les bases du réseau avec des professionels',0,'http://www.e-kip.fr/wp-content/uploads/2015/10/schema-reseau.jpg',0, 3, '0', 0, NULL, '2019-01-24 08:14:25'),
('remi.papin@viacesi.fr','Freeride','2019-06-19','Une sortie qui te permettra d affronté tout le domaine de Courchevel',0,'http://www.travelski.com/blog/wp-content/uploads/2017/11/DavidAndre-domaineskiable-50-950x634.jpg',0, 15, '0', 0, NULL, NULL),

#12 event passé validé

('remi.papin@viacesi.fr','Poker','2019-01-21','Viens jouer au poker accompagné des coachs Guizi et Fubarr',1,'https://lh3.googleusercontent.com/xa0sBDEZED1eVeACPLZAGRHWbccyhVzhdl93cN97htehyTGc5kbQuqpAH6TAyQc6ms6y',4, 4, '0', 1, NULL, NULL),
('niels.boeckx@viacesi.fr','Belote','2019-01-04','Tournois de belote organisé par le bde',1,'https://cdn-s-www.estrepublicain.fr/images/b371487e-65c7-4f7d-a76b-52d2347fe727/BES_06/illustration-belote_1-1540545052.jpg',2, 3, '0', 0, NULL, NULL),
('tblanc@cesi.fr','Jeux vidéos','2019-01-16','Viens faire découvrir tes jeux préferés',1,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxjBSvv4QItROsrQ_zyaFVgvgMePoEGiIdb5CFkks2OPaNUbed',7, 14, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr','ski','2019-01-14','Une sortie qui te permettra d affronter tout le domaine de Courchevel',1,'http://www.alpazurhotels.com/media/img/hotels-alp-azur-courchevel_1.jpg',12, 3, '0', 1, NULL, NULL),
('zacharia.azzouziclausel@viacesi.fr','plage','2019-01-17','Viens découvrir les plages de Cannes !',1,'http://www.ot-lelavandou.fr/library/plages/anglade/plage-le-lavandou-anglade-mai-2015-cg-web.jpg',6, 13, '0', 0, NULL, NULL),
('guillaume.woreth@viacesi.fr','tarot','2019-01-13','Tournois de tarot organisé par le bde',1,'http://cdn.marketplaceimages.windowsphone.com/v8/images/9c478374-5b94-4bda-b6ed-b71b43e33ef9?imageType=ws_icon_large',10, 7, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr','parkour','2019-01-05','initiation au parkour par des professionels',1,'https://static.actu.fr/uploads/2018/08/AdobeStock_160391988-854x480.jpeg',4, 3, '0', 1, NULL, NULL),
('guillaume.woreth@viacesi.fr','boxe','2019-01-09','initiation a la boxe par des professionels',1,'https://medias.lequipe.fr/img-photo-jpg/keith-thurman-offensif-face-a-josesito-lopez-a-bello-afp/1500000001087413/0:0,2000:1333-624-416-75/ee47f.jpg',7, 12, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr','MMA','2019-01-01','initiation au MMA par des professionels',1,'https://cdn.evolve-mma.com/wp-content/uploads/2018/04/Garry-Tonon-1-1024x574.jpg',7, 5, '0', 0, NULL, NULL),
('tblanc@cesi.fr','C sharp','2018-12-24','initiation au C sharp par des professionels',1,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVynZTc8d1R3cDHQf1j-4hcoJ0COmePV0HSeDULu5YwCmXhnKv6w',2, 4, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr','Devellopement web','2018-12-30','Venez develloper sur des applications web',1,'https://www.my-mooc.com/uploads/mooc/logo/30a18b374c64178494c2b3dff3ff24defb2a3ff0.jpeg',0, 8, '0', 0, NULL, NULL),
('remi.papin@viacesi.fr','acrobranche','2018-11-30','initiation a l acrobranche par des professionels',1,'https://grape-hospitality.com/wp-content/uploads/2018/07/accrobranche-cp.jpg',13, 3, '0', 1, NULL, NULL),

#12 event futur validé

('remi.papin@viacesi.fr','lac','2019-02-21','Venez vous baignez au lac de Ecully',1,'https://www.valleedaulps.com/medias//images/prestataires/multitailles/1200x900_48150-jotty3.jpg',4, 4, '0', 1, NULL, NULL),
('niels.boeckx@viacesi.fr','piscine','2019-02-11','Venez nager, des cours sont mises a votre disposition',1,'https://www.grandnancy.eu/fileadmin/_processed_/a/9/csm_2018_04_27_piscine_thermal_olympique_527c2bc10e.jpg',5, 7, '0', 0, NULL, NULL),
('tblanc@cesi.fr','athletisme','2019-02-03','Entrainement sur pistes',1,'http://www.jogging-plus.com/wp-content/uploads/courir-sur-piste-ou-sur-route.jpg',6, 11, '0', 1, NULL, NULL),
('remi.papin@viacesi.fr','VMA','2019-02-05','Venez dépasser vos limites autour d une piste',1,'http://www.jogging-plus.com/wp-content/uploads/courir-sur-piste-ou-sur-route.jpg',1, 4, '0', 1, NULL, NULL),
('zacharia.azzouziclausel@viacesi.fr','course d orientation','2019-02-17','Chercher et vous serez récompensé',1,'http://www.sfsales.fr/wp-content/uploads/2017/05/CO-logo-1024x720.jpg',7, 7, '0', 1, NULL, NULL),
('guillaume.woreth@viacesi.fr','Reseau','2019-02-22','Thierry Blanc réalise une intervention sur le réseau',1,'http://www.reseau-spes.com/wp-content/uploads/reseau-spes-equipe.jpg',21, 8, '0', 0, NULL, NULL),
('niels.boeckx@viacesi.fr','Freeride','2019-02-21','Une sortie qui te permettra d affronter tout le domaine de Courchevel',1,'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg',11, 11, '0', 1, NULL, NULL),
('guillaume.woreth@viacesi.fr','node js','2019-02-20','develloper des API va devenir un jeu d enfant',1,'https://cdn-images-1.medium.com/max/1200/1*lAR9Uh_gJ7dp23e0vhy5Hg.png',4, 8, '0', 1, NULL, NULL),
('remi.papin@viacesi.fr','Laravel','2019-03-21','develloper un site va devenir un jeu d enfant',1,'https://i.ytimg.com/vi/uFXSil-IOC0/maxresdefault.jpg',8, 1, '0', 0, NULL, NULL),
('tblanc@cesi.fr','PHP','2019-04-21','Decouverte du langage',1,'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png',8, 4, '0', 1, NULL, NULL),
('niels.boeckx@viacesi.fr','Ski ','2019-03-14','Une sortie qui te permettra d affronter tout le domaine de Courchevel',1,'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg',0, 4, '0', 0, NULL, NULL)
('remi.papin@viacesi.fr','linux','2019-03-17','Decouverte de Linux',1,'https://img.bfmtv.com/c/630/420/cfe/e696788bc1f7658cabb2f76241ca8.jpeg',13, 4, '0', 1, NULL, NULL);


INSERT INTO `articles` (`idArticles`, `name`, `description`, `quantity`, `price`, `sold`, `imageLink`, `categorie`)
VALUES
(1, 'Tasse', 'Voici une tasse sombre comme votre IDE favoris.', 25, 5, 0, 'https://cdn1.ideecadeau.fr/media/catalog/product/l/a/la-tasse-magique-ideecadeau-fr_5451-4ed425a6.jpg', 'goodies'),
(2, 'Pull', 'Pull en pur coton, idéale pour l\'hiver au coin du feu.', 600, 26, 0, 'https://media.idkids.fr/media/productstorage/images/okaidi/0089069/thumbs/0125959_800.jpg', 'vetement'),
(3, 'Porte-Clefs', 'Tu en a marre de ne plus savoir quelle clé ouvre quoi, voici un porte clés pratique.', 100, 3, 0, 'https://media.rs-online.com/t_large/F7757728-01.jpg', 'goodies'),
(4, 'Coque', 'Voici une coque originale pour protéger ton téléphone.', 54, 12, 0, 'https://images-na.ssl-images-amazon.com/images/I/4136yBNhmzL._SY355_.jpg', 'goodies'),
(5, 'Casquette', 'Une casquette jeune et branché.', 70, 25, 0, 'https://www.vondutch.fr/2957-thickbox_default/casquette-baseball-homme-von-dutch-relief-bleu-marine.jpg', 'vetement'),
(6, 'T-shirt', 'Un tee-shirt spatial simple et élégant.', 800, 36, 0, 'https://frenchrocket.fr/word.html/wp-content/uploads/2018/10/Tshirt-Bleu-flecked-rouge-face-700x904.jpg', 'vetement');








