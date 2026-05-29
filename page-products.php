<?php
/**
 * Template Name: Products Page
 */
require_once get_stylesheet_directory() . '/data.php';
$all_models = get_semi_models();

$flagship_slugs = [
    'ai-compute-supply-model',
    'gpu-scaling-bottleneck-model',
    'semiconductor-capacity-tracker',
    'cloud-infrastructure-growth-model'
];
$flagship_products = [];
foreach ($flagship_slugs as $slug) {
    if (isset($all_models[$slug])) {
        $flagship_products[$slug] = $all_models[$slug];
    }
}

$use_cases = [
    'ai-compute-supply-model' => 'TSMC CoWoS capacity tracking & NVIDIA wafer allocation forecasting.',
    'gpu-scaling-bottleneck-model' => 'Datacenter power planning, optical transceiver forecasting, & interconnect bandwidth limits.',
    'semiconductor-capacity-tracker' => 'Foundry utilization modeling & ASML EUV lithography equipment deployment.',
    'cloud-infrastructure-growth-model' => 'Hyperscaler GPU cluster velocity, energy procurement timelines, & datacenter buildouts.',
];

get_header();
?>
<main class="min-h-screen bg-root pb-20">
    
    <!-- ── 1. Institutional Hero Section ── -->
    <section class="relative border-b border-border-subtle bg-root pt-16 pb-16 sm:pt-20 sm:pb-20 md:pt-24 md:pb-24 overflow-hidden">
        <!-- Dot-grid texture -->
        <div class="pointer-events-none absolute inset-0 opacity-[0.03] z-10" style="background-image: radial-gradient(circle, #9ca3af 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="pointer-events-none absolute top-0 right-0 h-96 w-96 rounded-full bg-accent-secondary/5 blur-[120px] z-10"></div>

        <!-- Absolute Background Image fading from right -->
        <div class="absolute inset-0 z-0 hidden lg:block">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/silicon_macro_editorial.png" alt="" class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-70" />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10 max-w-[1100px]">
            <div class="max-w-3xl space-y-6">
                <div class="inline-flex w-fit items-center gap-2 rounded-md border border-accent-secondary/20 bg-accent-secondary/10 px-3 py-1.5">
                    <span class="h-1.5 w-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
                    <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-widest text-accent-secondary">
                        Technical Data Products
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[60px] font-extrabold tracking-tighter text-content-primary leading-[1.05]">
                    AI Infrastructure Datasets &amp; <br />
                    <span class="text-accent-primary">Bottom-Up Semiconductor Models</span>
                </h1>
                <p class="text-[16px] sm:text-[17px] md:text-[18px] text-content-secondary leading-relaxed font-medium text-balance">
                    We track global fab node utilization, packaging yields, high-bandwidth memory allocations, and cloud capital expenditure timelines. Delivered in formula-intact Excel sheet structures and JSON API feeds for proprietary financial and operational models.
                </p>
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="#inquiry" class="inline-flex items-center gap-2.5 px-6 py-3 rounded-lg bg-accent-primary text-root text-[14px] font-bold hover:bg-accent-primary-hover active:scale-95 transition-all duration-200">
                        Inquire for Enterprise Licensing
                        <svg class="h-4 w-4 ml-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="#models-list" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-border-strong text-[14px] font-bold text-content-secondary hover:border-accent-secondary/50 hover:text-content-primary transition-all duration-200">
                        Browse Datasets
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 2. Subtle Role-Based Segmentation ── -->
    <section class="py-12 border-b border-border-subtle bg-root">
        <div class="container max-w-[1100px]">
            <div class="max-w-xl mb-8">
                <h3 class="text-[10px] font-bold uppercase tracking-[0.15em] text-accent-secondary mb-2">Workflow Alignment</h3>
                <h2 class="text-xl sm:text-2xl font-extrabold text-content-primary">Select Your Organization Focus</h2>
                <p class="text-xs sm:text-sm text-content-secondary mt-1">Identify which datasets match your specific research objectives and database schemas.</p>
            </div>
            
            <div class="space-y-6">
                <!-- Role buttons -->
                <div class="flex flex-wrap gap-2 border-b border-border-subtle pb-4">
                    <button
                      data-role="investors"
                      class="sa-role-btn text-xs font-bold px-4 py-2 rounded-lg border transition-all duration-150 cursor-pointer bg-accent-secondary/10 border-accent-secondary/30 text-accent-secondary font-extrabold"
                    >
                      Investment &amp; Buy-Side Analysts
                    </button>
                    <button
                      data-role="hyperscalers"
                      class="sa-role-btn text-xs font-bold px-4 py-2 rounded-lg border transition-all duration-150 cursor-pointer border-border-strong text-content-secondary hover:text-content-primary hover:border-border-strong"
                    >
                      Hyperscaler &amp; Infrastructure Planners
                    </button>
                    <button
                      data-role="oems"
                      class="sa-role-btn text-xs font-bold px-4 py-2 rounded-lg border transition-all duration-150 cursor-pointer border-border-strong text-content-secondary hover:text-content-primary hover:border-border-strong"
                    >
                      Semiconductor OEMs &amp; Suppliers
                    </button>
                </div>

                <!-- Role Content details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-surface/50 border border-border-subtle p-6 rounded-xl">
                  <div class="space-y-4">
                    <div>
                      <h4 class="text-[10px] uppercase tracking-widest text-content-tertiary font-bold mb-1.5">Core Research Focus</h4>
                      <p id="role-focus" class="text-sm text-content-primary leading-relaxed font-semibold">
                        Leading-edge semiconductor capacity, WFE spending, HBM supply bottlenecks, and hyperscaler CapEx dynamics.
                      </p>
                    </div>
                    <div>
                      <h4 class="text-[10px] uppercase tracking-widest text-content-tertiary font-bold mb-1.5">Enterprise Application</h4>
                      <p id="role-usecase" class="text-[13px] text-content-secondary leading-relaxed font-medium">
                        Building bottoms-up revenue models for semiconductor OEMs, chip designers, and foundry groups prior to official earnings cycles.
                      </p>
                    </div>
                  </div>

                  <div class="border-t md:border-t-0 md:border-l border-border-strong pt-5 md:pt-0 md:pl-6 flex flex-col justify-center">
                    <h4 class="text-[10px] uppercase tracking-widest text-content-tertiary font-bold mb-3">Recommended Datasets</h4>
                    <ul id="role-models" class="space-y-2.5">
                      <li class="flex items-center gap-2 text-xs font-semibold text-content-primary">
                        <svg class="w-3.5 h-3.5 text-accent-secondary flex-shrink-0" viewBox="0 0 16 16" fill="none">
                          <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>AI Compute Supply Model</span>
                      </li>
                      <li class="flex items-center gap-2 text-xs font-semibold text-content-primary">
                        <svg class="w-3.5 h-3.5 text-accent-secondary flex-shrink-0" viewBox="0 0 16 16" fill="none">
                          <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Semiconductor Capacity Tracker</span>
                      </li>
                      <li class="flex items-center gap-2 text-xs font-semibold text-content-primary">
                        <svg class="w-3.5 h-3.5 text-accent-secondary flex-shrink-0" viewBox="0 0 16 16" fill="none">
                          <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Memory Supply Model</span>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 3. Product / Model Grid with Enterprise Use-Cases ── -->
    <section id="models-list" class="py-16 border-b border-border-subtle bg-surface/30">
        <div class="container max-w-[1100px]">
          
          <div class="max-w-xl mb-12">
            <h3 class="text-[10px] font-bold uppercase tracking-[0.15em] text-accent-secondary mb-2">Core Platforms</h3>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-content-primary">Flagship Enterprise Models</h2>
            <p class="text-xs sm:text-sm text-content-secondary mt-1">Our main research databases containing bottoms-up metrics modeling the physical bottlenecks of computing.</p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($flagship_products as $slug => $product): ?>
              <div class="flex flex-col bg-root rounded-xl border border-border-strong p-6 sm:p-7 hover:border-border-strong transition-all h-full">
                <div class="flex items-center justify-between mb-4">
                  <span class="text-[10px] uppercase font-bold tracking-widest text-content-secondary px-2.5 py-1 bg-surface border border-border-subtle rounded">
                    <?php echo esc_html($product['category']); ?>
                  </span>
                  <div class="flex items-center gap-1.5 px-2 py-0.5 rounded bg-surface border border-border-strong">
                    <svg class="w-3.5 h-3.5 text-accent-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    <span class="text-[9px] font-bold uppercase tracking-widest text-content-primary">
                      <?php echo $product['memberOnly'] ? 'Institutional' : 'Pro'; ?>
                    </span>
                  </div>
                </div>

                <h3 class="text-lg font-bold text-content-primary mb-2 leading-snug">
                  <?php echo esc_html($product['title']); ?>
                </h3>
                <p class="text-xs text-content-secondary leading-relaxed mb-6 flex-grow">
                  <?php echo esc_html($product['description']); ?>
                </p>

                <!-- Enterprise Use Case Section -->
                <?php 
                $useCase = isset($use_cases[$slug]) ? $use_cases[$slug] : '';
                if (!empty($useCase)): ?>
                  <div class="mb-6 p-3.5 bg-surface/50 rounded-lg border border-border-subtle">
                    <p class="text-[9px] uppercase font-extrabold tracking-wider text-content-tertiary mb-1">Enterprise Application</p>
                    <p class="text-xs font-semibold text-content-secondary leading-normal"><?php echo esc_html($useCase); ?></p>
                  </div>
                <?php endif; ?>

                <div class="flex items-center justify-between pt-4 border-t border-border-subtle mt-auto text-xs font-bold">
                  <span class="text-content-tertiary uppercase tracking-widest">
                    Coverage: <span class="text-accent-secondary"><?php echo esc_html($product['dataPoints']); ?></span>
                  </span>
                  <a href="/models/<?php echo esc_attr($slug); ?>" class="text-content-primary hover:text-accent-primary transition-colors flex items-center gap-1">
                    <span>View Specifications</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
    </section>

    <!-- ── 4. Gated Data Previews (DataSandbox) ── -->
    <section class="py-16 border-b border-border-subtle bg-root">
        <div class="container max-w-[1100px]">
          <div class="max-w-xl mb-8">
            <h3 class="text-[10px] font-bold uppercase tracking-[0.15em] text-accent-secondary mb-2">Technical Preview</h3>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-content-primary">Spreadsheet Schema Previews</h2>
            <p class="text-xs sm:text-sm text-content-secondary mt-1">Review the grid format, formula structures, and sample columns contained in our raw Excel files.</p>
          </div>

          <!-- Sandbox Tabs & Compiler Status Badge -->
          <div class="flex flex-wrap gap-4 items-center justify-between border-b border-border-subtle pb-3">
            <div class="flex gap-2">
                <button
                  id="sandbox-tab-accelerator"
                  data-sandbox="accelerator"
                  class="sandbox-tab text-xs font-bold px-3 py-1.5 rounded transition-all cursor-pointer bg-surface border border-border-strong text-content-primary"
                >
                  AI Accelerator Model
                </button>
                <button
                  id="sandbox-tab-tco"
                  data-sandbox="tco"
                  class="sandbox-tab text-xs font-bold px-3 py-1.5 rounded transition-all cursor-pointer text-content-tertiary hover:text-content-secondary"
                >
                  AI Cloud TCO Model
                </button>
            </div>
            <div class="flex items-center gap-1.5 text-[10px] font-mono font-bold text-emerald-500 bg-emerald-500/10 px-2.5 py-1 rounded border border-emerald-500/20">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
              <span>EXCEL SHEETS COMPILED</span>
            </div>
          </div>

          <!-- Spreadsheet Frame -->
          <div class="sa-card overflow-hidden border border-border-strong bg-surface relative mt-6">
            <!-- Mock spreadsheet menu -->
            <div class="bg-surface-hover/50 border-b border-border-strong px-4 py-2 text-[10px] font-mono text-content-tertiary">
              File Name: <span id="sandbox-filename" class="text-content-secondary font-bold">SemiAnalysis_Accelerator_Allocations_2026.xlsx</span>
            </div>

            <!-- Data View -->
            <div class="overflow-x-auto p-4">
              <table class="w-full text-left font-mono text-[11px] border-collapse">
                <thead>
                  <tr id="sandbox-headers" class="border-b border-border-strong text-content-tertiary">
                    <th class="py-2 px-3 bg-root/50 border-r border-border-strong font-bold">Product / Package</th>
                    <th class="py-2 px-3 bg-root/50 border-r border-border-strong font-bold">Data Field</th>
                    <th class="py-2 px-3 bg-root/50 border-r border-border-strong font-bold">Q1 2026</th>
                    <th class="py-2 px-3 bg-root/50 border-r border-border-strong font-bold">Q2 2026 (F)</th>
                    <th class="py-2 px-3 bg-root/50 border-r border-border-strong font-bold">Q3 2026 (F)</th>
                    <th class="py-2 px-3 bg-root/50 border-r border-border-strong font-bold">Formula Link</th>
                  </tr>
                </thead>
                <tbody id="sandbox-rows">
                  <!-- Will be rendered dynamically via javascript -->
                </tbody>
              </table>
            </div>

            <!-- Dynamic Gated Blur Layer & Form Capture -->
            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-surface via-surface/95 to-transparent flex items-end justify-center pb-6">
              <div class="w-full max-w-md px-6">
                <div id="sandbox-gate-form">
                  <form id="sandbox-email-form" class="flex items-center gap-2 bg-root border border-border-strong p-1.5 rounded-lg shadow-2xl backdrop-blur-md">
                    <svg class="w-3.5 h-3.5 text-accent-primary ml-2 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    <input
                      type="email"
                      id="sandbox-email-input"
                      placeholder="Enter corporate email for schema and sample sheet"
                      required
                      class="bg-transparent border-none focus:outline-none text-xs font-semibold text-content-primary placeholder-content-tertiary flex-1 px-2 h-7"
                    />
                    <button
                      type="submit"
                      class="h-8 px-4 rounded-md bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover transition-colors flex items-center gap-1.5 whitespace-nowrap cursor-pointer"
                    >
                      <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                      <span>Request Sample</span>
                    </button>
                  </form>
                </div>
                <div id="sandbox-gate-success" class="hidden flex items-center justify-center gap-2 bg-root border border-emerald-500/30 p-3 rounded-lg shadow-2xl backdrop-blur-md text-emerald-500">
                  <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                  <span class="text-xs font-bold uppercase tracking-wider">
                    Success. Redacted dataset sheet and API schemas sent to <span id="sandbox-submitted-email"></span>.
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- ── 5. Embedded Institutional Inquiry Flow ── -->
    <section id="inquiry" class="py-16 bg-surface/20">
        <div class="container max-w-[1100px]">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
              <h3 class="text-[10px] font-bold uppercase tracking-[0.15em] text-accent-secondary">Licensing Request</h3>
              <h2 class="text-2xl sm:text-3xl font-extrabold text-content-primary leading-snug">Request Platform &amp; Model Licensing</h2>
              <p class="text-sm text-content-secondary leading-relaxed font-medium">
                Our licensing plans are structured for equity research desks, buy-side funds, corporate development, and product procurement teams. Submitting a request allows our analyst team to customize a proposal based on your team size and coverage requirements.
              </p>

              <div class="space-y-4 pt-2">
                <div class="flex items-start gap-3">
                  <div class="mt-1 flex-shrink-0 text-accent-primary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  </div>
                  <div>
                    <h4 class="text-xs font-bold text-content-primary uppercase tracking-wider">Restrained Compliance Rules</h4>
                    <p class="text-xs text-content-secondary leading-relaxed mt-0.5">We maintain strict adherence to primary research compliance standards and MNPI guidelines.</p>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <div class="mt-1 flex-shrink-0 text-accent-primary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/><line x1="15" y1="3" x2="15" y2="21"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="3" y1="15" x2="21" y2="15"/></svg>
                  </div>
                  <div>
                    <h4 class="text-xs font-bold text-content-primary uppercase tracking-wider">Multi-User Management</h4>
                    <p class="text-xs text-content-secondary leading-relaxed mt-0.5">Direct SAML/SSO access and organization-wide domain licensing configurations available.</p>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <div class="mt-1 flex-shrink-0 text-accent-primary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/></svg>
                  </div>
                  <div>
                    <h4 class="text-xs font-bold text-content-primary uppercase tracking-wider">Custom Data Pipelines</h4>
                    <p class="text-xs text-content-secondary leading-relaxed mt-0.5">Enterprise licenses include automated weekly updates via email attachment, SFTP, or direct API payload.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="lg:col-span-6">
              <div class="bg-surface border border-border-strong p-6 sm:p-8 rounded-2xl shadow-2xl">
                <div class="mb-6 border-b border-border-subtle pb-4">
                  <h3 class="text-sm font-bold uppercase tracking-wider text-content-primary">Inquiry Configuration</h3>
                  <p class="text-xs text-content-secondary leading-normal mt-1">Specify your dataset focus and research goals below.</p>
                </div>
                <form id="enterprise-inquiry-form" class="space-y-3 bg-root/60 backdrop-blur-md p-6 rounded-xl border border-border-subtle">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                      <input
                        type="email"
                        id="inquiry-email"
                        placeholder="Work Email"
                        required
                        class="w-full h-10 px-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors"
                      />
                    </div>
                    <div>
                      <input
                        type="text"
                        id="inquiry-company"
                        placeholder="Company"
                        required
                        class="w-full h-10 px-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors"
                      />
                    </div>
                  </div>
                  <div>
                    <textarea
                      id="inquiry-requirements"
                      placeholder="Describe your research focus or data requirements..."
                      rows="3"
                      required
                      class="w-full p-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors resize-none"
                    ></textarea>
                  </div>
                  <button
                    type="submit"
                    id="inquiry-submit-btn"
                    class="w-full inline-flex items-center justify-center h-10 rounded-lg bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover active:scale-95 transition-all duration-200 cursor-pointer"
                  >
                    Request Proposal
                  </button>
                  <div id="inquiry-success-msg" class="hidden text-center text-xs font-bold text-emerald-500 pt-2">
                    Proposal request received. Our analyst team will contact you shortly.
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
    </section>

