-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 14 sep. 2019 à 10:49
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog_jean_forteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog_jf_article`
--

DROP TABLE IF EXISTS `blog_jf_article`;
CREATE TABLE IF NOT EXISTS `blog_jf_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_jf_article`
--

INSERT INTO `blog_jf_article` (`id`, `title`, `content`, `author`, `createdAt`) VALUES
(1, 'Un premier extrait', 'Ipsam vero urbem Byzantiorum fuisse refertissimam atque ornatissimam signis quis ignorat? Quae illi, exhausti sumptibus bellisque maximis, cum omnis Mithridaticos impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa et reliqua urbis ornanemta sanctissime custodita tenuerunt. Regale pater est nominis criminum ductus struuntur Apollinaris incertum indicatum rector ductus est cuius congregati diversis usibus est multi eiusdem occulte aliique est ideoque usibus aliique rector congregati diversis civitatibus sunt struuntur atrocium multi congregati criminum incertum usibus.', 'Jean Forteroche', '2019-08-30 08:10:24'),
(2, 'Un deuxième extrait', 'Sed maximum est in amicitia parem esse inferiori. Saepe enim excellentiae quaedam sunt, qualis erat Scipionis in nostro, ut ita dicam, grege. Numquam se ille Philo, numquam Rupilio, numquam Mummio anteposuit, numquam inferioris ordinis amicis, Q. vero Maximum fratrem, egregium virum omnino, sibi nequaquam parem, quod is anteibat aetate, tamquam superiorem colebat suosque omnes per se posse esse ampliores volebat.\r\nRegale pater est nominis criminum ductus struuntur Apollinaris incertum indicatum rector ductus est cuius congregati diversis usibus est multi eiusdem occulte aliique est ideoque usibus aliique rector congregati diversis civitatibus sunt struuntur atrocium multi congregati criminum incertum usibus urgebantur diversis.', 'Jean Forteroche', '2019-08-30 13:27:38'),
(39, 'un troisième article', '<p>Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi. Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.&nbsp;<span style=\"background-color: #ffffff; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px;\">Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.</span></p>', 'Jean Forteroche', '2019-08-30 01:38:10');

-- --------------------------------------------------------

--
-- Structure de la table `blog_jf_comment`
--

DROP TABLE IF EXISTS `blog_jf_comment`;
CREATE TABLE IF NOT EXISTS `blog_jf_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `Flag` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_jf_comment`
--

INSERT INTO `blog_jf_comment` ('id', `pseudo`, `content`, `Flag`, `createdAt`, `article_id`) VALUES
(16, 'Laura', 'Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', 0, '2019-08-31 01:54:28', 2),
(18, 'Mattéo', 'Apollinaris incertum indicatum rector ductus est cuius congregati diversis usibus est multi eiusdem occulte aliique est ideoque usibus aliique rector congregati diversis civitatibus sunt struuntur atrocium multi congregati criminum incertum usibus urgebantur diversis. Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda ', 0, '2019-08-31 03:14:57', 1);

-- --------------------------------------------------------

--
-- Structure de la table `blog_jf_user`
--

DROP TABLE IF EXISTS `blog_jf_user`;
CREATE TABLE IF NOT EXISTS `blog_jf_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_jf_user`
--

INSERT INTO `blog_jf_user` (`id`, `pseudo`, `email`, `password`, `createdAt`) VALUES
(4, 'Jean Forteroche', 'jeanforteroche@orange.fr', '$2y$10$FBrX3G0nDwlapoP3V8CnZOiXN9UL44TQuH.uSc2r8v20dH.mWzcZq', '2019-08-24 03:22:25')

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blog_jf_comment`
--
ALTER TABLE `blog_jf_comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `blog_jf_article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
