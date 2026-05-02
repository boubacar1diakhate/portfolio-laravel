<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

 // Vider les tables avant d'insérer
    DB::table('projects')->truncate();
    DB::table('skills')->truncate();
  
        // ─── COMPÉTENCES ───────────────────────────────────────────────
        $skills = [
            ['name' => 'HTML / CSS',      'category' => 'frontend', 'level' => 92, 'order' => 1],
            ['name' => 'JavaScript',      'category' => 'frontend', 'level' => 85, 'order' => 2],
            ['name' => 'React',           'category' => 'frontend', 'level' => 80, 'order' => 3],
            ['name' => 'React Native',    'category' => 'frontend', 'level' => 70, 'order' => 4],
            ['name' => 'Flutter',         'category' => 'frontend', 'level' => 65, 'order' => 5],
            ['name' => 'Tailwind CSS',    'category' => 'frontend', 'level' => 88, 'order' => 6],
            ['name' => 'Bootstrap',       'category' => 'frontend', 'level' => 90, 'order' => 7],
            ['name' => 'PHP',             'category' => 'backend',  'level' => 90, 'order' => 1],
            ['name' => 'Laravel',         'category' => 'backend',  'level' => 92, 'order' => 2],
            ['name' => 'Python',          'category' => 'backend',  'level' => 80, 'order' => 3],
            ['name' => 'Django',          'category' => 'backend',  'level' => 75, 'order' => 4],
            ['name' => 'Node.js',         'category' => 'backend',  'level' => 70, 'order' => 5],
            ['name' => 'Spring Boot',     'category' => 'backend',  'level' => 65, 'order' => 6],
            ['name' => 'Java',            'category' => 'backend',  'level' => 75, 'order' => 7],
            ['name' => 'MySQL',           'category' => 'devops',   'level' => 90, 'order' => 1],
            ['name' => 'PostgreSQL',      'category' => 'devops',   'level' => 85, 'order' => 2],
            ['name' => 'Oracle DBA',      'category' => 'devops',   'level' => 75, 'order' => 3],
            ['name' => 'NoSQL',           'category' => 'devops',   'level' => 65, 'order' => 4],
            ['name' => 'Docker',          'category' => 'devops',   'level' => 75, 'order' => 5],
            ['name' => 'Linux (Ubuntu)',  'category' => 'devops',   'level' => 78, 'order' => 6],
            ['name' => 'Git / GitHub',    'category' => 'tools',    'level' => 88, 'order' => 1],
            ['name' => 'Figma',           'category' => 'tools',    'level' => 75, 'order' => 2],
            ['name' => 'Postman',         'category' => 'tools',    'level' => 85, 'order' => 3],
            ['name' => 'UML / Merise',    'category' => 'tools',    'level' => 82, 'order' => 4],
            ['name' => 'Vercel',          'category' => 'tools',    'level' => 78, 'order' => 5],
        ];
        foreach ($skills as $skill) { Skill::create($skill); }

        // ─── PROJETS ───────────────────────────────────────────────────
        $projects = [

            // ── 1. Teranga Dentaire ──
            [
                'title'            => 'Teranga Dentaire',
                'slug'             => 'teranga-dentaire',
                'description'      => 'Application complète de gestion d\'un cabinet dentaire avec prise de rendez-vous intelligente, dossiers médicaux numériques et chatbot médical intégré.',
                'long_description' => "Teranga Dentaire digitalise entièrement la gestion d'un cabinet dentaire.\n\nFonctionnalités :\n- Gestion des patients, personnels et consultations médicales\n- Création et suivi des dossiers médicaux numériques\n- Prise de rendez-vous en ligne avec notifications automatiques\n- Chatbot médical intelligent pour orienter les patients\n- Tableau de bord avec statistiques en temps réel\n- Gestion des consultations et historique médical complet",
                'technologies'     => ['Laravel', 'MySQL', 'Blade', 'Bootstrap', 'JavaScript', 'UML'],
                'github_url'       => 'https://github.com/boubacar112',
                'demo_url'         => null,
                'video_url'        => null, // ← ajouter le lien YouTube ici
                 'image'        => 'images/projects/teranga-dentaire.png',
                'status'           => 'termine',
                'featured'         => true,
                'order'            => 1,
            ],

            // ── 2. Natte App ──
            [
                'title'            => 'Natte App',
                'slug'             => 'natte-app',
                'description'      => 'Application de gestion de tontines communautaires avec suivi en temps réel des contributions, historique des transactions et notifications automatisées.',
                'long_description' => "Natte App modernise la gestion des tontines traditionnelles, un système d'épargne communautaire très répandu en Afrique de l'Ouest.\n\nFonctionnalités :\n- Gestion des membres et groupes de tontines\n- Suivi des cotisations et historique détaillé des transactions\n- Notifications automatisées pour les échéances de paiement\n- Suivi en temps réel des contributions de chaque membre\n- API REST robuste consommée par le frontend React\n- Tableaux de bord modernes et intuitifs",
                'technologies'     => ['Laravel', 'React.js', 'PostgreSQL', 'TailwindCSS', 'API REST', 'UML'],
                'github_url'       => 'https://github.com/boubacar112',
                'demo_url'         => null,
                'video_url'        => null, // ← ajouter le lien YouTube ici
                'image'        => 'images/projects/natte-app.png',
                'status'           => 'termine',
                'featured'         => true,
                'order'            => 2,
            ],

            // ── 3. Red Product ──
            [
                'title'            => 'Red Product',
                'slug'             => 'red-product',
                'description'      => 'Plateforme de gestion hôtelière permettant de créer et gérer des hôtels, chambres, réservations et clients avec un tableau de bord administrateur complet.',
                'long_description' => "Red Product est une plateforme de gestion hôtelière en cours de développement.\n\nFonctionnalités prévues :\n- Création et gestion de plusieurs hôtels\n- Gestion des chambres, tarifs et disponibilités\n- Système de réservation en ligne\n- Gestion des clients et historique des séjours\n- Tableau de bord administrateur avec statistiques\n- Gestion des paiements et facturation\n- Interface responsive adaptée mobile et desktop",
                'technologies'     => ['Laravel', 'Vue.js', 'MySQL', 'TailwindCSS', 'Docker'],
                'github_url'       => 'https://github.com/boubacar112',
                'demo_url'         => null,
                'video_url'        => null, // ← ajouter le lien YouTube ici
                'image'        => 'images/projects/red-product.png',
                'status'           => 'en_cours',
                'featured'         => true,
                'order'            => 3,
            ],

            // ── 4. CinéCritique ──
            [
                'title'            => 'CinéCritique',
                'slug'             => 'cinecritique',
                'description'      => 'Plateforme communautaire dédiée aux amateurs de cinéma pour rechercher des films via l\'API TMDb, consulter les détails, laisser des critiques et découvrir les films les mieux notés.',
                'long_description' => "CinéCritique répond à un besoin simple : les amateurs de cinéma aiment consulter les avis, découvrir de nouveaux films et partager leurs critiques.\n\nC'est une plateforme communautaire qui permet à chacun de :\n- Rechercher des films en temps réel via l'API externe TMDb\n- Consulter les détails complets d'un film (synopsis, casting, bande-annonce)\n- Laisser une critique et noter le film\n- Voir les films les mieux notés par la communauté\n- Créer des listes personnalisées (favoris, vus, à voir)\n- Découvrir les recommandations basées sur ses goûts\n\nProjet en cours de développement — livraison prévue prochainement.",
                'technologies'     => ['Django', 'React.js', 'PostgreSQL', 'TailwindCSS', 'API TMDb', 'Python'],
                'github_url'       => 'https://github.com/boubacar112',
                'demo_url'         => null,
                'video_url'        => null, // ← ajouter le lien YouTube ici
                'image'        => 'images/projects/cinecritique.png',
                'status'           => 'en_cours',
                'featured'         => true,
                'order'            => 4,
            ],
        ];
        foreach ($projects as $project) { Project::create($project); }
    }
}