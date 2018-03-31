-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Janvier 2018 à 08:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mohamed`
--

-- --------------------------------------------------------

--
-- Structure de la table `bijou`
--

CREATE TABLE IF NOT EXISTS `bijou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `bijou`
--

INSERT INTO `bijou` (`id`, `titre`, `description`, `prix`, `quantite`, `path`) VALUES
(1, 'bracelet', 'regegre hgregerg', '500', '200', 'image01.png'),
(2, 'bracelet', 'e"tfzegterz', '60', '50', '2ad82a6a51.jpg'),
(3, 'solitaire', 'frgedgredb regregerg', '1200', '20', '93b36cf31f.jpg'),
(4, 'aliance', 'regerhger rehtrhrth hreerh', '1500', '-197', '4082d25e39.jpg'),
(5, 'aliance solitaire', 'regergre ergherhgreh erhrethrh', '120', '105', '2e11374fb7.jpg'),
(6, 'article super', 'efvbefvbbrt', '560', '20', '1aaff652b7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C0E80163A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `user_id`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(1, 1, 'firas', 'kobbi', 'sfax', '21032541'),
(3, 3, 'admin', 'admin', 'tunis', '21032541'),
(4, 4, 'med', 'med', '25', '22'),
(5, 5, 'kais', 'kais', '22', '22');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bijou_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dateCommande` date NOT NULL,
  `quantite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_979CC42B9E2EF1B5` (`bijou_id`),
  KEY `IDX_979CC42BA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `bijou_id`, `user_id`, `dateCommande`, `quantite`) VALUES
(1, 4, 1, '2014-05-15', '20'),
(2, 4, 3, '1987-01-12', '200'),
(3, 5, 3, '2018-01-18', '15');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ggt', 'ramikobbi@gmail.com', 'jjnhjkna', 'jnjknjknjknkjn'),
(2, 'aa', 'firaskobbi@gmail.com', 'hhh', 'hhhhhhh');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id`, `libelle`) VALUES
(1, 'bracelet'),
(2, 'bijoux'),
(3, 'xxxx');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bijou_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `prixTotal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_236008C49E2EF1B5` (`bijou_id`),
  KEY `IDX_236008C4A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id`, `bijou_id`, `user_id`, `prixTotal`) VALUES
(2, 4, 1, '1500'),
(3, 5, 1, '120'),
(4, 1, 1, '500'),
(5, 4, 3, '1500'),
(6, 5, 3, '120'),
(7, 3, 3, '1200'),
(8, 3, 3, '1200'),
(9, 3, 3, '1200');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'firas', 'firas', 'firaskobbi@gmail.com', 'firaskobbi@gmail.com', 1, 'b90b76bcmaok0ck8cs0ww4ogogkwk84', 'lRoY1SjGtrVPfNoyslswrOs3Huu80nLLF0/b0ETCvCFMhwszdoGZciaT9xsKHU1NcwRMjNL8Bbou1PVgsNwKqw==', '2018-01-14 11:19:05', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, '7zk9l3l3bl8og0wo08kg4840ks44ss8', 'SmffaqeehAP0XduCcd+7Nj6moIyiidPQY4W0NOo6RvAFUH+2Tqd/wuPmWgRMOWlFcivOlAXEh6zz+v7ltFFBGQ==', '2018-01-23 14:47:44', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL),
(4, 'med', 'med', 'm@gmail.com', 'm@gmail.com', 1, '1o0c4td13epwgocok0gw0ws0goo8ckk', 'vi7eWOtp19h2or0q2h9p8wav3eHraNGnTdAIzGSGZv20fjp4FGZPeHng6Xi2u+72jRkr37naAJLkzj4jrhpYMA==', '2018-01-23 14:47:10', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(5, 'kais', 'kais', 'a@gmail.com', 'a@gmail.com', 1, 'mltejol267ks4g0gw00oksko8sk0w44', 'ZqJSJh82AZqLyZ4Eh5o0FQoxngwkTMs2MHCiNLfNs4rWTtL/qCR3VwPZu9rVDTOgd2rFrow3Dlgyv5HvmskC0w==', '2018-01-23 14:47:33', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `_assoc_bijou_genre`
--

CREATE TABLE IF NOT EXISTS `_assoc_bijou_genre` (
  `genre_id` int(11) NOT NULL,
  `bijou_id` int(11) NOT NULL,
  PRIMARY KEY (`genre_id`,`bijou_id`),
  KEY `IDX_D42F1C394296D31F` (`genre_id`),
  KEY `IDX_D42F1C399E2EF1B5` (`bijou_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `_assoc_bijou_genre`
--

INSERT INTO `_assoc_bijou_genre` (`genre_id`, `bijou_id`) VALUES
(1, 2),
(2, 1),
(3, 2),
(4, 2),
(5, 1),
(5, 2),
(6, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C0E80163A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_979CC42B9E2EF1B5` FOREIGN KEY (`bijou_id`) REFERENCES `bijou` (`id`),
  ADD CONSTRAINT `FK_979CC42BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_236008C49E2EF1B5` FOREIGN KEY (`bijou_id`) REFERENCES `bijou` (`id`),
  ADD CONSTRAINT `FK_236008C4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `_assoc_bijou_genre`
--
ALTER TABLE `_assoc_bijou_genre`
  ADD CONSTRAINT `FK_D42F1C394296D31F` FOREIGN KEY (`genre_id`) REFERENCES `bijou` (`id`),
  ADD CONSTRAINT `FK_D42F1C399E2EF1B5` FOREIGN KEY (`bijou_id`) REFERENCES `genre` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
