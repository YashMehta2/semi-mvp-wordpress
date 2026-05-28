<?php
/**
 * Template Name: Events Page
 */
get_header();
?>

<main class="min-h-screen bg-root pb-12">
    
    <!-- 1. Hero Section - Restrained Institutional Edge-Fade Background -->
    <section class="relative border-b border-border-subtle bg-root pt-12 pb-12 lg:pt-16 lg:pb-16 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#a1a1aa 1px, transparent 1px), linear-gradient(90deg, #a1a1aa 1px, transparent 1px); background-size: 32px 32px;"></div>
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent-secondary/5 rounded-full blur-[140px] opacity-70"></div>
        </div>

        <!-- Cinematic Image Fade (Right side) -->
        <div class="absolute inset-0 z-0 hidden lg:block pointer-events-none">
            <img 
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/editorial_server_rack.png" 
                alt="Server Rack Event Theme" 
                class="absolute inset-y-0 right-0 w-[55%] h-full object-cover opacity-80 contrast-125 grayscale"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/70 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10 sa-reveal">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface border border-border-subtle text-accent-secondary text-[12px] font-bold uppercase tracking-widest mb-4">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-secondary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-accent-secondary"></span>
                    </span>
                    Industry Gatherings
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-[56px] font-extrabold tracking-tighter text-content-primary leading-[1.05] mb-4 text-balance">
                    Where the semiconductor and AI supply chain connects.
                </h1>
                <p class="text-[17px] sm:text-[19px] text-content-secondary leading-relaxed font-medium text-balance max-w-2xl">
                    SemiAnalysis hosts highly curated, technical events focused on the realities of AI infrastructure, fabrication economics, and semiconductor scale. Not a startup pitch fest—just high-signal institutional intelligence.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. Upcoming Events Grid -->
    <section class="py-10 sm:py-12 border-b border-border-subtle bg-surface/30">
        <div class="container">
            <div class="mb-8 sa-reveal">
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-content-primary mb-2">Upcoming Events</h2>
                <p class="text-[15px] text-content-secondary font-medium">Register for our upcoming institutional gatherings.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Event Card 1 -->
                <div class="group flex flex-col sm:flex-row bg-root border border-border-subtle rounded-2xl overflow-hidden sa-card-hover sa-reveal">
                    <div class="relative w-full sm:w-[220px] h-48 sm:h-auto shrink-0 border-r border-border-subtle bg-surface">
                        <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent z-10"></div>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/silicon_macro_editorial.png" alt="Silicon" class="w-full h-full object-cover grayscale contrast-125 opacity-80 group-hover:scale-105 transition-transform duration-700" />
                        <div class="absolute top-4 left-4 z-20 bg-accent-secondary text-root px-3 py-1 rounded text-[11px] font-bold uppercase tracking-widest">
                            Upcoming
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 flex flex-col justify-center flex-1">
                        <h3 class="text-[20px] font-extrabold text-content-primary mb-2.5 leading-tight group-hover:text-accent-secondary transition-colors">
                            AI Infrastructure Event 2026
                        </h3>
                        <div class="flex flex-wrap gap-y-2 gap-x-6 text-[13px] font-bold text-content-tertiary uppercase tracking-wider mb-3">
                            <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Oct 12-14, 2026</div>
                            <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> San Francisco, CA</div>
                        </div>
                        <p class="text-[14px] text-content-secondary leading-relaxed font-medium mb-4 line-clamp-3">
                            A deep dive into datacenter expansion, cooling limitations, and the next generation of GPU networking fabrics. Featuring keynotes from hyperscaler infrastructure leads.
                        </p>
                        <div class="mt-auto">
                            <a href="#register" class="inline-flex items-center gap-2 px-5 py-2.5 bg-content-primary text-root text-[13px] font-bold rounded-lg hover:bg-content-secondary transition-colors">
                                Request Invite <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="group flex flex-col sm:flex-row bg-root border border-border-subtle rounded-2xl overflow-hidden sa-card-hover sa-reveal sa-delay-100">
                    <div class="relative w-full sm:w-[220px] h-48 sm:h-auto shrink-0 border-r border-border-subtle bg-surface">
                        <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent z-10"></div>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/wafer.png" alt="Wafer" class="w-full h-full object-cover grayscale contrast-125 opacity-80 group-hover:scale-105 transition-transform duration-700" />
                        <div class="absolute top-4 left-4 z-20 bg-root border border-border-strong text-content-secondary px-3 py-1 rounded text-[11px] font-bold uppercase tracking-widest">
                            Waitlist
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 flex flex-col justify-center flex-1">
                        <h3 class="text-[20px] font-extrabold text-content-primary mb-2.5 leading-tight group-hover:text-accent-secondary transition-colors">
                            Semiconductor Supply Chain Forum
                        </h3>
                        <div class="flex flex-wrap gap-y-2 gap-x-6 text-[13px] font-bold text-content-tertiary uppercase tracking-wider mb-3">
                            <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Feb 05-06, 2027</div>
                            <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Taipei, Taiwan</div>
                        </div>
                        <p class="text-[14px] text-content-secondary leading-relaxed font-medium mb-4 line-clamp-3">
                            Navigating geopolitical shifts, advanced packaging bottlenecks, and foundry utilization rates. A closed-door session for institutional clients and supply chain executives.
                        </p>
                        <div class="mt-auto">
                            <a href="#waitlist" class="inline-flex items-center gap-2 px-5 py-2.5 bg-surface border border-border-strong text-content-primary text-[13px] font-bold rounded-lg hover:border-accent-secondary/50 transition-colors">
                                Join Waitlist
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Featured Speakers & Conference Themes (2 Column Layout) -->
    <section class="py-10 sm:py-12 border-b border-border-subtle">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                
                <!-- Left Column: Conference Tracks -->
                <div class="lg:col-span-5 sa-reveal">
                    <h3 class="text-xl sm:text-2xl font-extrabold tracking-tight text-content-primary mb-2">Core Research Tracks</h3>
                    <p class="text-[14px] text-content-secondary mb-5 font-medium">Our events mirror our research verticals.</p>
                    
                    <div class="space-y-3">
                        <?php
                        $tracks = [
                            ['title' => 'AI Infrastructure & Datacenters', 'icon' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>'],
                            ['title' => 'Foundry Economics & Yield', 'icon' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>'],
                            ['title' => 'Next-Gen Networking Fabrics', 'icon' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.586 5.414-5.172 5.172"/><path d="m18.586 13.414-5.172 5.172"/><path d="M6 12h12"/><circle cx="12" cy="20" r="2"/><circle cx="12" cy="4" r="2"/><circle cx="20" cy="12" r="2"/><circle cx="4" cy="12" r="2"/></svg>'],
                            ['title' => 'Capital Equipment Trends', 'icon' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>'],
                        ];

                        foreach($tracks as $track) {
                            echo '<div class="flex items-center gap-4 p-4 rounded-xl border border-border-subtle bg-surface hover:border-accent-secondary/30 transition-colors">';
                            echo '  <div class="w-10 h-10 rounded-lg bg-root border border-border-subtle flex items-center justify-center text-content-secondary shrink-0">';
                            echo '    ' . $track['icon'];
                            echo '  </div>';
                            echo '  <span class="text-[15px] font-bold text-content-primary">' . esc_html($track['title']) . '</span>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Right Column: Featured Speakers -->
                <div class="lg:col-span-7 sa-reveal sa-delay-100">
                    <h3 class="text-xl sm:text-2xl font-extrabold tracking-tight text-content-primary mb-2">Featured Voices</h3>
                    <p class="text-[14px] text-content-secondary mb-5 font-medium">Industry leaders defining the hardware roadmap.</p>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <?php
                        $speakers = [
                            ['name' => 'Dylan Patel', 'org' => 'SemiAnalysis', 'img' => 'abstract_avatar_1.png'],
                            ['name' => 'Myron Xie', 'org' => 'SemiAnalysis', 'img' => 'abstract_avatar_2.png'],
                            ['name' => 'Executive VP', 'org' => 'Hyperscaler Cloud', 'img' => 'abstract_avatar_3.png'],
                            ['name' => 'Lead Architect', 'org' => 'Fab Equipment', 'img' => 'abstract_avatar_1.png'],
                            ['name' => 'Director of Optics', 'org' => 'Networking Giant', 'img' => 'abstract_avatar_2.png'],
                            ['name' => 'Daniel Nenni', 'org' => 'SemiAnalysis', 'img' => 'abstract_avatar_3.png'],
                        ];

                        foreach($speakers as $speaker) {
                            $imgUrl = get_template_directory_uri() . '/assets/placeholders/' . $speaker['img'];
                            
                            echo '<div class="group flex flex-col p-3 rounded-xl border border-border-subtle bg-surface hover:border-accent-secondary/30 transition-colors text-center">';
                            echo '  <div class="w-16 h-16 mx-auto rounded-full overflow-hidden mb-2 border border-border-strong">';
                            echo '    <img src="' . esc_url($imgUrl) . '" alt="' . esc_attr($speaker['name']) . '" class="w-full h-full object-cover grayscale opacity-90 group-hover:scale-110 transition-transform duration-500" />';
                            echo '  </div>';
                            echo '  <h4 class="text-[14px] font-bold text-content-primary leading-tight mb-1">' . esc_html($speaker['name']) . '</h4>';
                            echo '  <p class="text-[11px] font-bold uppercase tracking-wider text-content-tertiary">' . esc_html($speaker['org']) . '</p>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Past Events Archive -->
    <section class="py-10 sm:py-12 border-b border-border-subtle bg-surface/30">
        <div class="container">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 sa-reveal">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-content-primary mb-1">Archive</h2>
                    <p class="text-[15px] text-content-secondary font-medium">Past events and institutional calls.</p>
                </div>
                <div class="inline-flex w-fit items-center gap-2 text-[12px] font-bold uppercase tracking-widest text-content-tertiary border border-border-strong px-3 py-1.5 rounded-full">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> 15+ Past Events
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $past_events = [
                    ['year' => '2025', 'title' => 'GPU Economics Virtual Event', 'type' => 'Virtual', 'img' => 'data_dashboard.png', 'link' => '#'],
                    ['year' => '2024', 'title' => 'SemiAnalysis Asia Forum', 'type' => 'Taipei, Taiwan', 'img' => 'supply-chain.png', 'link' => '#'],
                    ['year' => '2024', 'title' => 'Advanced Packaging Deep Dive', 'type' => 'Virtual', 'img' => 'blueprint.png', 'link' => '#'],
                ];

                $i = 0;
                foreach($past_events as $event) {
                    $imgUrl = get_template_directory_uri() . '/assets/placeholders/' . $event['img'];
                    $delay = ($i % 3) * 100;
                    
                    echo '<div class="group flex flex-col bg-root border border-border-subtle rounded-2xl overflow-hidden sa-reveal opacity-80 hover:opacity-100 transition-opacity" style="animation-delay: ' . $delay . 'ms">';
                    echo '  <div class="relative w-full h-40 shrink-0 border-b border-border-subtle bg-surface overflow-hidden">';
                    echo '    <div class="absolute inset-0 bg-surface/40 mix-blend-overlay z-10"></div>';
                    echo '    <img src="' . esc_url($imgUrl) . '" alt="' . esc_attr($event['title']) . '" class="w-full h-full object-cover grayscale opacity-50" />';
                    echo '    <div class="absolute top-4 left-4 z-20 bg-surface border border-border-strong text-content-tertiary px-3 py-1 rounded text-[10px] font-bold uppercase tracking-widest">';
                    echo '      ' . esc_html($event['year']);
                    echo '    </div>';
                    echo '  </div>';
                    echo '  <div class="p-5 flex flex-col flex-1">';
                    echo '    <h3 class="text-[17px] font-extrabold text-content-primary mb-2.5 leading-tight group-hover:text-accent-secondary transition-colors">';
                    echo '      ' . esc_html($event['title']);
                    echo '    </h3>';
                    echo '    <div class="flex items-center gap-1.5 text-[12px] font-bold text-content-tertiary uppercase tracking-wider mb-4">';
                    echo '      <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> ' . esc_html($event['type']);
                    echo '    </div>';
                    echo '    <div class="mt-auto pt-3 border-t border-border-subtle">';
                    echo '      <a href="' . esc_url($event['link']) . '" class="inline-flex items-center gap-2 text-content-secondary group-hover:text-content-primary text-[13px] font-bold transition-colors">';
                    echo '        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg> Watch Recordings';
                    echo '      </a>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                    
                    $i++;
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 5. Institutional CTA -->
    <section class="py-10 sm:py-14 bg-surface relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at center, var(--color-accent-secondary) 0%, transparent 70%);"></div>
        <div class="container relative z-10 text-center max-w-2xl sa-reveal">
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-content-primary mb-4">
                Participate in our Events
            </h2>
            <p class="text-[15px] text-content-secondary leading-relaxed font-medium mb-6">
                Interested in sponsoring an upcoming event or bringing your engineering team? We offer select institutional participation packages for organizations aligned with our research focus.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="mailto:events@semianalysis.com" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-content-primary text-root text-[13px] font-extrabold uppercase tracking-widest rounded-lg hover:scale-105 hover:bg-content-secondary transition-all shadow-xl shadow-root/50">
                    Sponsorship Inquiries
                </a>
                <a href="mailto:events@semianalysis.com" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-root border border-border-strong text-content-primary text-[13px] font-extrabold uppercase tracking-widest rounded-lg hover:border-accent-secondary/50 transition-colors">
                    Speaking Opportunities
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
