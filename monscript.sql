-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 fév. 2022 à 22:15
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE `abonnes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dateInscription` date NOT NULL,
  `dateRenouvellement` date NOT NULL,
  `supprimer` int(11) NOT NULL DEFAULT 0,
  `paye` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abonnes`
--

INSERT INTO `abonnes` (`id`, `created_at`, `updated_at`, `dateInscription`, `dateRenouvellement`, `supprimer`, `paye`, `user_id`) VALUES
(1, '2022-02-13 16:14:36', '2022-02-13 16:14:36', '2022-02-13', '2022-02-13', 1, 0, 1),
(2, '2022-02-13 16:17:14', '2022-02-13 16:17:14', '2022-02-13', '2022-02-13', 0, 0, 2),
(3, '2022-02-13 16:18:23', '2022-02-13 19:42:45', '2022-02-13', '2022-02-13', 0, 1, 3),
(4, '2022-02-13 16:19:32', '2022-02-13 19:42:49', '2022-02-13', '2022-02-13', 0, 1, 4),
(5, '2022-02-13 16:21:18', '2022-02-13 16:21:18', '2022-02-13', '2022-02-13', 0, 0, 5),
(6, '2022-02-13 16:22:59', '2022-02-13 16:22:59', '2022-02-13', '2022-02-13', 0, 0, 6),
(7, '2022-02-13 16:26:13', '2022-02-13 16:26:13', '2022-02-13', '2022-02-13', 0, 0, 7),
(8, '2022-02-13 16:27:52', '2022-02-13 16:27:52', '2022-02-13', '2022-02-13', 0, 0, 8),
(9, '2022-02-13 16:30:27', '2022-02-13 16:30:27', '2022-02-13', '2022-02-13', 0, 0, 9),
(10, '2022-02-13 16:33:11', '2022-02-13 16:33:11', '2022-02-13', '2022-02-13', 0, 0, 10),
(11, '2022-02-13 16:56:47', '2022-02-13 16:56:47', '2022-02-13', '2022-02-13', 0, 0, 11),
(12, '2022-02-13 16:58:09', '2022-02-13 16:58:09', '2022-02-13', '2022-02-13', 0, 0, 12);

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `contenu`, `created_at`, `updated_at`) VALUES
(1, 'Cheick Anta Diop', 'Cheikh Anta Diop est né le 29 décembre 1923 à Thieytou, dans le département de Bambey, région de Diourbel (Sénégal). Sa famille est d\'origine artistocratique wolof. À l\'âge de 23 ans, il part pour Paris afin d\'étudier la physique et la chimie mais se tourne aussi vers l\'histoire et les sciences sociales. Il suit en particulier les cours de Gaston Bachelard et de Frédéric Joliot-Curie5. Il adopte un point de vue spécifiquement africain face à la vision de certains auteurs de l\'époque selon laquelle les Africains sont des peuples sans passé.\r\n\r\nEn 1951, Diop prépare sous la direction de Marcel Griaule une thèse de doctorat à l\'Université de Paris, dans laquelle il affirme que l\'Égypte antique était peuplée d\'Africains noirs6, et que la langue et la culture égyptiennes se sont ensuite diffusées dans l\'Afrique de l\'Ouest. Il ne parvient pas dans un premier temps à réunir un jury mais, d\'après Doué Gnonsoa, sa thèse rencontre un « grand écho » sous la forme d\'un livre, Nations nègres et culture, publié en 19547. Il obtiendra finalement son doctorat en 1960. Il poursuit dans le même temps une spécialisation en physique nucléaire au laboratoire de chimie nucléaire du Collège de France[réf. nécessaire]. Diop met à profit sa formation pluridisciplinaire pour combiner plusieurs méthodes d\'approche.', '2022-02-13 18:23:19', '2022-02-13 18:23:19');

-- --------------------------------------------------------

--
-- Structure de la table `adultes`
--

CREATE TABLE `adultes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `abonne_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adultes`
--

