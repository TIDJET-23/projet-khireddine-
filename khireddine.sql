-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 nov. 2021 à 19:40
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `khireddine`
--

-- --------------------------------------------------------

--
-- Structure de la table `borders`
--

CREATE TABLE `borders` (
  `id` int(6) NOT NULL,
  `border` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `borders`
--

INSERT INTO `borders` (`id`, `border`) VALUES
(11, '<h4>Border Style</h4>\r\n<div style=\"border:solid;\">Defines a solid border</div><br>\r\n<div style=\"border:dotted;\">Defines a dotted border</div><br>\r\n<div style=\"border:dashed;\">Defines a dashed border</div><br>\r\n<div style=\"border:double;\">Defines a double border</div><br>\r\n<div style=\"border:none;\">Defines no border</div><br>\r\n<div style=\"border:hidden;\">Defines a hidden border</div><br>\r\n<div style=\"border:groove;\">Defines a 3D grooved border. The effect depends on the border-color value</div><br>\r\n<div style=\"border:ridge;\">Defines a 3D ridged border. The effect depends on the border-color value</div><br>\r\n<div style=\"border:inset;\">Defines a 3D inset border. The effect depends on the border-color value</div><br>\r\n<div style=\"border:outset;\">Defines a 3D outset border. The effect depends on the border-color value</div><br>'),
(15, '\r\n<span style=\"border-bottom:solid 1px;  padding: 20px;\">border-bottom</span>\r\n<span style=\"border-top:solid 1px;  padding: 20px;\">border-top</span>\r\n<span style=\"border:solid 1px;padding: 20px;\">border</span>\r\n<span style=\"border-left:solid 1px;  padding: 20px;\">border-left</span>\r\n<span style=\"border-right:solid 1px;  padding: 20px;\">border-right</span>\r\n'),
(16, '<h4>border color</h4>\r\n<div class=\"border border-primary\">border-primary</div><br>\r\n<div class=\"border border-secondary\">border-secondary</div><br>\r\n<div class=\"border border-success\">border-success</div><br>\r\n<div class=\"border border-danger\">border-danger</div><br>\r\n<div class=\"border border-warning\">border-warning</div><br>\r\n<div class=\"border border-info\">border-info</div><br>\r\n<div class=\"border border-light\">border-light</div><br>\r\n<div class=\"border border-dark\">border-dark</div><br>\r\n<div class=\"border border-white\">border-white</div><br>'),
(31, '<h4>Border Opacity</h4>\r\n<div class=\"grid grid-cols-2 gap-2 sm:grid-cols-5\">\r\n    <div class=\"h-16 rounded border-4 border-light-blue-500 border-opacity-100 font-extrabold text-light-blue-600 flex justify-center items-center\">100%</div>\r\n    <div class=\"h-16 rounded border-4 border-light-blue-500 border-opacity-75 font-extrabold text-light-blue-600 flex justify-center items-center\">75%</div>\r\n    <div class=\"h-16 rounded border-4 border-light-blue-500 border-opacity-50 font-extrabold text-light-blue-600 flex justify-center items-center\">50%</div>\r\n    <div class=\"h-16 rounded border-4 border-light-blue-500 border-opacity-25 font-extrabold text-light-blue-600 flex justify-center items-center\">25%</div>\r\n    <div class=\"h-16 rounded border-4 border-light-blue-500 border-opacity-0 font-extrabold text-light-blue-600 flex justify-center items-center\">0%</div>\r\n  </div>'),
(32, '<h4>border radius</h4>\r\n\r\n<br><br>\r\n  <div class=\"flex justify-center items-center space-x-6\">\r\n    <div class=\"bg-indigo-500 px-6 py-3 text-white text-center font-extrabold rounded-full\">Pill Shape</div>\r\n    <div class=\"bg-indigo-500 h-24 w-24 text-white text-center font-extrabold flex items-center justify-center rounded-full\">Circle</div>\r\n  </div>\r\n<hr>\r\n<div class=\"relative overflow-hidden mb-8\"><div class=\"rounded-t-xl overflow-hidden bg-gradient-to-r from-light-blue-50 to-light-blue-100 p-10\">\r\n  <div class=\"grid gap-2 sm:grid-cols-2 lg:grid-cols-4\">\r\n    <div class=\"p-6 bg-light-blue-500 text-white text-center font-extrabold flex items-center justify-center rounded-sm\">.rounded-sm</div>\r\n    <div class=\"p-6 bg-light-blue-500 text-white text-center font-extrabold flex items-center justify-center rounded\">.rounded</div>\r\n    <div class=\"p-6 bg-light-blue-500 text-white text-center font-extrabold flex items-center justify-center rounded-md\">.rounded-md</div>\r\n    <div class=\"p-6 bg-light-blue-500 text-white text-center font-extrabold flex items-center justify-center rounded-lg\">.rounded-lg</div>\r\n  </div>\r\n</div>\r\n\r\n<hr>\r\n<div class=\"relative overflow-hidden mb-8\"><div class=\"rounded-t-xl overflow-hidden bg-gradient-to-r from-emerald-50 to-teal-100 p-10\">\r\n  <div class=\"grid gap-2 sm:grid-cols-2 lg:grid-cols-4\">\r\n    <div class=\"bg-emerald-500 p-6 text-white text-center font-extrabold rounded-t-lg\">.rounded-t-lg</div>\r\n    <div class=\"bg-emerald-500 p-6 text-white text-center font-extrabold rounded-r-lg\">.rounded-r-lg</div>\r\n    <div class=\"bg-emerald-500 p-6 text-white text-center font-extrabold rounded-b-lg\">.rounded-b-lg</div>\r\n    <div class=\"bg-emerald-500 p-6 text-white text-center font-extrabold rounded-l-lg\">.rounded-l-lg</div>\r\n  </div>\r\n</div>\r\n\r\n<hr>\r\n<div class=\"relative overflow-hidden mb-8\"><div class=\"rounded-t-xl overflow-hidden bg-gradient-to-r from-amber-50 to-amber-100 p-10\">\r\n  <div class=\"grid gap-2 sm:grid-cols-2 lg:grid-cols-4\">\r\n    <div class=\"bg-amber-500 p-6 text-white text-center font-extrabold rounded-tl-lg\">.rounded-tl-lg</div>\r\n    <div class=\"bg-amber-500 p-6 text-white text-center font-extrabold rounded-tr-lg\">.rounded-tr-lg</div>\r\n    <div class=\"bg-amber-500 p-6 text-white text-center font-extrabold rounded-br-lg\">.rounded-br-lg</div>\r\n    <div class=\"bg-amber-500 p-6 text-white text-center font-extrabold rounded-bl-lg\">.rounded-bl-lg</div>\r\n  </div>\r\n</div>\r\n<hr>\r\n<br>\r\n<h4>radius none</h4>\r\n<div class=\"flex justify-center items-center\">\r\n    <div class=\"bg-rose-500 p-6 text-white text-center font-extrabold rounded-none\">.rounded-none</div>\r\n  </div>'),
(33, '<h4>Divide style</h4>\r\n<div class=\"rounded-t-xl overflow-hidden bg-gradient-to-r from-emerald-50 to-teal-100 p-10\">\r\n  <div class=\"grid grid-cols-3 divide-x divide-emerald-500\">\r\n    <div class=\"text-center font-extrabold text-2xl text-emerald-600 px-6\">1</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-emerald-600 px-6\">2</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-emerald-600 px-6\">3</div>\r\n  </div>\r\n</div>\r\n<br><br>\r\n  <div class=\"grid grid-cols-1 divide-y divide-amber-500\">\r\n    <div class=\"text-center font-extrabold text-2xl text-amber-600 py-3\">1</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-amber-600 py-3\">2</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-amber-600 py-3\">3</div>\r\n  </div>\r\n<br><br>\r\n  <div class=\"flex flex-col-reverse divide-y divide-y-reverse divide-rose-400\">\r\n    <div class=\"text-center font-extrabold text-2xl text-rose-600 py-3\">1</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-rose-600 py-3\">2</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-rose-600 py-3\">3</div>\r\n  </div>'),
(34, '<h4>devide opacity</h4>\r\n\r\n<div class=\"rounded-t-xl overflow-hidden bg-gradient-to-r from-purple-50 to-purple-100 p-10\">\r\n  <div class=\"divide-y-4 divide-black divide-opacity-25\">\r\n    <div class=\"text-center font-extrabold text-2xl text-purple-600 py-3\">1</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-purple-600 py-3\">2</div>\r\n    <div class=\"text-center font-extrabold text-2xl text-purple-600 py-3\">3</div>\r\n  </div>\r\n</div>');

-- --------------------------------------------------------

--
-- Structure de la table `displays`
--

CREATE TABLE `displays` (
  `id` int(6) NOT NULL,
  `display` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `flexs`
--

CREATE TABLE `flexs` (
  `id` int(6) NOT NULL,
  `flex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `floats`
--

CREATE TABLE `floats` (
  `id` int(6) NOT NULL,
  `floa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(6) NOT NULL,
  `imag` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `imag`) VALUES
(4, '<img src=\"../image/image.jpg\" class=\"img-fluid\" alt=\"...\">'),
(5, '<img src=\"../image/image.jpg\" class=\"img-thumbnail\" alt=\"...\">'),
(6, '<img src=\"../image/image.jpg\" class=\"rounded float-start\" alt=\"...\">\r\n<img src=\"../image/image.jpg\" class=\"rounded float-end\" alt=\"...\">'),
(7, '<div class=\"text-center\">\r\n  <img src=\"...\" class=\"rounded\" alt=\"...\">\r\n</div>');

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE `liens` (
  `id` int(6) NOT NULL,
  `lien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `marginspaddings`
--

CREATE TABLE `marginspaddings` (
  `id` int(6) NOT NULL,
  `margpad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marginspaddings`
--

INSERT INTO `marginspaddings` (`id`, `margpad`) VALUES
(2, '<h4>padding</h4>\r\n\r\n <div class=\"flex flex-wrap items-start justify-center text-white font-mono -mx-5\">\r\n    <div class=\"mx-5 bg-rose-500 bg-stripes bg-stripes-white rounded-md overflow-hidden pt-6\">\r\n      <div class=\"bg-rose-500 flex items-center justify-center py-3 px-4\">\r\n        pt-6\r\n      </div>\r\n    </div>\r\n    <div class=\"mx-5 bg-rose-500 bg-stripes bg-stripes-white rounded-md overflow-hidden pr-4 mt-6\">\r\n      <div class=\"bg-rose-500 flex items-center justify-center py-3 px-4\">\r\n        pr-4\r\n      </div>\r\n    </div>\r\n    <div class=\"mx-5 bg-rose-500 bg-stripes bg-stripes-white rounded-md overflow-hidden pb-8 mt-6\">\r\n      <div class=\"bg-rose-500 flex items-center justify-center py-3 px-4\">\r\n        pb-8\r\n      </div>\r\n    </div>\r\n    <div class=\"mx-5 bg-rose-500 bg-stripes bg-stripes-white rounded-md overflow-hidden pl-2 mt-6\">\r\n      <div class=\"bg-rose-500 flex items-center justify-center py-3 px-4\">\r\n        pl-2\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n<br><br>\r\n\r\n    <div class=\"bg-emerald-500 bg-stripes bg-stripes-white rounded-md overflow-hidden px-8\">\r\n      <div class=\"bg-emerald-500 py-3 px-4\">px-8</div>\r\n    </div>\r\n\r\n<br><br>\r\n\r\n    <div class=\"bg-indigo-500 bg-stripes bg-stripes-white rounded-md overflow-hidden py-8\">\r\n      <div class=\"bg-indigo-500 py-3 px-4\">py-8</div>\r\n    </div>\r\n\r\n<br><br>\r\n\r\n<div class=\"bg-fuchsia-500 bg-stripes bg-stripes-white rounded-md overflow-hidden p-8\">\r\n      <div class=\"bg-fuchsia-500 py-3 px-4\">p-8</div>\r\n    </div>'),
(3, '<h4>margin</h4>\r\n\r\n<div class=\"flex flex-wrap justify-around items-center text-white font-mono\">\r\n\r\n    <div class=\"bg-stripes bg-stripes-rose-500 overflow-hidden m-2 sm:m-0\">\r\n      <div class=\"mt-8 bg-rose-500 flex rounded-md items-center justify-center py-3 px-4\">mt-8</div>\r\n    </div>\r\n\r\n    <div class=\"bg-stripes bg-stripes-rose-500 overflow-hidden m-2 sm:m-0\">\r\n      <div class=\"mr-8 bg-rose-500 flex rounded-md items-center justify-center py-3 px-4\">mr-8</div>\r\n    </div>\r\n\r\n    <div class=\"bg-stripes bg-stripes-rose-500 overflow-hidden m-2 sm:m-0\">\r\n      <div class=\"mb-8 bg-rose-500 flex rounded-md items-center justify-center py-3 px-4\">mb-8</div>\r\n    </div>\r\n\r\n    <div class=\"bg-stripes bg-stripes-rose-500 overflow-hidden m-2 sm:m-0\">\r\n      <div class=\"ml-8 bg-rose-500 flex rounded-md items-center justify-center py-3 px-4\">ml-8</div>\r\n    </div>\r\n  </div>\r\n<br><br>\r\n\r\n  <div class=\"flex justify-around items-center text-white font-mono\">\r\n    <div class=\"bg-stripes bg-stripes-purple-500\">\r\n      <div class=\"mx-8 bg-purple-500 rounded-md flex items-center justify-center py-3 px-4\">mx-8</div>\r\n    </div>\r\n  </div>\r\n\r\n<br><br>\r\n\r\n  <div class=\"flex justify-around items-center text-white font-mono\">\r\n    <div class=\"bg-stripes bg-stripes-emerald-500\">\r\n      <div class=\"my-8 bg-emerald-500 rounded-md flex items-center justify-center py-3 px-4\">my-8</div>\r\n    </div>\r\n  </div>\r\n<br><br>\r\n\r\n<div class=\"flex justify-around items-center text-white font-mono\">\r\n    <div class=\"bg-stripes bg-stripes-light-blue-500\">\r\n      <div class=\"m-8 bg-light-blue-500 rounded-md flex items-center justify-center py-3 px-4\">m-8</div>\r\n    </div>\r\n  </div>\r\n'),
(4, '<h4>space between</h4>\r\n<div class=\"flex justify-start\">\r\n    <div class=\"w-16 h-16 text-white text-2xl font-extrabold rounded-md flex items-center justify-center bg-fuchsia-500\">1</div>\r\n    <div class=\"w-4 h-16 rounded-md bg-fuchsia-300 bg-stripes bg-stripes-white\"></div>\r\n    <div class=\"w-16 h-16 text-white text-2xl font-extrabold rounded-md flex items-center justify-center bg-fuchsia-500\">2</div>\r\n    <div class=\"w-4 h-16 rounded-md bg-fuchsia-300 bg-stripes bg-stripes-white\"></div>\r\n    <div class=\"w-16 h-16 text-white text-2xl font-extrabold rounded-md flex items-center justify-center bg-fuchsia-500\">3</div>\r\n  </div>\r\n<br><br>\r\n<div>\r\n    <div class=\"h-16 text-white text-2xl font-extrabold rounded-md flex items-center justify-center bg-blue-500\">1</div>\r\n    <div class=\"h-6 rounded-md bg-blue-300 bg-stripes bg-stripes-white\"></div>\r\n    <div class=\"h-16 text-white text-2xl font-extrabold rounded-md flex items-center justify-center bg-blue-500\">2</div>\r\n    <div class=\"h-6 rounded-md bg-blue-300 bg-stripes bg-stripes-white\"></div>\r\n    <div class=\"h-16 text-white text-2xl font-extrabold rounded-md flex items-center justify-center bg-blue-500\">3</div>\r\n  </div>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `post`) VALUES
(1, 'tidjet', 'khireddine', 'khireddinetidjet@gmail.com', 'A23072000', 'utilisateur'),
(2, 'tidjet', 'brenda', 'tidjet16@gmail.com', '16/02/2000', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `overflaws`
--

CREATE TABLE `overflaws` (
  `id` int(50) NOT NULL,
  `overflaw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `overflaws`
--

INSERT INTO `overflaws` (`id`, `overflaw`) VALUES
(9, '<p class=\"truncate max-w-xs px-6 py-4 mx-auto bg-indigo-200 text-indigo-500 font-medium rounded-lg\">\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiisitaquequodpraesentiumexplicaboincidunt? Dolores beatae nam at sed dolorum ratione dolorem nisi velit cum.\r\n  </p>\r\n<br><br>\r\n<p class=\"overflow-ellipsis overflow-hidden max-w-xs px-6 py-4 mx-auto bg-emerald-200 text-emerald-500 font-medium rounded-lg\">\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiisitaquequodpraesentiumexplicaboincidunt? Dolores beatae nam at sed dolorum ratione dolorem nisi velit cum.\r\n  </p>\r\n<br><br>\r\n<p class=\"overflow-clip overflow-hidden max-w-xs px-6 py-4 mx-auto bg-light-blue-200 text-light-blue-500 font-medium rounded-lg\">\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiisitaquequodpraesentiumexplicaboincidunt? Dolores beatae nam at sed dolorum ratione dolorem nisi velit cum.\r\n  </p>');

-- --------------------------------------------------------

--
-- Structure de la table `positions`
--

CREATE TABLE `positions` (
  `id` int(6) NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `shadows`
--

CREATE TABLE `shadows` (
  `id` int(50) NOT NULL,
  `shadow` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shadows`
--

INSERT INTO `shadows` (`id`, `shadow`) VALUES
(2, '<div class=\"shadow-none p-3 mb-5 bg-light rounded\">No shadow</div>\r\n<div class=\"shadow-sm p-3 mb-5 bg-body rounded\">Small shadow</div>\r\n<div class=\"shadow p-3 mb-5 bg-body rounded\">Regular shadow</div>\r\n<div class=\"shadow-lg p-3 mb-5 bg-body rounded\">Larger shadow</div>'),
(3, '  <div class=\"grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-6\">\r\n    <div class=\"shadow-sm h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center\">.shadow-sm</div>\r\n    <div class=\"shadow h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center\">.shadow</div>\r\n    <div class=\"shadow-md h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center\">.shadow-md</div>\r\n    <div class=\"shadow-lg h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center\">.shadow-lg</div>\r\n    <div class=\"shadow-xl h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center\">.shadow-xl</div>\r\n    <div class=\"shadow-2xl h-32 w-32 font-medium bg-white rounded-md flex items-center justify-center\">.shadow-2xl</div>\r\n  </div>'),
(4, '<h3>Opacity<h3>\r\n\r\n <div class=\"grid grid-cols-2 gap-2 sm:grid-cols-4\">\r\n    <div class=\"h-16 rounded-md opacity-100 bg-light-blue-600 font-extrabold text-white flex justify-center items-center\">100%</div>\r\n    <div class=\"h-16 rounded-md opacity-75 bg-light-blue-600 font-extrabold text-white flex justify-center items-center\">75%</div>\r\n    <div class=\"h-16 rounded-md opacity-50 bg-light-blue-600 font-extrabold text-white flex justify-center items-center\">50%</div>\r\n    <div class=\"h-16 rounded-md opacity-25 bg-light-blue-600 font-extrabold text-white flex justify-center items-center\">25%</div>\r\n    <div class=\"h-16 rounded-md opacity-0 bg-light-blue-600 font-extrabold text-white flex justify-center items-center\">0%</div>\r\n  </div>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `sitecomplexes`
--

CREATE TABLE `sitecomplexes` (
  `id` int(6) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `lien` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sitecomplexes`
--

INSERT INTO `sitecomplexes` (`id`, `nom`, `images`, `lien`) VALUES
(1, 'pôuyiods', 'image_presentation/bootstrap.PNG', '../../../site');

-- --------------------------------------------------------

--
-- Structure de la table `sitesimples`
--

CREATE TABLE `sitesimples` (
  `id` int(6) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `lien` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sitesimples`
--

INSERT INTO `sitesimples` (`id`, `nom`, `images`, `lien`) VALUES
(3, 'PortFolio 01', 'image_presentation/PortFolio_Website-master.PNG', 'site/PortFolio_Website-master'),
(7, 'portfolio-responsive-complete-master', 'image_presentation/work4.jpg', 'site/portfolio-responsive-complete-master'),
(8, 'Mystery Code', 'image_presentation/portfolio-8.jpg', 'site/Mystery Code'),
(9, 'loruki-website-master', 'image_presentation/server2.png', 'site/loruki-website-master');

-- --------------------------------------------------------

--
-- Structure de la table `textstitres`
--

CREATE TABLE `textstitres` (
  `id` int(6) NOT NULL,
  `txtttr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `textstitres`
--

INSERT INTO `textstitres` (`id`, `txtttr`) VALUES
(3, '<h4>Titre ou texte size</h4>\r\n<hr>\r\n<p class=\"fs-1\">.fs-1 text</p>\r\n<p class=\"fs-2\">.fs-2 text</p>\r\n<p class=\"fs-3\">.fs-3 text</p>\r\n<p class=\"fs-4\">.fs-4 text</p>\r\n<p class=\"fs-5\">.fs-5 text</p>\r\n<p class=\"fs-6\">.fs-6 text</p>'),
(5, '<dl class=\"text-violet-600\">\r\n    <div class=\"flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-3\">xs</dt>\r\n      <dd class=\"truncate text-xs font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-6 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-4\">sm</dt>\r\n      <dd class=\"truncate text-sm font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-6 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-5\">base</dt>\r\n      <dd class=\"truncate text-base font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-6 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-6\">lg</dt>\r\n      <dd class=\"truncate text-lg font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-6 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-6\">xl</dt>\r\n      <dd class=\"truncate text-xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-8 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-6\">2xl</dt>\r\n      <dd class=\"truncate text-2xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-10 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-6\">3xl</dt>\r\n      <dd class=\"truncate text-3xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-10 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-6\">4xl</dt>\r\n      <dd class=\"truncate text-4xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-10 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-7\">5xl</dt>\r\n      <dd class=\"truncate text-5xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-10 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-8\">6xl</dt>\r\n      <dd class=\"truncate text-6xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-10 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-10\">7xl</dt>\r\n      <dd class=\"truncate text-7xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-10 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-10\">8xl</dt>\r\n      <dd class=\"truncate text-8xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n    <div class=\"mt-8 flex items-start\">\r\n      <dt class=\"w-16 flex-shrink-0 text-sm text-violet-600 text-opacity-50 font-mono leading-10\">9xl</dt>\r\n      <dd class=\"truncate text-9xl font-medium\">KHIREDDINE</dd>\r\n    </div>\r\n  </dl>'),
(6, '<h4>style text</h4>\r\n<p class=\"fw-bold\">Bold text.</p>\r\n<p class=\"fw-bolder\">Bolder weight text (relative to the parent element).</p>\r\n<p class=\"fw-normal\">Normal weight text.</p>\r\n<p class=\"fw-light\">Light weight text.</p>\r\n<p class=\"fw-lighter\">Lighter weight text (relative to the parent element).</p>\r\n<p class=\"fst-italic\">Italic text.</p>\r\n<p class=\"fst-normal\">Text with normal font style</p>'),
(7, '<h4>Text decoration</h4>\r\n<p class=\"text-decoration-underline\">This text has a line underneath it.</p>\r\n<p class=\"text-decoration-line-through\">This text has a line going through it.</p>\r\n<a href=\"#\" class=\"text-decoration-none\">This link has its text decoration removed</a>'),
(8, '<h4>texte aligne </h4>\r\n\r\n<p class=\"text-start\">debut.</p>\r\n<p class=\"text-center\">Center.</p>\r\n<p class=\"text-end\">fin.</p>'),
(9, '<h4>texte opacity</h4>\r\n\r\n  <div class=\"space-y-4\">\r\n    <p class=\"font-semibold text-xl text-purple-700 text-opacity-100\">The quick brown fox jumped over the lazy dog.</p>\r\n    <p class=\"font-semibold text-xl text-purple-700 text-opacity-75\">The quick brown fox jumped over the lazy dog.</p>\r\n    <p class=\"font-semibold text-xl text-purple-700 text-opacity-50\">The quick brown fox jumped over the lazy dog.</p>\r\n    <p class=\"font-semibold text-xl text-purple-700 text-opacity-25\">The quick brown fox jumped over the lazy dog.</p>\r\n    <p class=\"font-semibold text-xl text-purple-700 text-opacity-0\">The quick brown fox jumped over the lazy dog.</p>\r\n  </div>'),
(15, '<h4>plus</h4>\r\n<div class=\"badge bg-primary text-wrap\" style=\"width: 6rem;\">\r\n  This text should wrap.\r\n</div>\r\n<br><br>\r\n<p class=\"text-break\">khireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddinekhireddine</p>\r\n\r\n<br><br>\r\n<p class=\"break-words max-w-xs px-6 py-4 mx-auto bg-amber-200 text-amber-500 font-medium rounded-lg\">\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiisitaquequodpraesentiumexplicaboincidunt? Dolores beatae nam at sed dolorum ratione dolorem nisi velit cum.\r\n  </p>');

-- --------------------------------------------------------

--
-- Structure de la table `vidauds`
--

CREATE TABLE `vidauds` (
  `id` int(6) NOT NULL,
  `vidaud` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vidauds`
--

INSERT INTO `vidauds` (`id`, `vidaud`) VALUES
(2, '<div class=\"bg-white dark:bg-gray-800 rounded-tl-xl sm:rounded-t-xl p-4 pb-6 sm:p-8 lg:p-4 lg:pb-6 xl:p-8 space-y-6 sm:space-y-8 lg:space-y-6 xl:space-y-8\">\r\n  <div class=\"flex items-center space-x-3.5 sm:space-x-5 lg:space-x-3.5 xl:space-x-5\">\r\n    <img src=\"/full-stack-radio.png\" alt=\"\" width=\"160\" height=\"160\" class=\"flex-none w-20 h-20 rounded-lg bg-gray-100\" />\r\n    <div class=\"min-w-0 flex-auto space-y-0.5\">\r\n      <p class=\"text-lime-600 dark:text-lime-400 text-sm sm:text-base lg:text-sm xl:text-base font-semibold uppercase\">\r\n        <abbr title=\"Episode\">Ep.</abbr> 128\r\n      </p>\r\n      <h2 class=\"text-black dark:text-white text-base sm:text-xl lg:text-base xl:text-xl font-semibold truncate\">\r\n        Scaling CSS at Heroku with Utility Classes\r\n      </h2>\r\n      <p class=\"text-gray-500 dark:text-gray-400 text-base sm:text-lg lg:text-base xl:text-lg font-medium\">\r\n        Full Stack Radio\r\n      </p>\r\n    </div>\r\n  </div>\r\n  <div class=\"space-y-2\">\r\n    <div class=\"bg-gray-200 dark:bg-black rounded-full overflow-hidden\">\r\n      <div class=\"bg-lime-500 dark:bg-lime-400 w-1/2 h-1.5\" role=\"progressbar\" aria-valuenow=\"1456\" aria-valuemin=\"0\" aria-valuemax=\"4550\"></div>\r\n    </div>\r\n    <div class=\"text-gray-500 dark:text-gray-400 flex justify-between text-sm font-medium tabular-nums\">\r\n      <div>24:16</div>\r\n      <div>75:50</div>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\"bg-gray-50 text-black dark:bg-gray-900 dark:text-white lg:rounded-b-xl py-4 px-1 sm:px-3 lg:px-1 xl:px-3 grid grid-cols-5 sm:grid-cols-7 lg:grid-cols-5 xl:grid-cols-7 items-center\">\r\n  <button type=\"button\" class=\"mx-auto\">\r\n    <svg width=\"24\" height=\"24\" fill=\"none\">\r\n      <path d=\"M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />\r\n    </svg>\r\n  </button>\r\n  <button type=\"button\" class=\"hidden sm:block lg:hidden xl:block mx-auto\">\r\n    <svg width=\"17\" height=\"18\">\r\n      <path d=\"M0 0h2v18H0V0zM4 9l13-9v18L4 9z\" fill=\"currentColor\" />\r\n    </svg>\r\n  </button>\r\n  <button type=\"button\" class=\"mx-auto\">\r\n    <svg width=\"34\" height=\"39\" fill=\"none\">\r\n      <path d=\"M12.878 26.12c1.781 0 3.09-1.066 3.085-2.515.004-1.104-.665-1.896-1.824-2.075v-.068c.912-.235 1.505-.95 1.5-1.93.005-1.283-1.048-2.379-2.727-2.379-1.602 0-2.89.968-2.932 2.387h1.274c.03-.801.784-1.287 1.64-1.287.892 0 1.475.541 1.471 1.346.004.844-.673 1.398-1.64 1.398h-.738v1.074h.737c1.21 0 1.91.614 1.91 1.491 0 .848-.738 1.424-1.765 1.424-.946 0-1.683-.486-1.734-1.262H9.797c.055 1.424 1.317 2.395 3.08 2.395zm7.734.025c2.016 0 3.196-1.645 3.196-4.504 0-2.838-1.197-4.488-3.196-4.488-2.003 0-3.196 1.645-3.2 4.488 0 2.855 1.18 4.5 3.2 4.504zm0-1.138c-1.18 0-1.892-1.185-1.892-3.366.004-2.174.716-3.371 1.892-3.371 1.172 0 1.888 1.197 1.888 3.37 0 2.182-.712 3.367-1.888 3.367z\" fill=\"currentColor\" />\r\n      <path d=\"M1 22c0 8.837 7.163 16 16 16s16-7.163 16-16S25.837 6 17 6\" stroke=\"currentColor\" stroke-width=\"1.5\" />\r\n      <path d=\"M17 0L9 6l8 6V0z\" fill=\"currentColor\" />\r\n    </svg>\r\n  </button>\r\n  <button type=\"button\" class=\"mx-auto\">\r\n    <svg width=\"50\" height=\"50\" fill=\"none\">\r\n      <circle class=\"text-gray-300 dark:text-gray-500\" cx=\"25\" cy=\"25\" r=\"24\" stroke=\"currentColor\" stroke-width=\"1.5\" />\r\n      <path d=\"M18 16h4v18h-4V16zM28 16h4v18h-4z\" fill=\"currentColor\" />\r\n    </svg>\r\n  </button>\r\n  <button type=\"button\" class=\"mx-auto\">\r\n    <svg width=\"34\" height=\"39\" fill=\"none\">\r\n      <path d=\"M12.878 26.12c1.781 0 3.09-1.066 3.085-2.515.004-1.104-.665-1.896-1.824-2.075v-.068c.912-.235 1.505-.95 1.5-1.93.005-1.283-1.048-2.379-2.727-2.379-1.602 0-2.89.968-2.932 2.387h1.274c.03-.801.784-1.287 1.64-1.287.892 0 1.475.541 1.471 1.346.004.844-.673 1.398-1.64 1.398h-.738v1.074h.737c1.21 0 1.91.614 1.91 1.491 0 .848-.738 1.424-1.765 1.424-.946 0-1.683-.486-1.734-1.262H9.797c.055 1.424 1.317 2.395 3.08 2.395zm7.734.025c2.016 0 3.196-1.645 3.196-4.504 0-2.838-1.197-4.488-3.196-4.488-2.003 0-3.196 1.645-3.2 4.488 0 2.855 1.18 4.5 3.2 4.504zm0-1.138c-1.18 0-1.892-1.185-1.892-3.366.004-2.174.716-3.371 1.892-3.371 1.172 0 1.888 1.197 1.888 3.37 0 2.182-.712 3.367-1.888 3.367z\" fill=\"currentColor\" />\r\n      <path d=\"M33 22c0 8.837-7.163 16-16 16S1 30.837 1 22 8.163 6 17 6\" stroke=\"currentColor\" stroke-width=\"1.5\" />\r\n      <path d=\"M17 0l8 6-8 6V0z\" fill=\"currentColor\" />\r\n    </svg>\r\n  </button>\r\n  <button type=\"button\" class=\"hidden sm:block lg:hidden xl:block mx-auto\">\r\n    <svg width=\"17\" height=\"18\" viewBox=\"0 0 17 18\" fill=\"none\">\r\n      <path d=\"M17 0H15V18H17V0Z\" fill=\"currentColor\" />\r\n      <path d=\"M13 9L0 0V18L13 9Z\" fill=\"currentColor\" />\r\n    </svg>\r\n  </button>\r\n  <button type=\"button\" class=\"mx-auto border border-gray-300 rounded-md text-sm font-medium py-0.5 px-2 text-gray-500 dark:border-gray-600 dark:text-gray-400\">\r\n    1.0x\r\n  </button>\r\n</div>'),
(3, '<style>\r\naudio:hover, audio:focus, audio:active\r\n{\r\n-webkit-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);\r\n-moz-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);\r\nbox-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);\r\n-webkit-transform: scale(1.05);\r\n-moz-transform: scale(1.05);\r\ntransform: scale(1.05);\r\n}\r\n\r\n\r\naudio\r\n{\r\n-webkit-transition:all 0.5s linear;\r\n-moz-transition:all 0.5s linear;\r\n-o-transition:all 0.5s linear;\r\ntransition:all 0.5s linear;\r\n-moz-box-shadow: 2px 2px 4px 0px #006773;\r\n-webkit-box-shadow:  2px 2px 4px 0px #006773;\r\nbox-shadow: 2px 2px 4px 0px #006773;\r\n-moz-border-radius:7px 7px 7px 7px ;\r\n-webkit-border-radius:7px 7px 7px 7px ;\r\nborder-radius:7px 7px 7px 7px ;\r\n}\r\n</style>\r\n\r\n<audio controls preload=\"metadata\">\r\n  <source src=\"\" type=\"audio/ogg\">\r\n</audio>'),
(5, '<header class=\"flex-none relative z-50 text-sm leading-6 font-medium  text-gray-200 pt-5\">\r\n  <div class=\"max-w-container mx-auto px-4 sm:px-6 lg:px-8\">\r\n    <div class=\"flex items-center  flex-wrap sm:flex-nowrap  \">\r\n      <a href=\"/components\" class=\"flex-none text-white\">\r\n        <span class=\"sr-only\">Tailwind UI</span>\r\n        <svg viewBox=\"0 0 160 24\" fill=\"none\" class=\"w-auto h-6\">\r\n          <path d=\"M18.724 1.714c-4.538 0-7.376 2.286-8.51 6.857 1.702-2.285 3.687-3.143 5.957-2.57 1.296.325 2.22 1.271 3.245 2.318 1.668 1.706 3.6 3.681 7.819 3.681 4.539 0 7.376-2.286 8.51-6.857-1.701 2.286-3.687 3.143-5.957 2.571-1.294-.325-2.22-1.272-3.245-2.32-1.668-1.705-3.6-3.68-7.819-3.68zM10.214 12c-4.539 0-7.376 2.286-8.51 6.857 1.701-2.286 3.687-3.143 5.957-2.571 1.294.325 2.22 1.272 3.245 2.32 1.668 1.705 3.6 3.68 7.818 3.68 4.54 0 7.377-2.286 8.511-6.857-1.702 2.286-3.688 3.143-5.957 2.571-1.295-.326-2.22-1.272-3.245-2.32-1.669-1.705-3.6-3.68-7.82-3.68z\" fill=\"#06B6D4\"/>\r\n          <path d=\"M51.285 9.531V6.857h-3.166v-3.6l-2.758.823v2.777h-2.348v2.674h2.348v6.172c0 3.343 1.686 4.526 5.924 4.011V17.22c-2.094.103-3.166.129-3.166-1.517V9.53h3.166zm12.087-2.674v1.826c-.97-1.337-2.476-2.16-4.468-2.16-3.472 0-6.357 2.931-6.357 6.763 0 3.805 2.885 6.763 6.357 6.763 1.992 0 3.498-.823 4.468-2.186v1.851h2.758V6.857h-2.758zM59.338 17.4c-2.297 0-4.034-1.723-4.034-4.114 0-2.392 1.736-4.115 4.034-4.115s4.034 1.723 4.034 4.115c0 2.391-1.736 4.114-4.034 4.114zM70.723 4.929c.97 0 1.762-.823 1.762-1.775 0-.977-.792-1.774-1.762-1.774s-1.762.797-1.762 1.774c0 .952.792 1.775 1.762 1.775zm-1.379 14.785h2.758V6.857h-2.758v12.857zm5.96 0h2.757V.943h-2.758v18.771zM95.969 6.857l-2.502 8.872-2.655-8.872h-2.63L85.5 15.73l-2.477-8.872h-2.91l4.008 12.857h2.707l2.68-8.665 2.656 8.665h2.706L98.88 6.857h-2.911zm6.32-1.928c.97 0 1.762-.823 1.762-1.775 0-.977-.792-1.774-1.762-1.774s-1.762.797-1.762 1.774c0 .952.792 1.775 1.762 1.775zm-1.379 14.785h2.758V6.857h-2.758v12.857zm12.674-13.191c-1.736 0-3.115.643-3.957 1.98V6.857h-2.758v12.857h2.758v-6.891c0-2.623 1.43-3.703 3.242-3.703 1.737 0 2.86 1.029 2.86 2.983v7.611h2.757V11.82c0-3.343-2.042-5.297-4.902-5.297zm17.982-4.809v6.969c-.971-1.337-2.477-2.16-4.468-2.16-3.473 0-6.358 2.931-6.358 6.763 0 3.805 2.885 6.763 6.358 6.763 1.991 0 3.497-.823 4.468-2.186v1.851h2.757v-18h-2.757zM127.532 17.4c-2.298 0-4.034-1.723-4.034-4.114 0-2.392 1.736-4.115 4.034-4.115 2.297 0 4.034 1.723 4.034 4.115 0 2.391-1.737 4.114-4.034 4.114z\" fill=\"currentColor\"/>\r\n          <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M145.532 3.429h8.511c.902 0 1.768.36 2.407 1.004.638.643.997 1.515.997 2.424v8.572c0 .909-.359 1.781-.997 2.424a3.394 3.394 0 01-2.407 1.004h-8.511a3.39 3.39 0 01-2.407-1.004 3.438 3.438 0 01-.997-2.424V6.857c0-.91.358-1.781.997-2.424a3.39 3.39 0 012.407-1.004zm-5.106 3.428c0-1.364.538-2.672 1.495-3.636a5.09 5.09 0 013.611-1.507h8.511c1.354 0 2.653.542 3.61 1.507a5.16 5.16 0 011.496 3.636v8.572a5.16 5.16 0 01-1.496 3.636 5.086 5.086 0 01-3.61 1.506h-8.511a5.09 5.09 0 01-3.611-1.506 5.164 5.164 0 01-1.495-3.636V6.857zm10.907 6.251c0 1.812-1.359 2.916-3.193 2.916-1.823 0-3.182-1.104-3.182-2.916v-5.65h1.633v5.52c0 .815.429 1.427 1.549 1.427 1.12 0 1.549-.612 1.549-1.428v-5.52h1.644v5.652zm1.72 2.748V7.457h1.644v8.4h-1.644z\" fill=\"currentColor\"/>\r\n        </svg>\r\n      </a>\r\n                        <p class=\"hidden lg:block text-sm ml-6 \">\r\n        <a href=\"/#product-ecommerce\" class=\"relative flex items-center border border-white/10 rounded-lg px-4 py-1.5 my-[-0.312rem]\">\r\n                    <span class=\"absolute -bottom-px inset-x-11 h-px opacity-40\" style=\"background:linear-gradient(90deg, rgba(56, 189, 248, 0) 6.48%, #38BDF8 37.53%, #4F46E5 69.43%, rgba(79, 70, 229, 0) 89.26%);\"></span>\r\n          <svg width=\"19\" height=\"16\" fill=\"none\" class=\"mr-2\">\r\n            <path opacity=\".4\" d=\"M2 4.5h10l1 8H1l1-8z\" fill=\"#818CF8\"/>\r\n            <path d=\"M2 4.5V4a.5.5 0 00-.496.438L2 4.5zm10 0l.496-.062A.5.5 0 0012 4v.5zm1 8v.5a.5.5 0 00.496-.562L13 12.5zm-12 0l-.496-.062A.5.5 0 001 13v-.5zm8.5-6a.5.5 0 001 0h-1zm-6 0a.5.5 0 001 0h-1zM2 5h10V4H2v1zm9.504-.438l1 8 .992-.124-1-8-.992.124zM13 12H1v1h12v-1zm-11.504.562l1-8-.992-.124-1 8 .992.124zM9.5 3.5v3h1v-3h-1zm-5 3v-3h-1v3h1zM7 1a2.5 2.5 0 012.5 2.5h1A3.5 3.5 0 007 0v1zm0-1a3.5 3.5 0 00-3.5 3.5h1A2.5 2.5 0 017 1V0z\" fill=\"#818CF8\"/>\r\n            <path opacity=\".4\" d=\"M7 7.5h10l1 8H6l1-8z\" fill=\"#38BDF8\"/><path d=\"M7 7.5V7a.5.5 0 00-.496.438L7 7.5zm10 0l.496-.062A.5.5 0 0017 7v.5zm1 8v.5a.5.5 0 00.496-.562L18 15.5zm-12 0l-.496-.062A.5.5 0 006 16v-.5zm8.5-6a.5.5 0 001 0h-1zm-6 0a.5.5 0 001 0h-1zM7 8h10V7H7v1zm9.504-.438l1 8 .992-.124-1-8-.992.124zM18 15H6v1h12v-1zm-11.504.562l1-8-.992-.124-1 8 .992.124zM14.5 6.5v3h1v-3h-1zm-5 3v-3h-1v3h1zM12 4a2.5 2.5 0 012.5 2.5h1A3.5 3.5 0 0012 3v1zm0-1a3.5 3.5 0 00-3.5 3.5h1A2.5 2.5 0 0112 4V3z\" fill=\"#7DD3FC\"/>\r\n          </svg>\r\n                    Tailwind UI Ecommerce is available now\r\n          <svg width=\"11\" he');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `borders`
--
ALTER TABLE `borders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `displays`
--
ALTER TABLE `displays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `flexs`
--
ALTER TABLE `flexs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `floats`
--
ALTER TABLE `floats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liens`
--
ALTER TABLE `liens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marginspaddings`
--
ALTER TABLE `marginspaddings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mot_de_passe` (`mot_de_passe`);

--
-- Index pour la table `overflaws`
--
ALTER TABLE `overflaws`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shadows`
--
ALTER TABLE `shadows`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sitecomplexes`
--
ALTER TABLE `sitecomplexes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sitesimples`
--
ALTER TABLE `sitesimples`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `textstitres`
--
ALTER TABLE `textstitres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vidauds`
--
ALTER TABLE `vidauds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `borders`
--
ALTER TABLE `borders`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `displays`
--
ALTER TABLE `displays`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `flexs`
--
ALTER TABLE `flexs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `floats`
--
ALTER TABLE `floats`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `liens`
--
ALTER TABLE `liens`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `marginspaddings`
--
ALTER TABLE `marginspaddings`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `overflaws`
--
ALTER TABLE `overflaws`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `shadows`
--
ALTER TABLE `shadows`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `sitecomplexes`
--
ALTER TABLE `sitecomplexes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sitesimples`
--
ALTER TABLE `sitesimples`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `textstitres`
--
ALTER TABLE `textstitres`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `vidauds`
--
ALTER TABLE `vidauds`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
