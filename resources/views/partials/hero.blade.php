<!-- HERO -->
<section class="relative min-h-screen flex items-center px-6 md:px-16 pt-32 pb-20 overflow-hidden">

    <!-- Background grid -->
    <div class="absolute inset-0 opacity-10" style="
        background-image: linear-gradient(#7C3AED 1px, transparent 1px), linear-gradient(90deg, #7C3AED 1px, transparent 1px);
        background-size: 60px 60px;
    "></div>

    <!-- Glow blobs -->
    <div class="absolute top-1/3 right-0 w-96 h-96 rounded-full opacity-20"
         style="background: radial-gradient(circle, #7C3AED, transparent 70%); filter: blur(60px);"></div>
    <div class="absolute bottom-10 left-20 w-64 h-64 rounded-full opacity-10"
         style="background: radial-gradient(circle, #BFFF00, transparent 70%); filter: blur(40px);"></div>

    <div class="max-w-6xl mx-auto w-full relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Text -->
            <div>
                <p class="text-accent font-mono text-sm mb-4 tracking-widest uppercase animate-fade-up">
                    // Disponible pour de nouveaux projets
                </p>
                <h1 class="font-display text-5xl md:text-7xl font-extrabold text-white leading-none mb-6 animate-fade-up" style="animation-delay:0.1s">
                    Boubacar<br>
                    <span class="text-lime glow-lime">Diakhate</span>
                </h1>
                <p class="text-gray-400 font-mono text-sm md:text-base leading-relaxed mb-8 max-w-md animate-fade-up" style="animation-delay:0.2s">
                    Développeur Full-Stack & Administrateur Base de Données.<br>
                    Laravel · React · Django · PostgreSQL · Docker
                </p>
                <div class="flex flex-wrap gap-4 animate-fade-up" style="animation-delay:0.3s">
                    <a href="#projets"
                       class="inline-flex items-center gap-2 bg-lime text-dark font-mono font-bold px-6 py-3 rounded-full hover:bg-yellow-300 transition-colors text-sm">
                        Voir mes projets →
                    </a>
                    <a href="#contact"
                       class="inline-flex items-center gap-2 border border-border text-gray-300 font-mono px-6 py-3 rounded-full hover:border-accent hover:text-white transition-colors text-sm">
                        Me contacter
                    </a>
                    <a href="{{ asset('files/CV_Boubacar_Diakhate.pdf') }}" 
                       download="CV_Boubacar_Diakhate.pdf"
                        target="_blank"
                         class="inline-flex items-center gap-2 bg-lime text-dark font-mono font-bold px-6 py-3 rounded-full hover:bg-yellow-300 transition-colors text-sm">
                            Télécharger CV ↓
                   </a>
                </div>

                <!-- Stats -->
                <div class="flex gap-10 mt-14 animate-fade-up" style="animation-delay:0.4s">
                    <div>
                        <p class="font-display text-3xl font-bold text-white">{{ $projects->count() }}+</p>
                        <p class="text-xs text-gray-500 font-mono mt-1">Projets réalisés</p>
                    </div>
                    <div class="border-l border-border pl-10">
                        <p class="font-display text-3xl font-bold text-white">3+</p>
                        <p class="text-xs text-gray-500 font-mono mt-1">Années de formation</p>
                    </div>
                    <div class="border-l border-border pl-10">
                        <p class="font-display text-3xl font-bold text-white">10+</p>
                        <p class="text-xs text-gray-500 font-mono mt-1">Technologies maîtrisées</p>
                    </div>
                </div>
            </div>

            <!-- Terminal -->
            <div class="hidden md:block animate-fade-up" style="animation-delay:0.3s">
                <div class="bg-card border border-border rounded-2xl overflow-hidden shadow-2xl">
                    <div class="flex items-center gap-2 px-4 py-3 border-b border-border bg-surface">
                        <span class="w-3 h-3 rounded-full bg-coral"></span>
                        <span class="w-3 h-3 rounded-full" style="background:#F59E0B"></span>
                        <span class="w-3 h-3 rounded-full bg-lime"></span>
                        <span class="ml-4 text-xs text-gray-500 font-mono">~/portfolio — boubacar</span>
                    </div>
                    <div class="p-6 font-mono text-sm space-y-2">
                        <p><span class="text-accent">$</span> <span class="text-gray-300">php artisan portfolio:introduce</span></p>
                        <p class="text-gray-500">// Chargement du profil...</p>
                        <p><span class="text-lime">name:</span> <span class="text-white">"Boubacar Diakhate"</span></p>
                        <p><span class="text-lime">role:</span> <span class="text-white">"Full-Stack Developer & DBA"</span></p>
                        <p><span class="text-lime">location:</span> <span class="text-white">"Dakar, Sénégal 🇸🇳"</span></p>
                        <p><span class="text-lime">stack:</span></p>
                        <p class="pl-4 text-coral">["Laravel", "React", "Django",</p>
                        <p class="pl-4 text-coral"> "PostgreSQL", "Docker"]</p>
                        <p><span class="text-lime">languages:</span> <span class="text-white">"FR (C2) · EN (B2)"</span></p>
                        <p><span class="text-lime">available:</span> <span class="text-accent">true</span></p>
                        <p class="flex items-center gap-1">
                            <span class="text-accent">$</span>
                            <span class="w-2 h-4 bg-lime animate-blink inline-block ml-1"></span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>