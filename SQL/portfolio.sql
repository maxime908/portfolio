-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 jan. 2026 à 08:52
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorie` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JS'),
(23, 'SQL'),
(30, 'PHP'),
(31, 'Jeux');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `img` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `language` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`language`)),
  `file_version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name`, `url`, `img`, `description`, `language`, `file_version`) VALUES
(41, 'Plan du forum Forma', 'mysinergy.org/Forma_plan_VF', '696f30df2542b.png', 'Participation avec trois camarades de classe à la réalisation d’un site web pour le salon Forma permettant aux visiteurs de pouvoir s’orienter vers les stands choisis.', '[\"HTML\",\"CSS\",\"JS\"]', 7),
(42, 'Jeu de course', 'mysinergy.org/JeuVoiture', '696bc6597a560.png', 'Jeu de course en JavaScript jouable à deux sur le même ordinateur, où l’objectif est de franchir la ligne d’arrivée avant l’autre joueur.', '[\"HTML\",\"CSS\",\"JS\",\"Jeux\"]', 2),
(43, 'HideAndSeek', 'mysinergy.org/HideAndSeek', '696ec2e025e3a.png', 'Catch Them All est un jeu de rapidité en JavaScript où le joueur doit taper un maximum de suricates avant la fin du chronomètre, tout en évitant ceux piégés avec une bombe.', '[\"HTML\",\"CSS\",\"JS\",\"Jeux\"]', 16),
(45, 'Catch Them All', 'mysinergy.org/JeuTaupe', '696f1d5419387.png', 'Catch Them All est un jeu de rapidité en JavaScript où le joueur doit taper un maximum de suricates avant la fin du chronomètre, tout en évitant ceux piégés avec une bombe.', '[\"HTML\",\"CSS\",\"JS\",\"Jeux\"]', 7);

-- --------------------------------------------------------

--
-- Structure de la table `projectdetail`
--

CREATE TABLE `projectdetail` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `situation` text NOT NULL,
  `tache` text NOT NULL,
  `action` text NOT NULL,
  `resultat` text NOT NULL,
  `capture1` varchar(128) NOT NULL,
  `capture2` varchar(128) NOT NULL,
  `file_version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projectdetail`
--

INSERT INTO `projectdetail` (`id`, `project_id`, `name`, `situation`, `tache`, `action`, `resultat`, `capture1`, `capture2`, `file_version`) VALUES
(40, 41, 'Plan du forum Forma', 'Conception d\'un plan interactif d\'un avec 3 camarades de classe afin de facilité les visiteurs à trouvé le stand recherché rapidement.', 'En collaboration avec 3 camarades, écriture du code avec 3 langages différents permettant le bon fonctionnement du plan interactif.', 'Mise en place d\'un système de détection du stand au clique de l\'utilisateur et gestion des animations.', 'Un plan interactif fonctionnel. La plupart des retours que les personnes ayant tester ce site nous ont transmis ont été positifs.', '696ec2869d10b.png', '696be5a7602ab.png', 7),
(41, 42, 'Plan du forum Forma', 'Concevoir un mini-jeu web interactif afin de mettre en pratique les bases du JavaScript et de la gestion des interactions utilisateur, pour pouvoir s\'amuser entre amis.', 'Ecriture du code en utilisant 3 languages différent, permettent le bon fonctionnement du jeu.', 'Mise en place d’un système qui permet à la voiture d\'avancer quand on appui sur une touche défini du clavier, qui recule quand on arrête d\'appui, gestion du score et des sons.', 'Un Jeu fonctionnel, accessible et dynamique. Il m\'a permit d\'approfondir mes connaissance en javascript.', '696bc7181ba46.png', '696bc7181c3f9.png', 3),
(42, 43, 'Jeu de course', 'Concevoir un mini-jeu web interactif afin de mettre en pratique les bases du JavaScript et de la gestion des interactions utilisateur.', 'Ecriture du code en utilisant 3 languages différent, permettent le bon fonctionnement du jeu.', 'Mise en place d\'un système d\'apparition aléatoire de l\'intrus, gestion du score, des animation et du temps. ', 'Un jeu fonctionnel, accessible et dynamique, il m\'a permit d\'approfondir mes connaissance en javascript.', '696bc7044e589.png', '696bc7044e915.png', 3),
(44, 45, 'Catch Them All', 'Concevoir un mini-jeu web interactif afin de mettre en pratique les bases du JavaScript et de la gestion des interactions utilisateur.', 'En collaboration avec une designeuse, écriture du code en utilisant 3 languages différent, permettant le bon fonctionnement du jeu. ', 'Mise en place d’un système d’apparition aléatoire des personnages, gestion du temps, du score et des animations', 'Un Jeu fonctionnel, accessible et dynamique. La plupart des retours que les personnes ayant tester le jeu nous ont transmis ont été positifs ', '696f1c11558a9.png', '696ec263b5b69.png', 54);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`) VALUES
(1, 'drezetmaxime67@gmail.com', '$2y$10$df1Uv1llCsqQfLTgRi1h/.JbCPxsEr5g5DVeLFKHBxAXcGMHeLEqS', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projectdetail`
--
ALTER TABLE `projectdetail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `projectdetail`
--
ALTER TABLE `projectdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
