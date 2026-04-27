<!-- PROJETS -->
<section id="projets" class="py-24 px-6 md:px-16">
    <div class="max-w-6xl mx-auto">

        <div class="reveal mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <p class="text-accent font-mono text-xs tracking-widest uppercase mb-3">// 03. Projets</p>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white">
                    Ce que j'ai <span class="text-lime glow-lime">construit</span>
                </h2>
            </div>
            <a href="#contact" class="font-mono text-sm text-gray-400 hover:text-lime transition-colors underline underline-offset-4">
                Voir tous les projets →
            </a>
        </div>

        @if($projects->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <article class="project-card reveal bg-card border border-border rounded-2xl overflow-hidden group">
                <!-- Image -->
                <div class="aspect-video bg-surface overflow-hidden relative">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}"
                             alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <!-- Placeholder créatif -->
                        <div class="w-full h-full flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 opacity-30"
                                 style="background: linear-gradient(135deg, #7C3AED 0%, #BFFF00 100%);">
                            </div>
                            <span class="font-display text-4xl font-black text-white relative z-10 opacity-40">
                                {{ strtoupper(substr($project->title, 0, 2)) }}
                            </span>
                        </div>
                    @endif

                    <!-- Featured badge -->
                    @if($project->featured)
                    <span class="absolute top-3 left-3 font-mono text-xs px-3 py-1 rounded-full bg-lime text-dark font-bold">
                        ★ Featured
                    </span>
                    @endif
                </div>

                <!-- Content -->
                <div class="p-6">
                    <h3 class="font-display text-xl font-bold text-white mb-2">{{ $project->title }}</h3>
                    <p class="font-mono text-sm text-gray-400 leading-relaxed mb-4 line-clamp-3">
                        {{ $project->description }}
                    </p>

                    <!-- Technologies -->
                    @if($project->technologies)
                    <div class="flex flex-wrap gap-2 mb-5">
                        @foreach(array_slice($project->technologies, 0, 4) as $tech)
                        <span class="font-mono text-xs px-2 py-1 rounded bg-surface border border-border text-accent">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                    @endif

                    <!-- Links -->
                    <div class="flex items-center gap-4 pt-4 border-t border-border">
                        <a href="{{ route('project.show', $project->slug) }}"
                           class="font-mono text-sm text-white hover:text-lime transition-colors">
                            Voir le projet →
                        </a>
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank"
                           class="font-mono text-xs text-gray-500 hover:text-white transition-colors ml-auto">
                            GitHub ↗
                        </a>
                        @endif
                        @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank"
                           class="font-mono text-xs text-gray-500 hover:text-lime transition-colors">
                            Demo ↗
                        </a>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        @else
        <!-- Placeholder si pas encore de projets -->
        <div class="reveal grid md:grid-cols-3 gap-6">
            @foreach(['Projet SaaS Laravel', 'Dashboard Analytics', 'API REST Microservices'] as $i => $title)
            <div class="bg-card border border-dashed border-border rounded-2xl p-8 text-center">
                <div class="w-12 h-12 rounded-full bg-surface border border-border flex items-center justify-center mx-auto mb-4">
                    <span class="font-mono text-accent text-lg">0{{ $i + 1 }}</span>
                </div>
                <p class="font-display text-lg font-bold text-white mb-2">{{ $title }}</p>
                <p class="font-mono text-xs text-gray-500">Ajoutez vos projets via la base de données</p>
            </div>
            @endforeach
        </div>
        @endif

    </div>
</section>