INSERT INTO `adultes` (`id`, `created_at`, `updated_at`, `abonne_id`) VALUES
(1, '2022-02-13 16:14:36', '2022-02-13 16:14:36', 1),
(2, '2022-02-13 16:17:14', '2022-02-13 16:17:14', 2),
(3, '2022-02-13 16:18:23', '2022-02-13 16:18:23', 3),
(4, '2022-02-13 16:19:32', '2022-02-13 16:19:32', 4),
(5, '2022-02-13 16:21:18', '2022-02-13 16:21:18', 5),
(6, '2022-02-13 16:23:00', '2022-02-13 16:23:00', 6),
(7, '2022-02-13 16:26:13', '2022-02-13 16:26:13', 7),
(8, '2022-02-13 16:27:52', '2022-02-13 16:27:52', 8),
(9, '2022-02-13 16:30:27', '2022-02-13 16:30:27', 9),
(10, '2022-02-13 16:33:11', '2022-02-13 16:33:11', 10),
(11, '2022-02-13 16:56:47', '2022-02-13 16:56:47', 11),
(12, '2022-02-13 16:58:09', '2022-02-13 16:58:09', 12);

-- --------------------------------------------------------

--
-- Structure de la table `assistants`
--

CREATE TABLE `assistants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personnel_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assistants`
--

INSERT INTO `assistants` (`id`, `created_at`, `updated_at`, `personnel_id`) VALUES
(1, '2022-02-13 17:01:53', '2022-02-13 17:01:53', 1),
(2, '2022-02-13 17:03:31', '2022-02-13 17:03:31', 2),
(3, '2022-02-13 17:04:45', '2022-02-13 17:04:45', 3),
(5, '2022-02-13 17:07:16', '2022-02-13 17:07:16', 5),
(6, '2022-02-13 17:08:22', '2022-02-13 17:08:22', 6),
(7, '2022-02-13 17:09:27', '2022-02-13 17:09:27', 7);

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personne_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `created_at`, `updated_at`, `personne_id`) VALUES
(1, '2022-02-13 17:41:53', '2022-02-13 17:41:53', 21),
(2, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 22),
(3, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 24),
(4, '2022-02-13 17:53:02', '2022-02-13 17:53:02', 26),
(5, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 27),
(6, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 29);

-- --------------------------------------------------------

--
-- Structure de la table `auteur_volume`
--

CREATE TABLE `auteur_volume` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `auteur_id` bigint(20) UNSIGNED NOT NULL,
  `volume_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bande_dessinnees`
--

CREATE TABLE `bande_dessinnees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `volume_id` bigint(20) UNSIGNED NOT NULL,
  `dessinateur_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bibliothecaires`
--

CREATE TABLE `bibliothecaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personnel_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheques`
--

CREATE TABLE `bibliotheques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dureeEmprunt` int(11) NOT NULL,
  `quantiteEmpruntable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `nom`, `dureeEmprunt`, `quantiteEmpruntable`) VALUES
