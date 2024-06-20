-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laravel`;

-- Listage de la structure de table laravel. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel.articles : ~0 rows (environ)
INSERT INTO `articles` (`id`, `title`, `content`, `category`, `image_path`, `published`, `created_at`, `updated_at`) VALUES
	(1, 'Pourquoi Strasbourg est-elle une ville où il fait bon vivre ?', 'Strasbourg, située à la frontière entre la France et l\'Allemagne, est souvent citée comme une ville où il fait bon vivre. Mais qu\'est-ce qui fait de cette ville alsacienne un endroit si agréable à habiter ? Voici quelques raisons qui illustrent pourquoi Strasbourg séduit ses habitants et attire de nouveaux arrivants.\r\n\r\nUn Cadre de Vie Unique\r\nStrasbourg bénéficie d\'un cadre de vie exceptionnel grâce à son mélange harmonieux d\'architecture médiévale et contemporaine. La ville est célèbre pour sa Grande Île, classée au patrimoine mondial de l\'UNESCO, avec ses maisons à colombages, ses ruelles pavées et ses canaux pittoresques. Le charme de cette vieille ville est complété par des espaces verts abondants comme le Parc de l\'Orangerie, offrant un havre de paix en plein cœur urbain.\r\n\r\nUne Ville Verte et Écologique\r\nStrasbourg est souvent saluée pour ses initiatives en matière d\'écologie et de mobilité durable. La ville a mis en place un réseau étendu de pistes cyclables, facilitant les déplacements en vélo. De plus, la politique de transports en commun est efficace avec un réseau de tramways moderne et bien desservi. Les Strasbourgeois profitent ainsi d\'une qualité de l\'air améliorée et d\'un environnement moins pollué, ce qui contribue à une meilleure qualité de vie.\r\n\r\nUne Richesse Culturelle et Gastronomique\r\nLa diversité culturelle de Strasbourg est un autre atout majeur. La ville abrite de nombreux musées, théâtres et festivals, tels que le célèbre Marché de Noël, qui attire des visiteurs du monde entier. La culture alsacienne, avec ses influences germaniques, se reflète également dans la gastronomie locale. Les habitants et visiteurs peuvent se régaler de spécialités comme la choucroute, le baeckeoffe, ou encore les fameuses tartes flambées, dans une ambiance conviviale.\r\n\r\nUn Centre Européen\r\nEn tant que siège du Parlement européen, du Conseil de l\'Europe et de la Cour européenne des droits de l\'homme, Strasbourg joue un rôle clé sur la scène internationale. Cette dimension européenne renforce l\'attractivité de la ville, attirant des résidents et professionnels de divers horizons, ce qui enrichit encore davantage son dynamisme économique et social.\r\n\r\nUne Ville Éducative et Innovante\r\nStrasbourg est également réputée pour son excellence académique et ses pôles de recherche innovants. La présence de l\'Université de Strasbourg, l\'une des plus anciennes et prestigieuses d\'Europe, offre un large éventail de programmes éducatifs et attire des étudiants du monde entier. L\'accent mis sur la recherche et l\'innovation contribue à un environnement intellectuel stimulant et à des opportunités professionnelles diverses.\r\n\r\nUne Communauté Accueillante\r\nEnfin, l\'esprit communautaire à Strasbourg est particulièrement fort. Les Strasbourgeois sont connus pour leur hospitalité et leur ouverture d\'esprit. La ville accueille régulièrement des événements sociaux et culturels qui favorisent la cohésion sociale et renforcent le sentiment d\'appartenance à la communauté.\r\n\r\nEn somme, Strasbourg offre un équilibre parfait entre tradition et modernité, nature et urbanité, culture locale et influence internationale. C\'est une ville où l\'on peut non seulement apprécier la qualité de vie mais aussi s\'épanouir personnellement et professionnellement. Que vous soyez à la recherche de tranquillité ou d\'animation, Strasbourg a tout pour plaire et reste incontestablement une ville où il fait bon vivre.', 'Villes de France', 'images/Ti6FrNzl3G6e978s5kZceFrbWoaRT3Qm29Ue69fX.jpg', 1, '2024-06-20 10:36:57', '2024-06-20 10:36:57'),
	(2, 'Pourquoi Pierre-Arthur Demengel est le Candidat Idéal pour une Alternance en Laravel, Vite.js et Tailwind', 'Lorsqu\'il s\'agit de choisir un candidat pour une alternance en développement web, il est essentiel de trouver une personne qui non seulement possède des compétences techniques solides, mais aussi une capacité à apprendre rapidement et à s\'adapter aux nouveaux environnements. Pierre-Arthur Demengel, avec son parcours académique et professionnel riche et varié, représente parfaitement ce profil. Voici pourquoi il est le candidat idéal pour une alternance axée sur des technologies comme Laravel, Vite.js et Tailwind.\r\n\r\nUne Passion pour le Développement Web\r\nPierre-Arthur est actuellement titulaire d’un titre professionnel de Développeur web et web mobile, obtenu à Elan Formation à Strasbourg. Cette formation rigoureuse lui a permis d’acquérir des compétences avancées en développement front-end et back-end, notamment en HTML5, CSS3, JavaScript et PHP8​​. Son engagement à poursuivre ses études pour un Bachelor Développeur Full Stack à MNS à Metz démontre sa volonté de continuer à se perfectionner et à approfondir ses connaissances.\r\n\r\nUne Capacité d’Adaptation et d’Apprentissage Rapide\r\nBien que Pierre-Arthur n’ait pas encore d’expérience spécifique avec Laravel, Vite.js et Tailwind, il a prouvé sa capacité à apprendre rapidement de nouvelles technologies. Par exemple, il a déjà maîtrisé Symfony, un autre framework PHP, ainsi que React.js pour le développement front-end​​. Son parcours inclut également une expérience en autodidacte avec le JavaScript30 Challenge, où il a perfectionné ses compétences en JavaScript sans l’aide de bibliothèques externes​​. Cette aptitude à s’auto-former et à maîtriser de nouvelles compétences techniques est un atout considérable pour réussir dans un environnement en constante évolution.\r\n\r\nUne Expérience Professionnelle Solide\r\nPierre-Arthur a déjà accumulé une expérience professionnelle pertinente, notamment lors de son stage en tant que développeur web à Bruxelles, où il a créé des sites professionnels​​. Cette expérience pratique lui a permis de se familiariser avec les défis du développement web en conditions réelles, ce qui le rend prêt à relever de nouveaux défis techniques dans un cadre d’alternance.\r\n\r\nDes Compétences en Communication et Travail d’Équipe\r\nEn plus de ses compétences techniques, Pierre-Arthur est également capable de travailler efficacement en équipe et de communiquer de manière claire et concise. Son niveau B2 en anglais et en allemand en témoigne, ce qui lui permet de collaborer facilement dans des environnements multiculturels​​. Cette capacité à interagir avec des collègues de divers horizons est cruciale pour le succès dans un contexte d’alternance où la collaboration est clé.\r\n\r\nUne Motivation et un Engagement Personnels\r\nPierre-Arthur est motivé par une véritable passion pour le développement web et mobile. Son envie de s’immerger dans des technologies nouvelles et de contribuer activement à des projets innovants est palpable. Il est également prêt à apporter une touche personnelle au sein de l’équipe, comme sa capacité à préparer un excellent café, un petit détail qui peut grandement contribuer à une atmosphère de travail agréable et productive.\r\n\r\nConclusion\r\nEn somme, Pierre-Arthur Demengel est un candidat qui combine des compétences techniques solides, une grande capacité d’apprentissage et une expérience professionnelle précieuse. Sa passion pour le développement web, son adaptabilité et son engagement personnel en font le choix idéal pour une alternance en Laravel, Vite.js et Tailwind. Son intégration au sein de votre équipe ne pourra qu\'enrichir vos projets et contribuer à leur succès.\r\n\r\nPour toute information complémentaire ou pour organiser un entretien, vous pouvez contacter Pierre-Arthur à l\'adresse email pierrearthur.demengel@gmail.com, sur son portfolio https://pierrearthurdemengel.ovh ou via téléphone au 0695413025.', 'Recrutement en alternance', 'images/USzvl7yNyeTnvcOk9h7MGhLlAOuSK0IpFsPHuL9C.jpg', 1, '2024-06-20 10:43:00', '2024-06-20 10:43:12'),
	(3, 'Pourquoi travailler pour UgoZER : Une opportunité unique pour les passionnés de voyage et de technologie', 'Introduction à UgoZER\r\nUgoZER, une startup française basée à Strasbourg, la capitale européenne, est à la pointe de l\'innovation dans le secteur du tourisme. Spécialisée dans les guides touristiques multilingues, UgoZER offre des solutions numériques qui enrichissent l\'expérience des voyageurs à travers le monde. Avec une mission claire : rendre les voyages plus accessibles et agréables pour tous, UgoZER s\'est imposée comme un acteur incontournable dans l\'industrie du tourisme. Voici pourquoi vous devriez envisager de rejoindre cette équipe dynamique et passionnée.\r\n\r\nUne Entreprise au Cœur de Strasbourg\r\nTravailler pour UgoZER, c\'est avant tout l\'opportunité de s\'implanter dans l\'une des villes les plus charmantes de France. Située idéalement aux abords du canal du Rhône au Rhin et du parc de l\'Orangerie de Strasbourg, UgoZER bénéficie d\'un cadre de travail exceptionnel. Ces environs offrent non seulement un lieu de travail agréable, mais aussi de nombreuses possibilités de détente et de loisirs après une journée productive.\r\n\r\nUne Mission Portée par la Passion du Voyage\r\nCréée par des amoureux des voyages, UgoZER a pour mission de faciliter les déplacements des voyageurs dans des pays dont ils ne maîtrisent pas la langue. Que vous soyez un aventurier chevronné ou que vous ayez simplement une passion pour la découverte de nouvelles cultures, travailler chez UgoZER vous permettra de contribuer à cette mission. Vous participerez au développement de solutions qui rendent les voyages plus simples et plus agréables, en rendant accessibles des informations cruciales dans plusieurs langues.\r\n\r\nUne Solution Innovante pour les Voyageurs et les Professionnels\r\nUgoZER propose des services uniques pour les voyageurs et les professionnels du secteur touristique. En tant que voyageur, vous pouvez avoir toutes vos adresses préférées sur votre smartphone, disponibles en fichiers multilingues, audibles ou lisibles d’un simple clic. Cette fonctionnalité facilite la communication avec les chauffeurs de taxi et d\'autres interlocuteurs dans des pays étrangers.\r\n\r\nPour les professionnels, comme les réceptionnistes ou les managers d’hôtel, UgoZER offre la possibilité de concevoir et de partager des programmes de visites personnalisés avec leurs clients. Cette fonctionnalité enrichit l’expérience client et augmente la satisfaction des visiteurs, ce qui est crucial pour la fidélisation et la croissance de l\'établissement.\r\n\r\nUne Startup Soutenue par des Partenaires de Renom\r\nUgoZER bénéficie de la confiance et du soutien de partenaires prestigieux tels que Novotel Strasbourg Centre Halles, Ibis Strasbourg Centre Halles, et l\'Hôtel Beaucour. Ces collaborations témoignent de la qualité et de l\'impact des solutions offertes par UgoZER. De plus, des partenariats avec des entreprises comme Suprahead Studio, GrandTesteur, Bpifrance, EasyTransac, et Scalingo montrent la reconnaissance de la valeur ajoutée de cette startup dans divers secteurs​​.\r\n\r\nUn Environnement de Travail Dynamique et Motivant\r\nTravailler chez UgoZER, c’est intégrer une équipe dynamique et motivée, où chaque membre joue un rôle clé dans l’innovation et le développement de l\'entreprise. La startup favorise l’implication et la motivation de chacun, renforçant ainsi le sentiment d\'appartenance à une entreprise en pleine croissance. L\'utilisation des technologies les plus récentes, la possibilité de travailler sur des projets innovants, et l\'ambiance collaborative font d\'UgoZER un lieu de travail enrichissant.\r\n\r\nDes Opportunités de Croissance Personnelle et Professionnelle\r\nUgoZER ne se contente pas d’offrir un environnement de travail agréable ; elle soutient également le développement professionnel de ses employés. En rejoignant l’équipe, vous aurez l’occasion d\'élargir vos compétences, de travailler sur des projets variés et d’avoir un impact direct sur le développement de la société. Vous serez entouré de professionnels passionnés qui partagent une vision commune : transformer l\'expérience de voyage à l\'échelle mondiale.\r\n\r\nConclusion\r\nEn somme, travailler pour UgoZER représente une opportunité unique de faire partie d’une startup innovante dans le domaine du tourisme, située dans un cadre exceptionnel à Strasbourg. Vous aurez la chance de contribuer à une mission passionnante, de collaborer avec des partenaires de renom et de grandir professionnellement dans un environnement dynamique. Si vous êtes passionné par les voyages et la technologie, UgoZER est l’endroit idéal pour vous.\r\n\r\nPour en savoir plus sur les opportunités de carrière chez UgoZER, visitez leur site web www.ugozer.com ou contactez leur équipe RH pour discuter des postes disponibles.', 'Carrières et Opportunités', 'images/9Bbg1kmIrIpHlQMcrmkkWOFXhucPJZKkHigUf4Ld.png', 1, '2024-06-20 11:07:11', '2024-06-20 11:07:11');

-- Listage de la structure de table laravel. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel.failed_jobs : ~0 rows (environ)

-- Listage de la structure de table laravel. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel.migrations : ~4 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2024_06_17_143132_create_articles_table', 1),
	(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
	(7, '2024_06_19_182307_create_articles_table', 3);

-- Listage de la structure de table laravel. password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel.password_reset_tokens : ~0 rows (environ)

-- Listage de la structure de table laravel. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel.personal_access_tokens : ~0 rows (environ)

-- Listage de la structure de table laravel. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel.users : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
