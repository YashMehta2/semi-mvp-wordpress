<?php
/**
 * Template Name: Products Preview Schema Explorer
 */
get_header();
?>

<main class="min-h-screen bg-root pb-24 font-sans text-content-primary">
    <!-- Page Header -->
    <section class="relative border-b border-border-subtle bg-root pt-6 pb-8 overflow-hidden">
        <!-- Dot grid -->
        <div class="pointer-events-none absolute inset-0 opacity-[0.03] z-10"
             style="background-image: radial-gradient(circle, #9ca3af 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="pointer-events-none absolute top-0 right-0 h-96 w-96 rounded-full bg-accent-secondary/5 blur-[120px] z-10"></div>

        <!-- Absolute Background Image fading from right -->
        <div class="absolute inset-0 z-0 hidden lg:block">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/silicon_macro_editorial.png" alt="" class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-70 grayscale contrast-125 brightness-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10 max-w-[1440px]">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-[10px] text-content-tertiary font-bold tracking-[0.22em] uppercase mb-8">
                <a href="/" class="hover:text-accent-secondary transition-colors duration-150">Home</a>
                <span class="opacity-40">/</span>
                <a href="/products" class="hover:text-accent-secondary transition-colors duration-150">Products</a>
                <span class="opacity-40">/</span>
                <span class="text-content-secondary">Preview</span>
            </nav>

            <div class="max-w-[48rem] space-y-3">
                <div class="inline-flex items-center gap-2 rounded border border-accent-secondary/20 bg-accent-secondary/10 px-2.5 py-1 text-[10px] font-bold uppercase tracking-widest text-accent-secondary">
                    Experimental Route
                </div>
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tighter text-content-primary leading-[1.1] mb-2">
                    Model Schema Explorer
                </h1>
                <p class="text-sm text-content-secondary leading-relaxed font-medium">
                    Understand the structure, breadth, and variables analyzed in our institutional spreadsheets without exposing proprietary datasets or inventing records.
                </p>
            </div>
        </div>
    </section>

    <!-- Schema Browser Grid -->
    <section class="pt-6">
        <div class="container max-w-[1440px]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                
                <!-- Left Sidebar: Model Selector & Inquiry -->
                <aside class="lg:col-span-4 space-y-4">
                    <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-content-tertiary px-3">
                        Select Data Product
                    </p>
                    <div class="flex flex-col gap-1 border border-border-strong rounded-xl bg-surface p-2 shadow-lg" id="model-selector-menu">
                        <!-- Buttons injected dynamically by JS -->
                    </div>

                    <!-- Gated inquiry box -->
                    <div class="rounded-xl border border-border-strong bg-surface p-5 space-y-4 shadow-lg">
                        <div class="flex items-center gap-2 text-accent-primary font-bold text-xs uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            <span>Licensed Access</span>
                        </div>
                        <p class="text-[11px] text-content-secondary leading-relaxed font-medium">
                            Formulas and variables are fully unlocked in Excel/JSON deliveries. Request a representative sample workbook using our inquiry flow.
                        </p>
                        
                        <!-- Inquiry Form -->
                        <div class="border-t border-border-subtle pt-4">
                            <form id="explorer-inquiry-form" class="space-y-3">
                                <div class="grid grid-cols-1 gap-3">
                                    <input type="email" id="explorer-email" placeholder="Work Email" required
                                           class="w-full h-10 px-3 rounded-lg bg-root border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors">
                                    <input type="text" id="explorer-company" placeholder="Company" required
                                           class="w-full h-10 px-3 rounded-lg bg-root border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors">
                                </div>
                                <textarea id="explorer-requirements" placeholder="Describe your research focus or data requirements..." rows="3" required
                                          class="w-full p-3 rounded-lg bg-root border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors resize-none"></textarea>
                                <button type="submit" id="explorer-submit-btn"
                                        class="w-full inline-flex items-center justify-center h-10 rounded-lg bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover active:scale-95 transition-all duration-200 cursor-pointer">
                                    Request Sample Workbook
                                </button>
                                <div id="explorer-success-msg" class="hidden text-center text-xs font-bold text-emerald-500 pt-2 leading-relaxed">
                                    Inquiry received. Our analyst team will contact you shortly.
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>

                <!-- Right Content: Detail View -->
                <div class="lg:col-span-8 space-y-6">
                    
                    <!-- Selected Model Header -->
                    <div class="border border-border-strong rounded-xl bg-surface p-6 shadow-md flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="text-[10px] font-mono text-content-tertiary uppercase tracking-widest block mb-1" id="model-meta-header">
                                <!-- Meta metadata -->
                            </span>
                            <h2 class="text-xl font-extrabold text-content-primary tracking-tight" id="model-title-header">
                                <!-- Model Title -->
                            </h2>
                        </div>
                        <div class="flex items-center gap-1.5 text-[9px] font-mono font-bold text-emerald-500 bg-emerald-500/10 px-2.5 py-1 rounded border border-emerald-500/20 w-fit shrink-0 select-none">
                            ACTIVE SCHEMA
                        </div>
                    </div>

                    <!-- Explorer Tab Navigation -->
                    <div class="flex border-b border-border-subtle gap-2">
                        <button id="tab-btn-overview" class="flex items-center gap-1.5 px-4 py-2 border-b-2 text-xs font-bold transition-all border-accent-secondary text-accent-secondary">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                            <span>1. Overview</span>
                        </button>
                        <button id="tab-btn-structure" class="flex items-center gap-1.5 px-4 py-2 border-b-2 text-xs font-bold transition-all border-transparent text-content-secondary hover:text-content-primary">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            <span>2. Illustrative Model Organization</span>
                        </button>
                        <button id="tab-btn-schema" class="flex items-center gap-1.5 px-4 py-2 border-b-2 text-xs font-bold transition-all border-transparent text-content-secondary hover:text-content-primary">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/></svg>
                            <span>3. Schema Explorer</span>
                        </button>
                    </div>

                    <!-- Detail Panel Content Box -->
                    <div class="border border-border-strong rounded-xl bg-surface p-5 sm:p-6 min-h-[250px] relative shadow-lg" id="detail-panel-box">
                        <!-- Rendered Dynamically by JS -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const PREVIEW_PRODUCTS = [
      {
        id: "ai-cloud-tco-model",
        title: "AI Cloud TCO Model",
        category: "Cloud Computing",
        coverage: "Cloud TCO & Economics",
        description: "The SemiAnalysis AI Cloud Total Cost of Ownership Model examines the ownership economics of AI Clouds that purchase accelerators and sell either bare metal or cloud GPU compute.",
        scope: "Rental price databases, server CapEx structures, colocation/power coefficients, parallelism schemes, and full three-statement financial projections.",
        organization: [
          { name: "Instructions & Assumptions Overview", description: "Guide detailing calculation methodologies, user inputs, and standard coefficients." },
          { name: "GPU Rental Price Database", description: "Historical and projected rental prices across major hyperscale and neocloud instances." },
          { name: "Server CapEx Details", description: "BOM breakdown including base board, accelerator SKU pricing, CPU, memory, and vendor margin inputs." },
          { name: "Operating Cost Multipliers", description: "Colocation space contracts, power consumption multipliers, and PUE calculations." },
          { name: "Parallelism Scheme Impacts", description: "Multipliers modeling the throughput impact of Tensor, Pipeline, and Expert Parallelism." },
          { name: "IRR & Cash Flow Scenarios", description: "Internal Rate of Return, NPV, and capital structure returns analysis." },
          { name: "Three-Statement Model", description: "Calculated balance sheet, income statement, and cash flow statement." }
        ],
        schema: [
          { field: "GPU Server CapEx", type: "Financial", category: "Acquisition", desc: "Upfront procurement price of the populated server chassis.", classification: "Input" },
          { field: "Power Cost ($/kWh)", type: "Financial", category: "Operations", desc: "Electricity tariff coefficient applied to server node draw.", classification: "Input" },
          { field: "Inference Cost per M Tokens", type: "Financial", category: "Output Economics", desc: "Calculated cost to serve one million tokens of LLM inference.", classification: "Output" },
          { field: "Training Cost per FLOP", type: "Financial", category: "Output Economics", desc: "Calculated hardware amortization cost per FLOP of compute.", classification: "Output" },
          { field: "Depreciation Period (Months)", type: "Parameter", category: "Accounting", desc: "Useful life configuration for hardware depreciation schedule.", classification: "Input" },
          { field: "Levered IRR", type: "Percentage", category: "Returns", desc: "Internal Rate of Return on equity capital projections.", classification: "Output" }
        ]
      },
      {
        id: "ai-networking-model",
        title: "AI Networking Model",
        category: "AI Infrastructure",
        coverage: "Optical & Switching",
        description: "The SemiAnalysis AI Networking Model decodes the increasingly critical networking layer of AI and cloud infrastructure, mapping backend, frontend, and scale-out configurations.",
        scope: "Hyperscaler topologies, transceiver attachment ratios, switch vendor configurations, optical device pricing modules, and network CapEx forecasting.",
        organization: [
          { name: "Introduction & Topology Mapping", description: "Guide mapping cluster networking architecture patterns." },
          { name: "Hyperscaler Cluster Configs", description: "Detailed configurations for scale-up and scale-out backends across Microsoft, Google, Meta, Amazon, Oracle, and xAI." },
          { name: "Device Attachment Ratios", description: "Switches, optical modules, fibers, and active cables required per accelerator interface." },
          { name: "Optics & Transceiver Pricing", description: "Pricing indexes and power requirements for optical transceivers and active/passive cables." },
          { name: "Switch Vendor Wallet Share", description: "Purchase allocations across Arista, NVIDIA, Broadcom, Celestica, Cisco, and others." },
          { name: "Market Volume Forecasts", description: "Unit shipments and spend by transceiver speed (400G, 800G, 1.6T)." }
        ],
        schema: [
          { field: "Cluster Node Count", type: "Dimension", category: "Configuration", desc: "Number of accelerators deployed in a single coherent cluster domain.", classification: "Input" },
          { field: "Switch SKU", type: "Dimension", category: "Hardware", desc: "Identifies switch chip capacity (e.g. 51.2T Tomahawk 5).", classification: "Input" },
          { field: "Attachment Ratio", type: "Ratio", category: "Topology", desc: "Number of optical interfaces or cable links needed per accelerator SKU.", classification: "Input" },
          { field: "Optics Spend per Cluster", type: "Financial", category: "Capital Expenditure", desc: "Total calculated cost for optical transceivers inside the networking backend.", classification: "Output" },
          { field: "Switch Wallet Share", type: "Percentage", category: "Vendor Dynamics", desc: "Market share distribution across switch equipment providers.", classification: "Output" }
        ]
      },
      {
        id: "datacenter-industry-model",
        title: "Datacenter Industry Model",
        category: "Data Centers",
        coverage: "5,000+ Datacenters",
        description: "The SemiAnalysis AI Datacenter Model is used to understand current and forecast datacenter critical IT power capacity for both colocation and hyperscale datacenters.",
        scope: "Facility directories, regional IT power supply and demand forecasts, self-build vs. leased MW capacity, and infrastructure CapEx breakdowns (power, cooling, and facility equipment).",
        organization: [
          { name: "DB Instructions & Methods", description: "Methodology description covering satellite vision, permits, utility records, and grid tracking." },
          { name: "Facility Directory", description: "Database mapping tracked locations, utility connections, and operational statuses." },
          { name: "Regional Power Estimates", description: "Critical IT power capacity forecasts by geography and power grids through 2030." },
          { name: "Hyperscaler Leased Capacity", description: "Active and planned megawatts leased vs. self-built for major hyperscalers and neoclouds." },
          { name: "Infrastructure CapEx", description: "Cost modeling for facility construction, generators, UPS, cooling, and transformers." }
        ],
        schema: [
          { field: "Facility Name", type: "Dimension", category: "Directory", desc: "Unique identifier for the tracked datacenter facility.", classification: "Input" },
          { field: "Critical IT Power (MW)", type: "Metric", category: "Capacity", desc: "Maximum continuous electrical power allocated to server racks.", classification: "Input" },
          { field: "Power Usage Effectiveness (PUE)", type: "Ratio", category: "Efficiency", desc: "Ratio of total facility energy usage to IT equipment energy usage.", classification: "Input" },
          { field: "Utility Power Demand", type: "Metric", category: "Capacity", desc: "Total electrical power request submitted to the utility provider.", classification: "Output" },
          { field: "Cooling Architecture", type: "Dimension", category: "Specification", desc: "Designation of cooling methodology (e.g. Chillers, PUE overlays, direct-to-chip).", classification: "Input" }
        ]
      },
      {
        id: "wafer-fab-model",
        title: "Wafer Fab Equipment Model",
        category: "Semiconductors",
        coverage: "2021 - 2027",
        description: "Our wafer fab model forecasts semiconductor equipment sales via a bottoms-up approach, where wafer capacity and process node requirements drive equipment sales.",
        scope: "Lithography tool database, logic process layer counts, equipment sales forecasts by segment (lithography, deposition, etch), and fab CapEx spending plans.",
        organization: [
          { name: "Model Introduction & Flow", description: "Onboarding and logic flow connecting node capacity to equipment tools." },
          { name: "Lithography Scanner Specs", description: "Scanner databases (throughput, uptime, ASPs) for DUV, EUV, and High-NA EUV." },
          { name: "Logic Process Spec Sheets", description: "Layer-by-layer process flow details for advanced logic nodes from finFET to GAA and 1.4nm-class." },
          { name: "WFE Sales Forecasts", description: "Annual sales forecasts by segments (lithography, deposition, etch, track, metrology) and vendors." },
          { name: "Equipment CapEx Projects", description: "Annual fab equipment capital expenditure projections by node and chipmaker." }
        ],
        schema: [
          { field: "Process Node", type: "Dimension", category: "Technology", desc: "Process node naming designation (e.g., N3, N2, 1.4nm equivalent).", classification: "Input" },
          { field: "EUV Tool Count", type: "Metric", category: "Capacity", desc: "Number of Extreme Ultraviolet scanners required to support capacity goals.", classification: "Output" },
          { field: "Tool Throughput (Wafers/Hour)", type: "Metric", category: "Performance", desc: "Hourly exposure rate capacity of lithography tool models.", classification: "Input" },
          { field: "WFE Spend by Segment", type: "Financial", category: "Capital Expenditure", desc: "Estimated market spend on WFE segments.", classification: "Output" },
          { field: "Layer Count", type: "Metric", category: "Process Flow", desc: "Number of masking steps required per wafer pass by technology.", classification: "Input" }
        ]
      },
      {
        id: "chipbook",
        title: "ChipBook™",
        category: "Value Chain Tracker",
        coverage: "Monthly Tracker",
        description: "ChipBook™ is a monthly tracker designed to compile and transform semiconductor supply chain metrics, trade flows, and value chain markers into actionable intelligence.",
        scope: "DRAM inventory monitoring, wafer fabrication equipment imports, photomask writer movements, value chain indicators, and monthly analyst deliverables.",
        organization: [
          { name: "Tracker Instructions & Methods", description: "Overview of tracking metrics, data collection, and value chain coefficients." },
          { name: "WFE Import Logs", description: "Monthly tracking of equipment imports (etch, dep, lithography) across key manufacturing regions." },
          { name: "DRAM Inventories", description: "Monthly memory supply chain inventory and production tracking." },
          { name: "Photomask Movements", description: "Tracking photomask writer tool deliveries and scheduling indices." },
          { name: "Supply Chain Signals", description: "Raw time-series database covering 700+ HS codes." }
        ],
        schema: [
          { field: "HS Code", type: "Dimension", category: "Trade Flow", desc: "Harmonized System tariff code matching WFE components.", classification: "Input" },
          { field: "Monthly Import Value", type: "Financial", category: "Trade Flow", desc: "Aggregated monthly dollar value of shipments per country route.", classification: "Output" },
          { field: "DRAM Inventory (Days)", type: "Metric", category: "Inventory", desc: "Estimated average days of DRAM supply held by producers.", classification: "Output" },
          { field: "Photomask Writer Shipments", type: "Metric", category: "Equipment Tracker", desc: "Tool shipment counts recorded by quarter.", classification: "Output" }
        ]
      }
    ];

    let currentProductId = "ai-cloud-tco-model";
    let currentTab = "overview";

    const sidebar = document.getElementById('model-selector-menu');
    const metaHeader = document.getElementById('model-meta-header');
    const titleHeader = document.getElementById('model-title-header');
    const detailBox = document.getElementById('detail-panel-box');

    const tabBtnOverview = document.getElementById('tab-btn-overview');
    const tabBtnStructure = document.getElementById('tab-btn-structure');
    const tabBtnSchema = document.getElementById('tab-btn-schema');

    // Render selector buttons
    function renderSidebar() {
        sidebar.innerHTML = '';
        PREVIEW_PRODUCTS.forEach(p => {
            const btn = document.createElement('button');
            const isActive = p.id === currentProductId;
            btn.className = `w-full text-left px-3 py-2.5 rounded-lg text-xs font-bold transition-all duration-150 select-none flex items-center justify-between ${
                isActive
                    ? "bg-accent-secondary/10 text-accent-secondary border-l-[3px] border-l-accent-secondary pl-2"
                    : "text-content-secondary hover:text-content-primary hover:bg-white/5"
            }`;
            btn.innerHTML = `
                <span>${p.title}</span>
                ${isActive ? '<span class="w-1.5 h-1.5 rounded-full bg-accent-secondary animate-pulse"></span>' : ''}
            `;
            btn.addEventListener('click', () => {
                currentProductId = p.id;
                currentTab = "overview";
                renderAll();
            });
            sidebar.appendChild(btn);
        });
    }

    // Set Active Tab Styles
    function updateTabHighlight() {
        const tabs = [
            { el: tabBtnOverview, id: 'overview' },
            { el: tabBtnStructure, id: 'structure' },
            { el: tabBtnSchema, id: 'schema' }
        ];
        tabs.forEach(t => {
            if (t.id === currentTab) {
                t.el.classList.remove('border-transparent', 'text-content-secondary');
                t.el.classList.add('border-accent-secondary', 'text-accent-secondary');
            } else {
                t.el.classList.remove('border-accent-secondary', 'text-accent-secondary');
                t.el.classList.add('border-transparent', 'text-content-secondary');
            }
        });
    }

    // Render Details
    function renderDetails() {
        const product = PREVIEW_PRODUCTS.find(p => p.id === currentProductId);
        if (!product) return;

        metaHeader.textContent = `${product.category} · Coverage: ${product.coverage}`;
        titleHeader.textContent = product.title;

        detailBox.innerHTML = '';

        if (currentTab === "overview") {
            detailBox.innerHTML = `
                <div class="space-y-6 animate-in fade-in duration-200 text-left">
                    <div class="space-y-2">
                        <p class="text-[10px] font-mono font-bold uppercase tracking-widest text-content-tertiary">
                            Approved Public Description
                        </p>
                        <p class="text-[15px] text-content-primary leading-relaxed font-medium">
                            ${product.description}
                        </p>
                    </div>

                    <div class="h-px bg-border-subtle"></div>

                    <div class="space-y-2">
                        <p class="text-[10px] font-mono font-bold uppercase tracking-widest text-content-tertiary">
                            Existing Approved Scope
                        </p>
                        <p class="text-sm text-content-secondary leading-relaxed font-medium">
                            ${product.scope}
                        </p>
                    </div>
                </div>
            `;
        } else if (currentTab === "structure") {
            let itemsHtml = '';
            product.organization.forEach(sheet => {
                itemsHtml += `
                    <div class="flex items-start gap-3.5 text-left">
                        <svg class="w-4 h-4 text-accent-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                        <div class="space-y-0.5">
                            <span class="font-mono text-xs font-bold text-content-primary block">
                                ${sheet.name}
                            </span>
                            <span class="text-[11px] text-content-secondary leading-normal block font-medium">
                                ${sheet.description}
                            </span>
                        </div>
                    </div>
                `;
            });

            detailBox.innerHTML = `
                <div class="space-y-5 animate-in fade-in duration-200 text-left">
                    <div class="mb-4">
                        <p class="text-[10px] font-mono font-bold uppercase tracking-widest text-content-tertiary mb-1">
                            Illustrative Model Organization
                        </p>
                        <p class="text-xs text-content-secondary font-medium leading-relaxed">
                            Demonstrating spreadsheet layout structures and calculation boundaries. No proprietary records are shown below.
                        </p>
                    </div>

                    <div class="border border-border-strong rounded-lg overflow-hidden bg-root/40">
                        <div class="bg-surface border-b border-border-strong px-4 py-2 text-[10px] font-mono text-content-tertiary flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-accent-secondary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            <span>Example Workbook tab hierarchy</span>
                        </div>
                        
                        <div class="p-4 space-y-3.5">
                            ${itemsHtml}
                        </div>
                    </div>
                </div>
            `;
        } else if (currentTab === "schema") {
            let rowsHtml = '';
            product.schema.forEach(item => {
                const labelClass = item.classification === "Input" 
                    ? "bg-accent-secondary/10 border border-accent-secondary/20 text-accent-secondary" 
                    : "bg-emerald-500/10 border border-emerald-500/20 text-emerald-400";
                rowsHtml += `
                    <tr class="hover:bg-white/[0.015] transition-colors text-content-primary">
                        <td class="py-3.5 px-4 font-bold text-accent-primary border-r border-border-subtle">${item.field}</td>
                        <td class="py-3.5 px-4 border-r border-border-subtle text-content-secondary">${item.type}</td>
                        <td class="py-3.5 px-4 border-r border-border-subtle text-content-secondary">${item.category}</td>
                        <td class="py-3.5 px-4 border-r border-border-subtle text-content-secondary leading-relaxed font-sans text-xs">${item.desc}</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex px-2 py-0.5 rounded text-[9px] font-bold uppercase ${labelClass}">
                                ${item.classification}
                            </span>
                        </td>
                    </tr>
                `;
            });

            detailBox.innerHTML = `
                <div class="space-y-5 animate-in fade-in duration-200 text-left">
                    <div class="mb-4">
                        <p class="text-[10px] font-mono font-bold uppercase tracking-widest text-content-tertiary mb-1">
                            Data Dictionary &amp; Schema Mapping
                        </p>
                        <p class="text-xs text-content-secondary font-medium leading-relaxed">
                            Explaining workbook variables, calculation flows, and data classification schemas.
                        </p>
                    </div>

                    <div class="border border-border-strong rounded-lg overflow-hidden bg-root/40">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse text-left text-xs font-medium">
                                <thead>
                                    <tr class="border-b border-border-strong bg-surface text-[10px] font-mono font-bold text-content-tertiary uppercase tracking-widest">
                                        <th class="py-2.5 px-4 border-r border-border-subtle">Field Name</th>
                                        <th class="py-2.5 px-4 border-r border-border-subtle">Data Type</th>
                                        <th class="py-2.5 px-4 border-r border-border-subtle">Category</th>
                                        <th class="py-2.5 px-4 border-r border-border-subtle">Description</th>
                                        <th class="py-2.5 px-4">Classification</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-border-subtle font-mono text-[11px]">
                                    ${rowsHtml}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            `;
        }
    }

    function renderAll() {
        renderSidebar();
        updateTabHighlight();
        renderDetails();
    }

    // Set tab listeners
    tabBtnOverview.addEventListener('click', () => { currentTab = "overview"; renderAll(); });
    tabBtnStructure.addEventListener('click', () => { currentTab = "structure"; renderAll(); });
    tabBtnSchema.addEventListener('click', () => { currentTab = "schema"; renderAll(); });

    renderAll();

    // Inquiry submission handler
    const form = document.getElementById('explorer-inquiry-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = document.getElementById('explorer-submit-btn');
            const msg = document.getElementById('explorer-success-msg');
            
            document.getElementById('explorer-email').disabled = true;
            document.getElementById('explorer-company').disabled = true;
            document.getElementById('explorer-requirements').disabled = true;
            
            btn.disabled = true;
            btn.textContent = "Submitting...";
            btn.classList.add('opacity-50', 'pointer-events-none');
            
            setTimeout(() => {
                btn.classList.add('hidden');
                msg.classList.remove('hidden');
            }, 800);
        });
    }
});
</script>

<?php
get_footer();
?>
