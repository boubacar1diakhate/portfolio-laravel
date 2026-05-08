@extends('layouts.app')

@section('title', 'Boubacar Diakhate — Développeur Full-Stack & DBA')
@section('meta_desc', 'Portfolio de Boubacar Diakhate, développeur Full-Stack et Administrateur Base de Données basé à Dakar, Sénégal. Spécialisé Laravel, React, Django, PostgreSQL.')

@section('content')

    {{-- Hero --}}
    @include('partials.hero')

    {{-- À propos --}}
    <section id="apropos" class="py-24 px-6 md:px-16 border-t border-border">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">

            <!-- Visual -->
            <div class="reveal order-2 md:order-1">
                <div class="relative w-fit mx-auto">
                   <div class="w-96 h-96 rounded-3xl overflow-hidden border-2 border-accent shadow-2xl">
                      <img src="{{ asset('images/boubacar.jpeg') }}" 
                          alt="Boubacar Diakhate"
                          class="w-full h-full object-cover object-top">
                   </div>
                    <div class="absolute -bottom-3 -right-3 bg-card border border-border rounded-2xl px-3 py-2 font-mono text-center shadow-xl">
                        <p class="text-2xl font-bold text-lime">3+</p>
                        <p class="text-xs text-gray-500">ans de formation</p>
                    </div>
                    <div class="absolute -top-4 -left-4 bg-card border border-accent/40 rounded-2xl px-5 py-4 font-mono text-center shadow-xl">
                        <p class="text-xl font-bold text-accent">{{ $projects->count() }}</p>
                        <p class="text-xs text-gray-500">projets</p>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="reveal order-1 md:order-2">
                <p class="text-accent font-mono text-xs tracking-widest uppercase mb-3">// 01. À propos</p>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                    Qui suis-<span class="text-lime glow-lime">je</span> ?
                </h2>
                <div class="font-mono text-sm text-gray-400 space-y-4 leading-relaxed">
                    <p>
                        Je suis <span class="text-white">Boubacar Diakhate</span>, développeur Full-Stack et Administrateur
                        Base de Données, titulaire d'une Licence en Développement et Administration d'Applications
                        de l'<span class="text-accent">Université Alioune Diop de Bambey</span>.
                    </p>
                    <p>
                        Passionné par l'innovation et les technologies numériques, je maîtrise un large écosystème :
                        <span class="text-lime">Laravel</span>, <span class="text-lime">React</span>,
                        <span class="text-lime">Django</span> côté développement, et
                        <span class="text-accent">PostgreSQL</span>, <span class="text-accent">MySQL</span>,
                        <span class="text-accent">Oracle DBA</span> côté données.
                    </p>
                    <p>
                        Je souhaite rejoindre un environnement stimulant où je pourrai mettre mes compétences
                        en pratique, continuer à apprendre et contribuer à des projets à fort impact.
                    </p>

                
                </div>

                <!-- Langues -->
                <div class="flex gap-4 mt-6">
                    <span class="font-mono text-xs px-4 py-2 rounded-full bg-card border border-border text-gray-300">
                        🇫🇷 Français — C2
                    </span>
                    <span class="font-mono text-xs px-4 py-2 rounded-full bg-card border border-border text-gray-300">
                        🇬🇧 Anglais — B2
                    </span>
                </div>

                <div class="mt-8 flex gap-4">
                    <a href="#projets" class="font-mono text-sm text-lime hover:text-white transition-colors underline underline-offset-4">
                        Voir mes projets →
                    </a>
                    <a href="https://github.com/boubacar112" target="_blank"
                       class="font-mono text-sm text-gray-500 hover:text-white transition-colors underline underline-offset-4">
                        GitHub ↗
                    </a>
                </div>
            </div>

        </div>
    </section>

    {{-- Compétences --}}
    @include('partials.skills')

    {{-- Projets --}}
    @include('partials.projects')

    {{-- Formation --}}
    <section id="formation" class="py-24 px-6 md:px-16 border-t border-border">
        <div class="max-w-4xl mx-auto">

            <div class="reveal mb-16">
                <p class="text-accent font-mono text-xs tracking-widest uppercase mb-3">// 04. Formation</p>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white">
                    Mon <span class="text-lime glow-lime">parcours</span>
                </h2>
            </div>

            <div class="relative">
                <div class="absolute left-6 top-0 bottom-0 w-px bg-border"></div>

                <div class="space-y-10">
                    @foreach($formations as $f)
                    <div class="reveal flex gap-8">
                        <div class="relative flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-card border-2 border-accent flex items-center justify-center z-10 relative">
                                <div class="w-3 h-3 rounded-full bg-accent"></div>
                            </div>
                        </div>
                        <div class="bg-card border border-border rounded-2xl p-6 flex-1">
                            <div class="flex flex-col md:flex-row md:items-start justify-between gap-3 mb-3">
                                <div>
                                    <span class="font-mono text-xs px-3 py-1 rounded-full bg-accent/10 border border-accent/30 text-accent mb-2 inline-block">
                                        {{ $f['badge'] }}
                                    </span>
                                    <h3 class="font-display text-lg font-bold text-white mt-1">{{ $f['title'] }}</h3>
                                    <p class="font-mono text-sm text-lime">{{ $f['school'] }}</p>
                                </div>
                                <span class="font-mono text-xs text-gray-500 bg-surface px-3 py-1 rounded-full border border-border whitespace-nowrap h-fit">
                                    {{ $f['period'] }}
                                </span>
                            </div>
                            <p class="font-mono text-sm text-gray-400 leading-relaxed">{{ $f['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    @include('partials.contact')

@endsection