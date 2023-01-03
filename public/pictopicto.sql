-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 nov. 2022 à 16:57
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pictopicto`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `therapist_id` int(11) DEFAULT NULL,
  `picto_aliments_id` int(11) DEFAULT NULL,
  `picto_animaux_id` int(11) DEFAULT NULL,
  `picto_autres_mots_id` int(11) DEFAULT NULL,
  `picto_boissons_id` int(11) DEFAULT NULL,
  `picto_chiffres_id` int(11) DEFAULT NULL,
  `picto_comportements_id` int(11) DEFAULT NULL,
  `picto_corps_humain_id` int(11) DEFAULT NULL,
  `picto_couleurs_id` int(11) DEFAULT NULL,
  `picto_couverts_id` int(11) DEFAULT NULL,
  `picto_emotions_id` int(11) DEFAULT NULL,
  `picto_formes_id` int(11) DEFAULT NULL,
  `picto_fruits_legumes_id` int(11) DEFAULT NULL,
  `picto_jouet_id` int(11) DEFAULT NULL,
  `picto_langues_des_signes_id` int(11) DEFAULT NULL,
  `picto_lieux_id` int(11) DEFAULT NULL,
  `picto_meteo_id` int(11) DEFAULT NULL,
  `picto_multimedia_id` int(11) DEFAULT NULL,
  `picto_objets_id` int(11) DEFAULT NULL,
  `picto_orientation_id` int(11) DEFAULT NULL,
  `picto_personnes_id` int(11) DEFAULT NULL,
  `picto_petits_mots_id` int(11) DEFAULT NULL,
  `picto_scolarite_id` int(11) DEFAULT NULL,
  `picto_securite_routiere_id` int(11) DEFAULT NULL,
  `picto_sports_id` int(11) DEFAULT NULL,
  `picto_sujets_id` int(11) DEFAULT NULL,
  `picto_transports_id` int(11) DEFAULT NULL,
  `picto_actions_id` int(11) DEFAULT NULL,
  `picto_adjectifs_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `filename`, `update_at`, `therapist_id`, `picto_aliments_id`, `picto_animaux_id`, `picto_autres_mots_id`, `picto_boissons_id`, `picto_chiffres_id`, `picto_comportements_id`, `picto_corps_humain_id`, `picto_couleurs_id`, `picto_couverts_id`, `picto_emotions_id`, `picto_formes_id`, `picto_fruits_legumes_id`, `picto_jouet_id`, `picto_langues_des_signes_id`, `picto_lieux_id`, `picto_meteo_id`, `picto_multimedia_id`, `picto_objets_id`, `picto_orientation_id`, `picto_personnes_id`, `picto_petits_mots_id`, `picto_scolarite_id`, `picto_securite_routiere_id`, `picto_sports_id`, `picto_sujets_id`, `picto_transports_id`, `picto_actions_id`, `picto_adjectifs_id`) VALUES
(1, 'Sujets', 'sujets.png', '2021-03-14 15:38:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Boissons', 'boissons.png', '2021-03-15 09:32:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Actions', 'actions.png', '2021-03-15 13:29:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Adjectifs', 'adjectifs.png', '2021-03-15 13:31:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Aliments', 'aliments.png', '2021-03-15 13:33:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Animaux', 'animaux.png', '2021-03-15 13:35:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Chiffres', 'chiffres.png', '2021-03-15 13:37:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Corps humain', 'corpsHumain.png', '2021-03-15 13:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Couleurs', 'couleurs.png', '2021-03-15 13:40:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Petits mots', 'determinants.png', '2021-03-15 13:41:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Émotions', 'emotions.png', '2021-03-15 13:44:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Fruits et légumes', 'fruitsEtLegumes.png', '2021-03-15 13:53:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Langue des signes', 'langueDesSignes.png', '2021-03-15 13:54:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Lieux', 'lieux.png', '2021-03-15 13:55:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Météo', 'meteo.png', '2021-03-15 13:57:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Multimédia', 'multimedia.png', '2021-03-15 13:58:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Objets', 'objets.png', '2021-03-15 14:00:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Personnes', 'personnes.png', '2021-03-15 14:01:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Scolarité', 'scolarite.png', '2021-03-15 14:03:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Transports', 'transports.png', '2021-03-15 14:05:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Vêtements', 'vetements.png', '2021-03-15 14:06:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Comportements', 'comportements.png', '2021-03-23 15:25:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Orientation', 'orientation.png', '2021-04-27 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Autres mots', 'autresMots.png', '2021-04-27 00:04:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Formes', 'formes.png', '2021-05-16 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Sports', 'sports.png', '2022-04-16 10:07:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Sécurité Routière', 'securiteRoutiere.png', '2021-07-20 14:25:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Jouet', 'jouet.png', '2022-05-03 14:48:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Couverts', 'couverts.png', '2022-11-04 15:23:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Heures', 'heures.png', '2022-11-10 11:47:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Journee', 'Journee.png', '2022-11-10 11:51:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Interrogatif', 'Interrogatif.png', '2022-11-11 09:39:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `institution`
--

CREATE TABLE `institution` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `institution`
--

INSERT INTO `institution` (`id`, `name`, `code`, `email`) VALUES
(1, 'CRP', '123456789', 'crp@fake.com'),
(2, 'EntrepriseTest', 'EntrepriseTest123', 'Entreprise@test.com'),
(3, 'ECAM', 'ecam123456', 'ecam@gmail.com'),
(4, 'test', '1234567890', 'test@fake.com');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `therapist_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `therapist_id`, `patient_id`, `comment`, `created_at`) VALUES
(1, 1, 1, 'Sanguin', '2021-06-24 08:40:13'),
(2, 1, 2, 'Ceci est un test', '2021-06-24 12:26:15'),
(17, 1, 14, 'C\'est un chat.', '2021-03-30 12:59:01'),
(18, 1, 15, 'a', '2021-04-06 12:47:26'),
(19, 1, 14, 'Beau progrès pour un chat !', '2021-04-15 18:19:51'),
(20, 1, 16, 'Observation test', '2021-04-28 09:12:47'),
(21, 1, 16, 'Observation test ajoutée', '2021-05-04 11:26:28'),
(22, 1, 17, 'Troubles de la concentration', '2021-05-04 16:55:27'),
(23, 1, 19, 'Ceci est un test.', '2021-06-28 08:29:27'),
(24, 18, 20, 'test', '2021-07-07 10:34:27'),
(25, 1, 21, 'Test', '2021-07-27 12:54:10'),
(26, 21, 22, 'sa', '2022-04-16 11:37:45');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `school_grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `roles`, `firstname`, `lastname`, `birthday`, `school_grade`) VALUES
(1, '[]', 'Cyril', 'Acacio', '1985-12-20', 'Bac +2'),
(2, '[]', 'Simba', 'Rudrauf', '2018-02-01', 'Test'),
(14, '[]', 'Ziggy', 'V', '1999-06-01', 'On ne sait pas'),
(15, '[]', 'Patient désactivé numéro 15', 'Patient désactivé numéro 15', '7119-08-29', 'a'),
(16, '[]', 'John', 'Doe', '2010-10-20', 'Scolarisé dans une centre spécialisé'),
(17, '[]', 'Patient désactivé numéro 17', 'Patient désactivé numéro 17', '2007-02-04', 'Scolarisé dans un centre spécialisé'),
(19, '[]', 'Tristan', 'Rudrauf', '1994-10-15', 'Test'),
(20, '[]', 'Patient désactivé numéro 20', 'Patient désactivé numéro 20', '1994-10-15', 'Test'),
(21, '[]', 'Patient désactivé numéro 21', 'Patient désactivé numéro 21', '2021-07-14', 'Test'),
(22, '[]', 'sa', 'sa', '2022-04-16', 'sa');

-- --------------------------------------------------------

--
-- Structure de la table `pictogram`
--

