<?php
/**
 * Template Name: Single Model
 */
require_once get_stylesheet_directory() . '/data.php';
$slug = get_query_var('model_slug');
$all_models = get_semi_models();
$all_articles = get_semi_articles();
if (isset($all_models[$slug])) {
    $model = $all_models[$slug];
} else {
    $model = $all_models['ai-compute-supply-model'];
}
get_header();
?>
<main class="min-h-screen bg-root pb-20">
    <section class="relative border-b border-border-subtle pt-12 pb-14 sm:pt-16 sm:pb-20">
        <div class="container relative z-10">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6 sm:mb-8">
                <nav class="flex items-center gap-2 text-[11px] sm:text-[12px] text-content-tertiary font-bold tracking-widest uppercase">
                    <a href="/" class="hover:text-accent-secondary transition-colors">Home</a>
                    <span>/</span>
                    <a href="/models" class="hover:text-accent-secondary transition-colors">Models</a>
                    <span>/</span>
                    <span class="text-content-secondary truncate"><?php echo esc_html($model['title']); ?></span>
                </nav>
                <?php if (!empty($model['enterpriseSignals'])): ?>
                <div class="flex items-center gap-2 flex-wrap">
                    <?php foreach ($model['enterpriseSignals'] as $signal): ?>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary px-2 py-1 rounded bg-surface border border-border-subtle">
                        <?php echo esc_html($signal); ?>
                    </span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="flex items-center gap-3 mb-4 flex-wrap">
                <span class="text-xs font-bold uppercase tracking-widest text-accent-secondary"><?php echo esc_html($model['category']); ?></span>
                <?php if ($model['memberOnly']): ?>
                <span class="inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-[0.15em] px-2.5 py-0.5 rounded-md bg-accent-primary/10 border border-accent-primary/20 text-accent-primary">
    <svg class="h-2.5 w-2.5" viewBox="0 0 12 12" fill="none"><rect x="2" y="5" width="8" height="6" rx="1" stroke="currentColor" stroke-width="1.2" /><path d="M4 5V3.5a2 2 0 114 0V5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" /></svg>
    Member
