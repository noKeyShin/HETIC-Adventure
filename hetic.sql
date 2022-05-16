-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 16 mai 2022 à 17:45
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id_items` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `attaque` text NOT NULL,
  `vie` text NOT NULL,
  `vitesse` text NOT NULL,
  `disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_items`, `nom`, `attaque`, `vie`, `vitesse`, `disponible`) VALUES
(1, 'Couteau en plastique', '3', '0', '0', 1),
(2, 'Extincteur', '7', '5', '-6', 1),
(3, 'Croissant', '0', '5', '0', 1),
(4, 'Médicament', '0', '10', '-2', 1),
(5, 'Redbull', '0', '3', '5', 1),
(6, 'Barre de céréales', '0', '0', '3', 1),
(7, 'Balai', '10', '0', '0', 1),
(8, 'Panini avarié', '0', '-5', '-2', 1),
(9, 'Surprise de Mich', '2', '-5', '-3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `discussion` varchar(100) NOT NULL,
  `attaque_special` varchar(100) NOT NULL,
  `seconde_attaque` varchar(100) NOT NULL,
  `statut` varchar(100) NOT NULL,
  `vie` text NOT NULL,
  `attaque` text NOT NULL,
  `vitesse` text NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id`, `prenom`, `nom`, `discussion`, `attaque_special`, `seconde_attaque`, `statut`, `vie`, `attaque`, `vitesse`, `Photo`) VALUES