(1, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 'catégorie1', 20, 5),
(2, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 'catégorie2', 25, 3),
(3, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 'catégorie3', 20, 5),
(4, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 'catégorie5', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `dessinateurs`
--

CREATE TABLE `dessinateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personne_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `empruntable` tinyint(1) NOT NULL,
  `anneePublication` int(11) NOT NULL,
  `couverture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `editeur_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `created_at`, `updated_at`, `titre`, `description`, `empruntable`, `anneePublication`, `couverture`, `editeur_id`, `genre_id`) VALUES
(1, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 'Nouvelle de voyageurs', 'description1', 1, 1998, 'images//nouvelleDevoyageur.jpg', 1, 1),
(2, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 'Les adieux', 'description2', 1, 2000, 'images//lesadieux.jpg', 2, 2),
(3, '2022-02-13 17:53:02', '2022-02-13 17:53:02', 'Pranges Da Rimini', 'description3', 1, 2001, 'images//pranges.jpg', 2, 2),
(4, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 'Amkoullel l\'enfant peulh', 'description4', 1, 1978, 'images//enfantPeulh.jpg', 3, 3),
(5, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 'Nations nègres et cultures', 'N ations nègres et culture est un combat exposé en deux phases. D’abord, une croisade pour la reconquête de la confiance en l’identité négroïde démolie par la traite des esclaves et la colonisation de l’Afrique, puis une phase de reconstruction, d’affermissement de cette identité via les langues africaines.', 1, 1950, 'images//Nations_Negres.jpg', 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `document_genre`
--

CREATE TABLE `document_genre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `editeurs`
--

CREATE TABLE `editeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personne_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `editeurs`
--

INSERT INTO `editeurs` (`id`, `created_at`, `updated_at`, `personne_id`) VALUES
(1, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 23),
(2, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 25),
(3, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 28),
(4, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 30);

-- --------------------------------------------------------

--
-- Structure de la table `enfants`
--

CREATE TABLE `enfants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `niveauScolaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulaire_id` bigint(20) UNSIGNED NOT NULL,
  `abonne_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etageres`
--

CREATE TABLE `etageres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'etagere 1',
  `rayon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etageres`
--

INSERT INTO `etageres` (`id`, `created_at`, `updated_at`, `nom`, `rayon_id`) VALUES
(1, '2022-02-13 17:54:33', '2022-02-13 17:54:33', 'etagère1', 1),
(2, '2022-02-13 18:45:23', '2022-02-13 18:45:23', 'etagère2', 2),
(3, '2022-02-13 18:46:16', '2022-02-13 18:46:16', 'etagère3', 3),
(4, '2022-02-13 18:47:08', '2022-02-13 18:47:08', 'etagère4', 4),
(5, '2022-02-13 18:47:57', '2022-02-13 18:47:57', 'rayon5', 5),
(6, '2022-02-13 18:48:30', '2022-02-13 18:48:30', 'etagère5', 5);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `niveauScolaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abonne_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `exemplaires`
--

CREATE TABLE `exemplaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `etat` enum('bon','moyen','mauvais') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bon',
  `disponibilite` tinyint(1) NOT NULL DEFAULT 1,
  `volume_id` bigint(20) UNSIGNED NOT NULL,
  `etagere_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `exemplaires`
--

INSERT INTO `exemplaires` (`id`, `created_at`, `updated_at`, `etat`, `disponibilite`, `volume_id`, `etagere_id`) VALUES
(1, '2022-02-13 17:54:33', '2022-02-13 17:54:33', 'bon', 1, 1, 1),
(2, '2022-02-13 18:44:36', '2022-02-13 19:38:59', 'bon', 0, 1, 1),
(3, '2022-02-13 18:45:23', '2022-02-13 19:39:46', 'bon', 0, 2, 2),
(4, '2022-02-13 18:45:35', '2022-02-13 18:45:35', 'bon', 1, 2, 2),
(5, '2022-02-13 18:46:16', '2022-02-13 19:40:08', 'bon', 0, 3, 3),
(6, '2022-02-13 18:46:27', '2022-02-13 19:40:34', 'bon', 0, 3, 3),
(7, '2022-02-13 18:47:08', '2022-02-13 19:41:00', 'bon', 0, 4, 4),
(8, '2022-02-13 18:47:19', '2022-02-13 19:41:18', 'bon', 0, 4, 4),
(9, '2022-02-13 18:47:57', '2022-02-13 18:47:57', 'bon', 1, 5, 5),
(10, '2022-02-13 18:48:30', '2022-02-13 18:48:30', 'bon', 1, 5, 6);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `created_at`, `updated_at`, `nom`) VALUES
(1, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 'genre1'),
(2, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 'genre2'),
(3, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 'genre3'),
(4, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 'litteraire');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `volume_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `created_at`, `updated_at`, `volume_id`) VALUES
(1, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 1),
(2, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 2),
(3, '2022-02-13 17:53:02', '2022-02-13 17:53:02', 3),
(4, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 4),
(5, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 5);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_24_024817_create_abonnes_table', 1),
(6, '2022_01_24_024834_create_enfants_table', 1),
(7, '2022_01_24_024856_create_adultes_table', 1),
(8, '2022_01_24_024914_create_etudiants_table', 1),
(9, '2022_01_24_024935_create_personnels_table', 1),
(10, '2022_01_24_024948_create_personnes_table', 1),
(11, '2022_01_24_025011_create_assistants_table', 1),
(12, '2022_01_24_025033_create_bibliothecaires_table', 1),
(13, '2022_01_24_055923_create_roles_table', 1),
(14, '2022_01_24_060621_create_role_user_table', 1),
(15, '2022_01_24_160628_create_bibliotheques_table', 1),
(16, '2022_01_24_160659_create_rayons_table', 1),
(17, '2022_01_24_160724_create_etageres_table', 1),
(18, '2022_01_24_160813_create_exemplaires_table', 1),
(19, '2022_01_24_160835_create_volumes_table', 1),
(20, '2022_01_24_160852_create_livres_table', 1),
(21, '2022_01_24_160918_create_bande_dessinnees_table', 1),
(22, '2022_01_24_161032_create_documents_table', 1),
(23, '2022_01_24_161055_create_categories_table', 1),
(24, '2022_01_24_161127_create_genres_table', 1),
(25, '2022_01_24_161146_create_auteurs_table', 1),
(26, '2022_01_24_161212_create_editeurs_table', 1),
(27, '2022_01_24_175629_create_auteur_volume_table', 1),
(28, '2022_01_24_220053_create_dessinateurs_table', 1),
(29, '2022_01_26_145915_create_document_genre_table', 1),
(30, '2022_01_27_162959_create_notifications_table', 1),
(31, '2022_01_30_142239_create_actualites_table', 1),
(32, '2022_01_30_142316_create_photos_table', 1),
(33, '2022_02_12_095759_create_emprunts_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `salaire` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `created_at`, `updated_at`, `dateDebut`, `dateFin`, `salaire`, `user_id`) VALUES
(1, '2022-02-13 17:01:53', '2022-02-13 17:01:53', '2022-02-13', '2022-12-12', 1200.00, 13),
(2, '2022-02-13 17:03:31', '2022-02-13 17:03:31', '2022-02-13', '2022-04-12', 3000.00, 15),
(3, '2022-02-13 17:04:45', '2022-02-13 17:04:45', '2022-02-13', '2023-12-12', 3000.00, 16),
(4, '2022-02-13 17:05:57', '2022-02-13 17:05:57', '2022-02-13', '2022-05-04', 3000.00, 17),
(5, '2022-02-13 17:07:16', '2022-02-13 17:07:16', '2022-02-13', '2022-05-05', 3000.00, 18),
(6, '2022-02-13 17:08:22', '2022-02-13 17:08:22', '2022-02-13', '2022-06-06', 3000.00, 19),
(7, '2022-02-13 17:09:27', '2022-02-13 17:09:27', '2022-02-13', '2022-07-07', 4000.00, 20);

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `created_at`, `updated_at`, `nom`, `prenom`, `adresse`, `tel`, `DateNaissance`) VALUES
(1, '2022-02-13 16:14:35', '2022-02-13 16:14:35', 'admin', 'admin', 'boukahled', '0648898', '1212-12-12'),
(2, '2022-02-13 16:17:13', '2022-02-13 16:17:13', 'abonné1', 'prenomabonné1', 'boukahled', '065588884', '2000-12-12'),
(3, '2022-02-13 16:18:22', '2022-02-13 16:18:22', 'abonné2', 'prenomabonné2', 'missabougou', '066565484', NULL),
(4, '2022-02-13 16:19:28', '2022-02-13 16:19:28', 'abonné3', 'prenomabonné3', 'missabougou', '066565484', '2000-12-12'),
(5, '2022-02-13 16:21:12', '2022-02-13 16:21:12', 'abonné4', 'prenomabonné4', 'zrny', '066565498', '2002-12-12'),
(6, '2022-02-13 16:22:57', '2022-02-13 16:22:57', 'abonné5', 'prenomabonné5', 'missabougou5', '056565484', '2002-12-12'),
(7, '2022-02-13 16:26:11', '2022-02-13 16:26:11', 'abonné6', 'prenomabonné6', 'missabougou6', '066565466', '2001-12-12'),
(8, '2022-02-13 16:27:49', '2022-02-13 16:27:49', 'abonné7', 'prenomabonné7', 'missabougou7', '066565407', '2003-12-14'),
(9, '2022-02-13 16:30:25', '2022-02-13 16:30:25', 'abonné8', 'prenomabonné8', 'missabougou8', '066565408', '2002-12-15'),
(10, '2022-02-13 16:33:10', '2022-02-13 16:33:10', 'abonné9', 'prenomabonné9', 'missabougou9', '066565409', '2000-12-14'),
(11, '2022-02-13 16:56:47', '2022-02-13 16:56:47', 'abonné11', 'prenomabonné11', 'bamako', '775465372', '2000-12-12'),
(12, '2022-02-13 16:58:09', '2022-02-13 16:58:09', 'abonné12', 'prenomabonné12', 'rabat', '0775465332', '1976-09-12'),
(13, '2022-02-13 17:01:53', '2022-02-13 17:01:53', 'assistant1', 'assistant1', 'boukhalef', '0623546732', '1987-12-12'),
(14, '2022-02-13 17:02:44', '2022-02-13 17:02:44', 'assistant2', 'prenomAssistant2', NULL, NULL, NULL),
(15, '2022-02-13 17:03:31', '2022-02-13 17:03:31', 'assistant2', 'prenomAssistant2', 'adresse2', '023987236', '2022-04-12'),
(16, '2022-02-13 17:04:45', '2022-02-13 17:04:45', 'assistant3', 'PrenomAssistant3', 'adressee3', '0578345277', '1978-12-12'),
(17, '2022-02-13 17:05:57', '2022-02-13 17:05:57', 'assistant4', 'PrenomAssistant4', 'adresse1', '0532657444', '1998-07-05'),
(18, '2022-02-13 17:07:16', '2022-02-13 17:07:16', 'assistant5', 'PrenomAssistant5', 'adresse5', '0975638355', '2000-02-02'),
(19, '2022-02-13 17:08:22', '2022-02-13 17:08:22', 'assistant6', 'prenomAssitant6', 'adresse6', '0938474666', '2000-06-06'),
(20, '2022-02-13 17:09:27', '2022-02-13 17:09:27', 'assistant7', 'PrenomAssistant7', 'adresse7', '0873654377', '1986-07-07'),
(21, '2022-02-13 17:41:53', '2022-02-13 17:41:53', 'John', 'Mittersburry', NULL, NULL, NULL),
(22, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 'John', 'Mittersburry', NULL, NULL, NULL),
(23, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 'editeur1', NULL, 'adresse1', NULL, NULL),
(24, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 'Gaston', 'Lerroux', NULL, NULL, NULL),
(25, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 'éditeur2', NULL, 'adresse2', NULL, NULL),
(26, '2022-02-13 17:53:02', '2022-02-13 17:53:02', 'George', 'Bocker', NULL, NULL, NULL),
(27, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 'Bâh', 'Amadou Hampâté', NULL, NULL, NULL),
(28, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 'editeur3', NULL, 'adresse4', NULL, NULL),
(29, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 'Diop', 'Cheick Anta', NULL, NULL, NULL),
(30, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 'Présence Africaine', NULL, 'adresse5', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actualite_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `nom`, `path`, `actualite_id`, `created_at`, `updated_at`) VALUES
(1, 'cheick_anta_diop.jpg', 'images//cheick_anta_diop.jpg', 1, '2022-02-13 18:23:19', '2022-02-13 18:23:19');

-- --------------------------------------------------------

--
-- Structure de la table `rayons`
--

CREATE TABLE `rayons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'rayon1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rayons`
--

