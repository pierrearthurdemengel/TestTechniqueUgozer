<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Exécute les seeds de la base de données.
     */
    public function run(): void
    {
        // Insère les trois premiers articles
        $this->insertFirstThreeArticles();
        
        // Génère des articles supplémentaires
        $this->generateAdditionalArticles();
    }

    /**
     * Insère les trois premiers articles.
     */
    private function insertFirstThreeArticles()
    {
        $articles = [
            [
                'title' => 'Pourquoi Strasbourg est-elle une ville où il fait bon vivre ?',
                'content' => "Strasbourg, située à la frontière entre la France et l'Allemagne, est souvent citée comme une ville où il fait bon vivre. Mais qu'est-ce qui fait de cette ville alsacienne un endroit si agréable à habiter ? Voici quelques raisons qui illustrent pourquoi Strasbourg séduit ses habitants et attire de nouveaux arrivants.\n\nUn Cadre de Vie Unique\nStrasbourg bénéficie d'un cadre de vie exceptionnel grâce à son mélange harmonieux d'architecture médiévale et contemporaine. La ville est célèbre pour sa Grande Île, classée au patrimoine mondial de l'UNESCO, avec ses maisons à colombages, ses ruelles pavées et ses canaux pittoresques. Le charme de cette vieille ville est complété par des espaces verts abondants comme le Parc de l'Orangerie, offrant un havre de paix en plein cœur urbain.\n\nUne Ville Verte et Écologique\nStrasbourg est souvent saluée pour ses initiatives en matière d'écologie et de mobilité durable. La ville a mis en place un réseau étendu de pistes cyclables, facilitant les déplacements en vélo. De plus, la politique de transports en commun est efficace avec un réseau de tramways moderne et bien desservi. Les Strasbourgeois profitent ainsi d'une qualité de l'air améliorée et d'un environnement moins pollué, ce qui contribue à une meilleure qualité de vie.\n\nUne Richesse Culturelle et Gastronomique\nLa diversité culturelle de Strasbourg est un autre atout majeur. La ville abrite de nombreux musées, théâtres et festivals, tels que le célèbre Marché de Noël, qui attire des visiteurs du monde entier. La culture alsacienne, avec ses influences germaniques, se reflète également dans la gastronomie locale. Les habitants et visiteurs peuvent se régaler de spécialités comme la choucroute, le baeckeoffe, ou encore les fameuses tartes flambées, dans une ambiance conviviale.\n\nUn Centre Européen\nEn tant que siège du Parlement européen, du Conseil de l'Europe et de la Cour européenne des droits de l'homme, Strasbourg joue un rôle clé sur la scène internationale. Cette dimension européenne renforce l'attractivité de la ville, attirant des résidents et professionnels de divers horizons, ce qui enrichit encore davantage son dynamisme économique et social.\n\nUne Ville Éducative et Innovante\nStrasbourg est également réputée pour son excellence académique et ses pôles de recherche innovants. La présence de l'Université de Strasbourg, l'une des plus anciennes et prestigieuses d'Europe, offre un large éventail de programmes éducatifs et attire des étudiants du monde entier. L'accent mis sur la recherche et l'innovation contribue à un environnement intellectuel stimulant et à des opportunités professionnelles diverses.\n\nUne Communauté Accueillante\nEnfin, l'esprit communautaire à Strasbourg est particulièrement fort. Les Strasbourgeois sont connus pour leur hospitalité et leur ouverture d'esprit. La ville accueille régulièrement des événements sociaux et culturels qui favorisent la cohésion sociale et renforcent le sentiment d'appartenance à la communauté.\n\nEn somme, Strasbourg offre un équilibre parfait entre tradition et modernité, nature et urbanité, culture locale et influence internationale. C'est une ville où l'on peut non seulement apprécier la qualité de vie mais aussi s'épanouir personnellement et professionnellement. Que vous soyez à la recherche de tranquillité ou d'animation, Strasbourg a tout pour plaire et reste incontestablement une ville où il fait bon vivre.",
                'category' => 'Villes de France',
                'image_path' => 'images/Ti6FrNzl3G6e978s5kZceFrbWoaRT3Qm29Ue69fX.jpg',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pourquoi Pierre-Arthur Demengel est le Candidat Idéal pour une Alternance en Laravel, Vite.js et Tailwind',
                'content' => "Lorsqu'il s'agit de choisir un candidat pour une alternance en développement web, il est essentiel de trouver une personne qui non seulement possède des compétences techniques solides, mais aussi une capacité à apprendre rapidement et à s'adapter aux nouveaux environnements. Pierre-Arthur Demengel, avec son parcours académique et professionnel riche et varié, représente parfaitement ce profil. Voici pourquoi il est le candidat idéal pour une alternance axée sur des technologies comme Laravel, Vite.js et Tailwind.\n\nUne Passion pour le Développement Web\nPierre-Arthur est actuellement titulaire d’un titre professionnel de Développeur web et web mobile, obtenu à Elan Formation à Strasbourg. Cette formation rigoureuse lui a permis d’acquérir des compétences avancées en développement front-end et back-end, notamment en HTML5, CSS3, JavaScript et PHP8​​. Son engagement à poursuivre ses études pour un Bachelor Développeur Full Stack à MNS à Metz démontre sa volonté de continuer à se perfectionner et à approfondir ses connaissances.\n\nUne Capacité d’Adaptation et d’Apprentissage Rapide\nBien que Pierre-Arthur n’ait pas encore d’expérience spécifique avec Laravel, Vite.js et Tailwind, il a prouvé sa capacité à apprendre rapidement de nouvelles technologies. Par exemple, il a déjà maîtrisé Symfony, un autre framework PHP, ainsi que React.js pour le développement front-end​​. Son parcours inclut également une expérience en autodidacte avec le JavaScript30 Challenge, où il a perfectionné ses compétences en JavaScript sans l’aide de bibliothèques externes​​. Cette aptitude à s’auto-former et à maîtriser de nouvelles compétences techniques est un atout considérable pour réussir dans un environnement en constante évolution.\n\nUne Expérience Professionnelle Solide\nPierre-Arthur a déjà accumulé une expérience professionnelle pertinente, notamment lors de son stage en tant que développeur web à Bruxelles, où il a créé des sites professionnels​​. Cette expérience pratique lui a permis de se familiariser avec les défis du développement web en conditions réelles, ce qui le rend prêt à relever de nouveaux défis techniques dans un cadre d’alternance.\n\nDes Compétences en Communication et Travail d’Équipe\nEn plus de ses compétences techniques, Pierre-Arthur est également capable de travailler efficacement en équipe et de communiquer de manière claire et concise. Son niveau B2 en anglais et en allemand en témoigne, ce qui lui permet de collaborer facilement dans des environnements multiculturels​​. Cette capacité à interagir avec des collègues de divers horizons est cruciale pour le succès dans un contexte d’alternance où la collaboration est clé.\n\nUne Motivation et un Engagement Personnels\nPierre-Arthur est motivé par une véritable passion pour le développement web et mobile. Son envie de s’immerger dans des technologies nouvelles et de contribuer activement à des projets innovants est palpable. Il est également prêt à apporter une touche personnelle au sein de l’équipe, comme sa capacité à préparer un excellent café, un petit détail qui peut grandement contribuer à une atmosphère de travail agréable et productive.\n\nConclusion\nEn somme, Pierre-Arthur Demengel est un candidat qui combine des compétences techniques solides, une grande capacité d’apprentissage et une expérience professionnelle précieuse. Sa passion pour le développement web, son adaptabilité et son engagement personnel en font le choix idéal pour une alternance en Laravel, Vite.js et Tailwind. Son intégration au sein de votre équipe ne pourra qu'enrichir vos projets et contribuer à leur succès.\n\nPour toute information complémentaire ou pour organiser un entretien, vous pouvez contacter Pierre-Arthur à l'adresse email pierrearthur.demengel@gmail.com, sur son portfolio https://pierrearthurdemengel.ovh ou via téléphone au 0695413025.",
                'category' => 'Recrutement en alternance',
                'image_path' => 'images/USzvl7yNyeTnvcOk9h7MGhLlAOuSK0IpFsPHuL9C.jpg',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pourquoi travailler pour UgoZER : Une opportunité unique pour les passionnés de voyage et de technologie',
                'content' => "Introduction à UgoZER\nUgoZER, une startup française basée à Strasbourg, la capitale européenne, est à la pointe de l'innovation dans le secteur du tourisme. Spécialisée dans les guides touristiques multilingues, UgoZER offre des solutions numériques qui enrichissent l'expérience des voyageurs à travers le monde. Avec une mission claire : rendre les voyages plus accessibles et agréables pour tous, UgoZER s'est imposée comme un acteur incontournable dans l'industrie du tourisme. Voici pourquoi vous devriez envisager de rejoindre cette équipe dynamique et passionnée.\n\nUne Entreprise au Cœur de Strasbourg\nTravailler pour UgoZER, c'est avant tout l'opportunité de s'implanter dans l'une des villes les plus charmantes de France. Située idéalement aux abords du canal du Rhône au Rhin et du parc de l'Orangerie de Strasbourg, UgoZER bénéficie d'un cadre de travail exceptionnel. Ces environs offrent non seulement un lieu de travail agréable, mais aussi de nombreuses possibilités de détente et de loisirs après une journée productive.\n\nUne Mission Portée par la Passion du Voyage\nCréée par des amoureux des voyages, UgoZER a pour mission de faciliter les déplacements des voyageurs dans des pays dont ils ne maîtrisent pas la langue. Que vous soyez un aventurier chevronné ou que vous ayez simplement une passion pour la découverte de nouvelles cultures, travailler chez UgoZER vous permettra de contribuer à cette mission. Vous participerez au développement de solutions qui rendent les voyages plus simples et plus agréables, en rendant accessibles des informations cruciales dans plusieurs langues.\n\nUne Solution Innovante pour les Voyageurs et les Professionnels\nUgoZER propose des services uniques pour les voyageurs et les professionnels du secteur touristique. En tant que voyageur, vous pouvez avoir toutes vos adresses préférées sur votre smartphone, disponibles en fichiers multilingues, audibles ou lisibles d’un simple clic. Cette fonctionnalité facilite la communication avec les chauffeurs de taxi et d'autres interlocuteurs dans des pays étrangers.\n\nPour les professionnels, comme les réceptionnistes ou les managers d’hôtel, UgoZER offre la possibilité de concevoir et de partager des programmes de visites personnalisés avec leurs clients. Cette fonctionnalité enrichit l’expérience client et augmente la satisfaction des visiteurs, ce qui est crucial pour la fidélisation et la croissance de l'établissement.\n\nUne Startup Soutenue par des Partenaires de Renom\nUgoZER bénéficie de la confiance et du soutien de partenaires prestigieux tels que Novotel Strasbourg Centre Halles, Ibis Strasbourg Centre Halles, et l'Hôtel Beaucour. Ces collaborations témoignent de la qualité et de l'impact des solutions offertes par UgoZER. De plus, des partenariats avec des entreprises comme Suprahead Studio, GrandTesteur, Bpifrance, EasyTransac, et Scalingo montrent la reconnaissance de la valeur ajoutée de cette startup dans divers secteurs​​.\n\nUn Environnement de Travail Dynamique et Motivant\nTravailler chez UgoZER, c’est intégrer une équipe dynamique et motivée, où chaque membre joue un rôle clé dans l'innovation et le développement de l'entreprise. La startup favorise l’implication et la motivation de chacun, renforçant ainsi le sentiment d'appartenance à une entreprise en pleine croissance. L'utilisation des technologies les plus récentes, la possibilité de travailler sur des projets innovants, et l'ambiance collaborative font d'UgoZER un lieu de travail enrichissant.\n\nDes Opportunités de Croissance Personnelle et Professionnelle\nUgoZER ne se contente pas d’offrir un environnement de travail agréable ; elle soutient également le développement professionnel de ses employés. En rejoignant l’équipe, vous aurez l’occasion d'élargir vos compétences, de travailler sur des projets variés et d’avoir un impact direct sur le développement de la société. Vous serez entouré de professionnels passionnés qui partagent une vision commune : transformer l'expérience de voyage à l'échelle mondiale.\n\nConclusion\nEn somme, travailler pour UgoZER représente une opportunité unique de faire partie d’une startup innovante dans le domaine du tourisme, située dans un cadre exceptionnel à Strasbourg. Vous aurez la chance de contribuer à une mission passionnante, de collaborer avec des partenaires de renom et de grandir professionnellement dans un environnement dynamique. Si vous êtes passionné par les voyages et la technologie, UgoZER est l’endroit idéal pour vous.",
                'category' => 'Carrières et Opportunités',
                'image_path' => 'images/9Bbg1kmIrIpHlQMcrmkkWOFXhucPJZKkHigUf4Ld.png',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Insère les articles
        foreach ($articles as $article) {
            DB::table('articles')->insert($article);
        }
    }

    /**
     * Génère des articles supplémentaires à l'aide de Faker.
     */
    private function generateAdditionalArticles()
    {
        $faker = Faker::create();

        // Génère 8 articles supplémentaires pour avoir un total de 11 articles
        for ($i = 0; $i < 8; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'category' => $faker->word,
                'image_path' => $faker->imageUrl(640, 480, 'cats', true, 'Faker'),
                'published' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
