<section class="relative overflow-hidden bg-root pt-8 pb-10 md:pt-10 md:pb-12 lg:pt-12 lg:pb-14">
    <div class="pointer-events-none absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #9ca3af 1px, transparent 1px); background-size: 26px 26px;"></div>
    <div class="pointer-events-none absolute -top-40 right-[-10%] h-[500px] w-[500px] rounded-full bg-accent-secondary/5 blur-[140px]"></div>
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] xl:grid-cols-[1fr_460px] gap-10 md:gap-14 lg:gap-16 xl:gap-24 items-start">
            <div class="flex flex-col gap-5 pt-2 sa-reveal">
                <div class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
                    <span class="sa-eyebrow">
                        Institutional AI Infrastructure Intelligence
                    </span>
                </div>
                <h1 class="text-[38px] sm:text-[46px] md:text-5xl lg:text-[56px] xl:text-[64px] sa-heading-h1 text-content-primary">
                    Institutional AI Infrastructure &amp; <br>
                    <span style="background: linear-gradient(135deg, #e59a35 0%, #f5ab46 55%, #e59a35 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        Semiconductor Intelligence
                    </span>
                </h1>
                <p class="text-[15px] sm:text-[16px] md:text-[17px] font-medium text-content-secondary leading-relaxed max-w-[540px] border-l-2 border-border-strong pl-4 my-2">
                    Proprietary bottom-up models and supply chain forecasting for hyperscalers, chip designers, and institutional investors. Restrained, analyst-backed intelligence on wafer allocations, CapEx tracking, and hardware roadmap constraints.
                </p>
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="#premium" class="inline-flex items-center gap-2.5 px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg bg-accent-primary text-root text-[14px] sm:text-[15px] font-bold hover:bg-accent-primary-hover active:scale-95 transition-all duration-200 shadow-lg shadow-accent-primary/10">
                        Request Institutional Access
                        <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none"><path d="M2.5 7h9M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    </a>
                    <a href="/models" class="inline-flex items-center gap-2 px-5 py-2.5 sm:py-3 rounded-lg border border-border-strong text-[14px] sm:text-[15px] font-bold text-content-secondary hover:border-accent-primary/30 hover:text-content-primary transition-all duration-200">
                        Explore Industry Models
                    </a>
                </div>
                <!-- Trust strip - Wafer style grid -->
                <div class="pt-6 mt-4 border-t border-border-subtle/50">
                    <p class="sa-mono-label mb-3">
                        Trusted by key decision-makers at
                    </p>
                    <div class="grid grid-cols-4 md:grid-cols-8 border-t border-l border-border-subtle/30">
                        <?php
                        $cos = ["NVIDIA", "Google", "Microsoft", "TSMC", "AMD", "Meta", "OpenAI"];
                        foreach ($cos as $co) {
                            echo '<div class="py-2.5 px-1 text-center text-[10px] md:text-[11px] font-extrabold text-content-tertiary hover:text-content-primary hover:bg-surface/40 border-r border-b border-border-subtle/30 transition-all cursor-default select-none tracking-wider">' . esc_html($co) . '</div>';
                        }
                        ?>
                        <div class="py-2.5 border-r border-b border-border-subtle/30 bg-surface/10"></div>
                    </div>
                </div>
            </div>
            <div class="sa-reveal sa-stagger-2">
                <a href="https://semianalysis.com/archive" target="_blank" rel="noopener noreferrer" class="group block text-left">
                    <div class="sa-card overflow-hidden sa-card-hover shadow-2xl relative">
                        <div class="h-[2px] w-full bg-gradient-to-r from-accent-primary via-accent-primary-hover to-accent-primary"></div>
                        <div class="relative h-44 sm:h-48 md:h-52 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-transparent z-10"></div>
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80" alt="Flagship Research" class="h-full w-full object-cover scale-[1.04] group-hover:scale-100 transition-transform duration-700 ease-out grayscale opacity-75 contrast-125 group-hover:grayscale-0 group-hover:opacity-100 group-hover:contrast-100" />
                            <div class="absolute bottom-3 left-4 z-20">
                                <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-[11px] font-semibold uppercase tracking-widest border border-accent-secondary/20 bg-accent-secondary/10 text-accent-secondary transition-colors">GPUs</span>
                            </div>
                        </div>
                        <div class="p-5 space-y-3 bg-surface/90 backdrop-blur-sm">
                            <p class="sa-mono-label flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-primary animate-pulse"></span>
                                Featured Briefing &middot; May 20, 2026
                            </p>
                            <h2 class="text-[18px] sm:text-[20px] font-extrabold leading-tight tracking-tight text-content-primary group-hover:text-accent-primary transition-colors duration-200">
                                NVIDIA Blackwell Architecture: Performance and Scaling Bottlenecks
                            </h2>
                            <p class="text-[13px] text-content-secondary leading-relaxed line-clamp-2 font-medium">
                                An architectural deep dive into the B200 and GB200 NVL72 rack-scale systems. We analyze the complexities of the 5th generation NVLink switch network, liquid cooling requirements, and true TCO.
                            </p>
                            <div class="flex items-center justify-between pt-4 border-t border-border-subtle">
                                <div class="flex items-center gap-2 text-[13px] text-content-secondary">
                                    <span class="font-extrabold text-content-primary">Dylan Patel</span>
                                    <span class="text-content-tertiary">&middot;</span>
                                    <span class="text-accent-secondary font-bold">18 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="mt-5 pt-4 border-t border-border-subtle/50 flex flex-wrap gap-2">
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[10px] font-extrabold px-3 py-1.5 uppercase tracking-wider rounded bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/40 hover:text-accent-secondary duration-150">AI Infrastructure</a>
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[10px] font-extrabold px-3 py-1.5 uppercase tracking-wider rounded bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/40 hover:text-accent-secondary duration-150">GPU Markets</a>
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[10px] font-extrabold px-3 py-1.5 uppercase tracking-wider rounded bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/40 hover:text-accent-secondary duration-150">Semiconductors</a>
                    <a href="#" class="opacity-[0.55] hover:opacity-100 transition-opacity cursor-pointer text-[10px] font-extrabold px-3 py-1.5 uppercase tracking-wider rounded bg-surface border border-border-strong text-content-secondary shadow-sm hover:border-accent-secondary/40 hover:text-accent-secondary duration-150">Cloud CapEx</a>
                </div>
            </div>
        </div>
    </div>
</section>
