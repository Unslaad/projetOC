-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 29 déc. 2017 à 14:16
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`pseudo`, `mdp`, `id`) VALUES
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentPosts`
--

CREATE TABLE `commentPosts` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentPosts`
--

INSERT INTO `commentPosts` (`id`, `id_post`, `pseudo`, `date`, `flag`, `commentaire`) VALUES
(1, 1, 'Val', '2017-11-30 06:00:00', 0, 'Super travail !'),
(2, 2, 'Valek', '2017-12-07 09:00:00', 0, 'Un super post merci :)'),
(3, 3, 'Carich', '2017-12-07 23:59:03', 0, 'Cool le post !'),
(6, 1, 'Alex', '2017-12-12 16:14:12', 0, 'Vivement la suite !'),
(8, 3, 'Patrick', '2017-12-12 16:15:30', NULL, 'Incroyable'),
(9, 3, 'Banti', '2017-12-14 13:24:17', NULL, 'On attend avec impatience la suite'),
(17, 12, 'Mator', '2017-12-27 10:07:23', 1, 'Incroyable retournement de situation !'),
(18, 11, 'Franco', '2017-12-27 10:07:44', 1, 'Quel fine plume !'),
(19, 10, 'Mimi', '2017-12-27 10:08:06', 0, 'Hâte de lire la suite !'),
(21, 9, 'Yako', '2017-12-27 10:09:10', 1, 'Bon debut de récit, ça donne envie de voir la suite !'),
(27, 9, 'Bakou ', '2017-12-29 14:02:38', 1, 'Message inutile'),
(28, 10, 'Yera', '2017-12-29 14:02:56', 1, 'Commentaire inutile'),
(29, 12, 'Hector', '2017-12-29 14:03:47', 1, 'Message inutile'),
(30, 11, 'Grapj', '2017-12-29 14:06:03', 1, 'Commentaire inutile');

-- --------------------------------------------------------

--
-- Structure de la table `Posts`
--

CREATE TABLE `Posts` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Posts`
--

INSERT INTO `Posts` (`id`, `titre`, `texte`, `date`) VALUES
(9, 'Chapitre 1', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum lacinia nulla, a sodales ante porta sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean eget metus tellus. Sed sed pulvinar urna. Phasellus eu aliquam nisi. Suspendisse convallis tellus quis ex lacinia, non egestas lectus vehicula. Proin auctor et mi eget laoreet.</p>\r\n<p>Quisque facilisis diam pharetra leo egestas molestie. Aliquam sollicitudin et nunc ac fermentum. Aliquam non lorem eleifend, tempus felis sed, pretium justo. In gravida tincidunt pulvinar. Sed eget finibus nibh, at vulputate velit. Sed pulvinar lacus a leo consectetur auctor ut sed tellus. Etiam leo diam, placerat non ligula sed, egestas elementum dui. Quisque a sem justo.</p>\r\n<p>Cras lacus quam, fermentum sit amet condimentum sit amet, ultricies eget nulla. Suspendisse pellentesque aliquam faucibus. Duis et aliquet ante, id ultricies urna. Phasellus dolor dui, cursus nec consectetur in, varius pulvinar dui. Duis viverra massa semper aliquam pharetra. Maecenas efficitur nibh nulla, sed vulputate ante pulvinar eu. Aliquam nec efficitur sem. Aliquam risus lacus, rutrum at sem vitae, vestibulum laoreet enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut.</p>\r\n</div>', '2017-12-27 10:03:39'),
(10, 'Chapitre 2', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum lacinia nulla, a sodales ante porta sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean eget metus tellus. Sed sed pulvinar urna. Phasellus eu aliquam nisi. Suspendisse convallis tellus quis ex lacinia, non egestas lectus vehicula. Proin auctor et mi eget laoreet.</p>\r\n<p>Quisque facilisis diam pharetra leo egestas molestie. Aliquam sollicitudin et nunc ac fermentum. Aliquam non lorem eleifend, tempus felis sed, pretium justo. In gravida tincidunt pulvinar. Sed eget finibus nibh, at vulputate velit. Sed pulvinar lacus a leo consectetur auctor ut sed tellus. Etiam leo diam, placerat non ligula sed, egestas elementum dui. Quisque a sem justo.</p>\r\n<p>Cras lacus quam, fermentum sit amet condimentum sit amet, ultricies eget nulla. Suspendisse pellentesque aliquam faucibus. Duis et aliquet ante, id ultricies urna. Phasellus dolor dui, cursus nec consectetur in, varius pulvinar dui. Duis viverra massa semper aliquam pharetra. Maecenas efficitur nibh nulla, sed vulputate ante pulvinar eu. Aliquam nec efficitur sem. Aliquam risus lacus, rutrum at sem vitae, vestibulum laoreet enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut.</p>\r\n</div>', '2017-12-27 10:03:50'),
(11, 'Chapitre 3', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum lacinia nulla, a sodales ante porta sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean eget metus tellus. Sed sed pulvinar urna. Phasellus eu aliquam nisi. Suspendisse convallis tellus quis ex lacinia, non egestas lectus vehicula. Proin auctor et mi eget laoreet.</p>\r\n<p>Quisque facilisis diam pharetra leo egestas molestie. Aliquam sollicitudin et nunc ac fermentum. Aliquam non lorem eleifend, tempus felis sed, pretium justo. In gravida tincidunt pulvinar. Sed eget finibus nibh, at vulputate velit. Sed pulvinar lacus a leo consectetur auctor ut sed tellus. Etiam leo diam, placerat non ligula sed, egestas elementum dui. Quisque a sem justo.</p>\r\n<p>Cras lacus quam, fermentum sit amet condimentum sit amet, ultricies eget nulla. Suspendisse pellentesque aliquam faucibus. Duis et aliquet ante, id ultricies urna. Phasellus dolor dui, cursus nec consectetur in, varius pulvinar dui. Duis viverra massa semper aliquam pharetra. Maecenas efficitur nibh nulla, sed vulputate ante pulvinar eu. Aliquam nec efficitur sem. Aliquam risus lacus, rutrum at sem vitae, vestibulum laoreet enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut.</p>\r\n</div>', '2017-12-27 10:04:02'),
(12, 'Chapitre 4', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum lacinia nulla, a sodales ante porta sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean eget metus tellus. Sed sed pulvinar urna. Phasellus eu aliquam nisi. Suspendisse convallis tellus quis ex lacinia, non egestas lectus vehicula. Proin auctor et mi eget laoreet.</p>\r\n<p>Quisque facilisis diam pharetra leo egestas molestie. Aliquam sollicitudin et nunc ac fermentum. Aliquam non lorem eleifend, tempus felis sed, pretium justo. In gravida tincidunt pulvinar. Sed eget finibus nibh, at vulputate velit. Sed pulvinar lacus a leo consectetur auctor ut sed tellus. Etiam leo diam, placerat non ligula sed, egestas elementum dui. Quisque a sem justo.</p>\r\n<p>Cras lacus quam, fermentum sit amet condimentum sit amet, ultricies eget nulla. Suspendisse pellentesque aliquam faucibus. Duis et aliquet ante, id ultricies urna. Phasellus dolor dui, cursus nec consectetur in, varius pulvinar dui. Duis viverra massa semper aliquam pharetra. Maecenas efficitur nibh nulla, sed vulputate ante pulvinar eu. Aliquam nec efficitur sem. Aliquam risus lacus, rutrum at sem vitae, vestibulum laoreet enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut.</p>\r\n</div>', '2017-12-29 14:01:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentPosts`
--
ALTER TABLE `commentPosts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commentPosts`
--
ALTER TABLE `commentPosts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
