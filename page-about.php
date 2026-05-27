<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="min-h-screen bg-root pb-12">
    
    <!-- 1. Hero Section -->
    <section class="border-b border-border-subtle bg-root pt-12 pb-12 overflow-hidden">
        <div class="container">
            <h1 class="text-3xl sm:text-4xl md:text-[44px] font-extrabold tracking-tighter text-content-primary leading-[1.1] mb-6 text-balance capitalize">
                Bridging the gap between business and the world's most important industry.
            </h1>
            <p class="text-[16px] sm:text-[18px] text-content-secondary leading-[1.6] font-medium text-balance">
                SemiAnalysis is an independent research and analysis company specializing in the Semiconductor and AI industries. Our in-depth coverage spans the entire supply chain, from semiconductor fabrication essentials to cutting-edge AI Models, software, and infrastructure for them.
            </p>
        </div>
    </section>

    <!-- 2. What We Cover -->
    <section class="py-10 border-b border-border-subtle bg-surface/30">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
                <div class="md:col-span-4 sa-reveal">
                    <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-content-primary">What We Cover</h2>
                </div>
                <div class="md:col-span-8 sa-reveal sa-delay-100">
                    <ol class="list-decimal pl-5 space-y-3 text-[16px] text-content-secondary font-medium">
                        <li>Semiconductor Capital Equipment & Materials</li>
                        <li>Fabrication and Packaging</li>
                        <li>Foundries, Process Nodes, Wafer Yields, and Costs</li>
                        <li>Chip Design & VLSI</li>
                        <li>Networking & Optics</li>
                        <li>Server-Level System Architecture, Datacenters</li>
                        <li>Software and EDA</li>
                        <li>AI Model Frameworks, Training & Inference Infrastructure, Performance, and Cost</li>
                        <li>And much more</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. The Research Team -->
    <section class="py-10 border-b border-border-subtle">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
                <div class="md:col-span-4 sa-reveal">
                    <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-content-primary">The Research Team</h2>
                </div>
                <div class="md:col-span-8 sa-reveal sa-delay-100">
                    <div class="space-y-4 mb-8 text-[16px] text-content-secondary font-medium leading-[1.6]">
                        <p>
                            Our unique product-first approach, combined with our analysts’ extensive experience following and working in the Semiconductor and AI industry allows us to delve deeply into technical complexities. We pride ourselves on our highly aligned team, offering a unified view of the world’s most intricate supply chain.
                        </p>
                        <p>
                            Most importantly – we hold a deep-rooted passion for delving into the intricacies of all things Semiconductor and AI and sharing key insights we discover with our subscribers and clients.
                        </p>
                    </div>

                    <!-- Compressed Analyst Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <?php
                        $analysts = [
                            ['name' => 'Dylan Patel', 'role' => 'Founder', 'img' => 'abstract_avatar_1.png'],
                            ['name' => 'Myron Xie', 'role' => 'Senior Analyst', 'img' => 'abstract_avatar_2.png'],
                            ['name' => 'Daniel Nenni', 'role' => 'Research Associate', 'img' => 'abstract_avatar_3.png'],
                        ];

                        foreach($analysts as $analyst) {
                            $imgUrl = get_template_directory_uri() . '/assets/placeholders/' . $analyst['img'];
                            
                            echo '<div class="flex items-center gap-3 p-3 rounded-lg border border-border-subtle bg-surface">';
                            echo '  <img src="' . esc_url($imgUrl) . '" alt="' . esc_attr($analyst['name']) . '" class="w-10 h-10 rounded-full object-cover grayscale opacity-90" />';
                            echo '  <div>';
                            echo '    <h4 class="text-[14px] font-bold text-content-primary leading-tight">' . esc_html($analyst['name']) . '</h4>';
                            echo '    <p class="text-[11px] font-semibold uppercase tracking-wider text-accent-secondary mt-0.5">' . esc_html($analyst['role']) . '</p>';
                            echo '  </div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Unique Selling Points -->
    <section class="py-10 border-b border-border-subtle bg-surface/30">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
                <div class="md:col-span-4 sa-reveal">
                    <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-content-primary">Unique Selling Points</h2>
                </div>
                <div class="md:col-span-8 sa-reveal sa-delay-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <h5 class="text-[15px] font-bold text-content-primary mb-1">Product first</h5>
                            <p class="text-[14px] text-content-secondary leading-[1.6]">
                                We focus on technology, trends, and look at it from a tech/product first perspective as opposed to viewing firms in isolation.
                            </p>
                        </div>
                        <div>
                            <h5 class="text-[15px] font-bold text-content-primary mb-1">Conferences</h5>
                            <p class="text-[14px] text-content-secondary leading-[1.6]">
                                We attend 40+ industry conferences and engage with every layer of the abstraction stack regularly.
                            </p>
                        </div>
                        <div class="sm:col-span-2">
                            <h5 class="text-[15px] font-bold text-content-primary mb-1">Flywheel approach</h5>
                            <p class="text-[14px] text-content-secondary leading-[1.6]">
                                Semiconductors and AI are the most intricate supply chain and nobody knows every step — many specialists in one part of the supply chain would like to gain perspective on many other parts — leading to a mutually beneficial engagements. They need understand the context of what's going on upstream and downstream.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Services We Offer -->
    <section class="py-10 border-b border-border-subtle">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
                <div class="md:col-span-4 sa-reveal">
                    <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-content-primary">Services We Offer</h2>
                </div>
                <div class="md:col-span-8 sa-reveal sa-delay-100">
                    <div class="space-y-4 text-[16px] text-content-secondary font-medium leading-[1.6]">
                        <p>
                            Strategic and technical consulting and analysis services for organizations in semiconductor industry and institutional.
                        </p>
                        <p>
                            Tailored solutions to match our clients' needs with options such as retained advisory engagements, bespoke project work, offering industry and product models for sale and hourly consulting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