</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // ─── Role Selector JS ───
    const ROLES_DATA = {
        investors: {
            focus: "Leading-edge semiconductor capacity, WFE spending, HBM supply bottlenecks, and hyperscaler CapEx dynamics.",
            useCase: "Building bottoms-up revenue models for semiconductor OEMs, chip designers, and foundry groups prior to official earnings cycles.",
            models: ["AI Compute Supply Model", "Semiconductor Capacity Tracker", "Memory Supply Model"]
        },
        hyperscalers: {
            focus: "GPU cluster buildout velocity, hardware scaling limits (thermal/network), power availability, and TCO optimization.",
            useCase: "Assessing competitive capacity constraints, rack density thresholds, and network interconnect roadmaps for Blackwell/Rubin clusters.",
            models: ["GPU Scaling & Bottleneck Model", "Cloud Infrastructure Growth Model", "Data Center Power Model"]
        },
        oems: {
            focus: "Wafer starts by fab node, advanced packaging yields (CoWoS-S/L), and sub-component supply demand balances.",
            useCase: "Forecasting equipment demand schedules (EUV/WFE), tool bookings, and raw wafer allocation schedules globally.",
            models: ["AI Compute Supply Model", "Semiconductor Capacity Tracker"]
        }
    };

    document.querySelectorAll('.sa-role-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.sa-role-btn').forEach(b => {
                b.classList.remove('bg-accent-secondary/10', 'border-accent-secondary/30', 'text-accent-secondary', 'font-extrabold');
                b.classList.add('border-border-strong', 'text-content-secondary');
            });
            this.classList.remove('border-border-strong', 'text-content-secondary');
            this.classList.add('bg-accent-secondary/10', 'border-accent-secondary/30', 'text-accent-secondary', 'font-extrabold');
            
            const roleId = this.getAttribute('data-role');
            const data = ROLES_DATA[roleId];
            if (data) {
                document.getElementById('role-focus').textContent = data.focus;
                document.getElementById('role-usecase').textContent = data.useCase;
                
                const listEl = document.getElementById('role-models');
                listEl.innerHTML = '';
                data.models.forEach(modelName => {
                    const li = document.createElement('li');
                    li.className = "flex items-center gap-2 text-xs font-semibold text-content-primary";
                    li.innerHTML = `
                        <svg class="w-3.5 h-3.5 text-accent-secondary flex-shrink-0" viewBox="0 0 16 16" fill="none">
                          <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>${modelName}</span>
                    `;
                    listEl.appendChild(li);
                });
            }
        });
    });

    // ─── Data Sandbox JS ───
    const SANDBOX_DATASETS = {
        accelerator: {
            filename: "SemiAnalysis_Accelerator_Allocations_2026.xlsx",
            headers: ["Product / Package", "Data Field", "Q1 2026", "Q2 2026 (F)", "Q3 2026 (F)", "Formula Link"],
            rows: [
                { label: "NVIDIA B200", metric: "CoWoS Allocation (Wafers)", q1: "12,500", q2: "18,200", q3: "22,000", formula: "=SUM(CoWoS_Nvidia)" },
                { label: "TSMC CoWoS-L", metric: "Packaging Yield Rate", q1: "92.5%", q2: "94.0%", q3: "95.2%", formula: "=AVERAGE(YieldCurve)" },
                { label: "HBM3e (8-High)", metric: "Total Bit Supply (Gb)", q1: "1.2B", q2: "1.8B", q3: "2.4B", formula: "=SKHynix[Supply]*0.8" }
            ],
            locked: [
                { label: "Blackwell-Ultra (B300)", metric: "Allocations & Packaging Node" },
                { label: "AMD MI350X", metric: "TSMC GAA 2nm Yield Rate" }
            ]
        },
        tco: {
            filename: "SemiAnalysis_Cloud_TCO_Economics.xlsx",
            headers: ["Compute Pool", "Economics Metric", "2025 (H2)", "2026 (H1)", "2026 (H2) (F)", "Cost Basis"],
            rows: [
                { label: "GB200 NVL72", metric: "Capex Per Rack ($M)", q1: "3.20", q2: "3.05", q3: "2.90", formula: "=SUM(BOM_GB200)" },
                { label: "Direct Liquid Cooling", metric: "Power Overhead Factor", q1: "1.12", q2: "1.10", q3: "1.08", formula: "=CoolingPUE" },
                { label: "H100 On-Demand", metric: "Rental Price ($/Hour)", q1: "2.10", q2: "1.85", q3: "1.60", formula: "=AvgMarketRate" }
            ],
            locked: [
                { label: "Blackwell-Ultra Cluster", metric: "Power Infrastructure Overhead" },
                { label: "TPU v6 (Trillium)", metric: "Direct Operational Costs / FLOP" }
            ]
        }
    };

    let currentSandboxTab = 'accelerator';

    function renderSandbox() {
        const data = SANDBOX_DATASETS[currentSandboxTab];
        if (!data) return;
        
        document.getElementById('sandbox-filename').textContent = data.filename;
        
        const headersEl = document.getElementById('sandbox-headers');
        headersEl.innerHTML = '';
        data.headers.forEach(header => {
            const th = document.createElement('th');
            th.className = "py-2 px-3 bg-root/50 border-r border-border-strong font-bold text-content-tertiary";
            th.textContent = header;
            headersEl.appendChild(th);
        });
        
        const tbody = document.getElementById('sandbox-rows');
        tbody.innerHTML = '';
        
        data.rows.forEach(row => {
            const tr = document.createElement('tr');
            tr.className = "border-b border-border-subtle text-content-primary hover:bg-surface-hover/30 transition-colors";
            tr.innerHTML = `
                <td class="py-2 px-3 border-r border-border-subtle font-bold">${row.label}</td>
                <td class="py-2 px-3 border-r border-border-subtle text-content-secondary">${row.metric}</td>
                <td class="py-2 px-3 border-r border-border-subtle">${row.q1}</td>
                <td class="py-2 px-3 border-r border-border-subtle">${row.q2}</td>
                <td class="py-2 px-3 border-r border-border-subtle">${row.q3}</td>
                <td class="py-2 px-3 text-emerald-500 font-semibold">${row.formula}</td>
            `;
            tbody.appendChild(tr);
        });
        
        data.locked.forEach(row => {
            const tr = document.createElement('tr');
            tr.className = "border-b border-border-subtle text-content-tertiary select-none opacity-40 blur-[1px]";
            tr.innerHTML = `
                <td class="py-2 px-3 border-r border-border-subtle font-bold">${row.label}</td>
                <td class="py-2 px-3 border-r border-border-subtle">${row.metric}</td>
                <td class="py-2 px-3 border-r border-border-subtle">Locked</td>
                <td class="py-2 px-3 border-r border-border-subtle">Locked</td>
                <td class="py-2 px-3 border-r border-border-subtle">Locked</td>
                <td class="py-2 px-3 text-content-tertiary">=LockedFormula</td>
            `;
            tbody.appendChild(tr);
        });
    }

    renderSandbox();

    document.querySelectorAll('.sandbox-tab').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.sandbox-tab').forEach(b => {
                b.className = "sandbox-tab text-xs font-bold px-3 py-1.5 rounded transition-all cursor-pointer text-content-tertiary hover:text-content-secondary";
            });
            this.className = "sandbox-tab text-xs font-bold px-3 py-1.5 rounded transition-all cursor-pointer bg-surface border border-border-strong text-content-primary";
            
            currentSandboxTab = this.getAttribute('data-sandbox');
            
            document.getElementById('sandbox-gate-form').classList.remove('hidden');
            document.getElementById('sandbox-gate-success').classList.add('hidden');
            
            renderSandbox();
        });
    });

    document.getElementById('sandbox-email-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('sandbox-email-input').value;
        if (email) {
            document.getElementById('sandbox-submitted-email').textContent = email;
            document.getElementById('sandbox-gate-form').classList.add('hidden');
            document.getElementById('sandbox-gate-success').classList.remove('hidden');
        }
    });

    // ─── Inquiry Form JS ───
    document.getElementById('enterprise-inquiry-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('inquiry-submit-btn');
        const msg = document.getElementById('inquiry-success-msg');
        
        document.getElementById('inquiry-email').disabled = true;
        document.getElementById('inquiry-company').disabled = true;
        document.getElementById('inquiry-requirements').disabled = true;
        
        btn.disabled = true;
        btn.textContent = "Submitting...";
        btn.classList.add('opacity-50', 'pointer-events-none');
        
        setTimeout(() => {
            btn.classList.add('hidden');
            msg.classList.remove('hidden');
        }, 800);
    });
});
</script>
<?php
get_footer();
