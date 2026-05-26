<?php
/**
 * Template Name: Research Page
 */
get_header();
$articles = [
    ['title' => 'NVIDIA Blackwell Architecture: Performance and Scaling Bottlenecks', 'category' => 'GPUs', 'author' => 'Dylan Patel', 'date' => 'May 20, 2026', 'readingTime' => '18 min read', 'description' => 'An architectural deep dive into the B200 and GB200 NVL72 rack-scale systems.', 'memberOnly' => true],
    ['title' => 'The Cost of Compute: Why AI Startups Are Transitioning to Custom Silicon', 'category' => 'Semiconductors', 'author' => 'Dylan Patel', 'date' => 'May 12, 2026', 'readingTime' => '12 min read', 'description' => 'Analyzing the unit economics driving the pivot toward custom ASICs.', 'memberOnly' => false],
    ['title' => 'TSMC N2 Yield Curves and Wafer Pricing: A Bottom-Up Analysis', 'category' => 'Semiconductors', 'author' => 'Myron Xie', 'date' => 'May 04, 2026', 'readingTime' => '24 min read', 'description' => 'Detailed forecast of 2nm wafer costs and yield progression.', 'memberOnly' => true],
    ['title' => 'Nuclear SMRs and the 100-Gigawatt Data Center Problem', 'category' => 'Data Centers', 'author' => 'Dylan Patel', 'date' => 'Apr 28, 2026', 'readingTime' => '15 min read', 'description' => 'How hyperscalers are leveraging Small Modular Reactors to bypass grid constraints.', 'memberOnly' => false],
    ['title' => 'HBM4 Memory Architecture: Bandwidth Limits and Packaging Complexities', 'category' => 'Semiconductors', 'author' => 'Myron Xie', 'date' => 'Apr 19, 2026', 'readingTime' => '14 min read', 'description' => 'The transition to HBM4 introduces severe thermal challenges and 3D stacking limitations.', 'memberOnly' => true],
];
?>
<main class="min-h-screen bg-root">
    <section class="relative border-b border-border-subtle bg-root pt-12 pb-12 sm:pt-16 md:pt-20 md:pb-16">
        <div class="pointer-events-none absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle, var(--color-content-secondary) 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="container relative z-10">
            <nav class="flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-content-tertiary mb-6" aria-label="Breadcrumb">
                <a href="/" class="hover:text-accent-secondary transition-colors">Home</a>
                <span>/</span>
                <span class="text-content-secondary">Research Archives</span>
            </nav>
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6">
                <div class="max-w-2xl">
                    <p class="text-xs font-bold uppercase tracking-[0.15em] text-accent-secondary mb-3">Research Archive</p>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tighter text-content-primary leading-[1.05] mb-4">All Research</h1>
                    <p class="text-[16px] font-medium text-content-secondary leading-relaxed">5+ deep-dive reports on AI infrastructure, GPU architecture, semiconductors, and compute economics.</p>
                </div>
                <a href="#newsletter" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-accent-secondary text-root text-sm font-bold hover:bg-accent-secondary-hover transition-colors whitespace-nowrap self-start sm:self-auto">Subscribe for access</a>
            </div>
        </div>
    </section>
    <div class="container py-10 sm:py-14 md:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">
            <aside class="lg:col-span-1 lg:sticky lg:top-20 lg:self-start space-y-8">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-content-tertiary mb-3">Topics</p>
                    <ul class="space-y-1">
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-bold text-accent-secondary bg-accent-secondary/10 transition-colors">All Topics</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-surface transition-all duration-150">AI Infrastructure</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-surface transition-all duration-150">GPUs</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-surface transition-all duration-150">Semiconductors</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-surface transition-all duration-150">Cloud Computing</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-surface transition-all duration-150">Data Centers</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium text-content-secondary hover:text-content-primary hover:bg-surface transition-all duration-150">Markets</button></li>
                    </ul>
                </div>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-content-tertiary mb-3">Access</p>
                    <ul class="space-y-1">
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium transition-all duration-150 font-bold text-accent-secondary bg-accent-secondary/10">All Articles</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium transition-all duration-150 text-content-secondary hover:text-content-primary hover:bg-surface">Free Access</button></li>
                        <li><button class="w-full text-left px-3 py-2 rounded-lg text-sm font-medium transition-all duration-150 text-content-secondary hover:text-content-primary hover:bg-surface">Member Only</button></li>
                    </ul>
                </div>
                <div class="rounded-xl border border-border-strong bg-surface p-5 space-y-3 shadow-lg">
                    <p class="text-xs font-bold text-content-primary">Full Research Access</p>
                    <p class="text-[13px] font-medium text-content-secondary leading-relaxed">Unlock every report for $50/month or $500/year.</p>
                    <a href="#newsletter" class="block text-center h-10 leading-[40px] rounded-lg text-sm font-bold bg-accent-secondary text-root hover:bg-accent-secondary-hover transition-colors">Subscribe Now</a>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary text-center">Cancel anytime</p>
                </div>
            </aside>
            <div class="lg:col-span-3 space-y-4">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-[13px] font-bold text-content-tertiary uppercase tracking-widest">Showing <span class="text-content-primary">5</span> reports</p>
                    <select class="text-xs font-bold bg-surface border border-border-strong text-content-secondary rounded-lg px-3 py-2 focus:outline-none focus:ring-1 focus:ring-accent-secondary/50">
                        <option>Most Recent</option>
                        <option>Most Popular</option>
                        <option>Oldest First</option>
                    </select>
                </div>
                <?php foreach($articles as $i => $article): 
                    $imgId = ['1518770660439-4636190af475','1550751827-4bd374c3f58b','1620712943543-bcc4688e7485','1639762681485-074b7f938ba0','1558618666-fcd25c85cd64'][$i % 5];
                ?>
                <a href="https://semianalysis.com/archive" target="_blank" rel="noopener noreferrer" class="group block">
                    <article class="flex gap-4 sm:gap-6 p-4 sm:p-5 rounded-xl border border-border-subtle bg-surface hover:border-accent-secondary/30 transition-all duration-300 hover:shadow-lg">
                        <div class="hidden sm:block flex-shrink-0 w-28 md:w-40 h-20 md:h-28 rounded-lg overflow-hidden border border-border-strong">
                            <img src="https://images.unsplash.com/photo-<?php echo $imgId; ?>?auto=format&fit=crop&w=300&q=70" alt="<?php echo esc_attr($article['title']); ?>" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        </div>
                        <div class="flex flex-col flex-1 min-w-0 justify-between gap-3">
                            <div class="space-y-2">
                                <div class="flex items-center flex-wrap gap-2">
                                    <span class="inline-flex items-center rounded-md border border-border-strong bg-surface px-2 py-1 text-[10px] font-bold uppercase tracking-widest text-content-primary shadow-sm"><?php echo esc_html($article['category']); ?></span>
                                    <?php if ($article['memberOnly']): ?>
                                    <span class="inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-[0.15em] px-2.5 py-0.5 rounded-md bg-accent-primary/10 border border-accent-primary/20 text-accent-primary">
    <svg class="h-2.5 w-2.5" viewBox="0 0 12 12" fill="none"><rect x="2" y="5" width="8" height="6" rx="1" stroke="currentColor" stroke-width="1.2" /><path d="M4 5V3.5a2 2 0 114 0V5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" /></svg>
    Member
