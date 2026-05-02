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
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($group->count()): ?>
                <div class="reveal bg-card border border-border rounded-2xl p-8">
                    <h3 class="font-display text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-lime"></span>
                        <?php echo e($category); ?>

                    </h3>
                    <div class="space-y-5">
                        <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-mono text-sm text-gray-300"><?php echo e($skill->name); ?></span>
                                <span class="font-mono text-xs text-accent"><?php echo e($skill->level); ?>%</span>
                            </div>
                            <div class="h-1.5 bg-border rounded-full overflow-hidden">
                                <div class="skill-bar-inner h-full bg-gradient-to-r from-accent to-lime rounded-full"
                                     data-level="<?php echo e($skill->level); ?>"
                                     style="width: 0%">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Tech badges fallback si base vide -->
        <?php if(collect($skills)->flatten()->isEmpty()): ?>
        <div class="reveal">
            <div class="flex flex-wrap gap-3">
                <?php $__currentLoopData = ['Laravel', 'PHP', 'Vue.js', 'React', 'JavaScript', 'TypeScript', 'MySQL', 'PostgreSQL', 'Redis', 'Docker', 'Linux', 'Git', 'Tailwind CSS', 'Node.js', 'REST API']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="font-mono text-sm px-4 py-2 rounded-full border border-border text-gray-300 hover:border-accent hover:text-accent transition-colors cursor-default">
                    <?php echo e($tech); ?>

                </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section><?php /**PATH C:\Users\USER\portfolio\resources\views/partials/skills.blade.php ENDPATH**/ ?>