@extends('layouts.app')

@section('title', $project->title . ' — Portfolio')
@section('meta_desc', $project->description)

@section('content')
<div class="pt-32 pb-24 px-6 md:px-16">
    <div class="max-w-4xl mx-auto">

        <!-- Back -->
        <a href="{{ route('home') }}#projets"
           class="inline-flex items-center gap-2 font-mono text-sm text-gray-500 hover:text-lime transition-colors mb-10">
            ← Retour aux projets
        </a>

        <!-- Header -->
        <div class="mb-12">
            @if($project->featured)
            <span class="font-mono text-xs px-3 py-1 rounded-full bg-lime/10 border border-lime/30 text-lime mb-4 inline-block">
                ★ Projet Featured
            </span>
            @endif
            <h1 class="font-display text-4xl md:text-6xl font-extrabold text-white mb-4">
                {{ $project->title }}
            </h1>
            <p class="font-mono text-gray-400 text-base leading-relaxed max-w-2xl">
                {{ $project->description }}
            </p>

            <!-- Tech stack -->
            @if($project->technologies)
            <div class="flex flex-wrap gap-3 mt-6">
                @foreach($project->technologies as $tech)
                <span class="font-mono text-sm px-4 py-2 rounded-full bg-card border border-border text-accent">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
            @endif

            <!-- Links -->
            <div class="flex gap-4 mt-8">
                @if($project->demo_url)
                <a href="{{ $project->demo_url }}" target="_blank"
                   class="inline-flex items-center gap-2 bg-lime text-dark font-mono font-bold px-6 py-3 rounded-full hover:bg-yellow-300 transition-colors text-sm">
                    Voir la démo ↗
                </a>
                @endif
                @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank"
                   class="inline-flex items-center gap-2 border border-border text-gray-300 font-mono px-6 py-3 rounded-full hover:border-accent hover:text-white transition-colors text-sm">
                    GitHub ↗
                </a>
                @endif
            </div>
        </div>

        <!-- Image -->
        @if($project->image)
        <div class="rounded-2xl overflow-hidden mb-12 border border-border">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full">
        </div>
        @else
        <div class="rounded-2xl overflow-hidden mb-12 border border-border aspect-video bg-card flex items-center justify-center relative">
            <div class="absolute inset-0 opacity-20" style="background: linear-gradient(135deg, #7C3AED, #BFFF00);"></div>
            <span class="font-display text-8xl font-black text-white opacity-20 relative z-10">
                {{ strtoupper(substr($project->title, 0, 2)) }}
            </span>
        </div>
        @endif

        <!-- Long description -->
        @if($project->long_description)
        <div class="bg-card border border-border rounded-2xl p-8 mb-12">
            <h2 class="font-display text-2xl font-bold text-white mb-4">À propos du projet</h2>
            <div class="font-mono text-sm text-gray-400 leading-relaxed prose-invert">
                {!! nl2br(e($project->long_description)) !!}
            </div>
        </div>
        @endif

        <!-- Related projects -->
        @if($related->count())
        <div class="border-t border-border pt-12">
            <h2 class="font-display text-2xl font-bold text-white mb-8">Autres projets</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($related as $rel)
                <a href="{{ route('project.show', $rel->slug) }}"
                   class="project-card bg-card border border-border rounded-2xl overflow-hidden group block">
                    <div class="aspect-video bg-surface flex items-center justify-center overflow-hidden relative">
                        @if($rel->image)
                            <img src="{{ asset('storage/' . $rel->image) }}" alt="{{ $rel->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="absolute inset-0 opacity-20" style="background: linear-gradient(135deg, #7C3AED, #BFFF00);"></div>
                            <span class="font-display text-3xl font-black text-white opacity-30 relative z-10">
                                {{ strtoupper(substr($rel->title, 0, 2)) }}
                            </span>
                        @endif
                    </div>
                    <div class="p-4">
                        <h3 class="font-display font-bold text-white text-sm group-hover:text-lime transition-colors">{{ $rel->title }}</h3>
                        <p class="font-mono text-xs text-gray-500 mt-1 line-clamp-2">{{ $rel->description }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endsection