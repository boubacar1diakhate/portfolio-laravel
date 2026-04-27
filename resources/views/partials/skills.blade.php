<!-- COMPÉTENCES -->
<section id="competences" class="py-24 px-6 md:px-16">
    <div class="max-w-6xl mx-auto">

        <div class="reveal mb-16">
            <p class="text-accent font-mono text-xs tracking-widest uppercase mb-3">// 02. Compétences</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold text-white">
                Mon <span class="text-lime glow-lime">arsenal</span> technique
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @foreach($skills as $category => $group)
                @if($group->count())
                <div class="reveal bg-card border border-border rounded-2xl p-8">
                    <h3 class="font-display text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-lime"></span>
                        {{ $category }}
                    </h3>
                    <div class="space-y-5">
                        @foreach($group as $skill)
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-mono text-sm text-gray-300">{{ $skill->name }}</span>
                                <span class="font-mono text-xs text-accent">{{ $skill->level }}%</span>
                            </div>
                            <div class="h-1.5 bg-border rounded-full overflow-hidden">
                                <div class="skill-bar-inner h-full bg-gradient-to-r from-accent to-lime rounded-full"
                                     data-level="{{ $skill->level }}"
                                     style="width: 0%">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <!-- Tech badges fallback si base vide -->
        @if(collect($skills)->flatten()->isEmpty())
        <div class="reveal">
            <div class="flex flex-wrap gap-3">
                @foreach(['Laravel', 'PHP', 'Vue.js', 'React', 'JavaScript', 'TypeScript', 'MySQL', 'PostgreSQL', 'Redis', 'Docker', 'Linux', 'Git', 'Tailwind CSS', 'Node.js', 'REST API'] as $tech)
                <span class="font-mono text-sm px-4 py-2 rounded-full border border-border text-gray-300 hover:border-accent hover:text-accent transition-colors cursor-default">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>