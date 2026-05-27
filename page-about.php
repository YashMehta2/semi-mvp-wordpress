<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="min-h-screen bg-root pb-12">
    
    <!-- 1. Hero Section - 2-Column with Image to kill dead-space -->
    <section class="relative border-b border-border-subtle bg-root pt-16 pb-16 lg:pt-24 lg:pb-24 overflow-hidden">
        <!-- Dynamic Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#a1a1aa 1px, transparent 1px), linear-gradient(90deg, #a1a1aa 1px, transparent 1px); background-size: 32px 32px;"></div>
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent-secondary/10 rounded-full blur-[120px] opacity-70"></div>
        </div>

        <div class="container relative z-10 sa-reveal">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                
                <!-- Left: Text Content -->
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface border border-border-subtle text-accent-secondary text-[12px] font-bold uppercase tracking-widest mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-secondary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accent-secondary"></span>
                        </span>
                        Independent Research
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-[52px] font-extrabold tracking-tighter text-content-primary leading-[1.05] mb-6 text-balance capitalize">
                        Bridging the gap between business and the world's most important industry.
                    </h1>
                    <p class="text-[18px] sm:text-[20px] text-content-secondary leading-relaxed font-medium text-balance">
                        SemiAnalysis is an independent research and analysis company specializing in the Semiconductor and AI industries. Our in-depth coverage spans the entire supply chain, from semiconductor fabrication essentials to cutting-edge AI Models, software, and infrastructure.
                    </p>
                </div>

                <!-- Right: Image Placeholder -->
                <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden border border-border-subtle shadow-2xl sa-reveal sa-delay-100">
                    <div class="absolute inset-0 bg-surface/50 mix-blend-overlay z-10"></div>
                    <img 
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/blueprint.png" 
                        alt="Semiconductor Architecture" 
                        class="absolute inset-0 w-full h-full object-cover grayscale opacity-80"
                    />
                    <!-- Subtle tech overlay accents -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-root/80 via-transparent to-accent-secondary/10 z-20"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. What We Cover - Premium Grid to eliminate 1/3-2/3 dead space -->
    <section class="py-10 sm:py-16 border-b border-border-subtle bg-surface/30">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto mb-12 sa-reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-content-primary mb-4">Coverage & Intelligence</h2>
                <p class="text-[16px] text-content-secondary font-medium">We track the pulse of the semiconductor and AI ecosystem across 9 core verticals.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <?php
                $items = [
                    ['id' => '01', 'title' => 'Capital Equipment & Materials', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/><path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/><path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/><path d="M7 20v2"/><path d="M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="8" y="8" width="8" height="8" rx="1"/></svg>', 'desc' => 'Deep analysis of the tools, chemicals, and materials driving next-gen nodes.'],
                    ['id' => '02', 'title' => 'Fabrication & Packaging', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>', 'desc' => 'Foundries, advanced packaging techniques, process nodes, and wafer yields.'],
                    ['id' => '03', 'title' => 'Foundry Economics', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.48 12H2"/></svg>', 'desc' => 'Cost modeling, utilization rates, and economic viability of bleeding-edge fabs.'],
                    ['id' => '04', 'title' => 'Chip Design & VLSI', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M11 9h4a2 2 0 0 0 2-2V3"/><circle cx="9" cy="9" r="2"/><path d="M7 21v-4a2 2 0 0 1 2-2h4"/><circle cx="15" cy="15" r="2"/></svg>', 'desc' => 'Architectural deep dives into the latest silicon and custom ASIC development.'],
                    ['id' => '05', 'title' => 'Networking & Optics', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.586 5.414-5.172 5.172"/><path d="m18.586 13.414-5.172 5.172"/><path d="M6 12h12"/><circle cx="12" cy="20" r="2"/><circle cx="12" cy="4" r="2"/><circle cx="20" cy="12" r="2"/><circle cx="4" cy="12" r="2"/></svg>', 'desc' => 'Intra-rack and inter-cluster networking fabrics, InfiniBand vs Ethernet.'],
                    ['id' => '06', 'title' => 'System Architecture', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>', 'desc' => 'Server-level and datacenter-scale system design and thermal constraints.'],
                    ['id' => '07', 'title' => 'Software & EDA', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 17L12 22l10-5"/><path d="M2 12l10 5 10-5"/><path d="M12 2L2 7l10 5 10-5-10-5Z"/></svg>', 'desc' => 'Electronic Design Automation tools and the software layers enabling silicon.'],
                    ['id' => '08', 'title' => 'AI Model Frameworks', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/></svg>', 'desc' => 'Optimization, compilation, and execution of AI workloads on hardware.'],
                    ['id' => '09', 'title' => 'Training & Inference', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>', 'desc' => 'Infrastructure, performance benchmarking, and total cost of ownership (TCO).'],
                ];

                foreach($items as $index => $item) {
                    $delay = ($index % 3) * 50;
                    echo '<div class="group p-6 rounded-2xl border border-border-subtle bg-root hover:border-accent-secondary/50 transition-colors sa-reveal" style="animation-delay: ' . $delay . 'ms">';
                    echo '  <div class="flex items-center justify-between mb-4">';
                    echo '    <div class="w-10 h-10 rounded-xl bg-surface border border-border-subtle flex items-center justify-center text-content-primary group-hover:text-accent-secondary group-hover:scale-110 transition-all">';
                    echo '      ' . $item['icon'];
                    echo '    </div>';
                    echo '    <span class="text-[14px] font-bold text-border-strong">' . esc_html($item['id']) . '</span>';
                    echo '  </div>';
                    echo '  <h4 class="text-[17px] font-extrabold tracking-tight text-content-primary mb-2">' . esc_html($item['title']) . '</h4>';
                    echo '  <p class="text-[14px] leading-relaxed text-content-secondary font-medium">' . esc_html($item['desc']) . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 3. Methodology & Team - Merged into a beautiful 2-column feature -->
    <section class="py-10 sm:py-16 border-b border-border-subtle overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                
                <!-- Left: Philosophy -->
                <div class="sa-reveal">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-content-primary mb-6">Our Philosophy</h2>
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="w-1.5 rounded-full bg-accent-secondary shrink-0"></div>
                            <div>
                                <h5 class="text-[18px] font-extrabold text-content-primary mb-2">Product First Approach</h5>
                                <p class="text-[15px] text-content-secondary leading-relaxed font-medium">We focus on technology and trends from a product-first perspective, rather than viewing firms in isolation. This allows us to predict shifts before they hit financial statements.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1.5 rounded-full bg-content-tertiary shrink-0"></div>
                            <div>
                                <h5 class="text-[18px] font-extrabold text-content-primary mb-2">The Flywheel Effect</h5>
                                <p class="text-[15px] text-content-secondary leading-relaxed font-medium">Semiconductors and AI form the world's most intricate supply chain. We connect specialists upstream and downstream, providing context that drives mutually beneficial engagements.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1.5 rounded-full bg-content-tertiary shrink-0"></div>
                            <div>
                                <h5 class="text-[18px] font-extrabold text-content-primary mb-2">On The Ground</h5>
                                <p class="text-[15px] text-content-secondary leading-relaxed font-medium">We don't just read press releases. We attend 40+ industry conferences annually and engage directly with engineers at every layer of the abstraction stack.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: The Team Grid -->
                <div class="sa-reveal sa-delay-100">
                    <div class="bg-surface/50 border border-border-subtle rounded-3xl p-8 backdrop-blur-sm">
                        <h3 class="text-2xl font-extrabold tracking-tight text-content-primary mb-2">The Research Team</h3>
                        <p class="text-[14px] text-content-secondary mb-8 font-medium">We hold a deep-rooted passion for sharing key insights with our subscribers.</p>
                        
                        <div class="space-y-4">
                            <?php
                            $analysts = [
                                ['name' => 'Dylan Patel', 'role' => 'Founder', 'img' => 'abstract_avatar_1.png'],
                                ['name' => 'Myron Xie', 'role' => 'Senior Analyst', 'img' => 'abstract_avatar_2.png'],
                                ['name' => 'Daniel Nenni', 'role' => 'Research Associate', 'img' => 'abstract_avatar_3.png'],
                            ];

                            foreach($analysts as $analyst) {
                                $imgUrl = get_template_directory_uri() . '/assets/placeholders/' . $analyst['img'];
                                
                                echo '<div class="flex items-center gap-4 p-4 rounded-xl bg-root border border-border-subtle hover:border-accent-secondary/30 transition-colors">';
                                echo '  <img src="' . esc_url($imgUrl) . '" alt="' . esc_attr($analyst['name']) . '" class="w-12 h-12 rounded-full object-cover grayscale opacity-90" />';
                                echo '  <div class="flex-1">';
                                echo '    <h4 class="text-[16px] font-extrabold text-content-primary">' . esc_html($analyst['name']) . '</h4>';
                                echo '    <p class="text-[12px] font-bold uppercase tracking-wider text-accent-secondary">' . esc_html($analyst['role']) . '</p>';
                                echo '  </div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Full-Width CTA to kill bottom dead space -->
    <section class="py-10 sm:py-14 bg-surface relative overflow-hidden">
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at center, #F7B041 0%, transparent 60%);"></div>
        <div class="container relative z-10 text-center max-w-3xl sa-reveal">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-content-primary mb-6">
                Services We Offer
            </h2>
            <p class="text-[16px] sm:text-[18px] text-content-secondary leading-relaxed font-medium mb-10 text-balance mx-auto">
                Strategic and technical consulting for the semiconductor industry. Tailored solutions including retained advisory engagements, bespoke project work, industry models, and hourly consulting.
            </p>
            
            <a href="mailto:sales@semianalysis.com" class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-content-primary text-root text-[14px] font-extrabold uppercase tracking-widest rounded-xl hover:scale-105 hover:bg-content-secondary transition-all shadow-xl shadow-root/50">
                Enterprise Inquiries
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
