-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 fév. 2025 à 22:44
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evenementbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `achete`
--

CREATE TABLE `achete` (
  `id_achat` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `quantite` int(255) NOT NULL,
  `date_achat` date NOT NULL,
  `fk_utilisateur` int(255) NOT NULL,
  `fk_evenement` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `libelle`) VALUES
(1, 'Sport'),
(2, 'Musique'),
(3, 'Piscine'),
(4, 'Gastronomie'),
(5, 'Culture');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `detail` mediumtext NOT NULL,
  `date` date NOT NULL,
  `heureDebut` time(6) NOT NULL,
  `heureFin` time(6) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `age_minimum` int(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `nombrePlaceMaximum` int(255) NOT NULL,
  `fk_categories` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `libelle`, `detail`, `date`, `heureDebut`, `heureFin`, `lieu`, `age_minimum`, `prix`, `nombrePlaceMaximum`, `fk_categories`) VALUES
(1, 'Tournoi de Beach Volley', 'Rejoignez-nous pour une journée palpitante de compétition au bord de l\'océan ! Notre tournoi de beach volley accueille des équipes de tous niveaux, des débutants aux experts. Attendez-vous à une atmosphère animée, à des matchs excitants et à des prix pour les équipes gagnantes. La plage de Sunny Cove offre le cadre idéal pour une journée sportive et ensoleillée.', '2024-06-15', '10:00:10.000000', '16:00:19.000000', 'Plage de Sunny Cove', 16, 15, 32, 1),
(2, 'Concert Acoustique sous les Étoiles', 'Plongez-vous dans une soirée magique de mélodies en plein air avec notre Concert Acoustique sous les Étoiles. Des artistes talentueux captiveront votre cœur avec des performances acoustiques intimes. Le cadre enchanteur du Jardin Botanique créera une atmosphère relaxante et inoubliable, parfaite pour les amateurs de musique cherchant une expérience unique.', '2024-07-20', '19:30:20.000000', '22:00:18.000000', 'Jardin Botanique', 18, 25, 100, 2),
(3, 'Soirée Pool Party', 'Plongez dans l\'excitation de notre Soirée Pool Party au Club de Piscine Paradise. Dansez au rythme de la musique, savourez des cocktails rafraîchissants au bord de la piscine illuminée, et profitez d\'une ambiance électrique. Une soirée idéale pour les fêtards aquatiques en quête de divertissement et de moments inoubliables.', '2024-08-05', '20:00:11.000000', '02:00:10.000000', 'Club de Piscine Paradise', 21, 30, 150, 3),
(4, 'Atelier de Cuisine Méditerranéenne', 'Plongez dans les saveurs ensoleillées de la Méditerranée lors de notre Atelier de Cuisine. Un chef émérite vous guidera à travers la préparation de plats exquis, partageant des astuces culinaires et des anecdotes. Découvrez l\'art de la cuisine méditerranéenne dans une atmosphère conviviale et éducative.', '2024-09-10', '18:30:19.000000', '21:00:20.000000', 'École de Cuisine Gourmet', 0, 40, 20, 4),
(5, 'Exposition d\'Art Moderne', 'Plongez dans le monde captivant de l\'art moderne à notre Exposition d\'Art. Explorez des œuvres uniques d\'artistes locaux et internationaux, découvrez les inspirations derrière chaque création, et interagissez avec les artistes présents. Une journée enrichissante pour les amateurs d\'art et les curieux de toutes générations. L\'entrée est gratuite, offrant un accès ouvert à la beauté artistique contemporaine.', '2024-09-25', '11:00:18.000000', '18:00:11.000000', 'Galerie d\'Art Contemporain', 0, 0, 0, 5),
(6, 'Tournoi de Tennis', 'Un tournoi passionnant de tennis pour tous les amateurs du sport.', '2024-08-15', '14:00:00.000000', '17:00:00.000000', 'Stade de Tennis', 12, 16, 100, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `email`, `nom`, `prenom`, `date_naissance`, `motDePasse`, `telephone`, `admin`) VALUES
(0, 'ekip@gmail.com', 'el', 'yade', '2003-01-07', 'ekip', 98765456, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achete`
--
ALTER TABLE `achete`
  ADD PRIMARY KEY (`id_achat`),
  ADD KEY `fk_ut` (`fk_utilisateur`),
  ADD KEY `fk_evene` (`fk_evenement`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`),
  ADD KEY `fk_eve` (`fk_categories`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achete`
--
ALTER TABLE `achete`
  ADD CONSTRAINT `fk_evene` FOREIGN KEY (`fk_evenement`) REFERENCES `evenement` (`id_evenement`),
  ADD CONSTRAINT `fk_ut` FOREIGN KEY (`fk_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_eve` FOREIGN KEY (`fk_categories`) REFERENCES `categories` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
