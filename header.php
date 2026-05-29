<?php
?><!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-ibm-plex: 'IBM Plex Sans', sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: {
                container: false
            },
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['var(--font-ibm-plex)'],
                    },
                    colors: {
                        root: '#0c0c0e',
                        surface: '#141417',
                        'surface-hover': '#1c1c20',
                        'content-primary': '#f0f0f4',
                        'content-secondary': '#9ca3af',
                        'content-tertiary': '#6b7280',
                        'accent-primary': '#e59a35',
                        'accent-primary-hover': '#f5ab46',
                        'accent-secondary': '#2ba6d4',
                        'accent-secondary-hover': '#3ec1f0',
                        'accent-tertiary': '#22c55e',
                        'border-subtle': 'rgba(255, 255, 255, 0.05)',
                        'border-strong': 'rgba(255, 255, 255, 0.12)',
                    },
                    transitionTimingFunction: {
                        'smooth': 'cubic-bezier(0.4, 0, 0.2, 1)',
                        'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
                    }
                }
            }
        }
    </script>
</head>
<body <?php body_class( 'antialiased min-h-screen flex flex-col bg-[#09090b] text-content-primary font-sans' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site flex-1 flex flex-col">
    <header id="site-header" class="sticky top-0 z-50 w-full transition-all duration-500 ease-out bg-root/80 backdrop-blur-xl border-b border-border-subtle shadow-[0_8px_32px_rgba(0,0,0,0.6)]">
        <div class="container flex h-16 items-center justify-between gap-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center flex-shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="SemiAnalysis" width="180" height="74" class="h-8 sm:h-9 md:h-10 w-auto object-contain brightness-110" />
            </a>
            <nav class="hidden md:flex items-center gap-1">
                <div class="relative" id="nav-dropdown-container">
                    <button id="nav-dropdown-btn" class="flex items-center gap-1 px-3 py-2 text-[14px] font-semibold rounded-lg transition-all duration-200 text-content-secondary hover:text-content-primary hover:bg-white/5" onclick="toggleDropdown()">
                        Industry Models &amp; Research
                        <svg id="nav-dropdown-icon" class="h-3.5 w-3.5 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div id="nav-dropdown-panel" class="absolute top-full left-0 mt-2 w-64 rounded-xl border border-border-subtle bg-surface shadow-[0_16px_48px_rgba(0,0,0,0.8)] backdrop-blur-2xl overflow-hidden opacity-0 invisible transition-all duration-200">
                        <div class="p-2">
                            <p class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary px-3 py-2">
                                Industry Models
                            </p>
                            <a href="/models/ai-compute-supply-model" class="block px-3 py-2 text-sm text-content-secondary hover:text-accent-secondary hover:bg-white/5 rounded-lg transition-all duration-150">Accelerator &amp; HBM Model</a>
                            <a href="/models/gpu-scaling-bottleneck-model" class="block px-3 py-2 text-sm text-content-secondary hover:text-accent-secondary hover:bg-white/5 rounded-lg transition-all duration-150">AI Cloud TCO Model</a>
                            <a href="/models/semiconductor-capacity-tracker" class="block px-3 py-2 text-sm text-content-secondary hover:text-accent-secondary hover:bg-white/5 rounded-lg transition-all duration-150">Foundry Industry Model</a>
                            <a href="/models/data-center-power-model" class="block px-3 py-2 text-sm text-content-secondary hover:text-accent-secondary hover:bg-white/5 rounded-lg transition-all duration-150">Datacenter Industry Model</a>
                            <a href="/models/memory-supply-model" class="block px-3 py-2 text-sm text-content-secondary hover:text-accent-secondary hover:bg-white/5 rounded-lg transition-all duration-150">Memory Model</a>
                            <a href="/models/cloud-infrastructure-growth-model" class="block px-3 py-2 text-sm text-content-secondary hover:text-accent-secondary hover:bg-white/5 rounded-lg transition-all duration-150">Energy Model</a>
                            <div class="my-2 border-t border-border-subtle"></div>
                            <a href="/models" class="block px-3 py-2 text-sm font-bold text-accent-secondary hover:bg-accent-secondary/10 rounded-lg transition-all">
                                View all models &rarr;
                            </a>
                            <div class="my-1 border-t border-border-subtle"></div>
                            <a href="/products" class="block px-3 py-2 text-sm font-bold text-accent-primary hover:bg-accent-primary/10 rounded-lg transition-all">
                                Data Products Hub &rarr;
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/research" class="px-3 py-2 text-[14px] font-semibold text-content-secondary hover:text-content-primary rounded-lg hover:bg-white/5 transition-all duration-150">Research</a>
                <a href="/products" class="px-3 py-2 text-[14px] font-semibold text-content-secondary hover:text-content-primary rounded-lg hover:bg-white/5 transition-all duration-150">Products</a>
                <a href="/about" class="px-3 py-2 text-[14px] font-semibold text-content-secondary hover:text-content-primary rounded-lg hover:bg-white/5 transition-all duration-150">About</a>
                <a href="/events" class="px-3 py-2 text-[14px] font-semibold text-content-secondary hover:text-content-primary rounded-lg hover:bg-white/5 transition-all duration-150">Events</a>
                <a href="/careers" class="px-3 py-2 text-[14px] font-semibold text-content-secondary hover:text-content-primary rounded-lg hover:bg-white/5 transition-all duration-150">Careers</a>
            </nav>
            <div class="flex items-center gap-3">
                <div class="hidden sm:flex items-center gap-1.5 p-1 bg-surface border border-border-subtle rounded-lg mr-2">
                    <span class="text-[10px] uppercase font-bold text-content-tertiary pl-2 pr-1 select-none tracking-widest">Demo</span>
                    <button id="auth-btn-guest" class="px-3 py-1 text-[11px] font-bold rounded-md transition-all bg-white/10 text-content-primary">Guest</button>
                    <button id="auth-btn-pro" class="px-3 py-1 text-[11px] font-bold rounded-md transition-all text-content-secondary hover:text-content-primary">Pro</button>
                </div>
                <button class="text-content-secondary hover:text-content-primary p-2 rounded-lg hover:bg-white/5 transition-colors" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </button>
                <a href="/subscribe" class="hidden sm:inline-flex items-center px-5 py-2 rounded-lg text-sm font-bold bg-accent-primary text-root hover:bg-accent-primary-hover transition-colors duration-200 whitespace-nowrap">
                    Subscribe
                </a>
                <button class="md:hidden text-content-secondary hover:text-content-primary p-2 rounded-lg hover:bg-white/5 transition-colors" aria-label="Open menu" onclick="document.getElementById('mobile-drawer').classList.toggle('opacity-0'); document.getElementById('mobile-drawer').classList.toggle('pointer-events-none'); document.getElementById('mobile-drawer-inner').classList.toggle('-translate-y-4'); document.getElementById('mobile-drawer-inner').classList.toggle('translate-y-0'); document.body.classList.toggle('overflow-hidden');">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                </button>
            </div>
        </div>
    </header>
    <div id="mobile-drawer" class="fixed inset-0 z-40 md:hidden transition-all duration-300 opacity-0 pointer-events-none">
        <div class="absolute inset-0 bg-root/90 backdrop-blur-xl" onclick="document.getElementById('mobile-drawer').classList.add('opacity-0', 'pointer-events-none'); document.getElementById('mobile-drawer-inner').classList.remove('translate-y-0'); document.getElementById('mobile-drawer-inner').classList.add('-translate-y-4'); document.body.classList.remove('overflow-hidden');"></div>
        <div id="mobile-drawer-inner" class="absolute top-16 left-0 right-0 bg-root border-b border-border-subtle transition-transform duration-300 max-h-[calc(100vh-64px)] overflow-y-auto -translate-y-4">
            <nav class="container py-6 flex flex-col gap-2">
                <p class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary px-3 pt-2 pb-1">Industry Models</p>
                <a href="/models/ai-compute-supply-model" class="px-3 py-3 text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Accelerator &amp; HBM Model</a>
                <a href="/models/gpu-scaling-bottleneck-model" class="px-3 py-3 text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">AI Cloud TCO Model</a>
                <a href="/models/semiconductor-capacity-tracker" class="px-3 py-3 text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Foundry Industry Model</a>
                <a href="/models/data-center-power-model" class="px-3 py-3 text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Datacenter Industry Model</a>
                <a href="/models" class="px-3 py-3 text-sm font-bold text-accent-secondary hover:bg-accent-secondary/10 rounded-xl transition-all">View all models &rarr;</a>
                <div class="my-3 border-t border-border-subtle"></div>
                <a href="/research" class="px-3 py-3 text-[16px] font-semibold text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Research Archives</a>
                <a href="/products" class="px-3 py-3 text-[16px] font-semibold text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Data Products</a>
                <a href="/about" class="px-3 py-3 text-[16px] font-semibold text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">About</a>
                <a href="/events" class="px-3 py-3 text-[16px] font-semibold text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Events</a>
                <a href="/careers" class="px-3 py-3 text-[16px] font-semibold text-content-secondary hover:text-content-primary hover:bg-white/5 rounded-xl transition-all">Careers</a>
                <div class="pt-4 mt-2 border-t border-border-subtle">
                    <div class="flex items-center justify-between p-4 mb-4 bg-surface border border-border-subtle rounded-xl">
                        <span class="text-[11px] uppercase font-bold text-content-tertiary tracking-widest">Demo State</span>
                        <div class="flex items-center gap-1.5">
                            <button id="auth-btn-guest-mobile" class="px-4 py-2 text-xs font-bold rounded-lg transition-all bg-white/10 text-content-primary">Guest</button>
                            <button id="auth-btn-pro-mobile" class="px-4 py-2 text-xs font-bold rounded-lg transition-all text-content-secondary hover:text-content-primary">Pro</button>
                        </div>
                    </div>
                    <a href="/subscribe" class="flex items-center justify-center h-12 rounded-lg text-sm font-bold bg-accent-primary text-root hover:bg-accent-primary-hover transition-colors">
                        Subscribe &mdash; $50/mo
                    </a>
                </div>
            </nav>
        </div>
    </div>
