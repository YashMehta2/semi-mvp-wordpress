<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="min-h-screen bg-root pb-12">
    
    <!-- 1. Mission / Thesis Section (Hero) -->
    <section class="relative border-b border-border-subtle bg-root pt-12 pb-14 sm:pt-16 sm:pb-18 lg:pt-20 lg:pb-24 overflow-hidden">
        <!-- Abstract Background Elements -->
        <div class="pointer-events-none absolute inset-0 opacity-[0.04] z-10" style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="pointer-events-none absolute top-0 right-0 h-[500px] w-[500px] rounded-full bg-accent-secondary/5 blur-[120px] z-10"></div>
        
        <!-- Hero Visual Fade -->
        <div class="absolute inset-0 z-0 hidden lg:block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/blueprint.png" alt="" class="absolute inset-y-0 right-0 w-[60%] h-full object-cover brightness-125" />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10">
            <div class="max-w-4xl">
                <p class="text-xs font-bold uppercase tracking-[0.15em] text-accent-secondary mb-4 sa-reveal">
                    Institutional Intelligence
                </p>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] font-extrabold tracking-tighter text-content-primary leading-[1.05] mb-8 sa-reveal sa-delay-100 text-balance">
                    Bridging the gap between the world's most important industry and business.
                </h1>
                <p class="text-[18px] sm:text-[20px] md:text-[22px] text-content-secondary leading-relaxed font-medium mb-12 sa-reveal sa-delay-200 max-w-3xl text-balance">
                    SemiAnalysis is an independent research and analysis firm specializing in the Semiconductor and AI ecosystems. We provide institutional-grade intelligence spanning the entire supply chain—from essential fabrication economics to the infrastructure powering the next generation of AI models.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. Research Focus Areas -->
    <section class="py-12 sm:py-16 border-b border-border-subtle">
        <div class="container">
            <div class="mb-10 sm:mb-12 sa-reveal">
                <h2 class="text-sm font-bold uppercase tracking-[0.15em] text-content-tertiary mb-3">Core Coverage</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-content-primary">Research Focus Areas</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <?php
                $focus_areas = [
                    ['title' => 'AI Compute Infrastructure', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>', 'desc' => 'Deep technical breakdown of server-level system architecture, high-density datacenters, and accelerator economics.'],
                    ['title' => 'Semiconductor Supply Chain', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/><path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/><path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/><path d="M7 20v2"/><path d="M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="8" y="8" width="8" height="8" rx="1"/></svg>', 'desc' => 'Analysis of capital equipment, materials, and the intricate global dependencies driving the hardware ecosystem.'],
                    ['title' => 'Foundry Economics', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.48 12H2"/></svg>', 'desc' => 'Process node tracking, wafer yields, pricing models, and cost structures across advanced and trailing nodes.'],
                    ['title' => 'Networking & Optics', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.586 5.414-5.172 5.172"/><path d="m18.586 13.414-5.172 5.172"/><path d="M6 12h12"/><circle cx="12" cy="20" r="2"/><circle cx="12" cy="4" r="2"/><circle cx="20" cy="12" r="2"/><circle cx="4" cy="12" r="2"/></svg>', 'desc' => 'Intra-rack and inter-cluster networking fabrics, InfiniBand vs Ethernet, and the transition to silicon photonics.'],
                    ['title' => 'Model Performance & TCO', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 17L12 22l10-5"/><path d="M2 12l10 5 10-5"/><path d="M12 2L2 7l10 5 10-5-10-5Z"/></svg>', 'desc' => 'Evaluating AI model frameworks, inference/training infrastructure efficiency, and true Total Cost of Ownership.'],
                    ['title' => 'Chip Design & VLSI', 'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M11 9h4a2 2 0 0 0 2-2V3"/><circle cx="9" cy="9" r="2"/><path d="M7 21v-4a2 2 0 0 1 2-2h4"/><circle cx="15" cy="15" r="2"/></svg>', 'desc' => 'Architectural deep dives into the latest silicon, EDA trends, and custom silicon development by hyperscalers.'],
                ];

                foreach($focus_areas as $index => $area) {
                    $delay = ($index % 3) * 100;
                    echo '<div class="p-8 rounded-2xl border border-border-subtle bg-surface sa-reveal" style="animation-delay: ' . $delay . 'ms">';
                    echo '<div class="w-12 h-12 rounded-xl bg-root border border-border-subtle flex items-center justify-center text-accent-secondary mb-6 shadow-sm">';
                    echo $area['icon'];
                    echo '</div>';
                    echo '<h4 class="text-[17px] font-extrabold tracking-tight text-content-primary mb-3">' . esc_html($area['title']) . '</h4>';
                    echo '<p class="text-[14px] leading-relaxed text-content-secondary font-medium">' . esc_html($area['desc']) . '</p>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </section>

    <!-- 3. Team / Analyst Presentation -->
    <section class="py-12 sm:py-16 border-b border-border-subtle bg-surface/30">
        <div class="container">
            <div class="mb-10 sm:mb-12 sa-reveal">
                <h2 class="text-sm font-bold uppercase tracking-[0.15em] text-content-tertiary mb-3">Our Analysts</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-content-primary">The Research Team</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <?php
                $analysts = [
                    ['name' => 'Dylan Patel', 'role' => 'Founder', 'focus' => 'AI Infrastructure & Semiconductors', 'img' => 'abstract_avatar_1.png'],
                    ['name' => 'Myron Xie', 'role' => 'Senior Analyst', 'focus' => 'Networking & Optics', 'img' => 'abstract_avatar_2.png'],
                    ['name' => 'Daniel Nenni', 'role' => 'Research Associate', 'focus' => 'Data Centers, Networking, AI Models', 'img' => 'abstract_avatar_3.png'],
                ];

                foreach($analysts as $index => $analyst) {
                    $delay = $index * 100;
                    $imgUrl = get_template_directory_uri() . '/assets/placeholders/' . $analyst['img'];
                    
                    echo '<div class="group sa-reveal" style="animation-delay: ' . $delay . 'ms">';
                    echo '  <div class="relative aspect-[3/4] mb-6 overflow-hidden rounded-xl border border-border-subtle bg-root">';
                    echo '    <img src="' . esc_url($imgUrl) . '" alt="' . esc_attr($analyst['name']) . '" class="absolute inset-0 w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500 ease-out object-center" />';
                    echo '    <div class="absolute inset-0 bg-gradient-to-t from-root via-root/20 to-transparent opacity-80"></div>';
                    echo '  </div>';
                    echo '  <div>';
                    echo '    <h4 class="text-[20px] font-extrabold tracking-tight text-content-primary mb-1">' . esc_html($analyst['name']) . '</h4>';
                    echo '    <p class="text-[12px] font-bold uppercase tracking-widest text-accent-secondary mb-2">' . esc_html($analyst['role']) . '</p>';
                    echo '    <div class="flex items-center gap-2 text-[13px] text-content-tertiary font-medium">';
                    echo '      <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>';
                    echo '      <span>Focus: ' . esc_html($analyst['focus']) . '</span>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </section>

    <!-- 4. Methodology / Research Philosophy -->
    <section class="py-12 sm:py-20 border-b border-border-subtle">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">
                
                <div class="lg:col-span-5 sa-reveal">
                    <h2 class="text-sm font-bold uppercase tracking-[0.15em] text-accent-secondary mb-4">Methodology</h2>
                    <h3 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tighter text-content-primary leading-[1.1] mb-6">
                        Institutional-Grade Intelligence
                    </h3>
                    <p class="text-[16px] text-content-secondary leading-relaxed font-medium mb-8">
                        We believe that understanding the semiconductor and AI ecosystem requires a product-first perspective, not just viewing firms in isolation.
                    </p>
                </div>

                <div class="lg:col-span-7 space-y-12 sa-reveal sa-delay-200">
                    
                    <div>
                        <h4 class="text-[18px] font-extrabold tracking-tight text-content-primary mb-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface border border-border-strong flex items-center justify-center text-content-primary shadow-sm">1</div>
                            The Flywheel Approach
                        </h4>
                        <p class="text-[15px] leading-relaxed text-content-secondary font-medium">
                            Semiconductors and AI form the world's most intricate supply chain. Because no single entity knows every step, specialists in one part of the ecosystem require perspective on the others. We provide the upstream and downstream context necessary for mutually beneficial intelligence.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-[18px] font-extrabold tracking-tight text-content-primary mb-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface border border-border-strong flex items-center justify-center text-content-primary shadow-sm">2</div>
                            Product-First Perspective
                        </h4>
                        <p class="text-[15px] leading-relaxed text-content-secondary font-medium">
                            Our analysis stems from deep technical evaluations of the technology and products themselves. By modeling the physics, yields, and architectures, we derive accurate economic and market implications that top-down financial analysis frequently misses.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-[18px] font-extrabold tracking-tight text-content-primary mb-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface border border-border-strong flex items-center justify-center text-content-primary shadow-sm">3</div>
                            Ground-Truth Engagement
                        </h4>
                        <p class="text-[15px] leading-relaxed text-content-secondary font-medium">
                            We attend over 40+ industry conferences annually and regularly engage directly with engineers, executives, and specialists at every layer of the abstraction stack to ensure our models are anchored in ground-truth data.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- 5. CTA / Contact Section -->
    <section class="py-12 sm:py-16 bg-root relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0 opacity-[0.03] z-0" style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 32px 32px;"></div>
        
        <div class="container relative z-10 max-w-4xl text-center sa-reveal">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tighter text-content-primary mb-6">
                Engage with SemiAnalysis
            </h2>
            <p class="text-[18px] sm:text-[20px] text-content-secondary leading-relaxed font-medium mb-10 max-w-2xl mx-auto text-balance">
                We provide strategic consulting, custom modeling, and tailored analysis services for organizations navigating the semiconductor and AI industries.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="mailto:sales@semianalysis.com" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-content-primary text-root text-[14px] font-extrabold uppercase tracking-widest rounded-lg hover:bg-content-secondary transition-colors">
                    Enterprise Inquiries
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
                <a href="/research" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-surface text-content-primary border border-border-strong text-[14px] font-extrabold uppercase tracking-widest rounded-lg hover:bg-surface-hover transition-colors">
                    View Research
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
