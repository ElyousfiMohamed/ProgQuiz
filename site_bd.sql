-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 avr. 2020 à 17:14
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NOM_ADMIN` varchar(20) DEFAULT NULL,
  `PNOM_ADMIN` varchar(20) DEFAULT NULL,
  `EMAIL_ADMIN` varchar(50) DEFAULT NULL,
  `PWD_ADMIN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NOM_ADMIN`, `PNOM_ADMIN`, `EMAIL_ADMIN`, `PWD_ADMIN`) VALUES
(1, 'ELYOUSFI', 'Mohamed', 'mohamed5elyousfi@gmail.com', 'EL3389ED'),
(2, 'IKKOU', 'Youness', 'ikkou57@gmail.com', 'YNS123456');

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_QUIZ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `passer`
--

CREATE TABLE `passer` (
  `ID_QUIZ` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `ID_QUIZ` int(11) NOT NULL,
  `LANG_QUIZ` varchar(10) DEFAULT NULL,
  `QUESTION` varchar(100) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `WRONG_ANSWER1` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `WRONG_ANSWER2` varchar(100) DEFAULT NULL,
  `WRONG_ANSWER3` varchar(100) DEFAULT NULL,
  `CORRECT_ANSWER` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`ID_QUIZ`, `LANG_QUIZ`, `QUESTION`, `WRONG_ANSWER1`, `WRONG_ANSWER2`, `WRONG_ANSWER3`, `CORRECT_ANSWER`) VALUES
(1, 'html', 'Le role du HTML est de...', 'Mettre en forme du texte\r\n', 'Creer des sites e-commerce\r\n', 'Dynamiser les sites Web', 'Ordonner du contenu'),
(2, 'html', 'Pour definir un titre DANS une page HTML, on utilise...\r\n', 'La balise table\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'L\'un des balises h1, h2, ... h6', 'La balise head', 'La balise title'),
(3, 'html', 'Lorsque vous utilisez l\'element a, vous devez obligatoirement preciser...\r\n\r\n', 'Un attribut target\r\n', 'Un attribut id', 'Deux attributs href et target\r\n', 'Un attribut href'),
(4, 'html', 'Pour indiquer qu\'un contenu est tres important, on utilise l\'element...\r\n\r\n', 'em', 'mark', 'p', 'strong'),
(5, 'html', 'Quels elements sont necessaires pour creer une liste non-ordonnee ?\r\n\r\n', 'ol', 'ol et li\r\n', 'ul et ol\r\n', 'ul et li\r\n'),
(6, 'html', 'Comment pouvez-vous faire une liste numerotee?\r\n\r\n', 'Dl', 'Liste', 'Ui', 'Ol'),
(7, 'html', 'Quel personnage est utilise pour indiquer une balise de fin?\r\n\r\n', '^', '*', '>', '/'),
(8, 'html', 'A quoi sert l\'attribut alt de l\'element img ?\r\n\r\n', 'Juste un titre de l\'image', 'A afficher une deuxieme image si la premiere ne peut pas s\'afficher\r\n', 'A donner un lien alternatif vers l\'image si le premier est casse', 'A donner une description de l\'image si celle-ci ne peut pas s\'afficher\r\n'),
(9, 'html', 'Quel ElEment HTML est utilisE pour spEcifier un pied de page d\'un document ou d\'une section?\r\n\r\n', 'Bas', 'Section', 'Nav', 'Footer'),
(10, 'html', 'En HTML, quel attribut est utilise pour indiquer qu\'un champ d\'entree doit etre rempli?\r\n\r\n', 'Validate', 'Placeholder', 'Formvalidate', 'Required'),
(11, 'css', 'Que signifie CSS?\r\n\r\n', 'Colorful Style Sheets', 'Creative Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets'),
(12, 'css', 'Quel attribut HTML est utilise pour definir les styles en ligne?\r\n\r\n', 'font', 'styles', 'class', 'style'),
(13, 'css', 'Quelle est la syntaxe CSS correcte?\r\n\r\n', 'body: color= black;', '{body: color= black;}', '{body; color: black;}', 'body {color: black;}'),
(14, 'css', 'Comment inserer un commentaire dans un fichier CSS?', '// commentaire', '// commentaire //', '/* commentaire', '/* commentaire */'),
(15, 'css', 'Quelle propriete est utilisee pour changer la couleur d\'arriere-plan?', 'color', 'bgcolor', 'bg-color', 'background-color'),
(16, 'css', 'Comment ajouter une couleur d\'arriere-plan pour tous les elements h6?', 'all.h6 {background-color:#FFFFFF;}', 'h6.all {background-color:#FFFFFF;}', 'h6-all {background-color:#FFFFFF;}', 'h6 {background-color:#FFFFFF;}'),
(17, 'css', 'Quelle propriete CSS est utilisee pour changer la couleur du texte d\'un element?', 'text-color', 'font-color', 'fgcolor', 'color'),
(18, 'css', 'Comment afficher des hyperliens sans soulignement?', 'a {underline:none;}', 'a {decoration:no-underline;}', 'a {text-decoration:no-underline;}', ' a {text-decoration:none;}'),
(19, 'css', 'What is the default value of the position property?', 'fixed', 'absolute', 'relative', 'static'),
(20, 'css', 'Comment selectionnez-vous tous les elements p a l\'interieur d\'un element div?', 'div.p', 'div-p', 'div + p', 'div p'),
(21, 'js', 'Comment connaitre le nombre d\'elements d\'un formulaire ?', 'document.form1.count', 'document.form1.elements.count', 'document.form1.length', 'document.form1.elements.length'),
(22, 'js', 'L\'evenement \"onMouseUp\" se produit quand l\'utilisateur ?', 'place le pointeur de la souris sur un objet\r\n\r\n', 'clique en deplacant la souris sur l\'objet\r\n\r\n', 'clique sur un objet\r\n\r\n', 'relache le bouton de la souris\r\n\r\n'),
(23, 'js', 'Que signifie NaN ?', 'Not at NULL\r\n\r\n', 'Number area NULL\r\n\r\n', 'Not area Negative\r\n\r\n', 'Not a Number'),
(24, 'js', 'Dans quel balise HTML placons-nous le code JavaScript?\r\n', 'La balise js\r\n\r\n', 'La balise javascript', 'La balise rel', 'La balise script'),
(25, 'js', ' Comment faire appelle A une fonction nommee  \"sum\"', 'Aucune de ces reponses n\'est vraie.', 'call sum()', 'call function sum()', 'sum()'),
(26, 'js', 'Quel est le bon endroit pour inserer un code JavaScript', 'La section \'head\'', 'Aucune de ces reponses n\'est vraie.\r\n\r\n', 'La section \'body\'', 'Les deux sections \'head\' et \'body\' sont correctes\r\n\r\n'),
(27, 'js', 'Comment ecrire une condition IF en JavaScript?', 'if a = 2 then', 'if a = 2', 'if a == 2 else', 'if (a == 2)'),
(28, 'js', 'Comment creer une fonction en JavaScript?', 'Aucune de ces reponses n\'est vraie.', 'function : f()\r\n\r\n', 'function = f()', 'function f()\r\n\r\n'),
(29, 'js', 'Quelle est la syntaxe correcte pour verifier la valeur de \" c \" ?', 'if (c = \"XYZ\") { } else { }', 'if (c = \"XYZ\") then { } else { } ', 'if  c = \"XYZ\"  then { } else { }', 'if (c == \"XYZ\") { } else '),
(30, 'js', 'Quel evenement se produit lorsque l\'utilisateur clique sur un element HTML?\r\n\r\n', 'onMouseOver', 'onChange', 'onMouseClick', 'onClick'),
(31, 'php', 'Quelle fonction retire un element de la fin d\'un tableau ?\r\n', 'array_splice()\r\n', 'array_pad()\r\n', 'array_shift()\r\n', 'array_pop()\r\n'),
(32, 'php', 'Dans quel tableau de donnees retrouve-t-on les cookies du visiteur ?\r\n\r\n', '$SETCOOKIE\r\n', '$HTTP_COOKIES', '$COOKIES\r\n', '$_COOKIE'),
(33, 'php', 'Quelle fonction permet de lire le resultat d\'une ressources MySQL renvoyee par mysql_query() ?\r\n\r\n', 'mysql_affected_rows()', 'mysql_data_fetch()', 'mysql_data_seek()', 'mysql_fetch_row()'),
(34, 'php', 'Quelle fonction permet d\'effacer un fichier ?\r\n\r\n', 'delete()', 'remove()', 'clearfile()', 'unlink()'),
(35, 'php', 'Comment peut-on trier un tableau en ordre inverse ?\r\n\r\n', '$tableau = ksort($tableau);\r\n', 'ksort($tableau)', '$tableau = rsort($tableau);', 'rsort($tableau);'),
(36, 'php', 'Quelle fonction retourne la longueur d\'une chaine de texte ?\r\n\r\n', 'strlength\r\n', 'length', 'substr', 'strlen\r\n'),
(37, 'php', 'Comment accede-t-on au 1er element :$tableau = Array(\'chaton\' , \'ornithorynque\', \'dauphin\'); ?', '$tableau[1]', '$tableau{0}', '$tableau.get(1)', '$tableau[0]'),
(38, 'php', 'Sachant que $a = 4. Quelle instruction affiche : 4 = quatre ?\r\n\r\n', 'echo \'$a = quatre\';\r\n', 'echo \'$a = 4\';', 'echo \'$a = 2+2\';', 'echo \"$a = quatre\";\r\n'),
(39, 'php', 'La boucle for ($i=0 ; $i<=3 ; $i++ ) { echo $i; }...', 'Sera executee 3 fois', 'Sera executee 2 fois', 'Sera executee 5 fois', 'Sera executee 4 fois'),
(40, 'php', 'Quelles valeurs peut prendre le type boolean ?', '1 ou 0', '1 ou -1', 'Toutes sauf NULL\r\n', 'TRUE ou FALSE\r\n'),
(41, 'java', 'Quel mot cle permet de rendre une classe accessible a l\'exterieur de son package ?', 'super', 'include', 'global', 'public'),
(42, 'java', '\"void\" est utilise pour', 'n\'existe pas en Java\r\n\r\n', 'definir un entier long\r\n\r\n', 'une chaine de caracteres non definie\r\n\r\n', 'une methode qui ne retourne aucune valeur\r\n\r\n'),
(43, 'java', 'Lorsque la portee d\'une classe n\'est pas precisee dans un package, celle-ci est dite', 'protected', 'public', 'private', 'default'),
(44, 'java', 'Quel mot cle utiliser pour empecher d\'instancier une classe mere tout en permettant l\'heritage ?', 'global\r\n\r\n', 'protected', 'private\r\n\r\n', 'abstract'),
(45, 'java', 'Que renvoie 10 % 5', '0.5', '0.2', '2', '0'),
(46, 'java', 'Dans la ligne \"public class A implements B\", B est ', 'une classe mere\r\n\r\n', 'un package\r\n\r\n', 'une extension\r\n\r\n', 'une interface\r\n\r\n'),
(47, 'java', 'Quelle classe fondamentale ne necessite pas l\'instruction \"import\" car celui-ci est fait automatique', 'java.run\r\n\r\n', 'java.io\r\n\r\n', 'java.main\r\n\r\n', 'java.lang\r\n\r\n'),
(48, 'java', 'Le mot cle \"extends\" est utilise pour', 'inclure une librairie\r\n\r\n', 'l\'adressage memoire\r\n\r\n', 'etendre la portee d\'une variable\r\n\r\n', 'l\'heritage d\'une classe\r\n\r\n'),
(49, 'java', 'Le terme \"polymorphisme\" s\'emploie pour', 'une classe fille\r\n\r\n', 'une classe\r\n\r\n', 'une super classe\r\n\r\n', 'une methode\r\n\r\n'),
(50, 'java', 'Dans Java, une classe peut heriter de plusieurs classes meres en meme temps (heritage multiple)', 'Oui depuis la version 5.0\r\n\r\n', 'Oui, depuis la version 1.4\r\n\r\n', 'Oui', 'Non, contrairement au C++\r\n\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `superviser`
--

CREATE TABLE `superviser` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_USER` int(11) NOT NULL,
  `NOM_USER` varchar(20) DEFAULT NULL,
  `PNOM_USER` varchar(20) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL,
  `PWD_USER` varchar(50) DEFAULT NULL,
  `SCORE_HTML` int(10) DEFAULT NULL,
  `SCORE_CSS` int(10) DEFAULT NULL,
  `SCORE_PHP` int(10) DEFAULT NULL,
  `SCORE_JS` int(10) DEFAULT NULL,
  `SCORE_JAVA` int(10) DEFAULT NULL,
  `indice` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`ID_ADMIN`,`ID_QUIZ`);

--
-- Index pour la table `passer`
--
ALTER TABLE `passer`
  ADD PRIMARY KEY (`ID_QUIZ`,`ID_USER`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ID_QUIZ`);

--
-- Index pour la table `superviser`
--
ALTER TABLE `superviser`
  ADD PRIMARY KEY (`ID_ADMIN`,`ID_USER`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `ID_QUIZ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