INSERT INTO `rayons` (`id`, `created_at`, `updated_at`, `nom`) VALUES
(1, '2022-02-13 17:54:33', '2022-02-13 17:54:33', 'rayon1'),
(2, '2022-02-13 18:45:23', '2022-02-13 18:45:23', 'rayon2'),
(3, '2022-02-13 18:46:16', '2022-02-13 18:46:16', 'rayon3'),
(4, '2022-02-13 18:47:08', '2022-02-13 18:47:08', 'rayon4'),
(5, '2022-02-13 18:47:57', '2022-02-13 18:47:57', 'rayon5');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `nom`) VALUES
(1, '2022-02-13 16:12:08', '2022-02-13 16:12:08', 'admin'),
(2, '2022-02-13 16:12:08', '2022-02-13 16:12:08', 'assistant'),
(3, '2022-02-13 16:12:08', '2022-02-13 16:12:08', 'abonne');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`id`, `created_at`, `updated_at`, `role_id`, `user_id`) VALUES
(1, NULL, NULL, 3, 1),
(2, NULL, NULL, 1, 1),
(3, NULL, NULL, 2, 1),
(4, NULL, NULL, 3, 2),
(5, NULL, NULL, 3, 3),
(6, NULL, NULL, 3, 4),
(7, NULL, NULL, 3, 5),
(8, NULL, NULL, 3, 6),
(9, NULL, NULL, 3, 7),
(10, NULL, NULL, 3, 8),
(11, NULL, NULL, 3, 9),
(12, NULL, NULL, 3, 10),
(13, NULL, NULL, 3, 11),
(14, NULL, NULL, 3, 12),
(15, NULL, NULL, 2, 13),
(16, NULL, NULL, 2, 15),
(17, NULL, NULL, 2, 16),
(18, NULL, NULL, 2, 17),
(19, NULL, NULL, 2, 18),
(20, NULL, NULL, 2, 19),
(21, NULL, NULL, 2, 20);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personne_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `personne_id`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$eD50IsAmEBsCDN7AiTkIP.952kxwkicWq8eCVMdIe1kFHQqu0Le4y', NULL, '2022-02-13 16:14:36', '2022-02-13 16:14:36', 1),
(2, 'abonné1', 'abonne1@gmail.com', NULL, '$2y$10$vY1qO/8HvgAr9UUc1y.pd.oq5SkjCKVC4aDxEM5aw16t8OPXgYoj2', NULL, '2022-02-13 16:17:14', '2022-02-13 16:17:14', 2),
(3, 'abonné2', 'abonne2@gmail.com', NULL, '$2y$10$2qcu1wrYlUZ.OSSz1KGOluGL6t0gr0PXtXpHqbgEH17Hf1LBDKP4W', NULL, '2022-02-13 16:18:22', '2022-02-13 16:18:22', 3),
(4, 'abonné3', 'abonne3@gmail.com', NULL, '$2y$10$arhMlJwSaFgsRDDZ2Llyau4uu4a8X7RWeZrRUYGPMAyNEBTfN1oiC', NULL, '2022-02-13 16:19:30', '2022-02-13 16:19:30', 4),
(5, 'abonné4', 'abonne4@gmail.com', NULL, '$2y$10$K0AFXFwl6E1UXjiyXKz.2uLLCxEoVYRsJ1BH/uaBlW6avGe3B7WO6', NULL, '2022-02-13 16:21:13', '2022-02-13 16:21:13', 5),
(6, 'abonné5', 'abonne5@gmail.com', NULL, '$2y$10$3gYo8TTN5uOchK.ZRtzZW.uDHcTfv315g25gWSYO3p8RJXLmZTeYS', NULL, '2022-02-13 16:22:58', '2022-02-13 16:22:58', 6),
(7, 'abonné6', 'abonne6@gmail.com', NULL, '$2y$10$LOPN6tMCEcTRzgrc5tivb.RvKg.NSkpB0XRiPD1ulRkHl67B1BIc6', NULL, '2022-02-13 16:26:12', '2022-02-13 16:26:12', 7),
(8, 'abonné7', 'abonne7@gmail.com', NULL, '$2y$10$maMNOy4jEpFtRVz7h2EjSOypEtYiRfzbGLbertlxVGV1aGtJDlYaG', NULL, '2022-02-13 16:27:50', '2022-02-13 16:27:50', 8),
(9, 'abonné8', 'abonne8@gmail.com', NULL, '$2y$10$OMSICfHeQ7sZgufcf5iL0e3KPAStMdRA.hCdr/q3cNzfw98llEsaG', NULL, '2022-02-13 16:30:25', '2022-02-13 16:30:25', 9),
(10, 'abonné9', 'abonne9@gmail.com', NULL, '$2y$10$R7VJsUH.VFiFZ/Dop7s9wOOOTcxmEFgO/ph6IfTxeFpu4Mgq6YlCu', NULL, '2022-02-13 16:33:11', '2022-02-13 16:33:11', 10),
(11, 'abonné11', 'abonne10@gmail.com', NULL, '$2y$10$Apk5IzWCFuIm3UrjQ/5cC.KcPwV/3cY/ag9CFatK/THBsQL5QVEZe', NULL, '2022-02-13 16:56:47', '2022-02-13 16:56:47', 11),
(12, 'abonné12', 'abonne12@gmail.com', NULL, '$2y$10$RIL31Bp0Se//UUxera1We.hWrXTBj2/b2eCfpFm7gOWNBJgojzxR6', NULL, '2022-02-13 16:58:09', '2022-02-13 16:58:09', 12),
(13, 'assistant1', 'assistant1@gmail.com', NULL, '$2y$10$1pODEqV3rZWaZUmbeNW0rusbLtAo8KtAh.7Qv1APlR43kWmM485n6', NULL, '2022-02-13 17:01:53', '2022-02-13 17:01:53', 13),
(15, 'assistant2', 'assistant2@gmail.com', NULL, '$2y$10$TVDcQ09M3TxvdKbyvE6WY.lVZmWDUO.nEV3lpceSwygGwjxhdzDg.', NULL, '2022-02-13 17:03:31', '2022-02-13 17:03:31', 15),
(16, 'assistant3', 'assistant3@gmail.com', NULL, '$2y$10$LWntc30F8dDMjIpeDnbaQuKE5lrOh32xM4HR66jig9MOFK0AsPcE6', NULL, '2022-02-13 17:04:45', '2022-02-13 17:04:45', 16),
(17, 'assistant4', 'assistant4@gmail.com', NULL, '$2y$10$XrMTPLNVgZ5NNelk4wjYjeuqLV7Hjemdz/FqNOsMluANcTVkEumcm', NULL, '2022-02-13 17:05:57', '2022-02-13 17:05:57', 17),
(18, 'assistant5', 'assistant5@gmail.com', NULL, '$2y$10$2/vefiJrYpnPmRnOJyQ.b.y5nbdBDX0BwCbLiJvsEhroGAnoXaWQq', NULL, '2022-02-13 17:07:16', '2022-02-13 17:07:16', 18),
(19, 'assistant6', 'assistant6@gmail.com', NULL, '$2y$10$ZADa8BA7.WEQ67nLBK/KwenJvJsPciGIamgASsO1C53mPAGy//c/W', NULL, '2022-02-13 17:08:22', '2022-02-13 17:08:22', 19),
(20, 'assistant7', 'assistant7@gmail.com', NULL, '$2y$10$67B5M9zlKHgNPZ9m3msiiuNLXCFWxWFoEOqXxPkJ/w.Ck9UVFLjTq', NULL, '2022-02-13 17:09:27', '2022-02-13 17:09:27', 20);

