<?php
/**
 * Template Name: Subscribe
 */
get_header(); ?>

<main class="min-h-screen bg-root pb-24 font-sans text-content-primary">
    <!-- Editorial Hero with Background Image Fade -->
    <section class="relative border-b border-border-strong bg-root pt-20 pb-16 overflow-hidden">
        <!-- Background Image Placeholder Fade -->
        <div class="absolute inset-0 z-0">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/abstract_data_dashboard.png"
                alt=""
                class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-40 grayscale contrast-125 brightness-110"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10 max-w-4xl mx-auto text-center animate-fade-in-up">
            <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-content-tertiary mb-4">
                Membership
            </p>
            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-content-primary mb-6">
                Subscribe to SemiAnalysis
            </h1>
            <p class="text-lg sm:text-xl text-content-secondary leading-relaxed mb-8 max-w-2xl mx-auto">
                Bridging the gap between the world's most important industry, semiconductors, and business.
            </p>
            <div class="inline-flex items-center gap-2 border border-border-subtle bg-surface/80 backdrop-blur-sm px-4 py-1.5 rounded-full shadow-sm">
                <div class="w-2 h-2 rounded-full bg-accent-primary animate-pulse"></div>
                <span class="font-mono text-xs font-bold text-content-secondary tracking-widest uppercase">
                    Over 279,000 Subscribers
                </span>
            </div>
        </div>
    </section>

    <!-- Subscription Tiers -->
    <section class="pt-20 pb-24">
        <div class="container max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                
                <!-- Free Tier -->
                <div class="animate-fade-in-up delay-100 group flex flex-col border border-border-strong bg-root p-10 hover:border-content-tertiary transition-all duration-300 hover:shadow-lg hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-border-strong group-hover:bg-content-tertiary transition-colors duration-300"></div>
                    
                    <div class="flex-1 flex flex-col">
                        <h2 class="text-xl font-extrabold tracking-tight mb-2">Free</h2>
                        <div class="flex items-baseline gap-2 mb-8">
                            <span class="text-4xl font-mono font-bold">$0</span>
                            <span class="text-sm font-semibold text-content-tertiary uppercase tracking-wider">/ month</span>
                        </div>
                        
                        <div class="h-[1px] w-full bg-border-strong mb-8"></div>
                        
                        <ul class="space-y-5 mb-10 flex-1">
                            <li class="flex gap-4 items-start">
                                <span class="text-accent-secondary mt-1 text-sm shrink-0">›</span>
                                <span class="text-[15px] font-medium text-content-secondary leading-relaxed">Occasional public posts</span>
                            </li>
                        </ul>
                        
                        <a href="https://semianalysis.com/subscribe-to-semianalysis/" class="mt-auto w-full inline-block text-center border border-content-primary text-content-primary py-3.5 px-6 text-sm font-bold uppercase tracking-widest hover:bg-content-primary hover:text-root transition-colors">
                            Log in or Subscribe
                        </a>
                    </div>
                </div>

                <!-- Premium Tier -->
                <div class="animate-fade-in-up delay-200 flex flex-col border-2 border-content-primary bg-surface p-10 relative transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="absolute top-0 right-10 -translate-y-1/2 bg-content-primary text-root px-3 py-1 text-[10px] font-extrabold uppercase tracking-widest shadow-sm z-10">
                        Recommended
                    </div>
                    <div class="absolute top-0 left-0 w-full h-1 bg-accent-primary"></div>
                    
                    <div class="flex-1 flex flex-col">
                        <h2 class="text-xl font-extrabold tracking-tight mb-2">Premium</h2>
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-4xl font-mono font-bold">$50</span>
                            <span class="text-sm font-semibold text-content-tertiary uppercase tracking-wider">/ month</span>
                        </div>
                        <p class="text-sm font-mono text-content-secondary mb-8">
                            or <span class="font-bold text-content-primary">$500</span> / year
                        </p>
                        
                        <div class="h-[1px] w-full bg-border-strong mb-8"></div>
                        
                        <ul class="space-y-5 mb-10 flex-1">
                            <li class="flex gap-4 items-start">
                                <span class="text-accent-primary mt-1 text-sm shrink-0">›</span>
                                <span class="text-[15px] font-medium text-content-primary leading-relaxed">Subscriber-only posts and full archive</span>
                            </li>
                            <li class="flex gap-4 items-start">
                                <span class="text-accent-primary mt-1 text-sm shrink-0">›</span>
                                <span class="text-[15px] font-medium text-content-primary leading-relaxed">Post comments and join the community</span>
                            </li>
                        </ul>
                        
                        <a href="https://semianalysis.com/subscribe-to-semianalysis/" class="mt-auto w-full inline-block text-center bg-content-primary text-root py-3.5 px-6 text-sm font-bold uppercase tracking-widest hover:bg-content-secondary transition-colors shadow-md hover:shadow-lg">
                            Subscribe
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Institutional Models Banner (Not a Tier) -->
    <section class="border-t border-border-strong pt-16">
        <div class="container max-w-4xl mx-auto">
            <div class="border border-border-subtle bg-surface/50 p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-8 transition-colors hover:bg-surface hover:border-border-strong">
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-[10px] font-bold uppercase tracking-[0.25em] text-content-tertiary mb-3">
                        Enterprise & Institutional
                    </h3>
                    <h4 class="text-lg font-bold text-content-primary mb-2">
                        Industry Data Models
                    </h4>
                    <p class="text-sm text-content-secondary leading-relaxed max-w-lg mx-auto md:mx-0">
                        Proprietary access to the Wafer Fab, AI Cloud TCO, and Networking models. Delivered for institutional clients requiring deep-dive technical data.
                    </p>
                </div>
                <div class="shrink-0">
                    <a href="/models" class="inline-block text-xs font-bold uppercase tracking-widest text-accent-secondary border-b border-accent-secondary/30 hover:border-accent-secondary pb-1 transition-colors">
                        Inquire for Access →
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in-up {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
    .delay-100 {
        animation-delay: 0.1s;
    }
    .delay-200 {
        animation-delay: 0.2s;
    }
</style>

<?php get_footer(); ?>
