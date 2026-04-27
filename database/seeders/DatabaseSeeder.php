<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ─── COMPÉTENCES ───────────────────────────────────────────────

        $skills = [
            // Frontend
            ['name' => 'HTML / CSS',      'category' => 'frontend', 'level' => 92, 'order' => 1],
            ['name' => 'JavaScript',      'category' => 'frontend', 'level' => 85, 'order' => 2],
            ['name' => 'React',           'category' => 'frontend', 'level' => 80, 'order' => 3],
            ['name' => 'React Native',    'category' => 'frontend', 'level' => 70, 'order' => 4],
            ['name' => 'Flutter',         'category' => 'frontend', 'level' => 65, 'order' => 5],
            ['name' => 'Tailwind CSS',    'category' => 'frontend', 'level' => 88, 'order' => 6],
            ['name' => 'Bootstrap',       'category' => 'frontend', 'level' => 90, 'order' => 7],

            // Backend
            ['name' => 'PHP',             'category' => 'backend',  'level' => 90, 'order' => 1],
            ['name' => 'Laravel',         'category' => 'backend',  'level' => 92, 'order' => 2],
            ['name' => 'Python',          'category' => 'backend',  'level' => 80, 'order' => 3],
            ['name' => 'Django',          'category' => 'backend',  'level' => 75, 'order' => 4],
            ['name' => 'Node.js',         'category' => 'backend',  'level' => 70, 'order' => 5],
            ['name' => 'Spring Boot',     'category' => 'backend',  'level' => 65, 'order' => 6],
            ['name' => 'Java',            'category' => 'backend',  'level' => 75, 'order' => 7],
            ['name' => 'C',               'category' => 'backend',  'level' => 60, 'order' => 8],

            // Bases de données
            ['name' => 'MySQL',           'category' => 'devops',   'level' => 90, 'order' => 1],
            ['name' => 'PostgreSQL',      'category' => 'devops',   'level' => 85, 'order' => 2],
            ['name' => 'Oracle DBA',      'category' => 'devops',   'level' => 75, 'order' => 3],
            ['name' => 'NoSQL',           'category' => 'devops',   'level' => 65, 'order' => 4],
            ['name' => 'XML',             'category' => 'devops',   'level' => 70, 'order' => 5],
            ['name' => 'Docker',          'category' => 'devops',   'level' => 75, 'order' => 6],
            ['name' => 'Linux (Ubuntu)',  'category' => 'devops',   'level' => 78, 'order' => 7],

            // Outils
            ['name' => 'Git / GitHub',    'category' => 'tools',    'level' => 88, 'order' => 1],
            ['name' => 'Figma',           'category' => 'tools',    'level' => 75, 'order' => 2],
            ['name' => 'Postman',         'category' => 'tools',    'level' => 85, 'order' => 3],
            ['name' => 'UML / Merise',    'category' => 'tools',    'level' => 82, 'order' => 4],
            ['name' => 'VS Code / Cursor','category' => 'tools',    'level' => 95, 'order' => 5],
            ['name' => 'Vercel',          'category' => 'tools',    'level' => 78, 'order' => 6],
            ['name' => 'GitHub Actions',  'category' => 'tools',    'level' => 65, 'order' => 7],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // ─── PROJETS ───────────────────────────────────────────────────

        $projects = [
            [
                'title'            => 'Teranga Dentaire',
                'slug'             => 'teranga-dentaire',
                'description'      => 'Application complète de gestion d\'un cabinet dentaire avec prise de rendez-vous des patients, chatbot médical intelligent et tableau de bord moderne.',
                'long_description' => "Teranga Dentaire est une application web complète développée pour digitaliser la gestion d'un cabinet dentaire.\n\nFonctionnalités principales :\n- Gestion des patients, personnels du cabinet et consultations médicales\n- Création de dossiers médicaux et suivi des consultations\n- Prise de rendez-vous avec notifications automatiques\n- Chatbot médical intelligent intégré\n- Tableau de bord moderne avec statistiques en temps réel\n\nL'application couvre l'ensemble du cycle de vie d'un patient, de son inscription à son suivi post-consultation.",
                'technologies'     => ['Laravel', 'MySQL', 'Blade', 'Bootstrap', 'JavaScript', 'UML'],
                'github_url'       => 'https://github.com/boubacar112',
                'demo_url'         => null,
                'featured'         => true,
                'order'            => 1,
            ],
            [
                'title'            => 'Natte App',
                'slug'             => 'natte-app',
                'description'      => 'Application de gestion de tontines communautaires avec suivi en temps réel des contributions, historique des transactions et notifications automatisées.',
                'long_description' => "Natte App est une plateforme dédiée à la gestion des tontines (systèmes d'épargne communautaire très répandus en Afrique de l'Ouest).\n\nFonctionnalités principales :\n- Gestion des membres et des groupes de tontines\n- Suivi des cotisations et historique détaillé des transactions\n- Notifications automatisées pour les échéances\n- Suivi en temps réel des contributions\n- Interface utilisateur fluide avec tableaux de bord modernes\n- API REST consommée par le frontend React\n\nL'application vise à moderniser et sécuriser la gestion des tontines traditionnelles.",
                'technologies'     => ['Laravel', 'React.js', 'PostgreSQL', 'TailwindCSS', 'API REST', 'UML'],
                'github_url'       => 'https://github.com/boubacar112',
                'demo_url'         => null,
                'featured'         => true,
                'order'            => 2,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}