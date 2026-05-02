<!-- CONTACT -->
<section id="contact" class="py-24 px-6 md:px-16 relative overflow-hidden">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-32 bg-gradient-to-b from-transparent to-accent opacity-60"></div>

    <div class="max-w-4xl mx-auto">

        <div class="reveal text-center mb-16">
            <p class="text-accent font-mono text-xs tracking-widest uppercase mb-3">// 05. Contact</p>
            <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-4">
                Travaillons <span class="text-lime glow-lime">ensemble</span>
            </h2>
            <p class="font-mono text-gray-400 text-sm">
                Un projet en tête ? Une opportunité ? N'hésitez pas à me contacter.
            </p>
        </div>

        <div class="reveal grid md:grid-cols-5 gap-8">

            <!-- Infos -->
            <div class="md:col-span-2 space-y-4">
                <div class="bg-card border border-border rounded-2xl p-6">
                    <p class="font-mono text-xs text-gray-500 uppercase tracking-widest mb-1">Email</p>
                    <a href="mailto:diakhateboubacar48@gmail.com"
                       class="font-display font-bold text-white hover:text-lime transition-colors text-sm break-all">
                        diakhateboubacar48@gmail.com
                    </a>
                </div>
                <div class="bg-card border border-border rounded-2xl p-6">
                    <p class="font-mono text-xs text-gray-500 uppercase tracking-widest mb-1">Téléphone</p>
                    <a href="tel:+221706957486"
                       class="font-display font-bold text-white hover:text-lime transition-colors text-sm">
                        +221 70 695 74 86
                    </a>
                </div>
                <div class="bg-card border border-border rounded-2xl p-6">
                    <p class="font-mono text-xs text-gray-500 uppercase tracking-widest mb-1">Localisation</p>
                    <p class="font-display font-bold text-white text-sm">Dakar, Sénégal 🇸🇳</p>
                </div>
                <div class="bg-card border border-border rounded-2xl p-6">
                    <p class="font-mono text-xs text-gray-500 uppercase tracking-widest mb-3">Réseaux</p>
                    <div class="flex flex-col gap-2">
                        <a href="https://github.com/boubacar112" target="_blank"
                          class="font-mono text-sm text-gray-300 hover:text-lime transition-colors">
                            GitHub — boubacar112 ↗
                        </a>
                        <a href="https://www.linkedin.com/in/boubacar-diakhate-82756337a" target="_blank"
                          class="font-mono text-sm text-gray-300 hover:text-lime transition-colors">
                            Linkedin — Boubacar ↗
                        </a>
                    </div>
                </div>
                <div class="flex items-center gap-3 px-4 py-3 rounded-full border border-lime/30 bg-lime/5">
                    <span class="w-2 h-2 rounded-full bg-lime animate-pulse"></span>
                    <span class="font-mono text-xs text-lime">Disponible pour de nouveaux projets</span>
                </div>
            </div>

            <!-- Formulaire -->
            <div class="md:col-span-3 bg-card border border-border rounded-2xl p-8">

                <?php if(session('success')): ?>
                <div class="mb-6 p-4 rounded-xl bg-lime/10 border border-lime/30 font-mono text-sm text-lime">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>

                <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="space-y-5">
                    <?php echo csrf_field(); ?>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-mono text-xs text-gray-500 uppercase tracking-widest block mb-2">Nom</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>"
                                   placeholder="Votre nom"
                                   class="w-full bg-surface border border-border rounded-xl px-4 py-3 font-mono text-sm text-white placeholder-gray-600 focus:outline-none focus:border-accent transition-colors"
                                   required>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="font-mono text-xs text-coral mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div>
                            <label class="font-mono text-xs text-gray-500 uppercase tracking-widest block mb-2">Email</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                   placeholder="votre@email.com"
                                   class="w-full bg-surface border border-border rounded-xl px-4 py-3 font-mono text-sm text-white placeholder-gray-600 focus:outline-none focus:border-accent transition-colors"
                                   required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="font-mono text-xs text-coral mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div>
                        <label class="font-mono text-xs text-gray-500 uppercase tracking-widest block mb-2">Sujet</label>
                        <input type="text" name="subject" value="<?php echo e(old('subject')); ?>"
                               placeholder="Projet, opportunité, collaboration..."
                               class="w-full bg-surface border border-border rounded-xl px-4 py-3 font-mono text-sm text-white placeholder-gray-600 focus:outline-none focus:border-accent transition-colors">
                    </div>

                    <div>
                        <label class="font-mono text-xs text-gray-500 uppercase tracking-widest block mb-2">Message</label>
                        <textarea name="message" rows="5"
                                  placeholder="Décrivez votre projet ou votre demande..."
                                  class="w-full bg-surface border border-border rounded-xl px-4 py-3 font-mono text-sm text-white placeholder-gray-600 focus:outline-none focus:border-accent transition-colors resize-none"
                                  required><?php echo e(old('message')); ?></textarea>
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="font-mono text-xs text-coral mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit"
                            class="w-full bg-lime text-dark font-mono font-bold py-4 rounded-xl hover:bg-yellow-300 transition-colors text-sm tracking-wide">
                        Envoyer le message →
                    </button>
                </form>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\USER\portfolio\resources\views/partials/contact.blade.php ENDPATH**/ ?>