CREATE TABLE `pictogram` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pluriel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prem_pers_sing` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_pers_sing` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trois_pers_sing` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prem_pers_plur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_pers_plur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trois_pers_plur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masculin_sing` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masculin_plur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feminin_sing` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feminin_plur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `update_at` datetime NOT NULL,
  `therapist_id` int(11) DEFAULT NULL,
  `subcategory_id_id` int(11) DEFAULT NULL,
  `prem_pers_sing_futur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_pers_sing_futur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trois_pers_sing_futur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prem_pers_plur_futur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_pers_plur_futur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trois_pers_plur_futur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prem_pers_sing_passe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_pers_sing_passe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trois_pers_sing_passe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prem_pers_plur_passe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_pers_plur_passe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trois_pers_plur_passe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pictogram`
--

INSERT INTO `pictogram` (`id`, `name`, `filename`, `genre`, `pluriel`, `prem_pers_sing`, `deux_pers_sing`, `trois_pers_sing`, `prem_pers_plur`, `deux_pers_plur`, `trois_pers_plur`, `masculin_sing`, `masculin_plur`, `feminin_sing`, `feminin_plur`, `category_id`, `update_at`, `therapist_id`, `subcategory_id_id`, `prem_pers_sing_futur`, `deux_pers_sing_futur`, `trois_pers_sing_futur`, `prem_pers_plur_futur`, `deux_pers_plur_futur`, `trois_pers_plur_futur`, `prem_pers_sing_passe`, `deux_pers_sing_passe`, `trois_pers_sing_passe`, `prem_pers_plur_passe`, `deux_pers_plur_passe`, `trois_pers_plur_passe`) VALUES
(1, 'Je', 'je.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-15 13:07:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Tu', 'tu.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-15 14:30:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Il', 'il.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-15 14:34:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Vous', 'vous.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-15 14:38:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Nous', 'nous.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-15 14:40:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Elle', 'elle.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-15 14:42:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Eau', 'eau.png', 'féminin', 'eaux', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eau', 'eaux', 2, '2021-03-15 14:45:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Chocolat chaud', 'chocolatChaud.png', 'masculin', 'chocolats chauds', NULL, NULL, NULL, NULL, NULL, NULL, 'chocolat chaud', 'chocolats chauds', NULL, NULL, 2, '2021-03-15 14:48:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Jus d\'orange', 'jusDOrange.png', 'masculin', 'jus d\'orange', NULL, NULL, NULL, NULL, NULL, NULL, 'jus d\'orange', 'jus d\'orange', NULL, NULL, 2, '2021-03-15 14:51:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Soda', 'soda.png', 'masculin', 'sodas', NULL, NULL, NULL, NULL, NULL, NULL, 'soda', 'sodas', NULL, NULL, 2, '2021-03-15 14:52:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Jus de pomme', 'jusDePomme.png', 'masculin', 'jus de pomme', NULL, NULL, NULL, NULL, NULL, NULL, 'Jus de pomme', 'Jus de pomme', NULL, NULL, 2, '2021-03-15 14:54:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Vouloir', 'vouloir.png', NULL, NULL, 'veux', 'veux', 'veut', 'voulons', 'voulez', 'veulent', NULL, NULL, NULL, NULL, 3, '2021-03-15 14:59:48', NULL, NULL, 'voudrai', 'voudras', 'voudra', 'voudrons', 'voudrez', 'voudront', 'ai voulu', 'as voulu', 'a voulu', 'avons voulu', 'avez voulu', 'ont voulu'),
(13, 'Regarder', 'regarder.png', NULL, NULL, 'regarde', 'regardes', 'regarde', 'regardons', 'regardez', 'regardent', NULL, NULL, NULL, NULL, 3, '2021-03-15 15:04:19', NULL, NULL, 'regarderai', 'regarderas', 'regardera', 'regarderons', 'regarderez', 'regarderont', 'ai regardé', 'as regardé', 'a regardé', 'avons regardé', 'avez regardé', 'ont regardé'),
(15, 'Boire', 'boire.png', NULL, NULL, 'bois', 'bois', 'boit', 'buvons', 'buvez', 'boivent', NULL, NULL, NULL, NULL, 3, '2021-03-15 15:13:11', NULL, NULL, 'boirai', 'boiras', 'boira', 'boirons', 'boirez', 'boiront', 'ai bu', 'as bu', 'a bu', 'avons bu', 'avez bu', 'ont bu'),
(16, 'Manger', 'manger.png', NULL, NULL, 'mange', 'manges', 'mange', 'mangeons', 'mangez', 'mangent', NULL, NULL, NULL, NULL, 3, '2021-03-15 15:15:28', NULL, NULL, 'mangerai', 'mangeras', 'mangera', 'mangerons', 'mangerez', 'mangeront', 'ai mangé', 'as mangé', 'a mangé', 'avons mangé', 'avez mangé', 'ont mangé'),
(17, 'Aller', 'aller.png', NULL, NULL, 'vais', 'vas', 'va', 'allons', 'allez', 'vont', NULL, NULL, NULL, NULL, 3, '2021-03-15 15:18:29', NULL, NULL, 'irai', 'iras', 'ira', 'irons', 'irez', 'iront', 'suis allé', 'es allé', 'est allé', 'sommes allés', 'êtes allés', 'sont allés'),
(18, 'Court', 'court.png', 'masculin', 'courts', NULL, NULL, NULL, NULL, NULL, NULL, 'court', 'courts', 'courte', 'courtes', 4, '2021-03-15 15:21:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Petit', 'petit.png', 'masculin', 'petits', NULL, NULL, NULL, NULL, NULL, NULL, 'petit', 'petits', 'petite', 'petites', 4, '2021-03-15 15:24:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Grand', 'grand.png', 'masculin', 'grands', NULL, NULL, NULL, NULL, NULL, NULL, 'grand', 'grands', 'grande', 'grandes', 4, '2021-03-15 15:27:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Long', 'long.png', 'masculin', 'longs', NULL, NULL, NULL, NULL, NULL, NULL, 'long', 'longs', 'longue', 'longues', 4, '2021-03-15 15:29:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Correct', 'correct.png', 'masculin', 'corrects', NULL, NULL, NULL, NULL, NULL, NULL, 'correct', 'corrects', 'correcte', 'correctes', 4, '2021-03-15 15:33:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Incorrect', 'incorrect.png', 'masculin', 'incorrects', NULL, NULL, NULL, NULL, NULL, NULL, 'incorrect', 'incorrects', 'incorrecte', 'incorrectes', 4, '2021-03-15 15:35:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Céréales', 'cereales.png', 'féminin', 'céréales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'céréale', 'céréales', 5, '2021-03-15 15:39:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Dessert', 'dessert.png', 'masculin', 'desserts', NULL, NULL, NULL, NULL, NULL, NULL, 'dessert', 'desserts', NULL, NULL, 5, '2021-03-15 15:41:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Gâteau', 'gateaux.png', 'masculin', 'gâteaux', NULL, NULL, NULL, NULL, NULL, NULL, 'gâteau', 'gâteaux', NULL, NULL, 5, '2021-03-15 15:44:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Glace', 'glace.png', 'féminin', 'glaces', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'glace', 'glaces', 5, '2021-03-15 15:45:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Riz', 'riz.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'riz', 'riz', NULL, NULL, 5, '2021-03-15 15:47:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Chat', 'chat.png', 'masculin', 'chats', NULL, NULL, NULL, NULL, NULL, NULL, 'chat', 'chats', 'chatte', 'chattes', 6, '2021-03-15 18:06:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Chien', 'chien.png', 'masculin', 'chiens', NULL, NULL, NULL, NULL, NULL, NULL, 'chien', 'chiens', 'chienne', 'chiennes', 6, '2021-03-15 18:08:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Lapin', 'lapin.png', 'masculin', 'lapins', NULL, NULL, NULL, NULL, NULL, NULL, 'lapin', 'lapins', 'lapine', 'lapines', 6, '2021-03-15 18:09:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Oiseau', 'oiseau.png', 'masculin', 'oiseaux', NULL, NULL, NULL, NULL, NULL, NULL, 'oiseau', 'oiseaux', 'oiselle', 'oiselles', 6, '2021-03-15 18:18:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Poisson', 'poissons.png', 'masculin', 'poissons', NULL, NULL, NULL, NULL, NULL, NULL, 'poisson', 'poissons', NULL, NULL, 6, '2021-03-15 18:22:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Un', 'un.png', 'masculin', 'uns', NULL, NULL, NULL, NULL, NULL, NULL, 'un', 'uns', 'une', 'unes', 7, '2021-03-15 18:36:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Deux', 'deux.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'deux', NULL, NULL, NULL, 7, '2021-03-15 18:41:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Zéro', 'zero.png', 'masculin', 'zéros', NULL, NULL, NULL, NULL, NULL, NULL, 'zéro', 'zéros', NULL, NULL, 7, '2021-03-15 18:44:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Trois', 'trois.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trois', NULL, NULL, NULL, 7, '2021-03-15 18:46:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Quatre', 'quatre.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quatre', NULL, NULL, NULL, 7, '2021-03-15 18:52:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Bouche', 'bouche.png', 'féminin', 'bouches', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bouche', 'bouches', 8, '2021-03-15 19:16:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Mains', 'mains.png', 'féminin', 'mains', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'main', 'mains', 8, '2021-03-15 19:22:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Nez', 'nez.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nez', 'nez', NULL, NULL, 8, '2021-03-15 19:26:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Pieds', 'pieds.png', 'masculin', 'pieds', NULL, NULL, NULL, NULL, NULL, NULL, 'pied', 'pieds', NULL, NULL, 8, '2021-03-15 19:27:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Oreille', 'oreille.png', 'féminin', 'oreilles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oreille', 'oreilles', 8, '2021-03-15 19:30:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Blanc', 'blanc.png', 'masculin', 'blancs', NULL, NULL, NULL, NULL, NULL, NULL, 'blanc', 'blancs', 'blanche', 'blanches', 9, '2021-03-15 21:24:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Bleu', 'bleu.png', 'masculin', 'bleus', NULL, NULL, NULL, NULL, NULL, NULL, 'bleu', 'bleus', 'bleue', 'bleues', 9, '2021-03-15 21:27:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Rouge', 'rouge.png', 'masculin', 'rouges', NULL, NULL, NULL, NULL, NULL, NULL, 'rouge', 'rouges', 'rouge', 'rouges', 9, '2021-03-15 21:30:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Vert', 'vert.png', 'masculin', 'verts', NULL, NULL, NULL, NULL, NULL, NULL, 'vert', 'verts', 'verte', 'vertes', 9, '2021-03-15 21:33:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Rose', 'rose.png', 'masculin', 'roses', NULL, NULL, NULL, NULL, NULL, NULL, 'rose', 'roses', 'rose', 'roses', 9, '2021-03-15 21:36:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'De', 'de.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-15 21:47:06', NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Des', 'des.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-15 21:48:13', NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Et', 'et.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-15 21:50:00', NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Mon', 'mon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-15 21:51:31', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Ce', 'ce.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-15 21:52:59', NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Colère', 'colere.png', 'féminin', 'colères', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'colère', 'colères', 11, '2021-03-15 21:56:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Curieux', 'curieux.png', 'masculin', 'curieux', NULL, NULL, NULL, NULL, NULL, NULL, 'curieux', 'curieux', 'curieuse', 'curieuses', 11, '2021-03-15 21:59:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Inquiet', 'inquiet.png', 'masculin', 'inquiets', NULL, NULL, NULL, NULL, NULL, NULL, 'inquiet', 'inquiets', 'inquiète', 'inquiètes', 11, '2021-03-15 22:03:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Joyeux', 'joyeux.png', 'masculin', 'joyeux', NULL, NULL, NULL, NULL, NULL, NULL, 'joyeux', 'joyeux', 'joyeuse', 'joyeuses', 11, '2021-03-15 22:06:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Peur', 'peur.png', 'féminin', 'peurs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'peur', 'peurs', 11, '2021-03-15 22:09:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Banane', 'banane.png', 'féminin', 'bananes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'banane', 'bananes', 12, '2021-03-15 22:12:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Carotte', 'carotte.png', 'féminin', 'carottes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'carotte', 'carottes', 12, '2021-03-15 22:15:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Fraise', 'fraise.png', 'féminin', 'fraises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fraise', 'fraises', 12, '2021-03-15 22:18:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Orange', 'orange.png', 'féminin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'orange', 'oranges', 12, '2021-03-15 22:20:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Pomme de terre', 'pommeDeTerre.png', 'féminin', 'pommes de terre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pomme de terre', 'pommes de terre', 12, '2021-03-15 22:22:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Cuisine', 'cuisine.png', 'féminin', 'cuisines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cuisine', 'cuisines', NULL, '2021-03-16 08:36:45', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'École', 'ecole.png', 'féminin', 'écoles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'école', 'écoles', NULL, '2021-03-16 08:38:41', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Hôpital', 'hopital.png', 'masculin', 'hôpitaux', NULL, NULL, NULL, NULL, NULL, NULL, 'hôpital', 'hôpitaux', NULL, NULL, 14, '2021-03-16 08:40:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Salle de bain', 'salleDeBain.png', 'féminin', 'salles de bains', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salle de bain', 'salles de bains', NULL, '2021-03-16 08:42:14', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Gare', 'gare.png', 'féminin', 'gares', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gare', 'gares', 14, '2021-03-16 08:43:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Soleil', 'soleil.png', 'masculin', 'soleils', NULL, NULL, NULL, NULL, NULL, NULL, 'soleil', 'soleils', NULL, NULL, 15, '2021-03-16 08:45:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Venteux', 'venteux.png', 'masculin', 'venteux', NULL, NULL, NULL, NULL, NULL, NULL, 'venteux', 'venteux', 'venteuse', 'venteuses', 15, '2021-03-16 08:48:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Nuage', 'nuage.png', 'masculin', 'nuages', NULL, NULL, NULL, NULL, NULL, NULL, 'nuage', 'nuages', NULL, NULL, 15, '2021-03-16 08:49:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Pluvieux', 'pluvieux.png', 'masculin', 'pluvieux', NULL, NULL, NULL, NULL, NULL, NULL, 'pluvieux', 'pluvieux', 'pluvieuse', 'pluvieuses', 15, '2021-03-16 08:51:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Gelée', 'gelee.png', 'féminin', 'gelée', NULL, NULL, NULL, NULL, NULL, NULL, 'gelé', 'gelés', 'gelée', 'gelées', 15, '2021-03-16 08:53:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Téléphone portable', 'telephonePortable.png', 'masculin', 'téléphones portable', NULL, NULL, NULL, NULL, NULL, NULL, 'téléphone portable', 'téléphones portables', NULL, NULL, 16, '2021-03-16 08:55:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Télévision', 'television.png', 'féminin', 'télévisions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'télévision', 'télévisions', 16, '2021-03-16 08:57:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Ordinateur', 'ordinateur.png', 'masculin', 'ordinateurs', NULL, NULL, NULL, NULL, NULL, NULL, 'ordinateur', 'ordinateurs', NULL, NULL, 16, '2021-03-16 08:58:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Ordinateur portable', 'ordinateurPortable.png', 'masculin', 'ordinateurs portables', NULL, NULL, NULL, NULL, NULL, NULL, 'ordinateur portable', 'ordinateurs portables', NULL, NULL, 16, '2021-03-16 08:59:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Console', 'console.png', 'féminin', 'consoles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'console', 'consoles', 16, '2021-03-16 09:00:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Bande dessinée', 'bandeDessinee.png', 'féminin', 'bandes dessinées', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bande dessinée', 'bandes dessinées', 17, '2021-03-16 09:16:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Brosse à dents', 'brosseADents.png', 'féminin', 'brosses à dents', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'brosse à dents', 'brosses à dents', NULL, '2021-03-16 09:18:04', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'Table', 'table.png', 'féminin', 'tables', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'table', 'tables', 17, '2021-03-16 09:24:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Médecin', 'medecin.png', 'masculin', 'médecins', NULL, NULL, NULL, NULL, NULL, NULL, 'médecin', 'médecins', 'médecin', 'médecins', 18, '2021-03-16 09:26:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Grand-mère', 'grandMere.png', 'féminin', 'grands-mères', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'grand-mère', 'grand-mères', NULL, '2021-03-16 09:30:38', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Orthophoniste', 'orthophoniste.png', 'masculin', 'orthophonistes', NULL, NULL, NULL, NULL, NULL, NULL, 'orthophoniste', 'orthophonistes', 'orthophoniste', 'orthophonistes', 18, '2021-03-16 09:33:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'Professeur', 'professeur.png', 'masculin', 'professeurs', NULL, NULL, NULL, NULL, NULL, NULL, 'professeur', 'professeurs', 'professeure', 'professeures', 18, '2021-03-16 09:36:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'Papa', 'papa.png', 'masculin', 'papas', NULL, NULL, NULL, NULL, NULL, NULL, 'papa', 'papas', NULL, NULL, NULL, '2021-03-16 09:37:41', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'Cahier', 'cahier.png', 'masculin', 'cahiers', NULL, NULL, NULL, NULL, NULL, NULL, 'cahier', 'cahiers', NULL, NULL, 19, '2021-03-16 09:39:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'Crayon', 'crayon.png', 'masculin', 'crayons', NULL, NULL, NULL, NULL, NULL, NULL, 'crayon', 'crayons', NULL, NULL, 19, '2021-03-16 09:40:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'Gomme', 'gomme.png', 'féminin', 'gommes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gomme', 'gommes', 19, '2021-03-16 09:42:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'Règle', 'regle.png', 'féminin', 'règles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'règle', 'règles', 19, '2021-03-16 09:43:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'Stylo', 'stylo.png', 'masculin', 'stylos', NULL, NULL, NULL, NULL, NULL, NULL, 'stylo', 'stylos', NULL, NULL, 19, '2021-03-16 09:44:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'Ambulance', 'ambulance.png', 'féminin', 'ambulances', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ambulance', 'ambulances', 20, '2021-03-16 09:46:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'Avion', 'avion.png', 'masculin', 'avions', NULL, NULL, NULL, NULL, NULL, NULL, 'avion', 'avions', NULL, NULL, 20, '2021-03-16 09:47:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'Métro', 'metro.png', 'masculin', 'métros', NULL, NULL, NULL, NULL, NULL, NULL, 'métro', 'métros', NULL, NULL, 20, '2021-03-16 09:48:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'Taxi', 'taxi.png', 'masculin', 'taxis', NULL, NULL, NULL, NULL, NULL, NULL, 'taxi', 'taxis', NULL, NULL, 20, '2021-03-16 09:49:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'Train', 'train.png', 'masculin', 'trains', NULL, NULL, NULL, NULL, NULL, NULL, 'train', 'trains', NULL, NULL, 20, '2021-03-16 09:51:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'Chaussettes', 'chaussettes.png', 'féminin', 'chaussettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chaussette', 'chaussettes', 21, '2021-03-16 09:53:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'Chaussures', 'chaussures.png', 'féminin', 'chaussures', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chaussure', 'chaussures', 21, '2021-03-16 09:54:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'Manteau', 'manteau.png', 'masculin', 'manteaux', NULL, NULL, NULL, NULL, NULL, NULL, 'manteau', 'manteaux', NULL, NULL, 21, '2021-03-16 09:55:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'Pantalon', 'pantalon.png', 'masculin', 'pantalons', NULL, NULL, NULL, NULL, NULL, NULL, 'pantalon', 'pantalons', NULL, NULL, 21, '2021-03-16 09:57:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'Tee-shirt', 'teeShirt.png', 'masculin', 'tee-shirts', NULL, NULL, NULL, NULL, NULL, NULL, 'tee-shirt', 'tee-shirts', NULL, NULL, 21, '2021-03-16 10:00:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'Avoir', 'avoir.png', NULL, NULL, 'ai', 'as', 'a', 'avons', 'avez', 'ont', NULL, NULL, NULL, NULL, 3, '2021-03-17 12:17:07', NULL, NULL, 'aurai', 'auras', 'aura', 'aurons', 'aurez', 'auront', 'ai eu', 'as eu', 'a eu', 'avons eu', 'avez eu', 'ont eu'),
(106, 'Eux', 'eux.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-18 13:07:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'Moi', 'moi.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-18 13:08:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'Café', 'cafe.png', 'masculin', 'cafés', NULL, NULL, NULL, NULL, NULL, NULL, 'café', 'cafés', NULL, NULL, 2, '2021-03-18 14:45:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'Eau du robinet', 'eauDuRobinet.png', 'féminin', 'eaux du robinet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eau du robinet', 'eaux du robinet', 2, '2021-03-18 14:46:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'Jus de raisin', 'jusDeRaisin.png', 'masculin', 'jus de raisin', NULL, NULL, NULL, NULL, NULL, NULL, 'jus de raisin', 'jus de raisin', NULL, NULL, 2, '2021-03-18 14:54:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'Lait', 'lait.png', 'masculin', 'laits', NULL, NULL, NULL, NULL, NULL, NULL, 'lait', 'laits', NULL, NULL, 2, '2021-03-18 14:55:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'Limonade', 'limonade.png', 'féminin', 'limonades', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'limonade', 'limonades', 2, '2021-03-18 14:56:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Aller aux toilettes', 'allerAuxToilettes.png', NULL, NULL, 'vais aux toilettes', 'vas aux toilettes', 'va aux toilettes', 'allons aux toilettes', 'allez aux toilettes', 'vont aux toilettes', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:18:29', NULL, NULL, 'irai aux toilettes', 'iras aux toilettes', 'ira aux toilettes', 'irons aux toilettes', 'irez aux toilettes', 'iront aux toilettes', 'suis allé aux toilettes', 'es allé aux toilettes', 'est allé aux toilettes', 'sommes allés aux toilettes', 'êtes allés aux toilettes', 'sont allés aux toilettes'),
(114, 'Couper', 'couper.png', NULL, NULL, 'coupe', 'coupes', 'coupe', 'coupons', 'coupez', 'coupent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:24:19', NULL, NULL, 'couperai', 'couperas', 'coupera', 'couperons', 'couperez', 'couperont', 'ai coupé', 'as coupé', 'a coupé', 'avons coupé', 'avez coupé', 'ont coupé'),
(115, 'Courir', 'courir.png', NULL, NULL, 'cours', 'cours', 'court', 'courons', 'courez', 'courent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:25:19', NULL, NULL, 'courrai', 'courras', 'courra', 'courrons', 'courrez', 'courront', 'ai couru', 'as couru', 'a couru', 'avons couru', 'avez couru', 'ont couru'),
(116, 'Descendre', 'descendre.png', NULL, NULL, 'descends', 'descends', 'descend', 'descendons', 'descendez', 'descendent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:26:19', NULL, NULL, 'descendrai', 'descendras', 'descendra', 'descendrons', 'descendrez', 'descendront', 'ai descendu', 'as descendu', 'a descendu', 'avons descendu', 'avez descendu', 'ont descendu'),
(117, 'Dessiner', 'dessiner.png', NULL, NULL, 'dessine', 'dessines', 'dessine', 'dessinons', 'dessinez', 'dessinent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:27:19', NULL, NULL, 'dessinerai', 'dessineras', 'dessinera', 'dessinerons', 'dessinerez', 'dessineront', 'ai dessiné', 'as dessiné', 'a dessiné', 'avons dessiné', 'avez dessiné', 'ont dessiné'),
(118, 'Écouter', 'ecouter.png', NULL, NULL, 'écoute', 'écoutes', 'écoute', 'écoutons', 'écoutez', 'écoutent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:28:19', NULL, NULL, 'écouterai', 'écouteras', 'écoutera', 'écouterons', 'écouterez', 'écouteront', 'ai écouté', 'as écouté', 'a écouté', 'avons écouté', 'avez écouté', 'ont écouté'),
(119, 'Écrire', 'ecrire.gif', NULL, NULL, 'écris', 'écris', 'écrit', 'écrivons', 'écrivez', 'écrivent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:29:19', NULL, NULL, 'écrirai', 'écriras', 'écrira', 'écrirons', 'écrirez', 'écriront', 'ai écrit', 'as écrit', 'a écrit', 'avons écrit', 'avez écrit', 'ont écrit'),
(120, 'Être', 'etre.png', NULL, NULL, 'suis', 'es', 'est', 'sommes', 'êtes', 'sont', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:30:19', NULL, NULL, 'serai', 'seras', 'sera', 'serons', 'serez', 'seront', 'ai été', 'as été', 'a été', 'avons été', 'avez été', 'ont été'),
(121, 'Jouer', 'jouer.png', NULL, NULL, 'joue', 'joues', 'joue', 'jouons', 'jouez', 'jouent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:31:19', NULL, NULL, 'jouerai', 'joueras', 'jouera', 'jouerons', 'jouerez', 'joueront', 'ai joué', 'as joué', 'a joué', 'avons joué', 'avez joué', 'ont joué'),
(122, 'Laver le linge', 'laverLeLinge.png', NULL, NULL, 'lave le linge', 'laves le linge', 'lave le linge', 'lavons le linge', 'lavez le linge', 'lavent le linge', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:32:19', NULL, NULL, 'laverai le linge', 'laveras le linge', 'lavera le linge', 'laverons le linge', 'laverez le linge', 'laveront le linge', 'ai lavé le linge', 'as lavé le linge', 'a lavé le linge', 'avons lavé le linge', 'avez lavé le linge', 'ont lavé le linge'),
(123, 'Laver les dents', 'laverLesDents.png', NULL, NULL, 'lave les dents', 'laves les dents', 'lave les dents', 'lavons les dents', 'lavez les dents', 'lavent les dents', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:33:19', NULL, NULL, 'laverai les dents', 'laveras les dents', 'lavera les dents', 'laverons les dents', 'laverez les dents', 'laveront les dents', 'ai lavé les dents', 'as lavé les dents', 'a lavé les dents', 'avons lavé les dents', 'avez lavé les dents', 'ont lavé les dents'),
(124, 'Laver', 'laver.png', NULL, NULL, 'lave', 'laves', 'lave', 'lavons', 'lavez', 'lavent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:34:19', NULL, NULL, 'laverai', 'laverai', 'lavera', 'laverons', 'laverez', 'laveront', 'ai lavé', 'as lavé', 'a lavé', 'avons lavé', 'avez lavé', 'ont lavé'),
(125, 'Lire', 'lire.png', NULL, NULL, 'lis', 'lis', 'lit', 'lisons', 'lisez', 'lisent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:35:19', NULL, NULL, 'lirai', 'liras', 'lira', 'lirons', 'lirez', 'liront', 'ai lu', 'as lu', 'a lu', 'avons lu', 'avez lu', 'ont lu'),
(126, 'Monter', 'monter.png', NULL, NULL, 'monte', 'montes', 'monte', 'montons', 'montez', 'montent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:36:19', NULL, NULL, 'monterai', 'monteras', 'montera', 'monterons', 'monterez', 'monteront', 'ai monté', 'as monté', 'a monté', 'avons monté', 'avez monté', 'ont monté'),
(127, 'Se moucher', 'moucher.png', NULL, NULL, 'me mouche', 'te mouches', 'se mouche', 'nous mouchons', 'vous mouchez', 'se mouchent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:37:19', NULL, NULL, 'me moucherai', 'te moucheras', 'se mouchera', 'nous moucherons', 'vous moucherez', 'se moucheront', 'me suis mouché', 't\'es mouché', 's\'est mouché', 'nous sommes mouchés', 'vous êtes mouchés', 'se sont mouchés'),
(128, 'Nager', 'nager.png', NULL, NULL, 'nage', 'nages', 'nage', 'nageons', 'nagez', 'nagent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:38:19', NULL, NULL, 'nagerai', 'nageras', 'nagera', 'nagerons', 'nagerez', 'nageront', 'ai nagé', 'as nagé', 'a nagé', 'avons nagé', 'avez nagé', 'ont nagé'),
(129, 'Prendre un bain', 'prendreUnBain.png', NULL, NULL, 'prends un bain', 'prends un bain', 'prend un bain', 'prenons un bain', 'prenez un bain', 'prennent un bain', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:39:19', NULL, NULL, 'prendrai un bain', 'prendrai un bain', 'prendrai un bain', 'prendrai un bain', 'prendrai un bain', 'prendrai un bain', 'ai pris un bain', 'as pris un bain', 'a pris un bain', 'avons pris un bain', 'avez pris un bain', 'ont pris un bain'),
(130, 'Regarder la télévision', 'regarderLaTelevision.png', NULL, NULL, 'regarde la télévision', 'regardes la télévision', 'regarde la télévision', 'regardons la télévision', 'regardez la télévision', 'regardent la télévision', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:40:19', NULL, NULL, 'regarderai la télévision', 'regarderas la télévision', 'regardera la télévision', 'regarderons la télévision', 'regarderez la télévision', 'regarderont la télévision', 'ai regardé la télévision', 'as regardé la télévision', 'a regardé la télévision', 'avons regardé la télévision', 'avez regardé la télévision', 'ont regardé la télévision'),
(131, 'Remplir', 'remplir.png', NULL, NULL, 'remplis', 'remplis', 'remplit', 'remplissons', 'remplissez', 'remplissent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:41:19', NULL, NULL, 'remplirai', 'rempliras', 'remplira', 'remplirons', 'remplirez', 'rempliront', 'ai rempli', 'as rempli', 'a rempli', 'avons rempli', 'avez rempli', 'ont rempli'),
(132, 'Renverser', 'renverser.png', NULL, NULL, 'renverse', 'renverses', 'renverse', 'renversons', 'renversez', 'renversent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:42:19', NULL, NULL, 'renverserai', 'renverseras', 'renversera', 'renverserons', 'renverserez', 'renverseront', 'ai renversé', 'as renversé', 'a renversé', 'avons renversé', 'avez renversé', 'ont renversé'),
(133, 'S\'habiller', 'sHabiller.png', NULL, NULL, 'm\'habille', 't\'habilles', 's\'habille', 'nous habillons', 'vous habillez', 's\'habillent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:43:19', NULL, NULL, 'm\'habillerai', 't\'habilleras', 's\'habillera', 'nous habillerons', 'vous habillerez', 's\'habilleront', 'me suis habillé', 't\'es habillé', 's\'est habillé', 'nous sommes habillés', 'vous êtes habillés', 'se sont habillés'),
(134, 'Salir', 'salir.png', NULL, NULL, 'salis', 'salis', 'salit', 'salissons', 'salissez', 'salissent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:44:19', NULL, NULL, 'salirai', 'saliras', 'salira', 'salirons', 'salirez', 'saliront', 'ai sali', 'as sali', 'a sali', 'avons sali', 'avez sali', 'ont sali'),
(135, 'Se déshabiller', 'seDeshabiller.png', NULL, NULL, 'me déshabille', 'te déshabilles', 'se déshabille', 'nous déshabillons', 'vous déshabillez', 'se déshabillent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:45:19', NULL, NULL, 'me déshabillerai', 'te déshabilleras', 'se déshabillera', 'nous déshabillerons', 'vous déshabillerez', 'se déshabilleront', 'me suis déshabillé', 't\'es déshabillé', 's\'est déshabillé', 'nous sommes déshabillés', 'vous êtes déshabillés', 'se sont déshabillés'),
(136, 'Siffler', 'siffler.png', NULL, NULL, 'siffle', 'siffles', 'siffle', 'sifflons', 'sifflez', 'sifflent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:46:19', NULL, NULL, 'sifflerai', 'siffleras', 'sifflera', 'sifflerons', 'sifflerez', 'siffleront', 'ai sifflé', 'as sifflé', 'a sifflé', 'avons sifflé', 'avez sifflé', 'ont sifflé'),
(137, 'Téléphoner', 'telephoner.png', NULL, NULL, 'téléphone', 'téléphones', 'téléphone', 'téléphonons', 'téléphonez', 'téléphonent', NULL, NULL, NULL, NULL, 3, '2021-03-18 15:47:19', NULL, NULL, 'téléphonerai', 'téléphoneras', 'téléphonera', 'téléphonerons', 'téléphonerez', 'téléphoneront', 'ai téléphoné', 'as téléphoné', 'a téléphoné', 'avons téléphoné', 'avez téléphoné', 'ont téléphoné'),
(138, 'Accompagnée', 'accompagnee.png', 'féminin', 'accompagnées', NULL, NULL, NULL, NULL, NULL, NULL, 'accompagné', 'accompagnés', 'accompagnée', 'accompagnées', 4, '2021-03-19 15:21:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'Cassé', 'casse.png', 'masculin', 'cassés', NULL, NULL, NULL, NULL, NULL, NULL, 'cassé', 'cassés', 'cassée', 'cassées', 4, '2021-03-19 15:22:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'Coiffée', 'coiffee.png', 'féminin', 'coiffées', NULL, NULL, NULL, NULL, NULL, NULL, 'coiffé', 'coiffés', 'coiffée', 'coiffées', 4, '2021-03-19 15:23:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'Décoiffé', 'décoiffe.png', 'masculin', 'décoiffés', NULL, NULL, NULL, NULL, NULL, NULL, 'décoiffé', 'décoiffés', 'décoiffée', 'décoiffées', 4, '2021-03-19 15:24:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'Dernier', 'dernier.png', 'masculin', 'derniers', NULL, NULL, NULL, NULL, NULL, NULL, 'dernier', 'derniers', 'dernière', 'dernières', 4, '2021-03-19 15:25:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'Deuxième', 'deuxieme.png', 'masculin', 'deuxièmes', NULL, NULL, NULL, NULL, NULL, NULL, 'deuxième', 'deuxièmes', 'deuxième', 'deuxièmes', 4, '2021-03-19 15:26:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'Étroit', 'etroit.png', 'masculin', 'étroits', NULL, NULL, NULL, NULL, NULL, NULL, 'étroit', 'étroits', 'étroite', 'étroites', 4, '2021-03-19 15:27:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 'Fermé', 'ferme.png', 'masculin', 'fermés', NULL, NULL, NULL, NULL, NULL, NULL, 'fermé', 'fermés', 'fermée', 'fermées', 4, '2021-03-19 15:28:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 'Gros', 'gros.png', 'masculin', 'gros', NULL, NULL, NULL, NULL, NULL, NULL, 'gros', 'gros', 'grosse', 'grosses', 4, '2021-03-19 15:29:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 'Large', 'large.png', 'masculin', 'larges', NULL, NULL, NULL, NULL, NULL, NULL, 'large', 'larges', 'large', 'larges', 4, '2021-03-19 15:30:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'Lent', 'lent.png', 'masculin', 'lents', NULL, NULL, NULL, NULL, NULL, NULL, 'lent', 'lents', 'lente', 'lentes', 4, '2021-03-19 15:31:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'Mince', 'mince.png', 'masculin', 'minces', NULL, NULL, NULL, NULL, NULL, NULL, 'mince', 'minces', 'mince', 'minces', 4, '2021-03-19 15:32:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'Mouillé', 'mouille.png', 'masculin', 'mouillés', NULL, NULL, NULL, NULL, NULL, NULL, 'mouillé', 'mouillés', 'mouillée', 'mouillées', 4, '2021-03-19 15:33:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'Ouvert', 'ouvert.png', 'masculin', 'ouverts', NULL, NULL, NULL, NULL, NULL, NULL, 'ouvert', 'ouverts', 'ouverte', 'ouvertes', 4, '2021-03-19 15:34:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'Premier', 'premier.png', 'masculin', 'premiers', NULL, NULL, NULL, NULL, NULL, NULL, 'premier', 'premiers', 'première', 'premières', 4, '2021-03-19 15:35:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'Sec', 'sec.png', 'masculin', 'secs', NULL, NULL, NULL, NULL, NULL, NULL, 'sec', 'secs', 'sèche', 'sèches', 4, '2021-03-19 15:36:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'Seul', 'seul.png', 'masculin', 'seuls', NULL, NULL, NULL, NULL, NULL, NULL, 'seul', 'seuls', 'seule', 'seules', 4, '2021-03-19 15:37:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'Vide', 'vide.png', 'masculin', 'vides', NULL, NULL, NULL, NULL, NULL, NULL, 'vide', 'vides', 'vide', 'vides', 4, '2021-03-19 15:38:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'Beurre', 'beurre.png', 'masculin', 'beurres', NULL, NULL, NULL, NULL, NULL, NULL, 'beurre', 'beurres', NULL, NULL, 5, '2021-03-19 15:45:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'Chocolat', 'chocolat.png', 'masculin', 'chocolats', NULL, NULL, NULL, NULL, NULL, NULL, 'chocolat', 'chocolats', NULL, NULL, 5, '2021-03-19 15:48:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'Confiture', 'confiture.png', 'féminin', 'confitures', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'confiture', 'confitures', 5, '2021-03-19 15:49:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 'Pâtes', 'pates.png', 'féminin', 'pâtes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pâtes', 5, '2021-03-19 15:50:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 'Farine', 'farine.png', 'féminin', 'farines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'farine', 'farines', 5, '2021-03-19 15:51:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'Flan', 'flan.png', 'masculin', 'flans', NULL, NULL, NULL, NULL, NULL, NULL, 'flan', 'flans', NULL, NULL, 5, '2021-03-19 15:52:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'Fromage', 'fromage.png', 'masculin', 'fromages', NULL, NULL, NULL, NULL, NULL, NULL, 'fromage', 'fromages', NULL, NULL, 5, '2021-03-19 15:53:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'Jambon', 'jambon.png', 'masculin', 'jambons', NULL, NULL, NULL, NULL, NULL, NULL, 'jambon', 'jambons', NULL, NULL, 5, '2021-03-19 15:54:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'Miel', 'miel.png', 'masculin', 'miels', NULL, NULL, NULL, NULL, NULL, NULL, 'miel', 'miels', NULL, NULL, 5, '2021-03-19 15:55:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'Moutarde', 'moutarde.png', 'féminin', 'moutardes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'moutarde', 'moutardes', 5, '2021-03-19 15:56:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 'Oeufs', 'oeufs.png', 'masculin', 'oeufs', NULL, NULL, NULL, NULL, NULL, NULL, 'oeuf', 'oeufs', NULL, NULL, 5, '2021-03-19 15:57:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 'Pain', 'pain.png', 'masculin', 'pains', NULL, NULL, NULL, NULL, NULL, NULL, 'pain', 'pains', NULL, NULL, 5, '2021-03-19 15:58:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'Petit pot', 'petitPot.png', 'masculin', 'petits pots', NULL, NULL, NULL, NULL, NULL, NULL, 'petit pot', 'petits pots', NULL, NULL, 5, '2021-03-19 15:59:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'Poisson', 'poisson.png', 'masculin', 'poisson', NULL, NULL, NULL, NULL, NULL, NULL, 'poisson', 'poissons', NULL, NULL, 5, '2021-03-20 14:39:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'Poivre', 'poivre.png', 'masculin', 'poivres', NULL, NULL, NULL, NULL, NULL, NULL, 'poivre', 'poivres', NULL, NULL, 5, '2021-03-20 14:40:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 'Poulet', 'poulet.png', 'masculin', 'poulets', NULL, NULL, NULL, NULL, NULL, NULL, 'poulet', 'poulets', NULL, NULL, 5, '2021-03-20 14:41:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'Sandwich', 'sandwich.png', 'masculin', 'sandwichs', NULL, NULL, NULL, NULL, NULL, NULL, 'sandwich', 'sandwichs', NULL, NULL, 5, '2021-03-20 14:42:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'Ketchup', 'ketchup.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ketchup', NULL, NULL, NULL, 5, '2021-03-20 14:43:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 'Sel', 'sel.png', 'masculin', 'sels', NULL, NULL, NULL, NULL, NULL, NULL, 'sel', 'sels', NULL, NULL, 5, '2021-03-20 14:44:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 'Sucette', 'sucette.png', 'féminin', 'sucettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sucette', 'sucettes', 5, '2021-03-20 14:46:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 'Viande', 'viande.png', 'féminin', 'viandes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'viande', 'viandes', 5, '2021-03-20 14:47:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 'Yaourt', 'yaourt.png', 'masculin', 'yaourts', NULL, NULL, NULL, NULL, NULL, NULL, 'yaourt', 'yaourts', NULL, NULL, 5, '2021-03-20 14:48:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 'Canard', 'canard.png', 'masculin', 'canards', NULL, NULL, NULL, NULL, NULL, NULL, 'canard', 'canards', NULL, NULL, 6, '2021-03-20 18:08:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 'Cheval', 'cheval.png', 'masculin', 'chevaux', NULL, NULL, NULL, NULL, NULL, NULL, 'cheval', 'chevaux', NULL, NULL, 6, '2021-03-20 18:09:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'Cochon', 'cochon.png', 'masculin', 'cochons', NULL, NULL, NULL, NULL, NULL, NULL, 'cochon', 'cochons', 'cochonne', 'cochonnes', 6, '2021-03-20 18:10:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'Crocodile', 'crocodile.png', 'masculin', 'crocodiles', NULL, NULL, NULL, NULL, NULL, NULL, 'crocodile', 'crocodiles', NULL, NULL, 6, '2021-03-20 18:11:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 'Dauphin', 'dauphin.png', 'masculin', 'dauphins', NULL, NULL, NULL, NULL, NULL, NULL, 'dauphin', 'dauphins', NULL, NULL, 6, '2021-03-20 18:12:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'Dinosaure', 'dinosaure.png', 'masculin', 'dinosaures', NULL, NULL, NULL, NULL, NULL, NULL, 'dinosaure', 'dinosaures', NULL, NULL, 6, '2021-03-20 18:13:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 'Éléphant', 'elephant.png', 'masculin', 'éléphants', NULL, NULL, NULL, NULL, NULL, NULL, 'éléphant', 'éléphants', 'éléphante', 'éléphantes', 6, '2021-03-20 18:14:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 'Escargot', 'escargot.png', 'masculin', 'escargots', NULL, NULL, NULL, NULL, NULL, NULL, 'escargot', 'escargots', NULL, NULL, 6, '2021-03-20 18:15:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 'Grenouille', 'grenouille.png', 'féminin', 'grenouilles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'grenouille', 'grenouilles', 6, '2021-03-20 18:16:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 'Hamster', 'hamster.png', 'masculin', 'hamsters', NULL, NULL, NULL, NULL, NULL, NULL, 'hamster', 'hamsters', NULL, NULL, 6, '2021-03-20 18:17:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 'Lion', 'lion.png', 'masculin', 'lions', NULL, NULL, NULL, NULL, NULL, NULL, 'lion', 'lions', 'lionne', 'lionnes', 6, '2021-03-20 18:18:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 'Mouton', 'mouton.png', 'masculin', 'moutons', NULL, NULL, NULL, NULL, NULL, NULL, 'mouton', 'moutons', NULL, NULL, 6, '2021-03-20 18:19:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 'Oie', 'oie.png', 'féminin', 'oies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oie', 'oies', 6, '2021-03-20 18:20:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 'Papillon', 'papillon.png', 'masculin', 'papillons', NULL, NULL, NULL, NULL, NULL, NULL, 'papillon', 'papillons', NULL, NULL, 6, '2021-03-20 18:21:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 'Perruche', 'perruche.png', 'féminin', 'perruches', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'perruche', 'perruches', 6, '2021-03-20 18:22:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 'Poule', 'poule.png', 'féminin', 'poules', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'poule', 'poules', 6, '2021-03-20 18:23:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 'Singe', 'singe.png', 'masculin', 'singes', NULL, NULL, NULL, NULL, NULL, NULL, 'singe', 'singes', NULL, NULL, 6, '2021-03-20 18:24:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 'Souris', 'souris.png', 'féminin', 'souris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'souris', 'souris', 6, '2021-03-20 18:25:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 'Tortue', 'tortue.png', 'féminin', 'tortues', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tortue', 'tortues', 6, '2021-03-20 18:26:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'Vache', 'vache.png', 'féminin', 'vaches', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vache', 'vaches', 6, '2021-03-20 18:27:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 'Cinq', 'cinq.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cinq', NULL, NULL, NULL, 7, '2021-03-20 18:46:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pictogram` (`id`, `name`, `filename`, `genre`, `pluriel`, `prem_pers_sing`, `deux_pers_sing`, `trois_pers_sing`, `prem_pers_plur`, `deux_pers_plur`, `trois_pers_plur`, `masculin_sing`, `masculin_plur`, `feminin_sing`, `feminin_plur`, `category_id`, `update_at`, `therapist_id`, `subcategory_id_id`, `prem_pers_sing_futur`, `deux_pers_sing_futur`, `trois_pers_sing_futur`, `prem_pers_plur_futur`, `deux_pers_plur_futur`, `trois_pers_plur_futur`, `prem_pers_sing_passe`, `deux_pers_sing_passe`, `trois_pers_sing_passe`, `prem_pers_plur_passe`, `deux_pers_plur_passe`, `trois_pers_plur_passe`) VALUES
(199, 'Six', 'six.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'six', NULL, NULL, NULL, 7, '2021-03-20 18:47:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 'Sept', 'sept.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sept', NULL, NULL, NULL, 7, '2021-03-20 18:48:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 'Huit', 'huit.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'huit', NULL, NULL, NULL, 7, '2021-03-20 18:49:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'Neuf', 'neuf.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'neuf', NULL, NULL, NULL, 7, '2021-03-20 18:50:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'Dix', 'dix.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dix', NULL, NULL, NULL, 7, '2021-03-20 18:51:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 'Bras', 'bras.png', 'masculin', 'bras', NULL, NULL, NULL, NULL, NULL, NULL, 'bras', 'bras', NULL, NULL, 8, '2021-03-20 19:16:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 'Cheveux', 'cheveux.png', 'masculin', 'cheveux', NULL, NULL, NULL, NULL, NULL, NULL, 'cheveu', 'cheveux', NULL, NULL, 8, '2021-03-20 19:17:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 'Cou', 'cou.png', 'masculin', 'cous', NULL, NULL, NULL, NULL, NULL, NULL, 'cou', 'cous', NULL, NULL, 8, '2021-03-20 19:18:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 'Dent', 'dents.png', 'féminin', 'dents', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dents', 'dents', 8, '2021-03-20 19:19:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 'Orteils', 'orteils.png', 'masculin', 'orteils', NULL, NULL, NULL, NULL, NULL, NULL, 'orteil', 'orteils', NULL, NULL, 8, '2021-03-20 19:20:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 'Doigts', 'doigts.png', 'masculin', 'doigts', NULL, NULL, NULL, NULL, NULL, NULL, 'doigt', 'doigts', NULL, NULL, 8, '2021-03-20 19:21:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 'Dos', 'dos.png', 'masculin', 'dos', NULL, NULL, NULL, NULL, NULL, NULL, 'dos', 'dos', NULL, NULL, 8, '2021-03-20 19:22:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 'Fesses', 'fesses.png', 'féminin', 'fesses', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fesse', 'fesses', 8, '2021-03-20 19:23:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 'Jambe', 'jambe.png', 'féminin', 'jambes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jambe', 'jambes', 8, '2021-03-20 19:24:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 'Langue', 'langue.png', 'féminin', 'langues', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'langue', 'langues', 8, '2021-03-20 19:25:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'Nombril', 'nombril.png', 'masculin', 'nombrils', NULL, NULL, NULL, NULL, NULL, NULL, 'nombril', 'nombrils', NULL, NULL, 8, '2021-03-20 19:26:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 'Nuque', 'nuque.png', 'féminin', 'nuques', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nuque', 'nuques', 8, '2021-03-20 19:27:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 'Poitrine', 'poitrine.png', 'féminin', 'poitrines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'poitrine', 'poitrines', 8, '2021-03-20 19:28:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 'Tête', 'tete.png', 'féminin', 'têtes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tête', 'têtes', 8, '2021-03-20 19:29:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 'Ventre', 'ventre.png', 'masculin', 'ventres', NULL, NULL, NULL, NULL, NULL, NULL, 'ventre', 'ventres', NULL, NULL, 8, '2021-03-20 19:30:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 'Yeux', 'yeux.png', 'masculin', 'yeux', NULL, NULL, NULL, NULL, NULL, NULL, 'oeil', 'yeux', NULL, NULL, 8, '2021-03-20 19:31:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 'Gris', 'gris.png', 'masculin', 'gris', NULL, NULL, NULL, NULL, NULL, NULL, 'gris', 'gris', 'grise', 'grises', 9, '2021-03-20 21:24:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 'Jaune', 'jaune.png', 'masculin', 'jaunes', NULL, NULL, NULL, NULL, NULL, NULL, 'jaune', 'jaunes', 'jaune', 'jaunes', 9, '2021-03-20 21:25:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 'Marron', 'marron.png', 'masculin', 'marrons', NULL, NULL, NULL, NULL, NULL, NULL, 'marron', 'marrons', 'marronne', 'marronnes', 9, '2021-03-20 21:26:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 'Noir', 'noir.png', 'masculin', 'noirs', NULL, NULL, NULL, NULL, NULL, NULL, 'noir', 'noirs', 'noire', 'noires', 9, '2021-03-20 21:27:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 'À la', 'aLa.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:47:06', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 'À', 'a.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:48:06', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 'Ces', 'ces.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:49:06', NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 'Cet', 'cet.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:50:06', NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 'Cette', 'cette.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:51:06', NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 'Leur', 'leur.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:52:06', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 'Leurs', 'leurs.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:53:06', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 'Ma', 'ma.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:54:06', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 'Mes', 'mes.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:55:06', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 'Mon', 'mon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:56:06', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 'Nos', 'nos.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:57:06', NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, 'Notre', 'notre.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:58:06', NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'Sa', 'sa.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 21:59:06', NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 'Ses', 'ses.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 22:00:06', NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, 'Son', 'son.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 22:01:06', NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, 'Ta', 'ta.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 22:02:06', NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 'Tes', 'tes.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 22:03:06', NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 'Vos', 'vos.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 22:04:06', NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 'Votre', 'votre.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 22:05:06', NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 'Amoureux', 'amoureux.png', 'masculin', 'amoureux', NULL, NULL, NULL, NULL, NULL, NULL, 'amoureux', 'amoureux', 'amoureuse', 'amoureuses', 11, '2021-03-20 22:20:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 'Confus', 'confus.png', 'masculin', 'confus', NULL, NULL, NULL, NULL, NULL, NULL, 'confus', 'confus', 'confuse', 'confuses', 11, '2021-03-20 22:21:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 'Content', 'content.png', 'masculin', 'contents', NULL, NULL, NULL, NULL, NULL, NULL, 'content', 'contents', 'contente', 'contentes', 11, '2021-03-20 22:22:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 'Distrait', 'distrait.png', 'masculin', 'distraits', NULL, NULL, NULL, NULL, NULL, NULL, 'distrait', 'distraits', 'distraite', 'distraites', 11, '2021-03-20 22:23:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 'Ennuyeux', 'ennuyeux.png', 'masculin', 'ennuyeux', NULL, NULL, NULL, NULL, NULL, NULL, 'ennuyeux', 'ennuyeux', 'ennuyeuse', 'ennuyeuses', 11, '2021-03-20 22:24:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 'Fatigué', 'fatigue.png', 'masculin', 'fatigués', NULL, NULL, NULL, NULL, NULL, NULL, 'fatigué', 'fatigués', 'fatiguée', 'fatiguées', 11, '2021-03-20 22:25:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 'Honte', 'honte.png', 'féminin', 'hontes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'honte', 'hontes', 11, '2021-03-20 22:26:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 'Surpris', 'surpris.png', 'masculin', 'surpris', NULL, NULL, NULL, NULL, NULL, NULL, 'surpris', 'surpris', 'surprise', 'surprises', 11, '2021-03-20 22:27:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 'Timide', 'timide.png', 'masculin', 'timides', NULL, NULL, NULL, NULL, NULL, NULL, 'timide', 'timides', 'timide', 'timides', 11, '2021-03-20 22:28:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 'Triste', 'triste.png', 'masculin', 'tristes', NULL, NULL, NULL, NULL, NULL, NULL, 'triste', 'tristes', 'triste', 'tristes', 11, '2021-03-20 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 'Ananas', 'ananas.png', 'masculin', 'ananas', NULL, NULL, NULL, NULL, NULL, NULL, 'ananas', 'ananas', NULL, NULL, 12, '2021-03-20 22:32:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 'Aubergine', 'aubergine.png', 'féminin', 'aubergines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aubergine', 'aubergines', 12, '2021-03-20 22:33:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 'Brocoli', 'brocoli.png', 'masculin', 'brocolis', NULL, NULL, NULL, NULL, NULL, NULL, 'brocoli', 'brocolis', NULL, NULL, 12, '2021-03-20 22:34:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 'Cerise', 'cerise.png', 'féminin', 'cerises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cerise', 'cerises', 12, '2021-03-20 22:35:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 'Chou-fleur', 'chouFleur.png', 'masculin', 'choux-fleurs', NULL, NULL, NULL, NULL, NULL, NULL, 'chou-fleur', 'choux-fleurs', NULL, NULL, 12, '2021-03-20 22:36:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 'Citron', 'citron.png', 'masculin', 'citrons', NULL, NULL, NULL, NULL, NULL, NULL, 'citron', 'citrons', NULL, NULL, 12, '2021-03-20 22:37:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 'Cornichon', 'cornichon.png', 'masculin', 'cornichons', NULL, NULL, NULL, NULL, NULL, NULL, 'cornichon', 'cornichons', NULL, NULL, 12, '2021-03-20 22:38:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 'Framboise', 'framboises.png', 'féminin', 'framboises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'framboise', 'framboises', 12, '2021-03-20 22:39:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 'Haricots verts', 'haricotsVerts.png', 'masculin', 'haricots verts', NULL, NULL, NULL, NULL, NULL, NULL, 'haricot vert', 'haricots verts', NULL, NULL, 12, '2021-03-20 22:40:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 'Maïs', 'mais.png', 'masculin', 'maïs', NULL, NULL, NULL, NULL, NULL, NULL, 'maïs', 'maïs', NULL, NULL, 12, '2021-03-20 22:41:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 'Myrtille', 'myrtilles.png', 'féminin', 'myrtilles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'myrtille', 'myrtilles', 12, '2021-03-20 22:42:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 'Noix de coco', 'noixDeCoco.png', 'féminin', 'noix de coco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'noix de coco', 'noix de coco', 12, '2021-03-20 22:43:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 'Noix', 'noix.png', 'féminin', 'noix', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'noix', 'noix', 12, '2021-03-20 22:44:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 'Oignon', 'oignon.png', 'masculin', 'oignons', NULL, NULL, NULL, NULL, NULL, NULL, 'oignon', 'oignons', NULL, NULL, 12, '2021-03-20 22:45:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 'Olive', 'olives.png', 'féminin', 'olives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'olive', 'olives', 12, '2021-03-20 22:46:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'Pastèque', 'pasteque.png', 'féminin', 'pastèques', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pastèque', 'pastèques', 12, '2021-03-20 22:47:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 'Poire', 'poire.png', 'féminin', 'poires', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'poire', 'poires', 12, '2021-03-20 22:48:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 'Poireau', 'poireaux.png', 'masculin', 'poireaux', NULL, NULL, NULL, NULL, NULL, NULL, 'poireau', 'poireaux', NULL, NULL, 12, '2021-03-20 22:49:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 'Poivron', 'poivron.png', 'masculin', 'poivrons', NULL, NULL, NULL, NULL, NULL, NULL, 'poivron', 'poivrons', NULL, NULL, 12, '2021-03-20 22:49:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 'Pomme', 'pomme.png', 'féminin', 'pommes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pomme', 'pommes', 12, '2021-03-20 22:50:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 'Raisin noir', 'raisinsNoirs.png', 'masculin', 'raisins noirs', NULL, NULL, NULL, NULL, NULL, NULL, 'raisin noir', 'raisins noirs', NULL, NULL, 12, '2021-03-20 22:51:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 'Salade', 'salade.png', 'féminin', 'salades', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salade', 'salades', 12, '2021-03-20 22:52:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 'Tomate', 'tomate.png', 'féminin', 'tomates', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tomate', 'tomates', 12, '2021-03-20 22:53:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 'Boulangerie', 'boulangerie.png', 'féminin', 'boulangeries', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'boulangerie', 'boulangeries', NULL, '2021-03-21 08:36:45', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 'Chambre à coucher', 'chambreACoucher.png', 'féminin', 'chambres à coucher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chambre à coucher', 'chambres à coucher', NULL, '2021-03-21 08:37:45', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 'Cinema', 'cinema.png', 'masculin', 'cinemas', NULL, NULL, NULL, NULL, NULL, NULL, 'cinema', 'cinemas', NULL, NULL, 14, '2021-03-21 08:38:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, 'Magasin de glaces', 'magasinDeGlaces.png', 'masculin', 'magasins de glaces', NULL, NULL, NULL, NULL, NULL, NULL, 'magasin de glaces', 'magasins de glaces', NULL, NULL, NULL, '2021-03-21 08:39:45', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 'Maison', 'maison.png', 'féminin', 'maisons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maison', 'maisons', NULL, '2021-03-21 08:40:45', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 'Pharmacie', 'pharmacie.png', 'féminin', 'pharmacies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pharmacie', 'pharmacies', NULL, '2021-03-21 08:41:45', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 'Piscine', 'piscine.png', 'féminin', 'piscines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'piscine', 'piscines', 14, '2021-03-21 08:42:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 'Salon de coiffure', 'salonDeCoiffure.png', 'masculin', 'salons de coiffure', NULL, NULL, NULL, NULL, NULL, NULL, 'salon de coiffure', 'salons de coiffure', NULL, NULL, NULL, '2021-03-21 08:43:45', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 'Salon', 'salon.png', 'masculin', 'salons', NULL, NULL, NULL, NULL, NULL, NULL, 'salon', 'salons', NULL, NULL, NULL, '2021-03-21 08:44:45', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 'Supermarché', 'supermarche.png', 'masculin', 'supermarchés', NULL, NULL, NULL, NULL, NULL, NULL, 'supermarché', 'supermarchés', NULL, NULL, NULL, '2021-03-21 08:45:45', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 'Ville', 'ville.png', 'féminin', 'villes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ville', 'villes', 14, '2021-03-21 08:46:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(287, 'Arc-en-ciel', 'arcEnCiel.png', 'masculin', 'arcs-en-ciel', NULL, NULL, NULL, NULL, NULL, NULL, 'arc-en-ciel', 'arcs-en-ciel', NULL, NULL, 15, '2021-03-21 08:47:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 'Brumeux', 'brumeux.png', 'masculin', 'brumeux', NULL, NULL, NULL, NULL, NULL, NULL, 'brumeux', 'brumeux', 'brumeuse', 'brumeuses', 15, '2021-03-21 08:48:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(289, 'Éclair', 'eclair.png', 'masculin', 'éclairs', NULL, NULL, NULL, NULL, NULL, NULL, 'éclair', 'éclairs', NULL, NULL, 15, '2021-03-21 08:49:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, 'Ensoleillé', 'ensoleille.png', 'masculin', 'ensoleillés', NULL, NULL, NULL, NULL, NULL, NULL, 'ensoleillé', 'ensoleillés', 'ensoleillée', 'ensoleillées', 15, '2021-03-21 08:50:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 'Neigeux', 'neigeux.png', 'masculin', 'neigeux', NULL, NULL, NULL, NULL, NULL, NULL, 'neigeux', 'neigeux', 'neigeuse', 'neigeuses', 15, '2021-03-21 08:51:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 'Tonnerre', 'tonnerre.png', 'masculin', 'tonnerres', NULL, NULL, NULL, NULL, NULL, NULL, 'tonnerre', 'tonnerres', NULL, NULL, 15, '2021-03-21 08:53:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 'Nuageux', 'nuageux.png', 'masculin', 'nuageux', NULL, NULL, NULL, NULL, NULL, NULL, 'nuageux', 'nuageux', 'nuageuse', 'nuageuses', 15, '2021-03-21 08:54:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(294, 'Orageux', 'orageux.png', 'masculin', 'orageux', NULL, NULL, NULL, NULL, NULL, NULL, 'orageux', 'orageux', 'orageuse', 'orageuses', 15, '2021-03-21 08:55:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(295, 'Tornade', 'tornade.png', 'féminin', 'tornades', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tornade', 'tornades', 15, '2021-03-21 08:56:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(296, 'Bibliothèque', 'bibliotheque.png', 'féminin', 'bibliothèques', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bibliothèque', 'bibliothèques', 17, '2021-03-21 09:16:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(298, 'Balai', 'balai.png', 'masculin', 'balais', NULL, NULL, NULL, NULL, NULL, NULL, 'balai', 'balais', NULL, NULL, 17, '2021-03-21 09:19:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(299, 'Chaise', 'chaise.png', 'féminin', 'chaises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chaise', 'chaises', 17, '2021-03-21 09:20:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(300, 'Ciseaux', 'ciseaux1.png', 'masculin', 'ciseaux', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ciseaux', NULL, NULL, 17, '2021-03-21 09:21:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, 'Conserves', 'conserve.png', 'féminin', 'conserves', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'conserve', 'conserves', NULL, '2021-03-21 09:22:43', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(302, 'Coussin', 'coussin.png', 'masculin', 'coussins', NULL, NULL, NULL, NULL, NULL, NULL, 'coussin', 'coussins', NULL, NULL, 17, '2021-03-21 09:23:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, 'Couvert', 'couverts.png', 'masculin', 'couverts', NULL, NULL, NULL, NULL, NULL, NULL, 'couvert', 'couverts', NULL, NULL, NULL, '2021-03-21 09:24:21', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, 'Lampe', 'lampe.png', 'féminin', 'lampes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lampe', 'lampes', 17, '2021-03-21 09:25:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, 'Lit', 'lit.png', 'masculin', 'lits', NULL, NULL, NULL, NULL, NULL, NULL, 'lit', 'lits', NULL, NULL, 17, '2021-03-21 09:26:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 'Lunettes', 'lunettes.png', 'féminin', 'lunettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lunettes', 17, '2021-03-21 09:27:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 'Pèse-personne', 'pesePersonne.png', 'masculin', 'pèse-personnes', NULL, NULL, NULL, NULL, NULL, NULL, 'pèse-personne', 'pèse-personnes', NULL, NULL, 17, '2021-03-21 09:28:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 'Portefeuille', 'portefeuille.png', 'masculin', 'portefeuilles', NULL, NULL, NULL, NULL, NULL, NULL, 'portefeuille', 'portefeuilles', NULL, NULL, 17, '2021-03-21 09:29:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, 'Poubelle', 'poubelle.png', 'féminin', 'poubelles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'poubelle', 'poubelles', 17, '2021-03-21 09:30:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(310, 'Réfrigérateur', 'refrigerateur.png', 'masculin', 'réfrigérateurs', NULL, NULL, NULL, NULL, NULL, NULL, 'réfrigérateur', 'réfrigérateurs', NULL, NULL, NULL, '2021-03-21 09:31:21', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, 'Sac à dos', 'sacADos.png', 'masculin', 'sacs à dos', NULL, NULL, NULL, NULL, NULL, NULL, 'sac à dos', 'sacs à dos', NULL, NULL, 17, '2021-03-21 09:32:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, 'Seau', 'seau.png', 'masculin', 'seaux', NULL, NULL, NULL, NULL, NULL, NULL, 'seau', 'seaux', NULL, NULL, 17, '2021-03-21 09:33:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, 'Serviette de bain', 'servietteDeBain.png', 'féminin', 'serviettes de bain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'serviette de bain', 'serviettes de bain', NULL, '2021-03-21 09:34:49', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(314, 'Affaires de toilettes', 'affairesDeToilette.png', 'féminin', 'affaires de toilettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'affaire de toilettes', 'affaires de toilettes', NULL, '2021-03-21 09:35:49', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(315, 'Trousse de toilettes', 'trousseDeToilette.png', 'féminin', 'trousses de toilettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trousse de toilettes', 'trousses de toilettes', NULL, '2021-03-21 09:36:49', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, 'Vaisselle', 'vaisselle.png', 'féminin', 'vaisselles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vaisselle', 'vaisselles', NULL, '2021-03-21 09:38:49', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(318, 'Astronaute', 'astronaute.png', 'masculin', 'astronautes', NULL, NULL, NULL, NULL, NULL, NULL, 'astronaute', 'astronautes', 'astronaute', 'astronautes', 18, '2021-03-21 09:46:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(319, 'Bibliothécaire', 'bibliothecaire.png', 'féminin', 'bibliothécaires', NULL, NULL, NULL, NULL, NULL, NULL, 'bibliothécaire', 'bibliothécaires', 'bibliothécaire', 'bibliothécaires', 18, '2021-03-21 09:48:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(320, 'Caissière', 'caissiere.png', 'féminin', 'caissières', NULL, NULL, NULL, NULL, NULL, NULL, 'caissier', 'caissiers', 'caissière', 'caissières', 18, '2021-03-21 09:49:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(321, 'Chauffeur de taxi', 'chauffeurDeTaxi.png', 'masculin', 'chauffeurs de taxi', NULL, NULL, NULL, NULL, NULL, NULL, 'chauffeur de taxi', 'chauffeurs de taxi', 'chauffeuse de taxi', 'chauffeuses de taxi', 18, '2021-03-21 09:50:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(322, 'Chef d\'orchestre', 'chefDOrchestre.png', 'féminin', 'chefs d\'orchestre', NULL, NULL, NULL, NULL, NULL, NULL, 'chef d\'orchestre', 'chefs d\'orchestre', 'chefs d\'orchestre', 'chefs d\'orchestre', 18, '2021-03-21 09:51:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(323, 'Coiffeuse', 'coiffeuse.png', 'féminin', 'coiffeuses', NULL, NULL, NULL, NULL, NULL, NULL, 'coiffeur', 'coiffeurs', 'coiffeuse', 'coiffeuses', 18, '2021-03-21 09:52:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(324, 'Cuisinier', 'cuisinier.png', 'masculin', 'cuisiniers', NULL, NULL, NULL, NULL, NULL, NULL, 'cuisinier', 'cuisiniers', 'cuisinière', 'cuisinieres', 18, '2021-03-21 09:53:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(325, 'Danseur', 'danseur.png', 'masculin', 'danseurs', NULL, NULL, NULL, NULL, NULL, NULL, 'danseur', 'danseurs', 'danseuse', 'danseuses', 18, '2021-03-21 09:54:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(326, 'Grand-père', 'grandPere.png', 'masculin', 'grands-pères', NULL, NULL, NULL, NULL, NULL, NULL, 'grand-père', 'grand-pères', NULL, NULL, NULL, '2021-03-21 09:55:41', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(327, 'Informaticienne', 'informaticienne.png', 'féminin', 'informaticiennes', NULL, NULL, NULL, NULL, NULL, NULL, 'informaticien', 'informaticiens', 'informaticienne', 'informaticiennes', 18, '2021-03-21 09:56:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(328, 'Livreur', 'livreur.png', 'masculin', 'livreurs', NULL, NULL, NULL, NULL, NULL, NULL, 'livreur', 'livreurs', 'livreuse', 'livreuses', 18, '2021-03-21 09:57:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(329, 'Maman', 'maman.png', 'féminin', 'mamans', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maman', 'mamans', NULL, '2021-03-21 09:58:04', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(330, 'Moniteur', 'moniteur.png', 'masculin', 'moniteurs', NULL, NULL, NULL, NULL, NULL, NULL, 'moniteur', 'moniteurs', 'monitrice', 'monitrices', 18, '2021-03-21 09:59:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(332, 'Plombier', 'plombier.png', 'masculin', 'plombiers', NULL, NULL, NULL, NULL, NULL, NULL, 'plombier', 'plombiers', 'plombière', 'plombières', 18, '2021-03-21 10:01:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(333, 'Policier', 'policier.png', 'masculin', 'policiers', NULL, NULL, NULL, NULL, NULL, NULL, 'policier', 'policiers', 'policière', 'policières', 18, '2021-03-21 10:02:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(334, 'Pompière', 'pompiere.png', 'féminin', 'pompières', NULL, NULL, NULL, NULL, NULL, NULL, 'pompier', 'pompiers', 'pompière', 'pompières', 18, '2021-03-21 10:03:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(335, 'Psychologue', 'psychologue.png', 'masculin', 'psychologues', NULL, NULL, NULL, NULL, NULL, NULL, 'psychologue', 'psychologues', 'psychologue', 'psychologues', 18, '2021-03-21 10:04:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(336, 'Scientifique', 'scientifique.png', 'féminin', 'scientifiques', NULL, NULL, NULL, NULL, NULL, NULL, 'scientifique', 'scientifiques', 'scientifique', 'scientifiques', 18, '2021-03-21 10:05:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(337, 'Compas', 'compas.png', 'masculin', 'compas', NULL, NULL, NULL, NULL, NULL, NULL, 'compas', 'compas', NULL, NULL, 19, '2021-03-21 10:39:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(338, 'Crayons de couleurs', 'crayonsDeCouleurs.png', 'masculin', 'crayons de couleurs', NULL, NULL, NULL, NULL, NULL, NULL, 'crayon de couleurs', 'crayons de couleurs', NULL, NULL, 19, '2021-03-21 10:40:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(339, 'Calculatrice', 'calculatrice.png', 'féminin', 'calculatrices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'calculatrice', 'calculatrices', 19, '2021-03-21 10:42:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(340, 'Dictionnaire', 'dictionnaire.png', 'masculin', 'dictionnaires', NULL, NULL, NULL, NULL, NULL, NULL, 'dictionnaire', 'dictionnaires', NULL, NULL, 19, '2021-03-21 10:43:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(341, 'Feutre', 'feutre.png', 'masculin', 'feutres', NULL, NULL, NULL, NULL, NULL, NULL, 'feutre', 'feutres', NULL, NULL, 19, '2021-03-21 10:44:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(342, 'Papier', 'papier.png', 'masculin', 'papiers', NULL, NULL, NULL, NULL, NULL, NULL, 'papier', 'papiers', NULL, NULL, 19, '2021-03-21 10:45:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(343, 'Pinceau', 'pinceau.png', 'masculin', 'pinceaux', NULL, NULL, NULL, NULL, NULL, NULL, 'pinceau', 'pinceaux', NULL, NULL, 19, '2021-03-21 10:46:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(344, 'Récréation', 'recreation.png', 'féminin', 'récréations', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'récréation', 'récréations', 19, '2021-03-21 10:47:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 'Scotch', 'scotch.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Scotch', NULL, NULL, NULL, 19, '2021-03-21 10:48:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(346, 'Tableau', 'tableau.png', 'masculin', 'tableaux', NULL, NULL, NULL, NULL, NULL, NULL, 'tableau', 'tableaux', NULL, NULL, 19, '2021-03-21 10:49:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(347, 'Fusée', 'fusee.png', 'féminin', 'fusées', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fusée', 'fusées', 20, '2021-03-21 10:50:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(348, 'Bateau', 'bateau.png', 'masculin', 'bateaux', NULL, NULL, NULL, NULL, NULL, NULL, 'bateau', 'bateaux', NULL, NULL, 20, '2021-03-21 10:51:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(349, 'Bus', 'bus.png', 'masculin', 'bus', NULL, NULL, NULL, NULL, NULL, NULL, 'bus', 'bus', NULL, NULL, 20, '2021-03-21 10:52:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(350, 'Camion de pompiers', 'camionDePompiers.png', 'masculin', 'camions de pompiers', NULL, NULL, NULL, NULL, NULL, NULL, 'camion de pompiers', 'camions de pompiers', NULL, NULL, 20, '2021-03-21 10:53:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(351, 'Camion', 'camion.png', 'masculin', 'camions', NULL, NULL, NULL, NULL, NULL, NULL, 'camion', 'camions', NULL, NULL, 20, '2021-03-21 10:54:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(352, 'Moto', 'moto.png', 'féminin', 'motos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'moto', 'motos', 20, '2021-03-21 10:55:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(353, 'Tricycle', 'tricycle.png', 'masculin', 'tricycles', NULL, NULL, NULL, NULL, NULL, NULL, 'tricycle', 'tricycles', NULL, NULL, 20, '2021-03-21 10:56:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(354, 'Vélo', 'velo.png', 'masculin', 'vélos', NULL, NULL, NULL, NULL, NULL, NULL, 'vélo', 'vélos', NULL, NULL, 20, '2021-03-21 10:57:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(355, 'Trottinette', 'trottinette.png', 'féminin', 'trottinettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trottinette', 'trottinettes', 20, '2021-03-21 10:58:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(356, 'Voiture', 'voiture.png', 'féminin', 'voitures', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'voiture', 'voitures', 20, '2021-03-21 10:59:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(357, 'Chemise', 'chemise.png', 'féminin', 'chemises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chemise', 'chemises', 21, '2021-03-21 11:03:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(359, 'Anorak', 'anorak.png', 'masculin', 'anoraks', NULL, NULL, NULL, NULL, NULL, NULL, 'anorak', 'anoraks', NULL, NULL, 21, '2021-03-21 11:10:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 'Ciré', 'cire.png', 'masculin', 'cirés', NULL, NULL, NULL, NULL, NULL, NULL, 'cirés', 'cirés', NULL, NULL, 21, '2021-03-21 11:11:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(361, 'Collant', 'collant.png', 'masculin', 'collants', NULL, NULL, NULL, NULL, NULL, NULL, 'collant', 'collants', NULL, NULL, 21, '2021-03-21 11:12:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(362, 'Gant', 'gant.png', 'masculin', 'gants', NULL, NULL, NULL, NULL, NULL, NULL, 'gant', 'gants', NULL, NULL, 21, '2021-03-21 11:13:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(365, 'Moufle', 'moufle.png', 'féminin', 'moufles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'moufle', 'moufles', 21, '2021-03-21 11:16:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(366, 'Polo', 'polo.png', 'masculin', 'polos', NULL, NULL, NULL, NULL, NULL, NULL, 'polo', 'polos', NULL, NULL, 21, '2021-03-21 11:17:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(367, 'Pyjama hôpital', 'pyjamaHopital.png', 'masculin', 'pyjamas hôpital', NULL, NULL, NULL, NULL, NULL, NULL, 'pyjama hôpital', 'pyjamas hôpital', NULL, NULL, 21, '2021-03-21 11:18:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(368, 'Pyjama', 'pyjama.png', 'masculin', 'pyjamas', NULL, NULL, NULL, NULL, NULL, NULL, 'pyjama', 'pyjamas', NULL, NULL, 21, '2021-03-21 11:19:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(369, 'Robe', 'robe.png', 'féminin', 'robes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'robe', 'robes', 21, '2021-03-21 11:20:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(370, 'Short', 'short.png', 'masculin', 'shorts', NULL, NULL, NULL, NULL, NULL, NULL, 'short', 'shorts', NULL, NULL, 21, '2021-03-21 11:22:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(371, 'Slip', 'slip.png', 'masculin', 'slips', NULL, NULL, NULL, NULL, NULL, NULL, 'slip', 'slips', NULL, NULL, 21, '2021-03-21 11:23:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(372, 'Sweet-shirt', 'sweetShirt.png', 'masculin', 'sweet-shirts', NULL, NULL, NULL, NULL, NULL, NULL, 'sweet-shirt', 'sweet-shirts', NULL, NULL, 21, '2021-03-21 11:24:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(373, 'Veste', 'veste.png', 'féminin', 'vestes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'veste', 'vestes', 21, '2021-03-21 11:25:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(374, 'Aux', 'aux1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 21:59:06', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 'Chez', 'chez.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:00:06', NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(376, 'Dans', 'dans.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:01:06', NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(377, 'Du', 'du.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:02:06', NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(378, 'La', 'la.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:03:06', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(379, 'Le', 'le.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:04:06', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(380, 'Les', 'les.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:05:06', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(381, 'Mien', 'mien.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:06:06', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(382, 'Mienne', 'mienne.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:07:06', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(383, 'Miennes', 'miennes.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:08:06', NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(384, 'Sien', 'sien.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:09:06', NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(385, 'Sienne', 'sienne.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:10:06', NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(386, 'Siennes', 'siennes.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:11:06', NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(387, 'Tien', 'tien.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:12:06', NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(388, 'Tienne', 'tienne.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:13:06', NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(389, 'Tiennes', 'tiennes.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:14:06', NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(390, 'Ton', 'ton.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 22:12:06', NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(391, 'Asseoir', 'asseoir.png', NULL, NULL, 'assieds', 'assieds', 'assied', 'asseyons', 'asseyez', 'asseyent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:25:19', NULL, NULL, 'assiérai', 'assiéras', 'assiéra', 'assiérons', 'assiérez', 'assiéront', 'ai assis', 'as assis', 'a assis', 'avons assis', 'avez assis', 'ont assis'),
(392, 'Casser', 'casser.png', NULL, NULL, 'casse', 'casses', 'casse', 'cassons', 'cassez', 'cassent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:26:19', NULL, NULL, 'casserai', 'casseras', 'cassera', 'casserons', 'casserez', 'casseront', 'ai cassé', 'as cassé', 'a cassé', 'avons cassé', 'avez cassé', 'ont cassé'),
(393, 'Cracher', 'cracher.png', NULL, NULL, 'crache', 'craches', 'crache', 'crachons', 'crachez', 'crachent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:27:19', NULL, NULL, 'cracherai', 'cracheras', 'crachera', 'cracherons', 'cracherez', 'cracheront', 'ai craché', 'as craché', 'a craché', 'avons craché', 'avez craché', 'ont craché'),
(394, 'Crier', 'crier.png', NULL, NULL, 'crie', 'cries', 'crie', 'crions', 'criez', 'crient', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:28:19', NULL, NULL, 'crierai', 'crieras', 'criera', 'crierons', 'crierez', 'crieront', 'ai crié', 'as crié', 'a crié', 'avons crié', 'avez crié', 'ont crié'),
(395, 'Disputer', 'disputer.png', NULL, NULL, 'dispute', 'disputes', 'dispute', 'disputons', 'disputez', 'disputent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:29:19', NULL, NULL, 'disputerai', 'disputeras', 'disputera', 'disputerons', 'disputerez', 'disputeront', 'ai disputé', 'as disputé', 'a disputé', 'avons disputé', 'avez disputé', 'ont disputé'),
(396, 'Frapper', 'frapper.png', NULL, NULL, 'frappe', 'frappes', 'frappe', 'frappons', 'frappez', 'frappent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:30:19', NULL, NULL, 'frapperai', 'frapperas', 'frappera', 'frapperons', 'frapperez', 'frapperont', 'ai frappé', 'as frappé', 'a frappé', 'avons frappé', 'avez frappé', 'ont frappé'),
(397, 'Jeter', 'jeter.png', NULL, NULL, 'jette', 'jettes', 'jette', 'jetons', 'jetez', 'jettent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:31:19', NULL, NULL, 'jetterai', 'jetteras', 'jettera', 'jetterons', 'jetterez', 'jetteront', 'ai jeté', 'as jeté', 'a jeté', 'avons jeté', 'avez jeté', 'ont jeté'),
(398, 'Griffer', 'griffer.png', NULL, NULL, 'griffe', 'griffes', 'griffe', 'griffons', 'griffez', 'griffent', NULL, NULL, NULL, NULL, 22, '2021-03-23 15:32:19', NULL, NULL, 'grifferai', 'grifferas', 'griffera', 'grifferons', 'grifferez', 'grifferont', 'ai griffé', 'as griffé', 'a griffé', 'avons griffé', 'avez griffé', 'ont griffé'),
(401, 'Silence', 'silence.png', 'masculin', 'silences', NULL, NULL, NULL, NULL, NULL, NULL, 'silence', 'silences', NULL, NULL, 22, '2021-03-23 15:35:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(402, 'Infirmière', 'infirmiere.png', 'féminin', 'infirmières', NULL, NULL, NULL, NULL, NULL, NULL, 'infirmier', 'infirmiers', 'infirmière', 'infirmières', 18, '2021-03-24 09:56:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(403, 'Propre', 'propre.png', 'masculin', 'propres', NULL, NULL, NULL, NULL, NULL, NULL, 'propre', 'propres', 'propre', 'propres', 4, '2021-03-24 15:36:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(404, 'Sale', 'sale.png', 'masculin', 'sales', NULL, NULL, NULL, NULL, NULL, NULL, 'sale', 'sales', 'sale', 'sales', 4, '2021-03-24 15:37:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(405, 'Oui', 'oui.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2021-04-12 18:59:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(406, 'Non', 'non.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2021-04-12 18:59:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(407, 'Fatigué', 'fatigue.gif', NULL, 'fatigués', NULL, NULL, NULL, NULL, NULL, NULL, 'fatigué', 'fatigués', 'fatiguée', 'fatiguées', 13, '2021-04-12 18:59:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(408, 'Faim', 'faim.gif', 'feminin', 'faims', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 13, '2021-04-12 19:01:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(409, 'Peur', 'peur.gif', 'feminin', 'peurs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'peur', 'peurs', 13, '2021-04-12 19:02:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(410, 'Jouer', 'jouer.gif', NULL, NULL, 'joue', 'joues', 'joue', 'jouons', 'jouer', 'jouent', NULL, NULL, NULL, NULL, 13, '2021-04-12 19:02:43', NULL, NULL, 'jouerai', 'joueras', 'jouera', 'jouerons', 'jouerez', 'joueront', 'ai joué', 'as joué', 'a joué', 'avons joué', 'avez joué', 'ont joué'),
(411, 'Papa', 'papa.gif', 'masculin', 'papas', NULL, NULL, NULL, NULL, NULL, NULL, 'papa', 'papas', NULL, NULL, 13, '2021-04-12 19:03:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(412, 'Maman', 'maman.gif', 'feminin', 'mamans', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maman', 'mamans', 13, '2021-04-12 19:04:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pictogram` (`id`, `name`, `filename`, `genre`, `pluriel`, `prem_pers_sing`, `deux_pers_sing`, `trois_pers_sing`, `prem_pers_plur`, `deux_pers_plur`, `trois_pers_plur`, `masculin_sing`, `masculin_plur`, `feminin_sing`, `feminin_plur`, `category_id`, `update_at`, `therapist_id`, `subcategory_id_id`, `prem_pers_sing_futur`, `deux_pers_sing_futur`, `trois_pers_sing_futur`, `prem_pers_plur_futur`, `deux_pers_plur_futur`, `trois_pers_plur_futur`, `prem_pers_sing_passe`, `deux_pers_sing_passe`, `trois_pers_sing_passe`, `prem_pers_plur_passe`, `deux_pers_plur_passe`, `trois_pers_plur_passe`) VALUES
(413, 'Dormir', 'dormir.gif', NULL, NULL, 'dors', 'dors', 'dort', 'dormons', 'dormez', 'dorment', NULL, NULL, NULL, NULL, 13, '2021-04-12 19:05:14', NULL, NULL, 'dormirai', 'dormiras', 'dormira', 'dormirons', 'dormirez', 'dormiront', 'ai dormi', 'as dormi', 'a dormi', 'avons dormi', 'avez dormi', 'ont dormi'),
(414, 'Manger', 'manger.gif', NULL, NULL, 'mange', 'manges', 'mange', 'mangeons', 'mangez', 'mangent', NULL, NULL, NULL, NULL, 13, '2021-04-12 19:07:03', NULL, NULL, 'mangerai', 'mangeras', 'mangera', 'mangerons', 'mangerez', 'mangeront', 'ai mangé', 'as mangé', 'a mangé', 'avons mangé', 'avez mangé', 'ont mangé'),
(415, 'Moi', 'moi.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2021-04-12 19:07:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(416, 'Merci', 'merci.gif', 'masculin', 'mercis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2021-04-12 19:07:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(417, 'Mal', 'mal.gif', 'masculin', 'maux', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2021-04-12 19:12:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(418, 'Froid', 'froid.gif', 'masculin', 'froids', NULL, NULL, NULL, NULL, NULL, NULL, 'froid', 'froids', 'froide', 'froides', 13, '2021-04-12 19:14:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(419, 'Content', 'content.gif', 'masculin', 'contents', NULL, NULL, NULL, NULL, NULL, NULL, 'content', 'contents', 'contente', 'contentes', 13, '2021-04-12 19:15:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(420, 'Chaud', 'chaud.gif', 'masculin', 'chauds', NULL, NULL, NULL, NULL, NULL, NULL, 'chaud', 'chauds', 'chaude', 'chaudes', 13, '2021-04-12 19:17:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(421, 'Bonjour', 'bonjour.gif', 'masculin', 'bonjours', NULL, NULL, NULL, NULL, NULL, NULL, 'bonjour', 'bonjours', NULL, NULL, 13, '2021-04-12 19:18:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(422, 'Au revoir', 'auRevoir.gif', 'masculin', 'au revoir', NULL, NULL, NULL, NULL, NULL, NULL, 'au revoir', 'au revoir', NULL, NULL, 13, '2021-04-12 19:19:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(423, 'Se laver', 'seLaver.gif', NULL, NULL, 'me lave', 'te lave', 'se lave', 'nous lavons', 'vous lavez', 'se lavent', NULL, NULL, NULL, NULL, 13, '2021-04-12 19:21:32', NULL, NULL, 'me laverai', 'te laveras', 'se lavera', 'nous laverons', 'vous laverez', 'se laveront', 'me suis lavé', 't\'es lavé', 's\'est lavé', ' nous sommes lavés', 'vous êtes lavés', 'se sont lavés'),
(424, 'Travailler', 'travailler.gif', NULL, NULL, 'travaille', 'travailles', 'travaille', 'travaillons', 'travaillez', 'travaillent', NULL, NULL, NULL, NULL, 13, '2021-04-12 19:23:03', NULL, NULL, 'travaillerai', 'travailleras', 'travaillera', 'travaillerons', 'travaillerez', 'travailleront', 'ai travaillé', 'as travaillé', 'a travaillé', 'avons travaillé', 'avez travaillé', 'ont travaillé'),
(425, 'Vouloir', 'vouloir.gif', NULL, NULL, 'veux', 'veux', 'veut', 'voulons', 'voulez', 'veulent', NULL, NULL, NULL, NULL, 13, '2021-04-12 19:23:03', NULL, NULL, 'voudrai', 'voudras', 'voudra', 'voudrons', 'voudrez', 'voudront', 'ai voulu', 'as voulu', 'a voulu', 'avons voulu', 'avez voulu', 'ont voulu'),
(426, 'Soif', 'soif.gif', 'feminin', 'soifs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'soif', 'soifs', 13, '2021-04-15 20:15:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(427, 'Au revoir', 'auRevoir.png', 'masculin', 'au revoir', NULL, NULL, NULL, NULL, NULL, NULL, 'au revoir', 'au revoir', NULL, NULL, 24, '2021-04-27 12:00:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(428, 'Bonjour', 'bonjour.png', 'masculin', 'bonjours', NULL, NULL, NULL, NULL, NULL, NULL, 'bonjour', 'bonjours', NULL, NULL, 24, '2021-04-27 12:01:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(429, 'Merci', 'merci.png', 'masculin', 'mercis', NULL, NULL, NULL, NULL, NULL, NULL, 'merci', 'mercis', NULL, NULL, 24, '2021-04-27 12:02:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(430, 'Oui', 'oui.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oui', NULL, NULL, NULL, 24, '2021-04-27 12:03:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(431, 'Non', 'non.png', 'masculin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'non', NULL, NULL, NULL, 24, '2021-04-27 12:04:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(432, 'À coté', 'aCote.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2021-04-27 12:05:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(433, 'Sous', 'sous.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2021-04-27 12:06:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(434, 'Sur', 'sur.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2021-04-27 12:07:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(435, 'Devant', 'devant.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2021-04-27 12:08:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(436, 'Derrière', 'derriere.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2021-04-27 12:09:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(437, 'Cour de récréation', 'courDeRecreation.png', 'féminin', 'cours de récréation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cour de récréation', 'cours de récréation', NULL, '2021-04-27 12:10:40', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(439, 'Parc', 'parc.png', 'masculin', 'parcs', NULL, NULL, NULL, NULL, NULL, NULL, 'parc', 'parcs', NULL, NULL, 14, '2021-04-27 12:12:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(440, 'Jardin', 'jardin.png', 'masculin', 'jardins', NULL, NULL, NULL, NULL, NULL, NULL, 'jardin', 'jardins', NULL, NULL, NULL, '2021-04-27 12:13:40', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(441, 'Stade', 'stade.png', 'masculin', 'stades', NULL, NULL, NULL, NULL, NULL, NULL, 'stade', 'stades', NULL, NULL, 14, '2021-04-27 12:14:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(443, 'Manège', 'manege.png', 'masculin', 'manèges', NULL, NULL, NULL, NULL, NULL, NULL, 'manège', 'manèges', NULL, NULL, 14, '2021-04-27 12:16:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(444, 'Livre', 'livre1.png', 'masculin', 'livres', NULL, NULL, NULL, NULL, NULL, NULL, 'livre', 'livres', NULL, NULL, 19, '2021-04-27 12:17:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(445, 'Livre', 'livre.png', 'masculin', 'livres', NULL, NULL, NULL, NULL, NULL, NULL, 'livre', 'livres', NULL, NULL, 17, '2021-04-27 12:18:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(446, 'Éducatrice', 'educatrice.png', 'féminin', 'éducatrices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'éducatrice', 'éducatrices', 18, '2021-04-27 12:19:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(447, 'Aquarium', 'aquarium.png', 'masculin', 'aquariums', NULL, NULL, NULL, NULL, NULL, NULL, 'aquarium', 'aquariums', NULL, NULL, 17, '2021-04-27 12:20:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(448, 'Bonbon', 'bonbon.png', 'masculin', 'bonbons', NULL, NULL, NULL, NULL, NULL, NULL, 'bonbon', 'bonbons', NULL, NULL, 5, '2021-04-27 12:21:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(449, 'Un', 'un1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Uns', NULL, NULL, NULL, '2021-04-27 12:22:40', NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(450, 'Une', 'une.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unes', NULL, '2021-04-27 12:23:40', NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(451, 'L\'', 'l.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-27 12:24:40', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(452, 'Faire', 'faire.png', NULL, NULL, 'fais', 'fais', 'fait', 'faisons', 'faites', 'font', NULL, NULL, NULL, NULL, 3, '2021-04-27 12:25:40', NULL, NULL, 'ferai', 'feras', 'fera', 'ferons', 'ferez', 'feront', 'ai fait', 'as fait', 'a fait', 'avons fait', 'avez fait', 'ont fait'),
(453, 'Souffler', 'souffler.png', NULL, NULL, 'souffle', 'souffles', 'souffle', 'soufflons', 'soufflez', 'soufflent', NULL, NULL, NULL, NULL, 3, '2021-04-27 12:26:40', NULL, NULL, 'soufflerai', 'souffleras', 'soufflera', 'soufflerons', 'soufflerez', 'souffleront', 'ai soufflé', 'as soufflé', 'a soufflé', 'avons soufflé', 'avez soufflé', 'ont soufflé'),
(454, 'Fermer', 'fermer.png', NULL, NULL, 'ferme', 'fermes', 'ferme', 'fermons', 'fermez', 'ferment', NULL, NULL, NULL, NULL, 3, '2021-04-27 12:27:40', NULL, NULL, 'fermerai', 'fermeras', 'fermera', 'fermerons', 'fermerez', 'fermeront', 'ai fermé', 'as fermé', 'a fermé', 'avons fermé', 'avez fermé', 'ont fermé'),
(455, 'Ouvrir', 'ouvrir.png', NULL, NULL, 'ouvre', 'ouvres', 'ouvre', 'ouvrons', 'ouvrez', 'ouvrent', NULL, NULL, NULL, NULL, 3, '2021-04-27 12:28:40', NULL, NULL, 'ouvrirai', 'ouvriras', 'ouvrira', 'ouvrirons', 'ouvrirez', 'ouvriront', 'ai ouvert', 'as ouvert', 'a ouvert', 'avons ouvert', 'avez ouvert', 'ont ouvert'),
(456, 'Ranger', 'ranger.png', NULL, NULL, 'range', 'ranges', 'range', 'rangeons', 'rangez', 'rangent', NULL, NULL, NULL, NULL, 3, '2021-04-27 12:29:40', NULL, NULL, 'rangerai', 'rangeras', 'rangera', 'rangerons', 'rangerez', 'rangeront', 'ai rangé', 'as rangé', 'a rangé', 'avons rangé', 'avez rangé', 'ont rangé'),
(457, 'Mettre', 'mettre.png', NULL, NULL, 'mets', 'mets', 'met', 'mettons', 'mettez', 'mettent', NULL, NULL, NULL, NULL, 3, '2021-04-27 12:30:40', NULL, NULL, 'mettrai', 'mettras', 'mettra', 'mettrons', 'mettrez', 'mettront', 'ai mis', 'as mis', 'a mis', 'avons mis', 'avez mis', 'ont mis'),
(458, 'Ils', 'ils.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'il', NULL, NULL, NULL, 1, '2021-04-27 15:22:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(459, 'Elles', 'elles.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'elle', NULL, 1, '2021-04-27 15:23:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(460, 'Chaud', 'chaud.png', 'masculin', 'chauds', NULL, NULL, NULL, NULL, NULL, NULL, 'chaud', 'chauds', 'chaude', 'chaudes', 4, '2021-05-06 13:38:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(461, 'Froid', 'froid.png', 'masculin', 'froids', NULL, NULL, NULL, NULL, NULL, NULL, 'froid', 'froids', 'froide', 'froides', 4, '2021-05-06 13:39:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(462, 'Carré', 'carre.png', 'masculin', 'carrés', NULL, NULL, NULL, NULL, NULL, NULL, 'carré', 'carrés', 'carrée', 'carrées', 25, '2021-05-16 15:22:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(463, 'Cercle', 'cercle.png', 'masculin', 'cercles', NULL, NULL, NULL, NULL, NULL, NULL, 'cercle', 'cercles', NULL, NULL, 25, '2021-05-16 15:23:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(464, 'Coeur', 'coeur.png', 'masculin', 'coeurs', NULL, NULL, NULL, NULL, NULL, NULL, 'coeur', 'coeurs', NULL, NULL, 25, '2021-05-16 15:24:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(465, 'Ovale', 'ovale.png', 'masculin', 'ovales', NULL, NULL, NULL, NULL, NULL, NULL, 'ovale', 'ovales', NULL, NULL, 25, '2021-05-16 15:25:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(466, 'Rectangle', 'rectangle.png', 'masculin', 'carrés', NULL, NULL, NULL, NULL, NULL, NULL, 'rectangle', 'rectangles', NULL, NULL, 25, '2021-05-16 15:26:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(467, 'Triangle', 'triangle.png', 'masculin', 'triangles', NULL, NULL, NULL, NULL, NULL, NULL, 'triangle', 'triangles', NULL, NULL, 25, '2021-05-16 15:27:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(468, 'Cartable', 'cartable.png', 'masculin', 'cartables', NULL, NULL, NULL, NULL, NULL, NULL, 'cartable', 'cartable', NULL, NULL, 19, '2021-05-23 15:22:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(469, 'Machine à laver', 'machineALaver.png', 'féminin', 'machines à laver', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'machine à laver', 'machines à laver', 17, '2021-05-23 15:23:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(470, 'Aquarium', 'aquarium1.png', 'masculin', 'aquariums', NULL, NULL, NULL, NULL, NULL, NULL, 'aquarium', 'aquariums', NULL, NULL, 14, '2021-05-23 15:24:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(471, 'Avec', 'avec.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-02 19:45:18', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(483, 'Feu vert', 'feuVert.png', 'masculin', 'feux verts', NULL, NULL, NULL, NULL, NULL, NULL, 'feu vert', 'feux verts', NULL, NULL, 31, '2021-07-20 14:30:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(484, 'Feu rouge', 'feuRouge.png', 'masculin', 'feux rouges', NULL, NULL, NULL, NULL, NULL, NULL, 'feu rouge', 'feux rouges', NULL, NULL, 31, '2021-07-20 14:31:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(485, 'Passage piéton', 'passagePieton.png', 'masculin', 'passages piéton', NULL, NULL, NULL, NULL, NULL, NULL, 'passage piéton', 'passages piéton', NULL, NULL, 31, '2021-07-20 14:36:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 'Passage autorisé', 'passageAutorise.png', 'masculin', 'passages autorisés', NULL, NULL, NULL, NULL, NULL, NULL, 'passage autorisé', 'passages autorisés', NULL, NULL, 31, '2021-07-20 14:41:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 'Passage non autorisé', 'passageNonAutorise.png', 'masculin', 'passages non autorisés', NULL, NULL, NULL, NULL, NULL, NULL, 'passage non autorisé', 'passages non autorisés', NULL, NULL, 31, '2021-07-20 14:42:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(491, 'Interdit aux piétons', 'interditAuxPietons.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, '2021-07-20 14:49:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(492, 'Acheter', 'acheter.png', NULL, NULL, 'achète', 'achètes', 'achète', 'achetons', 'achetez', 'achètent', NULL, NULL, NULL, NULL, 3, '2021-07-20 15:00:43', NULL, NULL, 'achèterai', 'achèteras', 'achètera', 'achèterons', 'achèterez', 'achèteront', 'ai acheté', 'as acheté', 'a acheté', 'avons acheté', 'avez acheté', 'ont acheté'),
(493, 'Lever', 'lever.png', NULL, NULL, 'lève', 'lèves', 'lève', 'levons', 'levez', 'lèvent', NULL, NULL, NULL, NULL, 3, '2021-07-20 15:04:04', NULL, NULL, 'lèverai', 'lèveras', 'lèvera', 'lèverons', 'lèverez', 'lèveront', 'ai levé', 'as levé', 'a levé', 'avons levé', 'avez levé', 'ont levé'),
(494, 'Aéroport', 'aeroport.png', 'masculin', 'aéroports', NULL, NULL, NULL, NULL, NULL, NULL, 'aéroport', 'aéroports', NULL, NULL, 14, '2021-07-20 15:06:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(495, 'Gare routière', 'gareRoutiere.png', 'féminin', 'gares routières', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gare routière', 'gares routières', 14, '2021-07-20 15:08:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(496, 'Quai', 'quai.png', 'masculin', 'quais', NULL, NULL, NULL, NULL, NULL, NULL, 'quai', 'quais', NULL, NULL, 14, '2021-07-20 15:10:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(497, 'Rue', 'rue.png', 'féminin', 'rues', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rue', 'rues', 14, '2021-07-20 15:10:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 'Passage piéton', 'passagePietonL.png', 'masculin', 'passages piéton', NULL, NULL, NULL, NULL, NULL, NULL, 'passage piéton', 'passages piéton', NULL, NULL, 14, '2021-07-20 15:12:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(499, 'Rayons', 'rayons.png', 'masculin', 'rayons', NULL, NULL, NULL, NULL, NULL, NULL, 'rayon', 'rayons', NULL, NULL, NULL, '2021-07-20 15:13:07', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 'Caisse de supermarché', 'caisseDeSupermarche.png', 'féminin', 'caisses de supermarché', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'caisse de supermarché', 'caisses de supermarché', NULL, '2021-07-20 15:14:27', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(501, 'Argent', 'argent.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, '2021-07-20 15:19:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 'Billets', 'billets.png', 'masculin', 'billets', NULL, NULL, NULL, NULL, NULL, NULL, 'billet', 'billets', NULL, NULL, 17, '2021-07-20 15:23:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(503, 'Caisse enregistreuse', 'caisseEnregistreuse.png', 'féminin', 'caisses enregistreuses', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'caisse enregistreuse', 'caisses enregistreuses', 17, '2021-07-20 15:25:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(504, 'Monnaie', 'monnaie.png', 'féminin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, '2021-07-20 15:28:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(505, 'Pièces', 'pieces.png', 'féminin', 'pièces', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pièce', 'pièces', 17, '2021-07-20 15:30:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(506, 'Ticket', 'ticket.png', 'masculin', 'tickets', NULL, NULL, NULL, NULL, NULL, NULL, 'ticket', 'tickets', NULL, NULL, 17, '2021-07-20 15:41:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(507, 'Traverser', 'traverser.png', NULL, NULL, 'traverse', 'traverses', 'traverse', 'traversons', 'traversez', 'traversent', NULL, NULL, NULL, NULL, 3, '2021-07-20 15:43:34', NULL, NULL, 'traverserai', 'traverseras', 'traversera', 'traverserons', 'traverserez', 'traverseront', 'ai traversé', 'as traversé', 'a traversé', 'avons traversé', 'avez traversé', 'ont traversé'),
(508, 'Rendre', 'rendre.png', NULL, NULL, 'rends', 'rends', 'rend', 'rendons', 'rendez', 'rendent', NULL, NULL, NULL, NULL, 3, '2021-07-20 15:45:33', NULL, NULL, 'rendrai', 'rendras', 'rendra', 'rendrons', 'rendrez', 'rendront', 'ai rendu', 'as rendu', 'a rendu', 'avons rendu', 'avez rendu', 'ont rendu'),
(509, 'Verser', 'verser.gif', NULL, NULL, 'verse', 'verses', 'verse', 'versons', 'versez', 'versent', NULL, NULL, NULL, NULL, 3, '2021-07-28 07:29:05', NULL, NULL, 'verserai', 'verseras', 'versera', 'verserons', 'verserez', 'verseront', 'ai versé', 'as versé', 'a versé', 'avons versé', 'avez versé', 'ont versé'),
(510, 'Neige', 'neige.gif', 'féminin', 'neiges', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'neige', 'neiges', 15, '2021-07-28 07:36:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(511, 'Où', 'ouL.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, '2021-07-28 07:37:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(512, 'football', 'football.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:13:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(513, 'vélo', 'vélo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:25:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(514, 'basket-ball', 'basket-ball.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:26:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(515, 'courir', 'courirSport.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:28:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(516, 'karate', 'karate.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:28:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(517, 'nager', 'nageur.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:29:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(518, 'escalader', 'escalader.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:45:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(519, 'équitation', 'équitation.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:46:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(520, 'ping-pong', 'ping-pong.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:50:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(521, 'patinage', 'patinage.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:52:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(522, 'jeux vidéos', 'jeux vidéos.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:53:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(523, 'tennis', 'tennis.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:54:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(524, 'volley-ball', 'volley-ball.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:54:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(525, 'bowling', 'bowling.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(526, 'ballon', 'ballon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(527, 'camion', 'truck.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(528, 'robot', 'robot.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(529, 'jeux vidéo', 'jeux vidéo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(530, 'figurine', 'figurine.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(531, 'puzzle', 'puzzle.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(532, 'poupée', 'poupée.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(533, 'corde à sauter', 'sauter à la corde.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(534, 'maison de poupée', 'maison de poupée.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(535, 'vélo', 'bike.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(536, 'voiture', 'rallye car.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(537, 'pistolet à eau', 'pistolet à eau.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(538, 'dinette', 'dinette.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(539, 'toupie', 'toupie.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(540, 'babyfoot', 'babyfoot.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(541, 'train', 'train toy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(542, 'jeux de société', 'jeux de société.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(543, 'bateau', 'bateau toy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2022-04-16 10:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(544, 'tasse', 'tasse.png', NULL, 'tasses', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2022-11-04 15:24:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(545, 'fourchette', 'fourchette.png', NULL, 'fourchettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2022-11-04 15:24:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(546, 'assiette', 'assiette.png', NULL, 'assiettes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2022-11-04 15:25:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(547, 'verre', 'verre.png', NULL, 'verres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2022-11-04 15:25:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(548, 'couteau', 'couteau.png', NULL, 'couteaux', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2022-11-04 15:26:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(549, 'casserole', 'casserole.png', NULL, 'casseroles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2022-11-04 15:26:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(551, 'heure_0h', 'heure_0h.png', 'féminin', 'heures', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, '2022-11-10 15:20:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(556, 'heure_0h15', 'heure_0h15.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, '2022-11-10 15:26:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(557, 'heure_0h30', 'heure_0h30.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, '2022-11-10 15:27:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(566, 'matin', 'temps_matin.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2022-11-10 16:28:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(567, 'midi', 'temps_midi.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2022-11-10 16:31:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(568, '?', 'interrogatif.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 12:59:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(569, 'combien', 'interrogatif_combien.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:05:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(570, 'comment', 'interrogatif_comment.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:05:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(571, 'Ou', 'interrogatif_ou.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:06:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(572, 'Pourquoi', 'interrogatif_pourquoi.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:07:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(573, 'Quand', 'interrogatif_quand.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:08:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(574, 'Que', 'interrogatif_que.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:08:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(575, 'Qui', 'interrogatif_qui.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:09:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(576, 'Quoi', 'interrogatif_quoi.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2022-11-12 13:09:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(577, 'Jour', 'temps_jour.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2022-11-12 13:11:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(581, 'Nuit', 'temps_nuit.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2022-11-12 13:15:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(582, 'Soir', 'temps_soir.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2022-11-12 13:16:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(583, 'après-midi', 'temps_apresmidi.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2022-11-12 13:25:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `picto_actions`
--

CREATE TABLE `picto_actions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `picto_actions`
--

INSERT INTO `picto_actions` (`id`, `name`, `filename`, `update_at`) VALUES
(1, 'Vouloir', 'vouloir.png', '2022-11-10 14:25:30');

-- --------------------------------------------------------

--
-- Structure de la table `picto_adjectifs`
--

CREATE TABLE `picto_adjectifs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_aliments`
--

CREATE TABLE `picto_aliments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_animaux`
--

CREATE TABLE `picto_animaux` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_autres_mots`
--

CREATE TABLE `picto_autres_mots` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_boissons`
--

CREATE TABLE `picto_boissons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_chiffres`
--

CREATE TABLE `picto_chiffres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_comportements`
--

CREATE TABLE `picto_comportements` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_corps_humain`
--

CREATE TABLE `picto_corps_humain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_couleurs`
--

CREATE TABLE `picto_couleurs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_couverts`
--

CREATE TABLE `picto_couverts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_emotions`
--

CREATE TABLE `picto_emotions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_formes`
--

CREATE TABLE `picto_formes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_fruits_legumes`
--

CREATE TABLE `picto_fruits_legumes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_jouet`
--

CREATE TABLE `picto_jouet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_langues_des_signes`
--

CREATE TABLE `picto_langues_des_signes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_lieux`
--

CREATE TABLE `picto_lieux` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_meteo`
--

CREATE TABLE `picto_meteo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_multimedia`
--

CREATE TABLE `picto_multimedia` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_objets`
--

CREATE TABLE `picto_objets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_orientation`
--

CREATE TABLE `picto_orientation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_personnes`
--

CREATE TABLE `picto_personnes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_petits_mots`
--

CREATE TABLE `picto_petits_mots` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_scolarite`
--

CREATE TABLE `picto_scolarite` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_securite_routiere`
--

CREATE TABLE `picto_securite_routiere` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_sports`
--

CREATE TABLE `picto_sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_sujets`
--

CREATE TABLE `picto_sujets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picto_transports`
--

CREATE TABLE `picto_transports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `text`) VALUES
(4, 'Quel âge as-tu ?'),
(5, 'Qu\'as-tu mangé ce matin ?'),
(6, 'Que veux-tu manger ?'),
(7, 'Quelle est ta boisson préférée ?'),
(8, 'Quel est ton sport préféré ?'),
(9, 'Quel est ton animal préféré ?'),
(10, 'Quelle est ta couleur préférée ?'),
(11, 'Avec quoi veux-tu jouer ?'),
(12, 'Que veux-tu faire plus tard ?'),
(13, 'Où aimes-tu aller ?'),
(14, 'Où as-tu mal ?'),
(15, 'Comment te sens-tu ?'),
(16, 'Comment te sens-tu quand tu es à l\'école ?'),
(17, 'Comment te sens-tu quand tu es à la maison ?'),
(18, 'De quelle couleur sont tes yeux ?'),
(19, 'Quel temps fait-il aujourd\'hui ?'),
(20, 'Quels vêtements choisir quand il fait froid ?'),
(21, 'Combien as-tu de doigts ?'),
(22, 'Quelle image désigne le cou ?'),
(23, 'Quelle partie de ton corps permet d\'entendre ?'),
(24, 'Qui te coupe les cheveux ?'),
(25, 'Qui éteint le feu ?'),
(26, 'Sélectionne des légumes ...'),
(27, 'Où vas-tu acheter le pain ?'),
(28, 'De quelle couleur est l\'herbe dans le jardin ?'),
(29, 'Où peux-tu prendre le train ?'),
(30, 'Avec quel moyen de transport peut-on aller dans l\'espace ?'),
(31, 'Quel couvert tu veux utiliser ?'),
(32, 'Quelle heure est il ?'),
(33, 'Quels sont les noms des différents moments de la journée ?');

-- --------------------------------------------------------

--
-- Structure de la table `question_category`
--

CREATE TABLE `question_category` (
  `question_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(1, 23, '90Ky9ejY1e8JTUGRlyLS', 'OKxXMEYJV1rL4XoUExfCCqtlNbVHk+9rPJ0dN25Qg4k=', '2022-04-13 13:57:41', '2022-04-13 14:57:40');

-- --------------------------------------------------------

--
-- Structure de la table `sentence`
--

CREATE TABLE `sentence` (
  `id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sentence`
--

INSERT INTO `sentence` (`id`, `text`, `audio`, `created_at`, `patient_id`) VALUES
(1, 'Je Regarder Des Oiseau Correct', NULL, '2021-03-30 13:01:17', 14),
(2, 'Je regarder mon petit gâteaux', NULL, '2021-03-30 13:09:38', 14),
(3, 'je vouloir mon gâteaux', NULL, '2021-04-01 20:12:25', 14),
(4, 'je regarder', NULL, '2021-04-01 20:14:21', 14),
(5, 'vous', NULL, '2021-04-01 20:14:40', 14),
(6, 'je regarder des lapin', NULL, '2021-04-01 20:18:41', 14),
(7, 'vouloir regarder boire', NULL, '2021-04-01 20:20:12', 14),
(8, 'Je vouloir regarder ton dinosaure décoiffé', NULL, '2021-04-07 10:32:03', 14),
(9, 'Je vouloir', NULL, '2021-04-09 09:17:12', 14),
(10, 'Je vouloir', NULL, '2021-04-09 09:18:51', 14),
(11, 'Je vouloir', NULL, '2021-04-09 09:20:11', 14),
(12, 'Je vouloir des glace', NULL, '2021-04-15 09:53:17', 14),
(13, 'Je tu', NULL, '2021-04-15 13:16:13', 14),
(14, 'Je ne veux pas des sodas', NULL, '2021-04-15 13:18:59', 14),
(15, 'Je veux des beurres', NULL, '2021-04-15 13:20:19', 14),
(16, 'Elle ne boit pas ma grenouille', NULL, '2021-04-15 13:22:27', 14),
(17, 'Je tu', NULL, '2021-04-15 13:23:15', 14),
(18, 'Je regarde ces fromages', NULL, '2021-04-15 14:33:07', 14),
(19, 'Je regarde ce canard', NULL, '2021-04-15 18:27:39', 14),
(20, 'Je ne veux pas des pâtes', NULL, '2021-04-16 11:10:16', 14),
(21, 'Je regarde des oiseauxxx', NULL, '2021-04-17 12:28:07', 14),
(22, 'Je tu il nous elle eux', NULL, '2021-04-20 10:30:04', 14),
(23, 'Je regarde des canards', NULL, '2021-04-20 11:06:55', 14),
(24, 'Je ne crie pas gros papillon', NULL, '2021-04-20 11:08:19', 14),
(25, 'Je ne regarde pas ce cheval', NULL, '2021-04-25 22:56:11', 14),
(26, 'Oui non peur papa papa papa', NULL, '2021-04-26 15:17:41', 14),
(27, 'Je veux des citrons', NULL, '2021-04-28 10:04:26', 16),
(28, 'Je ne bois pas mon jus d\'orange', NULL, '2021-04-28 10:05:07', 16),
(29, 'Je regarde des lapins', NULL, '2021-05-04 11:30:29', 14),
(30, 'Je suis joyeux', NULL, '2021-05-04 16:56:21', 17),
(31, 'Tu ne veux pas mon chocolat', NULL, '2021-05-04 16:56:54', 17),
(32, 'Magasin de glacess maisons pharmacies', NULL, '2021-05-23 19:11:31', 17),
(33, 'Je veux boire du lait', NULL, '2021-05-26 14:29:59', 14),
(34, 'Je veux manger des flans', NULL, '2021-05-27 13:21:20', 14),
(35, 'Je veux manger des flans', NULL, '2021-06-03 12:43:45', 14),
(36, 'Je regarde manger des grands chats', NULL, '2021-06-15 21:30:33', 14),
(37, NULL, '1a3875058dabb2a13b00a233f1e5efe2.mp3', '2021-06-28 07:39:03', 1),
(38, 'Je bois soda correct beurre cheval cinq', NULL, '2021-06-28 09:28:35', 1),
(39, NULL, '406ea0ffe29f456c7c91b74b33b78412.mp3', '2021-07-28 07:10:47', 1),
(40, NULL, 'ecb2c0e7966f6a13d5e68f02801d865a.mp3', '2022-04-16 11:38:07', 22);

-- --------------------------------------------------------

--
-- Structure de la table `sentence_pictogram`
--

CREATE TABLE `sentence_pictogram` (
  `sentence_id` int(11) NOT NULL,
  `pictogram_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `category_id_id` int(11) NOT NULL,
  `therapist_id_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `filename`, `update_at`, `category_id_id`, `therapist_id_id`) VALUES
(3, 'École', 'ecole.png', '2021-06-28 15:27:18', 14, 1),
(4, 'Maison', 'maison.png', '2021-06-29 10:27:21', 14, 1),
(6, 'Magasins', 'magasins.png', '2021-07-21 13:43:47', 14, 1),
(7, 'Famille', 'Famille.png', '2021-07-21 14:09:31', 18, 1),
(8, 'Objets de la cuisine', 'objetsCuisine.png', '2021-07-26 07:34:30', 17, 1),
(9, 'Objets de la salle de bain', 'objetsSalleDeBain.png', '2021-07-26 07:46:03', 17, 1),
(10, 'Lettre A', 'A.png', '2021-07-27 09:25:22', 10, 1),
(11, 'Lettre C', 'C.png', '2021-07-27 10:03:44', 10, 1),
(12, 'Lettre D', 'D.png', '2021-07-27 10:04:12', 10, 1),
(13, 'Lettre E', 'E.png', '2021-07-27 10:04:27', 10, 1),
(14, 'Lettre L', 'L.png', '2021-07-27 10:04:48', 10, 1),
(15, 'Lettre M', 'M.png', '2021-07-27 10:05:03', 10, 1),
(16, 'Lettre N', 'N.png', '2021-07-27 10:05:27', 10, 1),
(17, 'Lettre S', 'S.png', '2021-07-27 10:05:51', 10, 1),
(18, 'Lettre T', 'T.png', '2021-07-27 10:06:19', 10, 1),
(19, 'Lettre U', 'U.png', '2021-07-27 10:06:35', 10, 1),
(20, 'Lettre V', 'V.png', '2021-07-27 10:06:48', 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `therapist`
--

CREATE TABLE `therapist` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `therapist`
--

INSERT INTO `therapist` (`id`, `email`, `roles`, `password`, `first_name`, `last_name`, `job`, `institution_id`) VALUES
(1, 'rudrauft@fake.com', '[\"ROLE_SUPER_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$uYjjtRweDTqk9FkEwxUlxQ$KhIgkwb+xD/8jJjQDj9Uz+FBW9BUcMywkEJoPJtx6uA', 'Tristan', 'Rudrauf', 'Dev', 1),
(8, 'palvac@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$QlFxbXV3emJLQ3p5YWxFSQ$3WBTelwLXozLq0HZ1CgkwdzCzmfejfkmWSt2SjCNSPE', 'Pal', 'Vac', 'Dev', NULL),
(17, 'Thérapeute désactivé numéro 17', '[]', '$argon2id$v=19$m=65536,t=4,p=1$uYjjtRweDTqk9FkEwxUlxQ$KhIgkwb+xD/8jJjQDj9Uz+FBW9BUcMywkEJoPJtx6uA', 'Thérapeute désactivé numéro 17', 'Thérapeute désactivé numéro 17', 'Dev', 1),
(18, 'Thérapeute désactivé numéro 18', '[]', '$argon2id$v=19$m=65536,t=4,p=1$uYjjtRweDTqk9FkEwxUlxQ$KhIgkwb+xD/8jJjQDj9Uz+FBW9BUcMywkEJoPJtx6uA', 'Thérapeute désactivé numéro 18', 'Thérapeute désactivé numéro 18', 'Dev', 1),
(20, 'Thérapeute désactivé numéro 20', '[]', '$argon2id$v=19$m=65536,t=4,p=1$jom3NDmxz9PLMUYYHjyQTg$WpE5QA7BGidfMiLi0ndBYxGaJeUzygjU4FDDw33a/LA', 'Thérapeute désactivé numéro 20', 'Thérapeute désactivé numéro 20', 'Dev', 1),
(21, 'saleh@test.com', '[]', '$2y$13$UsDTWuX47Ccdv1mCiI8rReetpjNjJfggDQ5moPK1FIR1xUntysq1W', 'saleh', 'saleh', 'CRP', 1),
(22, 'saleh@test.fr', '[]', '$2y$13$Dpvk.Xy1AZwaJ6ATTYVPp.fA1c7QkM3s/CaMnfAuwfIZnb/Z3xiZ.', 'saleh', 'saleh', 'saleh', 4),
(23, 'ss@test.com', '[]', '$2y$13$ILcGhGDNiwMq6zxh4l57werikgQbWg1WhzYwtagvY/lkmb37k8NR6', 'ss', 'ss', 'ss', 3),
(24, 'bleuechabani@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$kyDz3zTfIBsvDM0UR7XBMOm0vuyT1VhSsPW6B5Puuyg6VVN2/QhQW', 'ZARGA', 'CHABANI', 'stagaire', 1),
(25, 'Naimafake@gmail.com', '[]', '$2y$13$fTh..TvXMVyXBVPU1dvGm.zwDm4aEEC9SzkkXWq0LCFRUyhCZzfoy', 'naima', 'mohammedi', 'stagaire', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_64C19C143E8B094` (`therapist_id`),
  ADD KEY `IDX_64C19C1688A12E1` (`picto_aliments_id`),
  ADD KEY `IDX_64C19C176B04867` (`picto_animaux_id`),
  ADD KEY `IDX_64C19C1B8651202` (`picto_autres_mots_id`),
  ADD KEY `IDX_64C19C1966C1988` (`picto_boissons_id`),
  ADD KEY `IDX_64C19C17C1B7143` (`picto_chiffres_id`),
  ADD KEY `IDX_64C19C1C85032E1` (`picto_comportements_id`),
  ADD KEY `IDX_64C19C1E391470C` (`picto_corps_humain_id`),
  ADD KEY `IDX_64C19C1BBDEA620` (`picto_couleurs_id`),
  ADD KEY `IDX_64C19C1C4E04EDB` (`picto_couverts_id`),
  ADD KEY `IDX_64C19C11D36F25` (`picto_emotions_id`),
  ADD KEY `IDX_64C19C1B43566D0` (`picto_formes_id`),
  ADD KEY `IDX_64C19C1AEE61539` (`picto_fruits_legumes_id`),
  ADD KEY `IDX_64C19C165379B3E` (`picto_jouet_id`),
  ADD KEY `IDX_64C19C1554ACD67` (`picto_langues_des_signes_id`),
  ADD KEY `IDX_64C19C1E9688D22` (`picto_lieux_id`),
  ADD KEY `IDX_64C19C187C6CE52` (`picto_meteo_id`),
  ADD KEY `IDX_64C19C1DE28EADF` (`picto_multimedia_id`),
  ADD KEY `IDX_64C19C166712BAC` (`picto_objets_id`),
  ADD KEY `IDX_64C19C1866DB820` (`picto_orientation_id`),
  ADD KEY `IDX_64C19C1BB85C624` (`picto_personnes_id`),
  ADD KEY `IDX_64C19C1B264C09B` (`picto_petits_mots_id`),
  ADD KEY `IDX_64C19C15843B2E` (`picto_scolarite_id`),
  ADD KEY `IDX_64C19C194DF2DE` (`picto_securite_routiere_id`),
  ADD KEY `IDX_64C19C15EF0B11B` (`picto_sports_id`),
  ADD KEY `IDX_64C19C15AFBA2FB` (`picto_sujets_id`),
  ADD KEY `IDX_64C19C1AFF56DBE` (`picto_transports_id`),
  ADD KEY `IDX_64C19C16E35EF3B` (`picto_actions_id`),
  ADD KEY `IDX_64C19C1C8B1DE37` (`picto_adjectifs_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3A9F98E577153098` (`code`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CFBDFA1443E8B094` (`therapist_id`),
  ADD KEY `IDX_CFBDFA146B899279` (`patient_id`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictogram`
--
ALTER TABLE `pictogram`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_56E0A15F12469DE2` (`category_id`),
  ADD KEY `IDX_56E0A15F43E8B094` (`therapist_id`),
  ADD KEY `IDX_56E0A15FF78A56EE` (`subcategory_id_id`);

--
-- Index pour la table `picto_actions`
--
ALTER TABLE `picto_actions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_adjectifs`
--
ALTER TABLE `picto_adjectifs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_aliments`
--
ALTER TABLE `picto_aliments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_animaux`
--
ALTER TABLE `picto_animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_autres_mots`
--
ALTER TABLE `picto_autres_mots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_boissons`
--
ALTER TABLE `picto_boissons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_chiffres`
--
ALTER TABLE `picto_chiffres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_comportements`
--
ALTER TABLE `picto_comportements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_corps_humain`
--
ALTER TABLE `picto_corps_humain`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_couleurs`
--
ALTER TABLE `picto_couleurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_couverts`
--
ALTER TABLE `picto_couverts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_emotions`
--
ALTER TABLE `picto_emotions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_formes`
--
ALTER TABLE `picto_formes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_fruits_legumes`
--
ALTER TABLE `picto_fruits_legumes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_jouet`
--
ALTER TABLE `picto_jouet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_langues_des_signes`
--
ALTER TABLE `picto_langues_des_signes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_lieux`
--
ALTER TABLE `picto_lieux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_meteo`
--
ALTER TABLE `picto_meteo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_multimedia`
--
ALTER TABLE `picto_multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_objets`
--
ALTER TABLE `picto_objets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_orientation`
--
ALTER TABLE `picto_orientation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_personnes`
--
ALTER TABLE `picto_personnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_petits_mots`
--
ALTER TABLE `picto_petits_mots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_scolarite`
--
ALTER TABLE `picto_scolarite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_securite_routiere`
--
ALTER TABLE `picto_securite_routiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_sports`
--
ALTER TABLE `picto_sports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_sujets`
--
ALTER TABLE `picto_sujets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picto_transports`
--
ALTER TABLE `picto_transports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question_category`
--
ALTER TABLE `question_category`
  ADD PRIMARY KEY (`question_id`,`category_id`),
  ADD KEY `IDX_6544A9CD1E27F6BF` (`question_id`),
  ADD KEY `IDX_6544A9CD12469DE2` (`category_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `sentence`
--
ALTER TABLE `sentence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9D664ED56B899279` (`patient_id`);

--
-- Index pour la table `sentence_pictogram`
--
ALTER TABLE `sentence_pictogram`
  ADD PRIMARY KEY (`sentence_id`,`pictogram_id`),
  ADD KEY `IDX_2C8F221A27289490` (`sentence_id`),
  ADD KEY `IDX_2C8F221A16B7C33B` (`pictogram_id`);

--
-- Index pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BCE3F7989777D11E` (`category_id_id`),
  ADD KEY `IDX_BCE3F798D64F11AD` (`therapist_id_id`);

--
-- Index pour la table `therapist`
--
ALTER TABLE `therapist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C3D632FE7927C74` (`email`),
  ADD KEY `IDX_C3D632F10405986` (`institution_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `pictogram`
--
ALTER TABLE `pictogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=584;

--
-- AUTO_INCREMENT pour la table `picto_actions`
--
ALTER TABLE `picto_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `picto_adjectifs`
--
ALTER TABLE `picto_adjectifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_aliments`
--
ALTER TABLE `picto_aliments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_animaux`
--
ALTER TABLE `picto_animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_autres_mots`
--
ALTER TABLE `picto_autres_mots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_boissons`
--
ALTER TABLE `picto_boissons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_chiffres`
--
ALTER TABLE `picto_chiffres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_comportements`
--
ALTER TABLE `picto_comportements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_corps_humain`
--
ALTER TABLE `picto_corps_humain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_couleurs`
--
ALTER TABLE `picto_couleurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_couverts`
--
ALTER TABLE `picto_couverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_emotions`
--
ALTER TABLE `picto_emotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_formes`
--
ALTER TABLE `picto_formes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_fruits_legumes`
--
ALTER TABLE `picto_fruits_legumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_jouet`
--
ALTER TABLE `picto_jouet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_langues_des_signes`
--
ALTER TABLE `picto_langues_des_signes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_lieux`
--
ALTER TABLE `picto_lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_meteo`
--
ALTER TABLE `picto_meteo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_multimedia`
--
ALTER TABLE `picto_multimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_objets`
--
ALTER TABLE `picto_objets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_orientation`
--
ALTER TABLE `picto_orientation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_personnes`
--
ALTER TABLE `picto_personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_petits_mots`
--
ALTER TABLE `picto_petits_mots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_scolarite`
--
ALTER TABLE `picto_scolarite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_securite_routiere`
--
ALTER TABLE `picto_securite_routiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_sports`
--
ALTER TABLE `picto_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_sujets`
--
ALTER TABLE `picto_sujets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picto_transports`
--
ALTER TABLE `picto_transports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sentence`
--
ALTER TABLE `sentence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `therapist`
--
ALTER TABLE `therapist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_64C19C11D36F25` FOREIGN KEY (`picto_emotions_id`) REFERENCES `picto_emotions` (`id`),
  ADD CONSTRAINT `FK_64C19C143E8B094` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`),
  ADD CONSTRAINT `FK_64C19C1554ACD67` FOREIGN KEY (`picto_langues_des_signes_id`) REFERENCES `picto_langues_des_signes` (`id`),
  ADD CONSTRAINT `FK_64C19C15843B2E` FOREIGN KEY (`picto_scolarite_id`) REFERENCES `picto_scolarite` (`id`),
  ADD CONSTRAINT `FK_64C19C15AFBA2FB` FOREIGN KEY (`picto_sujets_id`) REFERENCES `picto_sujets` (`id`),
  ADD CONSTRAINT `FK_64C19C15EF0B11B` FOREIGN KEY (`picto_sports_id`) REFERENCES `picto_sports` (`id`),
  ADD CONSTRAINT `FK_64C19C165379B3E` FOREIGN KEY (`picto_jouet_id`) REFERENCES `picto_jouet` (`id`),
  ADD CONSTRAINT `FK_64C19C166712BAC` FOREIGN KEY (`picto_objets_id`) REFERENCES `picto_objets` (`id`),
  ADD CONSTRAINT `FK_64C19C1688A12E1` FOREIGN KEY (`picto_aliments_id`) REFERENCES `picto_aliments` (`id`),
  ADD CONSTRAINT `FK_64C19C16E35EF3B` FOREIGN KEY (`picto_actions_id`) REFERENCES `picto_actions` (`id`),
  ADD CONSTRAINT `FK_64C19C176B04867` FOREIGN KEY (`picto_animaux_id`) REFERENCES `picto_animaux` (`id`),
  ADD CONSTRAINT `FK_64C19C17C1B7143` FOREIGN KEY (`picto_chiffres_id`) REFERENCES `picto_chiffres` (`id`),
  ADD CONSTRAINT `FK_64C19C1866DB820` FOREIGN KEY (`picto_orientation_id`) REFERENCES `picto_orientation` (`id`),
  ADD CONSTRAINT `FK_64C19C187C6CE52` FOREIGN KEY (`picto_meteo_id`) REFERENCES `picto_meteo` (`id`),
  ADD CONSTRAINT `FK_64C19C194DF2DE` FOREIGN KEY (`picto_securite_routiere_id`) REFERENCES `picto_securite_routiere` (`id`),
  ADD CONSTRAINT `FK_64C19C1966C1988` FOREIGN KEY (`picto_boissons_id`) REFERENCES `picto_boissons` (`id`),
  ADD CONSTRAINT `FK_64C19C1AEE61539` FOREIGN KEY (`picto_fruits_legumes_id`) REFERENCES `picto_fruits_legumes` (`id`),
  ADD CONSTRAINT `FK_64C19C1AFF56DBE` FOREIGN KEY (`picto_transports_id`) REFERENCES `picto_transports` (`id`),
  ADD CONSTRAINT `FK_64C19C1B264C09B` FOREIGN KEY (`picto_petits_mots_id`) REFERENCES `picto_petits_mots` (`id`),
  ADD CONSTRAINT `FK_64C19C1B43566D0` FOREIGN KEY (`picto_formes_id`) REFERENCES `picto_formes` (`id`),
  ADD CONSTRAINT `FK_64C19C1B8651202` FOREIGN KEY (`picto_autres_mots_id`) REFERENCES `picto_autres_mots` (`id`),
  ADD CONSTRAINT `FK_64C19C1BB85C624` FOREIGN KEY (`picto_personnes_id`) REFERENCES `picto_personnes` (`id`),
  ADD CONSTRAINT `FK_64C19C1BBDEA620` FOREIGN KEY (`picto_couleurs_id`) REFERENCES `picto_couleurs` (`id`),
  ADD CONSTRAINT `FK_64C19C1C4E04EDB` FOREIGN KEY (`picto_couverts_id`) REFERENCES `picto_couverts` (`id`),
  ADD CONSTRAINT `FK_64C19C1C85032E1` FOREIGN KEY (`picto_comportements_id`) REFERENCES `picto_comportements` (`id`),
  ADD CONSTRAINT `FK_64C19C1C8B1DE37` FOREIGN KEY (`picto_adjectifs_id`) REFERENCES `picto_adjectifs` (`id`),
  ADD CONSTRAINT `FK_64C19C1DE28EADF` FOREIGN KEY (`picto_multimedia_id`) REFERENCES `picto_multimedia` (`id`),
  ADD CONSTRAINT `FK_64C19C1E391470C` FOREIGN KEY (`picto_corps_humain_id`) REFERENCES `picto_corps_humain` (`id`),
  ADD CONSTRAINT `FK_64C19C1E9688D22` FOREIGN KEY (`picto_lieux_id`) REFERENCES `picto_lieux` (`id`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `FK_CFBDFA1443E8B094` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`),
  ADD CONSTRAINT `FK_CFBDFA146B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);

--
-- Contraintes pour la table `pictogram`
--
ALTER TABLE `pictogram`
  ADD CONSTRAINT `FK_56E0A15F12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_56E0A15F43E8B094` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`),
  ADD CONSTRAINT `FK_56E0A15FF78A56EE` FOREIGN KEY (`subcategory_id_id`) REFERENCES `sub_category` (`id`);

--
-- Contraintes pour la table `question_category`
--
ALTER TABLE `question_category`
  ADD CONSTRAINT `FK_6544A9CD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6544A9CD1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `therapist` (`id`);

--
-- Contraintes pour la table `sentence`
--
ALTER TABLE `sentence`
  ADD CONSTRAINT `FK_9D664ED56B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);

--
-- Contraintes pour la table `sentence_pictogram`
--
ALTER TABLE `sentence_pictogram`
  ADD CONSTRAINT `FK_2C8F221A16B7C33B` FOREIGN KEY (`pictogram_id`) REFERENCES `pictogram` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2C8F221A27289490` FOREIGN KEY (`sentence_id`) REFERENCES `sentence` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `FK_BCE3F7989777D11E` FOREIGN KEY (`category_id_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_BCE3F798D64F11AD` FOREIGN KEY (`therapist_id_id`) REFERENCES `therapist` (`id`);

--
-- Contraintes pour la table `therapist`
--
ALTER TABLE `therapist`
  ADD CONSTRAINT `FK_C3D632F10405986` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
