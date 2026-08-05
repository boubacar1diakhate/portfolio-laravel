<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Mon Portfolio — Développeur Full-Stack'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_desc', 'Portfolio de développeur Full-Stack spécialisé Laravel, Vue.js, React.'); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&family=Syne:wght@400;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Syne', 'sans-serif'],
                        mono: ['Space Mono', 'monospace'],
                    },
                    colors: {
                        dark:    '#0A0A0F',
                        surface: '#111118',
                        card:    '#16161F',
                        border:  '#2A2A38',
                        accent:  '#7C3AED',
                        lime:    '#BFFF00',
                        coral:   '#FF6B6B',
                    },
                    animation: {
                        'fade-up': 'fadeUp 0.6s ease forwards',
                        'blink':   'blink 1s step-end infinite',
                    },
                    keyframes: {
                        fadeUp: {
                            '0%':   { opacity: '0', transform: 'translateY(24px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        blink: {
                            '0%, 100%': { opacity: '1' },
                            '50%':      { opacity: '0' },
                        },
                    },
                }
            }
        }
    </script>

    <style>
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            background-color: #0A0A0F;
            color: #E8E8F0;
            font-family: 'Space Mono', monospace;
        }
        h1, h2, h3, h4 { font-family: 'Syne', sans-serif; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #0A0A0F; }
        ::-webkit-scrollbar-thumb { background: #7C3AED; border-radius: 2px; }

        /* Noise overlay */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
            opacity: 0.4;
        }

        /* Glow accent */
        .glow { text-shadow: 0 0 40px rgba(124,58,237,0.6); }
        .glow-lime { text-shadow: 0 0 20px rgba(191,255,0,0.4); }

        /* Reveal animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Skill bar */
        .skill-bar-inner {
            transition: width 1.2s cubic-bezier(0.22, 1, 0.36, 1);
        }

        /* Nav active */
        nav a.active { color: #BFFF00; }

        /* Hover card */
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(124,58,237,0.2);
        }
    </style>

    <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body class="relative z-10">

    <!-- NAVBAR -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-6 px-6 md:px-16">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <a href="<?php echo e(route('home')); ?>" class="font-display text-xl font-bold text-white tracking-tight">
                <span class="text-lime glow-lime">&lt;</span>Dev<span class="text-accent glow">/</span>&gt;
            </a>
            <div class="hidden md:flex items-center gap-10 text-sm font-mono text-gray-400">
                <a href="#apropos"     class="hover:text-lime transition-colors">À propos</a>
                <a href="#competences" class="hover:text-lime transition-colors">Compétences</a>
                <a href="#projets"     class="hover:text-lime transition-colors">Projets</a>
                <a href="#experience"  class="hover:text-lime transition-colors">Expérience</a>
                <a href="#contact"     class="hover:text-lime transition-colors">Contact</a>
            </div>
            <a href="#contact" class="hidden md:inline-flex items-center gap-2 text-sm font-mono bg-accent hover:bg-violet-500 text-white px-5 py-2 rounded-full transition-colors">
                Me contacter
            </a>
            <!-- Mobile menu toggle -->
            <button id="menu-toggle" class="md:hidden text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 flex flex-col gap-4 text-sm font-mono text-gray-400 px-2">
            <a href="#apropos"     class="hover:text-lime">À propos</a>
            <a href="#competences" class="hover:text-lime">Compétences</a>
            <a href="#projets"     class="hover:text-lime">Projets</a>
          
            <a href="#contact"     class="hover:text-lime">Contact</a>
        </div>
    </nav>

    <!-- CONTENT -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-border py-10 px-6 md:px-16">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500 font-mono">
            <p>© <?php echo e(date('Y')); ?> — Développeur Full-Stack. Fait avec <span class="text-coral">♥</span> & Laravel.</p>
            <div class="flex items-center gap-6">
                <a href="https://github.com/" target="_blank" class="hover:text-lime transition-colors">GitHub</a>
                <a href="https://linkedin.com/" target="_blank" class="hover:text-lime transition-colors">LinkedIn</a>
                <a href="https://twitter.com/" target="_blank" class="hover:text-lime transition-colors">Twitter</a>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.style.background = window.scrollY > 50
                ? 'rgba(10,10,15,0.95)'
                : 'transparent';
            navbar.style.backdropFilter = window.scrollY > 50 ? 'blur(12px)' : 'none';
            navbar.style.borderBottom   = window.scrollY > 50 ? '1px solid #2A2A38' : 'none';
        });

        // Mobile menu
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Reveal on scroll
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        reveals.forEach(el => observer.observe(el));

        // Skill bars
        const bars = document.querySelectorAll('.skill-bar-inner');
        const barObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.style.width = e.target.dataset.level + '%';
                }
            });
        }, { threshold: 0.3 });
        bars.forEach(b => { b.style.width = '0'; barObserver.observe(b); });
    </script>

    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\USER\portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>