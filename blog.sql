-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Novembre 2017 à 09:23
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `text`, `date_ajout`) VALUES
(46, ' Thelonious Monk ', 'These are the voyages of the Starship Enterprise. Its continuing mission, to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no one has gone before. We need to neutralize the homing signal. Each unit has total environmental control, gravity, temperature, atmosphere, light, in a protective field. Sensors show energy readings in your area. We had a forced chamber explosion in the resonator coil. Field strength has increased by 3,000 percent.\r\n\r\nWe\'re acquainted with the wormhole phenomenon, but this... Is a remarkable piece of bio-electronic engineering by which I see much of the EM spectrum ranging from heat and infrared through radio waves, et cetera, and forgive me if I\'ve said and listened to this a thousand times. This planet\'s interior heat provides an abundance of geothermal energy. We need to neutralize the homing signal.\r\n\r\nI have reset the sensors to scan for frequencies outside the usual range. By emitting harmonic vibrations to shatter the lattices. We will monitor and adjust the frequency of the resonators. He has this ability of instantly interpreting and extrapolating any verbal communication he hears. It may be due to the envelope over the structure, causing hydrogen-carbon helix patterns throughout. I\'m comparing the molecular integrity of that bubble against our phasers.\r\n\r\n', '2017-10-20 17:39:50'),
(42, 'Leprous', 'For the most part, Lippman recalls her son exhibiting the excitement, energy, and social skills of any normal boy. It wasn\'t until after a series of traumatic events battered the Stallman household, she says, that her son became introverted and emotionally distant.\r\n\r\nFrustrated, Steele took it upon himself to the solve the problem. He gathered together the four different macro packages and began assembling a chart documenting the most useful macro commands. In the course of implementing the design specified by the chart, Steele says he attracted Stallman\'s attention.\r\n\r\nStallman retreated from the world even further, focusing entirely on his work at the AI Lab. By October, 1975, he dropped out of MIT, never to go back. Software hacking, once a hobby, had become his calling.', '2017-10-16 17:59:52'),
(60, 'Kamasi Washingthon', '<p>These are the voyages of the Starship Enterprise. Its continuing mission, to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no one has gone before. We need to neutralize the homing signal. Each unit has total environmental control, gravity, temperature, atmosphere, light, in a protective field. Sensors show energy readings in your area. We had a forced chamber explosion in the resonator coil. Field strength has increased by 3,000 percent.</p>\r\n<p>&nbsp;</p>\r\n<p>Communication is not possible. The shuttle has no power. Using the gravitational pull of a star to slingshot back in time? We are going to Starbase Montgomery for Engineering consultations prompted by minor read-out anomalies. Probes have recorded unusual levels of geological activity in all five planetary systems. Assemble a team. Look at records of the Drema quadrant. Would these scans detect artificial transmissions as well as natural signals?</p>\r\n<p>&nbsp;</p>\r\n<p>I have reset the sensors to scan for frequencies outside the usual range. By emitting harmonic vibrations to shatter the lattices. We will monitor and adjust the frequency of the resonators. He has this ability of instantly interpreting and extrapolating any verbal communication he hears. It may be due to the envelope over the structure, causing hydrogen-carbon helix patterns throughout. I\'m comparing the molecular integrity of that bubble against our phasers.</p>\r\n<p>&nbsp;</p>\r\n<p>Exceeding reaction chamber thermal limit. We have begun power-supply calibration. Force fields have been established on all turbo lifts and crawlways. Computer, run a level-two diagnostic on warp-drive systems. Antimatter containment positive. Warp drive within normal parameters. I read an ion trail characteristic of a freighter escape pod. The bomb had a molecular-decay detonator. Detecting some unusual fluctuations in subspace frequencies.</p>\r\n<p>&nbsp;</p>\r\n<p>It indicates a synchronic distortion in the areas emanating triolic waves. The cerebellum, the cerebral cortex, the brain stem,&nbsp; the entire nervous system has been depleted of electrochemical energy. Any device like that would produce high levels of triolic waves. These walls have undergone some kind of selective molecular polarization. I haven\'t determined if our phaser energy can generate a stable field. We could alter the photons with phase discriminators.</p>\r\n<p>&nbsp;</p>', '2017-10-25 07:26:32'),
(61, '  Melechesh  ', '<p>We\'re acquainted with the wormhole phenomenon, but this... Is a remarkable piece of bio-electronic engineering by which I see much of the EM spectrum ranging from heat and infrared through radio waves, et cetera, and forgive me if I\'ve said and listened to this a thousand times. This planet\'s interior heat provides an abundance of geothermal energy. We need to neutralize the homing signal.</p>\r\n<p>&nbsp;</p>\r\n<p>Sensors indicate no shuttle or other ships in this sector. According to coordinates, we have travelled 7,000 light years and are located near the system J-25. Tractor beam released, sir. Force field maintaining our hull integrity. Damage report? Sections 27, 28 and 29 on decks four, five and six destroyed. Without our shields, at this range it is probable a photon detonation could destroy the Enterprise.</p>\r\n<p>&nbsp;</p>\r\n<p>Shields up. I recommend we transfer power to phasers and arm the photon torpedoes. Something strange on the detector circuit. The weapons must have disrupted our communicators. You saw something as tasty as meat, but inorganically materialized out of patterns used by our transporters. Captain, the most elementary and valuable statement in science, the beginning of wisdom, is \'I do not know.\' All transporters off.</p>\r\n<p>&nbsp;</p>\r\n<p>Sensors indicate human life forms 30 meters below the planet\'s surface. Stellar flares are increasing in magnitude and frequency. Set course for Rhomboid Dronegar 006, warp seven. There\'s no evidence of an advanced communication network. Total guidance system failure, with less than 24 hours\' reserve power. Shield effectiveness has been reduced 12 percent. We have covered the area in a spherical pattern which a ship without warp drive could cross in the given time.</p>\r\n<p>&nbsp;</p>\r\n<p>Now what are the possibilities of warp drive? Cmdr Riker\'s nervous system has been invaded by an unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level. That\'s why the transporter\'s biofilters couldn\'t extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section\'s critical. Destruction is imminent. Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.</p>\r\n<p>&nbsp;</p>\r\n<p>Resistance is futile.</p>', '2017-10-25 07:30:41'),
(87, '   Chelsea Wolfe   ', '<div id="TheTexte" class="Texte" lang="zxx">\r\n<p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.</p>\r\n<p>Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. in quibus hoc primum est in quo admirer, cur in gravissimis rebus non delectet eos sermo patrius, cum idem fabellas Latinas ad verbum e Graecis expressas non inviti legant. quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit?</p>\r\n<p>Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.</p>\r\n<p>Harum trium sententiarum nulli prorsus assentior. Nec enim illa prima vera est, ut, quem ad modum in se quisque sit, sic in amicum sit animatus. Quam multa enim, quae nostra causa numquam faceremus, facimus causa amicorum! precari ab indigno, supplicare, tum acerbius in aliquem invehi insectarique vehementius, quae in nostris rebus non satis honeste, in amicorum fiunt honestissime; multaeque res sunt in quibus de suis commodis viri boni multa detrahunt detrahique patiuntur, ut iis amici potius quam ipsi fruantur.</p>\r\n<p>Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.</p>\r\n</div>', '2017-11-06 15:38:18');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `state` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_article`, `username`, `commentaire`, `date_commentaire`, `state`) VALUES
(36, 42, 'Opeth', 'Watershed', '2017-10-17 21:36:50', 0),
(56, 59, 'Joe Bonamassa', 'Shade of blue', '2017-10-24 14:17:40', 0),
(39, 42, 'Peter Gabriel', 'Sledgehammer', '2017-10-17 21:50:20', 0),
(60, 57, 'david Bowie', 'Major Tom', '2017-10-24 15:38:21', 0),
(61, 46, 'Miles davis', 'Apple pie tootsie roll brownie. Dessert donut jelly-o bonbon dessert soufflé caramels. Candy canes jelly beans croissant halvah lemon drops. Soufflé gingerbread oat cake topping bear claw pie cookie marshmallow biscuit. Carrot cake tiramisu halvah brownie halvah. Dessert jujubes caramels soufflé donut jelly-o. Candy jelly chocolate bar sweet roll dessert gummies. Danish chupa chups jelly jelly beans lemon drops lollipop pie pastry. Halvah oat cake chocolate caramels bear claw caramels pie tart. Lemon drops chocolate marzipan tootsie roll gummies gingerbread sugar plum. Bear claw danish cookie lemon drops tootsie roll sugar plum apple pie brownie donut. Soufflé gummi bears candy canes bonbon jelly chocolate bar dragée gingerbread danish. Tiramisu lemon drops muffin.\r\nCotton candy bonbon cheesecake. Candy canes pastry cake. Halvah muffin chocolate bar sweet roll liquorice bonbon bear claw biscuit. Apple pie pastry icing bear claw gummi bears. Tiramisu toffee pie liquorice. Lollipop fruitcake tiramisu marzipan. Jelly beans fruitcake jelly beans cheesecake wafer cheesecake chocolate bar halvah. Dragée muffin gingerbread jujubes cake sweet roll. Chocolate liquorice gummi bears caramels pastry carrot cake. Sugar plum marshmallow cake muffin dessert carrot cake gummies macaroon cake. Dragée dragée dragée gummies cake pastry. Macaroon sesame snaps fruitcake candy canes icing muffin marshmallow cake powder. Marzipan pastry jujubes jelly-o lollipop wafer.', '2017-10-24 16:21:43', 0),
(72, 61, 'Emerson lake and palmer', 'Braind Salad surgery', '2017-10-26 15:55:50', 0),
(68, 59, 'The Doors', 'This is the end...', '2017-10-24 20:51:18', 0),
(70, 60, 'Bashung', 'La nuit je mens', '2017-10-25 08:17:16', 0),
(71, 60, 'Pink Floyd', 'Live at Pompei', '2017-10-25 08:31:16', 1),
(99, 87, 'Theophile', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', '2017-11-14 20:45:11', 1),
(96, 60, 'Charlie Parker', 'Bird\r\n', '2017-11-06 15:36:24', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'membre',
  `token` varchar(255) DEFAULT NULL,
  `dateToken` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `token`, `dateToken`) VALUES
(95, 'anatole', 'ana@tol.fr', '$2y$10$W5ofrj.Jop18ufBl66ys6O4V14sShEoX40.8mbDRDJm6Qd9ZVGaV.', 'membre', NULL, NULL),
(90, 'rasko', 'rasko@tom.fr', '$2y$10$M.akNuFkyTV3lkeKyFPt2ezxc4IY3VqJgvpqewX3SGgg70fwoie06', 'membre', NULL, NULL),
(86, 'pascale', 'mishima.chris@hotmail.fr', '$2y$10$YaeOOyVJkkHrXpa8P2Ni4.UIjrOjnFMPv1Z0E1AFLiSmxQNaRBnie', 'membre', NULL, NULL),
(91, 'theodore', 'theo@free.fr', '$2y$10$vfl1PKm1z4TBGFwmnNX4NOCeGbMGUHiYF5XxIMJaSjlS2ywEKV/AW', 'membre', NULL, NULL),
(94, 'Theo', 'theo@gmail.com', '$2y$10$LTu2mrMVNvb1pLAgIS3CmesYAF7ozZFGjD9xa2QMS7Fig7GBq6oOG', 'membre', NULL, NULL),
(93, 'chris', 'christel.coeur@free.fr', '$2y$10$MFnUPA9m7xWx3exNlZmnHetn4S/gbbtRd9OUxJcg84lzguQm3LNSW', 'admin', NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
