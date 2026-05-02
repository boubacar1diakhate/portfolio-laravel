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
            <a href="https://github.com/boubacar112" target="_blank"
               class="font-mono text-sm text-gray-400 hover:text-lime transition-colors underline underline-offset-4">
                Voir GitHub ↗
            </a>
        </div>

        <?php if($projects->count()): ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="project-card reveal bg-card border border-border rounded-2xl overflow-hidden group
                <?php echo e($project->isEnCours() ? 'border-dashed' : ''); ?>">

                <!-- Image / Placeholder -->
                <div class="aspect-video bg-surface overflow-hidden relative">
                    <?php if($project->image): ?>
                        <img src="<?php echo e(asset($project->image)); ?>"
                             alt="<?php echo e($project->title); ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <?php else: ?>
                        <div class="w-full h-full flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 opacity-30"
                                 style="background: linear-gradient(135deg,
                                 <?php echo e($project->isEnCours() ? '#F59E0B, #EF4444' : '#7C3AED, #BFFF00'); ?>

                                 );">
                            </div>
                            <span class="font-display text-5xl font-black text-white relative z-10 opacity-40">
                                <?php echo e(strtoupper(substr($project->title, 0, 2))); ?>

                            </span>
                        </div>
                    <?php endif; ?>

                    <!-- Badges -->
                    <div class="absolute top-3 left-3 flex gap-2">
                        <?php if($project->isEnCours()): ?>
                        <span class="font-mono text-xs px-3 py-1 rounded-full bg-yellow-500/90 text-dark font-bold flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-dark animate-pulse inline-block"></span>
                            En cours
                        </span>
                        <?php else: ?>
                        <span class="font-mono text-xs px-3 py-1 rounded-full bg-lime/90 text-dark font-bold">
                            ✓ Terminé
                        </span>
                        <?php endif; ?>

                        <?php if($project->featured): ?>
                        <span class="font-mono text-xs px-3 py-1 rounded-full bg-accent/80 text-white font-bold">
                            ★ Featured
                        </span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Contenu -->
                <div class="p-6">
                    <h3 class="font-display text-xl font-bold text-white mb-2"><?php echo e($project->title); ?></h3>
                    <p class="font-mono text-sm text-gray-400 leading-relaxed mb-4 line-clamp-3">
                        <?php echo e($project->description); ?>

                    </p>

                    <!-- Technologies -->
                    <?php if($project->technologies): ?>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <?php $__currentLoopData = $project->technologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="font-mono text-xs px-2 py-1 rounded bg-surface border border-border text-accent">
                            <?php echo e($tech); ?>

                        </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <!-- Liens -->
                    <div class="flex items-center gap-4 pt-4 border-t border-border">
                        <a href="<?php echo e(route('project.show', $project->slug)); ?>"
                           class="font-mono text-sm text-white hover:text-lime transition-colors">
                            Voir le détail →
                        </a>
                        <div class="flex gap-3 ml-auto">
                            <?php if($project->github_url): ?>
                            <a href="<?php echo e($project->github_url); ?>" target="_blank"
                               class="font-mono text-xs text-gray-500 hover:text-white transition-colors">
                                GitHub ↗
                            </a>
                            <?php endif; ?>
                            <?php if($project->demo_url): ?>
                            <a href="<?php echo e($project->demo_url); ?>" target="_blank"
                               class="font-mono text-xs text-gray-500 hover:text-lime transition-colors">
                                Demo ↗
                            </a>
                            <?php endif; ?>
                            <?php if($project->isEnCours() && !$project->demo_url): ?>
                            <span class="font-mono text-xs text-yellow-500/60">
                                Demo bientôt...
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php else: ?>
        <div class="reveal text-center py-16 text-gray-500 font-mono text-sm">
            Aucun projet pour le moment. Lancez le seeder : <code>php artisan db:seed</code>
        </div>
        <?php endif; ?>

    </div>
</section><?php /**PATH C:\Users\USER\portfolio\resources\views/partials/projects.blade.php ENDPATH**/ ?>