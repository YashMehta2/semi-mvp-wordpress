<section class="relative overflow-hidden bg-root pt-12 pb-10 sm:pt-14 sm:pb-12 md:pt-16 md:pb-14 lg:pt-20 lg:pb-16">
    <!-- Dot-grid texture -->
    <div class="pointer-events-none absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #9ca3af 1px, transparent 1px); background-size: 26px 26px;"></div>
    <!-- Azure glow -->
    <div class="pointer-events-none absolute -top-40 right-[-10%] h-[500px] w-[500px] rounded-full bg-accent-secondary/5 blur-[140px]"></div>

    <div class="container mx-auto px-5 max-w-[1280px] relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] xl:grid-cols-[1fr_460px] gap-10 md:gap-14 lg:gap-16 xl:gap-24 items-start">
            
            <!-- Left: Editorial + CTA -->
            <div class="flex flex-col gap-4 sm:gap-5 pt-2 sa-reveal">
                <!-- Eyebrow -->
                <div class="inline-flex w-fit items-center gap-2 rounded-md border border-accent-secondary/20 bg-accent-secondary/10 px-3 py-1.5">
                    <span class="h-1.5 w-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
                    <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-widest text-accent-secondary">
                        Technical Research Intelligence
                    </span>
                </div>

                <!-- Headline -->
                <h1 class="text-[38px] sm:text-[46px] md:text-5xl lg:text-[56px] xl:text-[64px] font-extrabold tracking-tighter leading-[1.05] text-content-primary">
                    Rigorous Research on <br>
                    <span style="background: linear-gradient(135deg, #e59a35 0%, #f5ab46 55%, #e59a35 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        AI &amp; Semiconductors
                    </span>
                </h1>

                <!-- Sub-headline -->
                <p class="text-[15px] sm:text-[16px] md:text-[17px] font-medium text-content-secondary leading-relaxed max-w-[540px]">
                    Deep technical analysis of GPU architecture, compute supply chains, fab economics,
                    and the infrastructure defining the next decade of AI.
                </p>

                <!-- CTA row -->
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="/models" class="inline-flex items-center gap-2.5 px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg bg-accent-primary text-root text-[14px] sm:text-[15px] font-bold hover:bg-accent-primary-hover active:scale-95 transition-all duration-200">
                        View Industry Models
                        <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none"><path d="M2.5 7h9M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    </a>
                    <a href="#featured" class="inline-flex items-center gap-2 px-5 py-2.5 sm:py-3 rounded-lg border border-border-strong text-[14px] sm:text-[15px] font-bold text-content-secondary hover:border-accent-primary/30 hover:text-content-primary transition-all duration-200">
                        Browse Research
                    </a>
                </div>

                <!-- Trust strip -->
                <div class="flex flex-col gap-2 pt-4">
                    <p class="text-[10px] sm:text-[11px] font-bold uppercase tracking-widest text-content-tertiary">
                        Read by engineers &amp; investors at
                    </p>
                    <div class="flex flex-wrap items-center gap-x-4 sm:gap-x-5 gap-y-2">
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">NVIDIA</span>
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">Google</span>
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">Microsoft</span>
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">TSMC</span>
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">AMD</span>
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">Meta</span>
                        <span class="text-[12px] sm:text-[13px] font-bold text-content-tertiary hover:text-content-secondary transition-colors cursor-default">OpenAI</span>
                    </div>
                </div>
            </div>

            <!-- Right: Flagship article card (Static Mock) -->
            <div class="sa-reveal sa-stagger-2">
                <a href="https://semianalysis.com/archive" target="_blank" rel="noopener noreferrer" class="group block text-left">
                    <div class="sa-card overflow-hidden sa-card-hover shadow-2xl">
                        <!-- Accent bar -->
                        <div class="h-[2px] w-full bg-gradient-to-r from-accent-primary via-accent-primary-hover to-accent-primary"></div>

                        <!-- Thumbnail -->
                        <div class="relative h-44 sm:h-48 md:h-52 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-transparent z-10"></div>
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80" alt="Flagship Research" class="h-full w-full object-cover scale-[1.04] group-hover:scale-100 transition-transform duration-700 ease-out" />
                            <div class="absolute bottom-3 left-4 z-20">
                                <span class="inline-flex items-center text-[10px] font-bold text-content-primary bg-surface border border-border-strong px-2 py-1 rounded-md uppercase tracking-widest shadow-sm">GPUs</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-5 space-y-3">
                            <p class="text-[10px] uppercase tracking-widest text-content-tertiary font-bold">
                                Featured Research &middot; May 20, 2026
                            </p>
                            <h2 class="text-[16px] sm:text-[18px] font-extrabold leading-tight text-content-primary group-hover:text-accent-primary transition-colors duration-200">
                                NVIDIA Blackwell Architecture: Performance and Scaling Bottlenecks
                            </h2>
                            <p class="text-[13px] text-content-secondary leading-relaxed line-clamp-2">
                                An architectural deep dive into the B200 and GB200 NVL72 rack-scale systems. We analyze the complexities of the 5th generation NVLink switch network, liquid cooling requirements, and true TCO.
                            </p>
                            <div class="flex items-center justify-between pt-4 border-t border-border-subtle">
                                <div class="flex items-center gap-2 text-[13px] text-content-secondary">
                                    <span class="font-bold text-content-primary">Dylan Patel</span>
                                    <span class="text-content-tertiary">&middot;</span>
                                    <span class="text-accent-secondary font-bold">18 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Quick-access topic pills -->
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[11px] font-bold px-3 py-1.5 rounded-lg bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/50 hover:text-accent-secondary duration-200">AI Infrastructure</a>
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[11px] font-bold px-3 py-1.5 rounded-lg bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/50 hover:text-accent-secondary duration-200">GPU Markets</a>
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[11px] font-bold px-3 py-1.5 rounded-lg bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/50 hover:text-accent-secondary duration-200">Semiconductors</a>
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[11px] font-bold px-3 py-1.5 rounded-lg bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/50 hover:text-accent-secondary duration-200">Cloud CapEx</a>
                </div>
            </div>

        </div>
    </div>
</section>
