

<?php $__env->startSection('title', $project->title . ' — Portfolio Boubacar'); ?>
<?php $__env->startSection('meta_desc', $project->description); ?>

<?php $__env->startSection('content'); ?>


    <div class="pt-32 pb-24 px-6 md:px-16">
        <div class="max-w-5xl mx-auto">

            <!-- Retour -->
            <a href="<?php echo e(route('home')); ?>#projets"
                class="inline-flex items-center gap-2 font-mono text-sm text-gray-500 hover:text-lime transition-colors mb-10">
                ← Retour aux projets
            </a>

            <!-- Statut + Titre -->
            <div class="mb-10">
                <div class="flex flex-wrap items-center gap-3 mb-4">
                    <?php if($project->status === 'en_cours'): ?>
                        <span
                            class="font-mono text-xs px-3 py-1 rounded-full bg-yellow-500/20 border border-yellow-500/40 text-yellow-400 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-400 animate-pulse inline-block"></span>
                            En cours de développement
                        </span>
                    <?php else: ?>
                        <span class="font-mono text-xs px-3 py-1 rounded-full bg-lime/10 border border-lime/30 text-lime">
                            ✓ Projet terminé
                        </span>
                    <?php endif; ?>
                </div>

                <h1 class="font-display text-4xl md:text-6xl font-extrabold text-white mb-4">
                    <?php echo e($project->title); ?>

                </h1>
                <p class="font-mono text-gray-400 text-base leading-relaxed max-w-2xl">
                    <?php echo e($project->description); ?>

                </p>

                <!-- Technologies -->
                <?php if($project->technologies): ?>
                    <div class="flex flex-wrap gap-3 mt-6">
                        <?php $__currentLoopData = $project->technologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="font-mono text-sm px-4 py-2 rounded-full bg-card border border-border text-accent">
                                <?php echo e($tech); ?>

                            </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <!-- Liens -->
                <div class="flex flex-wrap gap-4 mt-8">
                    <?php if($project->github_url): ?>
                        <a href="<?php echo e($project->github_url); ?>" target="_blank"
                            class="inline-flex items-center gap-2 bg-card border border-border text-gray-300 font-mono px-6 py-3 rounded-full hover:border-accent hover:text-white transition-colors text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.295 24 12c0-6.63-5.37-12-12-12" />
                            </svg>
                            Voir le code GitHub
                        </a>
                    <?php endif; ?>
                    <?php if($project->demo_url): ?>
                        <a href="<?php echo e($project->demo_url); ?>" target="_blank"
                            class="inline-flex items-center gap-2 bg-lime text-dark font-mono font-bold px-6 py-3 rounded-full hover:bg-yellow-300 transition-colors text-sm">
                            Voir la démo live ↗
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- VIDEO YOUTUBE -->
            <div class="mb-12">
                <h2 class="font-display text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="w-2 h-2 rounded-full bg-coral"></span>
                    Démonstration vidéo
                </h2>

                <?php
                    $videos = [
                        'teranga-dentaire' => 'QszM09fNLfM',
                        'natte-app' => 'JMvWEU741vs',
                        'red-product' => 'ud9vlpv6Dko',
                        'cinecritique' => 'hePMlgoCr9g',
                    ];
                    $videoId = $videos[$project->slug] ?? '';
                ?>

                <?php if($videoId): ?>
                    <div class="bg-card border border-border rounded-2xl overflow-hidden shadow-2xl">
                        <div class="flex items-center gap-2 px-4 py-3 border-b border-border bg-surface">
                            <span class="w-3 h-3 rounded-full bg-coral"></span>
                            <span class="w-3 h-3 rounded-full" style="background:#F59E0B"></span>
                            <span class="w-3 h-3 rounded-full bg-lime"></span>
                            <span class="ml-4 font-mono text-xs text-gray-500">Démonstration — <?php echo e($project->title); ?></span>
                        </div>
                        <div class="relative w-full" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/<?php echo e($videoId); ?>?rel=0" frameborder="0"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="bg-card border border-dashed border-border rounded-2xl overflow-hidden">
                        <div class="flex items-center gap-2 px-4 py-3 border-b border-border bg-surface">
                            <span class="w-3 h-3 rounded-full bg-coral"></span>
                            <span class="w-3 h-3 rounded-full" style="background:#F59E0B"></span>
                            <span class="w-3 h-3 rounded-full bg-lime"></span>
                            <span class="ml-4 font-mono text-xs text-gray-500">Vidéo bientôt disponible</span>
                        </div>
                        <div class="aspect-video flex flex-col items-center justify-center gap-4">
                            <svg class="w-16 h-16 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z" />
                            </svg>
                            <p class="font-mono text-sm text-gray-600">
                                <?php echo e($project->status === 'en_cours' ? 'Vidéo disponible à la fin du développement' : 'Vidéo de démonstration à venir'); ?>

                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- DESCRIPTION -->
            <?php if($project->long_description): ?>
                <div class="bg-card border border-border rounded-2xl p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-white mb-5 flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-accent"></span>
                        À propos du projet
                    </h2>
                    <div class="font-mono text-sm text-gray-400 leading-relaxed space-y-3">
                        <?php $__currentLoopData = explode("\n", $project->long_description); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(str_starts_with(trim($line), '-')): ?>
                                <div class="flex gap-3">
                                    <span class="text-accent mt-0.5 flex-shrink-0">▸</span>
                                    <span><?php echo e(trim(ltrim(trim($line), '-'))); ?></span>
                                </div>
                            <?php elseif(trim($line)): ?>
                                <p><?php echo e(trim($line)); ?></p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- STACK TECHNIQUE -->
            <?php if($project->technologies): ?>
                <div class="bg-card border border-border rounded-2xl p-8 mb-10">
                    <h2 class="font-display text-2xl font-bold text-white mb-5 flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-lime"></span>
                        Stack technique
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        <?php $__currentLoopData = $project->technologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center gap-3 bg-surface border border-border rounded-xl px-4 py-3">
                                <span class="w-2 h-2 rounded-full bg-accent flex-shrink-0"></span>
                                <span class="font-mono text-sm text-gray-300"><?php echo e($tech); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- AUTRES PROJETS -->
            <?php if($related->count()): ?>
                <div class="border-t border-border pt-12">
                    <h2 class="font-display text-2xl font-bold text-white mb-8">Autres projets</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('project.show', $rel->slug)); ?>"
                                class="project-card bg-card border border-border rounded-2xl overflow-hidden group block">
                                <div
                                    class="aspect-video bg-surface flex items-center justify-center overflow-hidden relative">
                                    <div class="absolute inset-0 opacity-20"
                                        style="background: linear-gradient(135deg, <?php echo e($rel->status === 'en_cours' ? '#F59E0B, #EF4444' : '#7C3AED, #BFFF00'); ?>);">
                                    </div>
                                    <span class="font-display text-3xl font-black text-white opacity-30 relative z-10">
                                        <?php echo e(strtoupper(substr($rel->title, 0, 2))); ?>

                                    </span>
                                    <div class="absolute top-2 left-2">
                                        <?php if($rel->status === 'en_cours'): ?>
                                            <span
                                                class="font-mono text-xs px-2 py-0.5 rounded-full bg-yellow-500/90 text-dark font-bold">En
                                                cours</span>
                                        <?php else: ?>
                                            <span
                                                class="font-mono text-xs px-2 py-0.5 rounded-full bg-lime/90 text-dark font-bold">✓
                                                Terminé</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h3
                                        class="font-display font-bold text-white text-sm group-hover:text-lime transition-colors">
                                        <?php echo e($rel->title); ?></h3>
                                    <p class="font-mono text-xs text-gray-500 mt-1 line-clamp-2"><?php echo e($rel->description); ?>

                                    </p>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\portfolio\resources\views/portfolio/project.blade.php ENDPATH**/ ?>