-- --------------------------------------------------------

--
-- Structure de la table `volumes`
--

CREATE TABLE `volumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombrePages` int(11) NOT NULL,
  `isbn` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `auteur_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `volumes`
--

INSERT INTO `volumes` (`id`, `created_at`, `updated_at`, `nombrePages`, `isbn`, `document_id`, `categorie_id`, `auteur_id`) VALUES
(1, '2022-02-13 17:45:03', '2022-02-13 17:45:03', 200, 100, 1, 1, 2),
(2, '2022-02-13 17:50:07', '2022-02-13 17:50:07', 100, 200, 2, 2, 3),
(3, '2022-02-13 17:53:02', '2022-02-13 17:53:02', 123, 300, 3, 1, 4),
(4, '2022-02-13 17:58:51', '2022-02-13 17:58:51', 192, 400, 4, 3, 5),
(5, '2022-02-13 18:02:28', '2022-02-13 18:02:28', 219, 500, 5, 4, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abonnes_user_id_foreign` (`user_id`);

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `adultes`
--
ALTER TABLE `adultes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adultes_abonne_id_foreign` (`abonne_id`);

--
-- Index pour la table `assistants`
--
ALTER TABLE `assistants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assistants_personnel_id_foreign` (`personnel_id`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteurs_personne_id_foreign` (`personne_id`);

--
-- Index pour la table `auteur_volume`
--
ALTER TABLE `auteur_volume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_volume_auteur_id_foreign` (`auteur_id`),
  ADD KEY `auteur_volume_volume_id_foreign` (`volume_id`);

--
-- Index pour la table `bande_dessinnees`
--
ALTER TABLE `bande_dessinnees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bande_dessinnees_volume_id_foreign` (`volume_id`),
  ADD KEY `bande_dessinnees_dessinateur_id_foreign` (`dessinateur_id`);

--
-- Index pour la table `bibliothecaires`
--
ALTER TABLE `bibliothecaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bibliothecaires_personnel_id_foreign` (`personnel_id`);

--
-- Index pour la table `bibliotheques`
--
ALTER TABLE `bibliotheques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dessinateurs`
--
ALTER TABLE `dessinateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dessinateurs_personne_id_foreign` (`personne_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_editeur_id_foreign` (`editeur_id`),
  ADD KEY `documents_genre_id_foreign` (`genre_id`);

--
-- Index pour la table `document_genre`
--
ALTER TABLE `document_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_genre_document_id_foreign` (`document_id`),
  ADD KEY `document_genre_genre_id_foreign` (`genre_id`);

--
-- Index pour la table `editeurs`
--
ALTER TABLE `editeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editeurs_personne_id_foreign` (`personne_id`);

--
-- Index pour la table `enfants`
--
ALTER TABLE `enfants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enfants_titulaire_id_foreign` (`titulaire_id`),
  ADD KEY `enfants_abonne_id_foreign` (`abonne_id`);

--
-- Index pour la table `etageres`
--
ALTER TABLE `etageres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etageres_rayon_id_foreign` (`rayon_id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiants_abonne_id_foreign` (`abonne_id`);

--
-- Index pour la table `exemplaires`
--
ALTER TABLE `exemplaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exemplaires_volume_id_foreign` (`volume_id`),
  ADD KEY `exemplaires_etagere_id_foreign` (`etagere_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livres_volume_id_foreign` (`volume_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personnels_user_id_foreign` (`user_id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_actualite_id_foreign` (`actualite_id`);

--
-- Index pour la table `rayons`
--
ALTER TABLE `rayons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_personne_id_foreign` (`personne_id`);

--
-- Index pour la table `volumes`
--
ALTER TABLE `volumes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `volumes_isbn_unique` (`isbn`),
  ADD KEY `volumes_document_id_foreign` (`document_id`),
  ADD KEY `volumes_categorie_id_foreign` (`categorie_id`),
  ADD KEY `volumes_auteur_id_foreign` (`auteur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `adultes`
--
ALTER TABLE `adultes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `assistants`
--
ALTER TABLE `assistants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `auteur_volume`
--
ALTER TABLE `auteur_volume`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bande_dessinnees`
--
ALTER TABLE `bande_dessinnees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bibliothecaires`
--
ALTER TABLE `bibliothecaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bibliotheques`
--
ALTER TABLE `bibliotheques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `dessinateurs`
--
ALTER TABLE `dessinateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `document_genre`
--
ALTER TABLE `document_genre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `editeurs`
--
ALTER TABLE `editeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `enfants`
--
ALTER TABLE `enfants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etageres`
--
ALTER TABLE `etageres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exemplaires`
--
ALTER TABLE `exemplaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rayons`
--
ALTER TABLE `rayons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `volumes`
--
ALTER TABLE `volumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD CONSTRAINT `abonnes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `adultes`
--
ALTER TABLE `adultes`
  ADD CONSTRAINT `adultes_abonne_id_foreign` FOREIGN KEY (`abonne_id`) REFERENCES `abonnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `assistants`
--
ALTER TABLE `assistants`
  ADD CONSTRAINT `assistants_personnel_id_foreign` FOREIGN KEY (`personnel_id`) REFERENCES `personnels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD CONSTRAINT `auteurs_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `auteur_volume`
--
ALTER TABLE `auteur_volume`
  ADD CONSTRAINT `auteur_volume_auteur_id_foreign` FOREIGN KEY (`auteur_id`) REFERENCES `auteurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `auteur_volume_volume_id_foreign` FOREIGN KEY (`volume_id`) REFERENCES `volumes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `bande_dessinnees`
--
ALTER TABLE `bande_dessinnees`
  ADD CONSTRAINT `bande_dessinnees_dessinateur_id_foreign` FOREIGN KEY (`dessinateur_id`) REFERENCES `personnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bande_dessinnees_volume_id_foreign` FOREIGN KEY (`volume_id`) REFERENCES `volumes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `bibliothecaires`
--
ALTER TABLE `bibliothecaires`
  ADD CONSTRAINT `bibliothecaires_personnel_id_foreign` FOREIGN KEY (`personnel_id`) REFERENCES `personnels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `dessinateurs`
--
ALTER TABLE `dessinateurs`
  ADD CONSTRAINT `dessinateurs_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_editeur_id_foreign` FOREIGN KEY (`editeur_id`) REFERENCES `editeurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `documents_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `editeurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `document_genre`
--
ALTER TABLE `document_genre`
  ADD CONSTRAINT `document_genre_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `document_genre_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `editeurs`
--
ALTER TABLE `editeurs`
  ADD CONSTRAINT `editeurs_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `enfants`
--
ALTER TABLE `enfants`
  ADD CONSTRAINT `enfants_abonne_id_foreign` FOREIGN KEY (`abonne_id`) REFERENCES `abonnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `enfants_titulaire_id_foreign` FOREIGN KEY (`titulaire_id`) REFERENCES `personnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etageres`
--
ALTER TABLE `etageres`
  ADD CONSTRAINT `etageres_rayon_id_foreign` FOREIGN KEY (`rayon_id`) REFERENCES `rayons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_abonne_id_foreign` FOREIGN KEY (`abonne_id`) REFERENCES `abonnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exemplaires`
--
ALTER TABLE `exemplaires`
  ADD CONSTRAINT `exemplaires_etagere_id_foreign` FOREIGN KEY (`etagere_id`) REFERENCES `etageres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exemplaires_volume_id_foreign` FOREIGN KEY (`volume_id`) REFERENCES `volumes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_volume_id_foreign` FOREIGN KEY (`volume_id`) REFERENCES `volumes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD CONSTRAINT `personnels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_actualite_id_foreign` FOREIGN KEY (`actualite_id`) REFERENCES `actualites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `volumes`
--
ALTER TABLE `volumes`
  ADD CONSTRAINT `volumes_auteur_id_foreign` FOREIGN KEY (`auteur_id`) REFERENCES `auteurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `volumes_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `volumes_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
