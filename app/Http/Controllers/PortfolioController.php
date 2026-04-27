<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        $skills   = Skill::grouped();

        $formations = [
            [
                'period'  => '2022 – 2025',
                'title'   => 'Licence en Développement et Administration d\'Application',
                'school'  => 'Université Alioune Diop de Bambey',
                'desc'    => 'Formation complète en conception, développement et gestion d\'applications web et mobiles. Solides bases en algorithmique, bases de données, génie logiciel et architecture système.',
                'badge'   => 'Licence',
            ],
            [
                'period'  => 'Août 2025',
                'title'   => 'Certificat en Informatique et Internet',
                'school'  => 'Programme Force N',
                'desc'    => 'Initiation avancée aux outils informatiques, navigation internet et compétences numériques de base et bureautique.',
                'badge'   => 'Certificat',
            ],
            [
                'period'  => '2021',
                'title'   => 'Baccalauréat série S2 — Sciences Expérimentales',
                'school'  => 'Lycée Valdiodio Ndiaye de Kaolack',
                'desc'    => 'Baccalauréat scientifique avec spécialisation en sciences expérimentales.',
                'badge'   => 'Bac S2',
            ],
        ];

        return view('portfolio.index', compact('projects', 'skills', 'formations'));
    }

    public function show(Project $project)
    {
        $related = Project::where('id', '!=', $project->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('portfolio.project', compact('project', 'related'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|min:10',
        ]);

        // Décommenter après avoir configuré MAIL_* dans .env :
        Mail::to('diakhateboubacar48@gmail.com')->send(new ContactMail($validated));

        return back()->with('success', 'Merci pour votre message ! Je vous répondrai dans les plus brefs délais.');
    }
}