</span>
                                    <?php endif; ?>
                                </div>
                                <h2 class="text-[15px] sm:text-[17px] font-bold text-content-primary group-hover:text-accent-secondary transition-colors duration-200 leading-snug line-clamp-2 tracking-tight">
                                    <?php echo esc_html($article['title']); ?>
                                </h2>
                                <p class="text-[13px] font-medium text-content-secondary leading-relaxed line-clamp-2 hidden sm:block">
                                    <?php echo esc_html($article['description']); ?>
                                </p>
                            </div>
                            <div class="flex items-center gap-3 text-[11px] font-bold uppercase tracking-widest text-content-tertiary">
                                <span class="text-content-secondary truncate max-w-[120px]"><?php echo esc_html($article['author']); ?></span>
                                <span>&middot;</span>
                                <span><?php echo esc_html($article['date']); ?></span>
                                <span>&middot;</span>
                                <span class="text-accent-secondary"><?php echo esc_html($article['readingTime']); ?></span>
                            </div>
                        </div>
                    </article>
                </a>
                <?php endforeach; ?>
                <div class="pt-8 text-center">
                    <button class="inline-flex items-center gap-2 px-8 py-3 rounded-lg border border-border-strong bg-surface text-[13px] font-bold text-content-secondary hover:border-accent-secondary/50 hover:text-content-primary transition-all duration-200 shadow-sm">
                        Load more reports
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