</span>
                <?php else: ?>
                <span class="text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-md bg-accent-tertiary/10 border border-accent-tertiary/20 text-accent-tertiary">
                    Free Preview
                </span>
                <?php endif; ?>
            </div>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[52px] font-extrabold tracking-tighter text-content-primary leading-[1.1] mb-6">
                <?php echo esc_html($model['title']); ?>
            </h1>
            <p class="text-[16px] sm:text-[18px] text-content-secondary leading-relaxed font-medium mb-10 max-w-3xl text-balance">
                <?php echo esc_html($model['description']); ?>
            </p>
            <div class="flex items-center gap-10 sm:gap-14 pt-6 border-t border-border-subtle">
                <div>
                    <p class="text-[10px] uppercase tracking-[0.15em] text-content-tertiary mb-1.5 font-bold">Last Updated</p>
                    <p class="text-[14px] font-extrabold tracking-tight text-content-primary"><?php echo isset($model['lastUpdated']) ? esc_html($model['lastUpdated']) : 'May 2026'; ?></p>
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-[0.15em] text-content-tertiary mb-1.5 font-bold">Coverage</p>
                    <p class="text-[14px] font-extrabold tracking-tight text-accent-secondary"><?php echo esc_html($model['dataPoints']); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 sm:py-16">
        <div class="container">
            <?php if (!empty($model['metrics'])): ?>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-px bg-border-subtle border border-border-subtle rounded-xl overflow-hidden mt-6 mb-10">
                <?php foreach ($model['metrics'] as $metric): ?>
                <div class="bg-surface p-5 sm:p-6 flex flex-col justify-center">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary mb-1.5">
                        <?php echo esc_html($metric['label']); ?>
                    </p>
                    <div class="flex items-baseline gap-2">
                        <p class="text-2xl sm:text-3xl font-extrabold tracking-tighter text-content-primary">
                            <?php echo esc_html($metric['value']); ?>
                        </p>
                        <?php if (isset($metric['trend'])): ?>
                        <span class="text-[11px] font-bold text-accent-secondary uppercase tracking-widest">
                            <?php echo esc_html($metric['trend']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start mt-8">
                <div class="lg:col-span-7">
                    <div class="prose prose-invert prose-p:text-content-secondary prose-p:leading-relaxed prose-p:text-[15px] sm:prose-p:text-[16px] max-w-none">
                        <?php if (!empty($model['content'])): ?>
                            <?php foreach ($model['content'] as $para): ?>
                                <p class="mb-6"><?php echo esc_html($para); ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if (isset($model['visualType'])): ?>
                        <?php if ($model['visualType'] === 'architecture'): ?>
                            <div class="my-10 p-6 rounded-xl border border-border-subtle bg-surface/50 sa-card select-none">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary mb-6">Reference Architecture</p>
                                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 relative">
                                    <div class="flex flex-col items-center gap-3 w-full sm:w-1/3 z-10">
                                        <div class="w-16 h-16 rounded-2xl bg-surface border border-border-strong flex items-center justify-center text-content-secondary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5V19A9 3 0 0 0 21 19V5"/><path d="M3 12A9 3 0 0 0 21 12"/></svg>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-[12px] font-bold text-content-primary">Storage Tier</p>
                                            <p class="text-[10px] text-content-tertiary">NVMe / Object</p>
                                        </div>
                                    </div>
                                    <div class="hidden sm:block absolute top-8 left-[16.66%] right-[16.66%] h-px bg-border-strong z-0">
                                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 px-2 bg-surface/50 text-[10px] font-mono text-content-tertiary">400GbE</div>
                                    </div>
                                    <div class="flex flex-col items-center gap-3 w-full sm:w-1/3 z-10">
                                        <div class="w-16 h-16 rounded-2xl bg-accent-secondary/10 border border-accent-secondary/30 flex items-center justify-center text-accent-secondary shadow-[0_0_20px_rgba(247,176,65,0.1)]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-[12px] font-bold text-content-primary">Compute Fabric</p>
                                            <p class="text-[10px] text-content-tertiary">NVL72 Domain</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center gap-3 w-full sm:w-1/3 z-10">
                                        <div class="w-16 h-16 rounded-2xl bg-surface border border-border-strong flex items-center justify-center text-content-secondary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="4.5" r="2.5"/><path d="m10.2 6.3-3.9 3.9"/><circle cx="4.5" cy="12" r="2.5"/><path d="M7 12h10"/><circle cx="19.5" cy="12" r="2.5"/><path d="m13.8 17.7 3.9-3.9"/><circle cx="12" cy="19.5" r="2.5"/></svg>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-[12px] font-bold text-content-primary">Inference Edge</p>
                                            <p class="text-[10px] text-content-tertiary">Routing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($model['visualType'] === 'supply-chain'): ?>
                            <div class="my-10 p-6 rounded-xl border border-border-subtle bg-surface/50 sa-card select-none">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary mb-6">Supply Chain Flow</p>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                                    <div class="p-4 rounded-lg bg-surface border border-border-strong flex flex-col gap-2 relative group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-content-secondary mb-1"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                                        <p class="text-[12px] font-bold text-content-primary">Wafer Starts</p>
                                        <p class="text-[11px] text-content-secondary">N3 / N4P Nodes</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden sm:block absolute -right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-content-tertiary"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </div>
                                    <div class="p-4 rounded-lg bg-accent-primary/10 border border-accent-primary/30 flex flex-col gap-2 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-accent-primary mb-1"><rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>
                                        <p class="text-[12px] font-bold text-content-primary">CoWoS Packaging</p>
                                        <p class="text-[11px] text-content-secondary">Capacity Bottleneck</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden sm:block absolute -right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-content-tertiary"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </div>
                                    <div class="p-4 rounded-lg bg-surface border border-border-strong flex flex-col gap-2 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-content-secondary mb-1"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
                                        <p class="text-[12px] font-bold text-content-primary">Server OEM</p>
                                        <p class="text-[11px] text-content-secondary">Final Assembly</p>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="my-10 p-6 rounded-xl border border-border-subtle bg-surface/50 sa-card select-none flex items-center justify-center h-32">
                                <div class="flex items-center gap-3 text-content-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.48 12H2"/></svg>
                                    <span class="text-sm font-bold tracking-widest uppercase">Ecosystem Map Preview</span>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (!empty($model['takeaways'])): ?>
                    <div class="my-10">
                        <h3 class="text-[13px] font-bold uppercase tracking-widest text-content-primary mb-6">Executive Summary</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <?php foreach ($model['takeaways'] as $item): ?>
                            <div class="p-5 rounded-xl border border-border-subtle bg-surface sa-card sa-card-hover flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-accent-secondary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                                    <h4 class="text-[14px] font-bold text-content-primary leading-snug"><?php echo esc_html($item['title']); ?></h4>
                                </div>
                                <p class="text-[13px] text-content-secondary leading-relaxed pl-6"><?php echo esc_html($item['description']); ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($model['features'])): ?>
                    <div class="my-10">
                        <h3 class="text-[13px] font-bold uppercase tracking-widest text-content-primary mb-6">Core Datasets</h3>
                        <ul class="space-y-4">
                            <?php foreach ($model['features'] as $feature): ?>
                            <li class="flex items-start gap-3 text-[14px] sm:text-[15px] text-content-secondary leading-relaxed font-medium">
                                <svg class="h-5 w-5 flex-shrink-0 text-accent-secondary mt-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                <?php echo esc_html($feature); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($model['methodology'])): ?>
                      <div class="mt-12 pt-8 border-t border-border-subtle">
                          <h3 class="text-[13px] font-bold uppercase tracking-widest text-content-primary mb-6">Methodology & Inputs</h3>
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                              <div class="divide-y divide-border-subtle border-y border-border-subtle bg-root" id="methodology-accordion">
                                  <?php foreach ($model['methodology'] as $i => $item): ?>
                                  <div class="py-4 sa-accordion-item">
                                      <button onclick="toggleAccordion(this)" class="flex items-center justify-between w-full text-left group">
                                          <span class="text-[14px] font-bold text-content-primary group-hover:text-accent-secondary transition-colors"><?php echo esc_html($item['category']); ?></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sa-accordion-icon w-4 h-4 text-content-tertiary transition-transform duration-200 <?php echo $i === 0 ? 'rotate-180 text-content-primary' : ''; ?>"><path d="m6 9 6 6 6-6"/></svg>
                                      </button>
                                      <div class="sa-accordion-content overflow-hidden transition-all duration-300 <?php echo $i === 0 ? 'max-h-96 opacity-100 mt-3' : 'max-h-0 opacity-0'; ?>">
                                          <p class="text-[13.5px] text-content-secondary leading-relaxed font-medium pb-2 pr-8"><?php echo esc_html($item['details']); ?></p>
                                      </div>
                                  </div>
                                  <?php endforeach; ?>
                              </div>
                              <div class="relative h-48 md:h-full min-h-[250px] rounded-xl border border-border-strong overflow-hidden bg-surface sa-card sa-reveal">
                                  <div class="absolute inset-0 bg-surface/60 z-10"></div>
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/supply-chain.png" alt="Methodology Structure" class="absolute inset-0 w-full h-full object-cover opacity-80 mix-blend-screen contrast-125" />
                                  <div class="absolute bottom-4 left-4 z-20">
                                      <span class="text-[10px] font-bold uppercase tracking-widest text-content-primary px-2 py-1 rounded bg-surface border border-border-subtle shadow-lg">
                                          Data Architecture
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <script>
                      function toggleAccordion(btn) {
                          const allItems = document.querySelectorAll('#methodology-accordion .sa-accordion-item');
                          const content = btn.nextElementSibling;
                          const icon = btn.querySelector('.sa-accordion-icon');
                          const isOpen = content.classList.contains('max-h-96');

                          allItems.forEach(item => {
                              const c = item.querySelector('.sa-accordion-content');
                              const i = item.querySelector('.sa-accordion-icon');
                              c.classList.remove('max-h-96', 'opacity-100', 'mt-3');
                              c.classList.add('max-h-0', 'opacity-0');
                              i.classList.remove('rotate-180', 'text-content-primary');
                          });

                          if (!isOpen) {
                              content.classList.remove('max-h-0', 'opacity-0');
                              content.classList.add('max-h-96', 'opacity-100', 'mt-3');
                              icon.classList.add('rotate-180', 'text-content-primary');
                          }
                      }
                      </script>
                    <?php endif; ?>
                </div>
                <div class="lg:col-span-5 lg:sticky lg:top-24 space-y-6">
                    <div class="p-6 sm:p-8 shadow-2xl rounded-xl border border-border-strong bg-surface">
                        <div class="mb-6 border-b border-border-subtle pb-6">
                            <h3 class="text-[20px] font-extrabold tracking-tight text-content-primary mb-2">Institutional Access</h3>
                            <p class="text-[13px] text-content-secondary leading-relaxed font-medium">
                                This model is available exclusively to our enterprise clients. Fill out the form below and our analyst team will be in touch to discuss your specific data requirements.
                            </p>
                        </div>
                        <form class="space-y-4" onsubmit="event.preventDefault(); alert('Form submitted');">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label for="firstName" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">First Name</label>
                                    <input type="text" id="firstName" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                                </div>
                                <div class="space-y-1.5">
                                    <label for="lastName" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Last Name</label>
                                    <input type="text" id="lastName" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Model</label>
                                <div class="relative">
                                    <select class="w-full h-10 px-3 pr-8 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary appearance-none focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors">
                                        <option <?php selected($slug, 'ai-compute-supply-model'); ?>>AI Compute Supply Model</option>
                                        <option <?php selected($slug, 'gpu-scaling-bottleneck-model'); ?>>GPU Scaling &amp; Bottleneck Model</option>
                                        <option <?php selected($slug, 'semiconductor-capacity-tracker'); ?>>Semiconductor Capacity Tracker</option>
                                        <option <?php selected($slug, 'cloud-infrastructure-growth-model'); ?>>Cloud Infrastructure Growth Model</option>
                                        <option <?php selected($slug, 'memory-supply-model'); ?>>Memory Supply Model</option>
                                        <option <?php selected($slug, 'data-center-power-model'); ?>>Data Center Power Model</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label for="email" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Work Email</label>
                                <input type="email" id="email" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                            </div>
                            <div class="space-y-1.5">
                                <label for="company" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Company</label>
                                <input type="text" id="company" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                            </div>
                            <div class="space-y-1.5">
                                <label for="message" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">How will you use this model?</label>
                                <textarea id="message" rows="3" class="w-full p-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full h-12 mt-3 rounded-lg bg-accent-secondary text-root text-sm font-bold hover:bg-accent-secondary/90 transition-colors duration-200 active:scale-95">
                                Submit Inquiry
                            </button>
                            <div class="text-[10px] text-center font-bold text-content-tertiary mt-3">
                                By submitting, you agree to our <button type="button" onclick="alert('Coming soon!')" class="underline hover:text-content-secondary">Privacy Policy</button>.
                            </div>
                        </form>
                    </div>
                    <div class="p-6 rounded-xl border border-border-subtle bg-surface/50">
                        <h4 class="text-[11px] font-bold uppercase tracking-[0.15em] text-content-primary mb-5">Enterprise Applications</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-secondary mt-1.5 flex-shrink-0"></span>
                                <p class="text-[13px] font-medium text-content-secondary leading-relaxed">
                                    <strong class="text-content-primary">Hyperscalers</strong> use this to benchmark capEx buildouts and cluster velocities against competitors.
                                </p>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-secondary mt-1.5 flex-shrink-0"></span>
                                <p class="text-[13px] font-medium text-content-secondary leading-relaxed">
                                    <strong class="text-content-primary">Hedge Funds</strong> utilize this dataset to forecast GPU supply chain constraints and component bottlenecks.
                                </p>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-secondary mt-1.5 flex-shrink-0"></span>
                                <p class="text-[13px] font-medium text-content-secondary leading-relaxed">
                                    <strong class="text-content-primary">Semiconductor OEMs</strong> integrate this into capacity planning and long-term wafer allocation strategies.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if (!empty($model['related'])): ?>
            <div class="mt-16 pt-12 border-t border-border-subtle">
                <h3 class="text-[14px] font-bold tracking-[0.15em] uppercase text-content-tertiary mb-6">Used Alongside</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php if (!empty($model['related']['models'])): ?>
                    <div class="space-y-4">
                        <h4 class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary">Other Models</h4>
                        <?php foreach ($model['related']['models'] as $r_slug): ?>
                            <?php 
                            $r_model = null;
                            foreach ($all_models as $k => $m) {
                                if ($m['id'] === $r_slug || $k === $r_slug) {
                                    $r_model = $m;
                                    break;
                                }
                            }
                            if ($r_model): ?>
                            <a href="/models/<?php echo esc_attr(array_search($r_model, $all_models)); ?>" class="group block p-4 rounded-xl border border-border-subtle bg-surface sa-card-hover transition-all">
                                <div class="flex items-center gap-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-accent-secondary"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5V19A9 3 0 0 0 21 19V5"/><path d="M3 12A9 3 0 0 0 21 12"/></svg>
                                    <span class="text-[14px] font-bold text-content-primary group-hover:text-accent-secondary transition-colors"><?php echo esc_html($r_model['title']); ?></span>
                                </div>
                                <p class="text-[12px] text-content-secondary line-clamp-2"><?php echo esc_html($r_model['description']); ?></p>
                            </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($model['related']['articles'])): ?>
                    <div class="space-y-4">
                        <h4 class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary">Research Reports</h4>
                        <?php foreach ($model['related']['articles'] as $a_slug): ?>
                            <?php 
                            $r_art = null;
                            foreach ($all_articles as $k => $a) {
                                if ($a['id'] === $a_slug || $k === $a_slug) {
                                    $r_art = $a;
                                    break;
                                }
                            }
                            if ($r_art): ?>
                            <a href="https://semianalysis.com/archive" target="_blank" rel="noopener noreferrer" class="group block p-4 rounded-xl border border-border-subtle bg-surface sa-card-hover transition-all">
                                <div class="flex items-center gap-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-accent-primary"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                                    <span class="text-[14px] font-bold text-content-primary group-hover:text-accent-primary transition-colors"><?php echo esc_html($r_art['title']); ?></span>
                                </div>
                                <p class="text-[12px] text-content-secondary line-clamp-2"><?php echo esc_html($r_art['description']); ?></p>
                            </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="mt-8 flex justify-center">
                    <a href="/research" class="inline-flex items-center gap-2 px-6 h-12 rounded-lg bg-surface border border-border-strong text-sm font-bold text-content-secondary hover:text-content-primary hover:border-accent-secondary/50 transition-colors">
                        Browse All Research <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