(1, 'Salamatao', 'Ousmane', 'Le code c est de l art', 'Onde de choc', 'coup de poing', 'Matrixage : endort l ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/Ousmane.png'),
(2, 'Mamadou Diallo', 'Ousmane', 'Yo on se fait un mafé ?', 'Onde de choc', 'coup de poing', 'Alcoolique : Buff l’attaque et les PV mais baisse précision', '100', '30', '100', '../IMAGE_DIALOGUES/DIALLO_Ousmane_Mamadou.png'),
(3, 'Richard', 'Florent', '\"Wesh??\"', 'Balayette', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/RICHARD_Florent.png'),
(4, 'Ondelet', 'Victoire', '\"Et puis on évolue...\"', 'Onde de choc', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/Victoire.png'),
(5, 'Chartier', 'Anne-Lou', '\"Tu veux aller boire une bière ?\"', 'Jet de biere', 'coup de poing', 'Alcoolique : Buff l’attaque et les PV mais baisse précision', '100', '30', '100', '../IMAGE_DIALOGUES/CHARTIER_Anne-Lou.png'),
(6, 'Chetouani', 'Oumaima', 'Bonjour, les poires sont roses', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/CHETOUANI_Oumaïma.png'),
(7, 'Leroy', 'Etienne', 'T ki ?', 'Jet de bière', 'coup de poing', 'Alcoolique : Buff l’attaque et les PV mais baisse précision', '100', '30', '100', '../IMAGE_DIALOGUES/Leroy_Etienne.png'),
(8, 'Surmaire', 'Corentin', 'Benzema ballon d or', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/SURMAIRE_Corentin.png'),
(9, 'Legrand', 'Florian', 'Zzzzzzz.... Zzzzzz....', 'Onde de choc', 'coup de poing', 'Alcoolique : Buff l’attaque et les PV mais baisse précision', '100', '30', '100', '../IMAGE_DIALOGUES/LEGRAND_Florian.png'),
(10, 'Chen', 'Michel', 'On mange quand ?', 'Tornade', 'coup de poing', 'Alcoolique : Buff l’attaque et les PV mais baisse précision', '100', '30', '100', '../IMAGE_DIALOGUES/Michel_Chen.png'),
(11, 'Bizi', 'Frani', 'Focus Focus !!!', 'Tornade', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/Frani.png'),
(12, 'Mouandza', 'Yann', '\"Alors,  une p’tite sieste?\"', 'Onde de choc', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/MOUANDZA_Bernard_Yann_Ordian.png'),
(13, 'Arnauld', 'Lucie', 'Qui a des chewing-gums ?', 'Tornade', 'coup de poing', 'Masochisme : résistance aux dégâts supérieure ', '100', '30', '100', '../IMAGE_DIALOGUES/ARNAULD_Lucie.png'),
(14, 'Derunes', 'Océane', '\"Je roule sur les gens en vélo!\"', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/DERUNES_Océane-2.png'),
(15, 'Jolivet', 'Mendrika', 'J aime qu on me roule dessus... ', 'Tornade', 'coup de poing', 'Masochisme : résistance aux dégâts supérieure ', '100', '30', '100', '../IMAGE_DIALOGUES/JOLIVET_Mendrika.png'),
(16, 'Clavel', 'Thomas', 'Envoyons nous en l air !”', 'Jet de biere', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/CLAVEL_Thomas.png'),
(17, 'Feuillerat', 'Laurie', 'Non. :(', 'Onde de choc', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision ', '100', '30', '100', '../IMAGE_DIALOGUES/FEUILLERAT_Laurie.png'),
(18, 'Pispisa', 'Maxime', 'Je vais te détruire', 'Tornade', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/PISPISA_Maxime.png'),
(19, 'Bou', 'Charbel', 'Pas disponible.', 'Tornade', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/Charbel.png'),
(20, 'Gravelines', 'Thomas', 'Emprunte la voie 9 3/4.', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/GRAVELINES_Thomas.png'),
(21, 'Medjkoune', 'Morjane', 'Tu dégoutes!', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/Morjane.png'),
(22, 'Saint-Prix', 'Savy', 'Bonjour, j aime l argent ', 'Balayette', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/SAINT-PRIX_Savy.png'),
(23, 'Martinez', 'Camille', 'Non, ok, pas de problème', 'Tornade', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/MARTINEZ_Camille.png'),
(24, 'Ebouv', 'Christelle', 'Juste envie de kill quelqu un.', 'Onde de choc', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/Christelle.png'),
(25, 'Dias', 'Thomas', 'Le roi des pirates ce sera moi!', 'Balayette', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/DIAS_Thomas.png'),
(26, 'Lakoubay', 'Inshya', 'J ai faim.', 'Tornade', 'coup de poing', 'Sportive : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/LAKHOUBAY_Inshya.png'),
(27, 'Lebaz', 'Antoni', '\"T aurais pas un mouchoir stp?\"', 'Tornade', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/LEBAZ_Antoni.png'),
(28, 'Gonzalez', 'Sofia', '\"Coucou :) \"', 'Onde de choc', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/GONZALEZ_Sofia.png'),
(29, 'Cai', 'Christine', '\"Pas de revanche...\"', 'Tornade', 'coup de poing', 'Protection Divine : buff esquive', '100', '30', '100', '../IMAGE_DIALOGUES/CAI_Christine.png'),
(30, 'Rissé', 'Hervé', '\"J étais au sport ce matin, j ai hâte d y aller ce soir !\"', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/RISSE_Herve.png'),
(31, 'Titus Cavier', 'Britni', '\"Où est Charlie ? \"', 'Onde de choc', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/TITUS_Britin.png'),
(32, 'Chantha', 'Malina', '\"Sylvie la plus belle <3\"', 'Onde de choc', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/Malina.png'),
(33, 'Cao', 'Sylvie', ' \"Un stage s il vous plait !!\"', 'Tornade', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/CAO_Sylvie.png'),
(34, 'Aguenchich', 'Tarik', '\"Étienne est une mauvaise personne ...\"', 'Balayette', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/AGUENCHICH_Tarik.png'),
(35, 'Viane', 'Chanel', '\"J aime bien le code\"', 'Tornade', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/Chanel.png'),
(36, 'Vespuce', 'Jérémi', '\"Dieu me sauve\"', 'Onde de choc', 'coup de poing', 'Protection Divine : buff esquive', '100', '30', '100', '../IMAGE_DIALOGUES/VESPUCE_Jérémi.png'),
(37, 'Bassilekin', 'Frank', '\"Lets play some games\"', 'Balayette', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/BASSILEKIN_Frank.png'),
(38, 'Hamada', 'Tachrifa', 'Salut', 'Balayette', 'coup de poing', 'Matrixage : endort l’ennemi qui perd deux tours et baisse sa précision', '100', '30', '100', '../IMAGE_DIALOGUES/HAMADA_Tachrifa.png'),
(39, 'Yessoufou', 'Bassiratou', ' \"Jouons plutôt\"', 'Onde de choc', 'coup de poing', 'Sportif : buff attaque et vitesse', '100', '30', '100', '../IMAGE_DIALOGUES/Bassiratou.png'),
(40, 'Kom Kamze', 'Billy Joe', '\"See you soon\"', 'Tornade', 'coup de poing', 'Protection Divine : buff esquive', '100', '30', '100', '../IMAGE_DIALOGUES/Billy_Joe.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_items`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id_items` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
