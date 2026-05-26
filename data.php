<?php
function get_semi_models() {
    return [
        'ai-compute-supply-model' => [
            'id' => 'ai-compute-supply',
            'title' => 'AI Compute Supply Model',
            'description' => 'Tracks GPU wafer allocation, HBM supply, and CoWoS packaging capacity across TSMC and Samsung to forecast compute availability for AI training clusters through 2027.',
            'category' => 'AI Infrastructure',
            'lastUpdated' => 'May 2026',
            'dataPoints' => '40+ variables',
            'memberOnly' => true,
            'content' => [
                "The AI Compute Supply Model is our flagship framework for understanding the physical limits of artificial intelligence scale-out. It provides a bottoms-up analysis of the entire silicon supply chain, starting from raw wafer starts at TSMC and extending through CoWoS packaging constraints.",
                "By tracking allocations across major hyperscalers (AWS, Azure, Google, Meta) and specialized cloud providers, the model identifies where structural bottlenecks will emerge over the next 24 months.",
                "The dataset is updated monthly with proprietary channel checks from the Asian supply chain, providing the most accurate forward-looking view of GPU availability in the industry."
            ],
            'features' => [
                "TSMC N5/N4 and N3 wafer start projections by customer",
                "CoWoS-S and CoWoS-L packaging capacity and yield estimates",
                "HBM3 and HBM3e bit supply and pricing forecasts",
                "Hyperscaler GPU deployment schedules and cluster sizes"
            ],
            'metrics' => [
                [ 'label' => 'GPU Supply Constraint', 'value' => '-14%', 'trend' => 'Widening' ],
                [ 'label' => 'CoWoS-L Utilization', 'value' => '98.5%', 'trend' => 'Critical' ],
                [ 'label' => 'HBM3e Bit Growth', 'value' => '240%', 'trend' => 'YoY' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'Bottom-up capacity constraints from TSMC raw wafers to final NVIDIA/AMD server shipments.' ],
                [ 'title' => 'Who uses this', 'description' => 'Hyperscaler procurement teams, hedge funds, and silicon vendors mapping total addressable markets.' ],
                [ 'title' => 'Why it matters', 'description' => 'GPU supply defines the physical ceiling for foundation model training progress through 2026.' ],
                [ 'title' => 'Key insight', 'description' => 'Packaging (CoWoS) and memory (HBM) are tighter bottlenecks than core compute silicon.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Proprietary channel checks across Taiwan and South Korea supply chains, public earnings, and custom import/export tracking.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Monthly deep dives with weekly flash updates on material supply chain shifts.' ],
                [ 'category' => 'Assumptions', 'details' => 'Assumes historical TSMC yield improvement curves for N3 and aggressive HBM capacity conversion by SK Hynix.' ],
            ],
            'enterpriseSignals' => ["Updated Weekly", "Live Dataset", "Institutional Access"],
            'visualType' => "supply-chain",
            'related' => [
                'models' => ["semiconductor-capacity-tracker", "memory-supply-model"],
                'articles' => ["article-3", "article-2"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>'
        ],
        'gpu-scaling-bottleneck-model' => [
            'id' => 'gpu-scaling-bottleneck',
            'title' => 'GPU Scaling & Bottleneck Model',
            'description' => 'Quantifies the performance ceiling of current GPU architectures — NVLink bandwidth, HBM3e limits, and rack-level thermal constraints on Blackwell and future systems.',
            'category' => 'GPUs',
            'lastUpdated' => 'May 2026',
            'dataPoints' => '25+ variables',
            'memberOnly' => true,
            'content' => [
                "As foundation models scale exponentially, raw FLOPs are no longer the primary constraint. Our GPU Scaling & Bottleneck Model analyzes the architectural limitations of current and next-generation silicon, focusing heavily on interconnects and thermal envelopes.",
                "We quantify the exact impact of NVLink bandwidth limitations, memory wall constraints, and rack-level power densities on real-world Model Flops Utilization (MFU).",
                "This model is essential for silicon design teams, data center architects, and investors attempting to map the trajectory of cluster-scale inference and training economics."
            ],
            'features' => [
                "NVLink and InfiniBand/Ethernet bandwidth utilization metrics",
                "Rack-level thermal density projections (kW per rack)",
                "Memory bandwidth vs. compute ratios across architectures",
                "Liquid cooling adoption curves and infrastructure requirements"
            ],
            'metrics' => [
                [ 'label' => 'GB200 Rack Density', 'value' => '120 kW', 'trend' => 'Max' ],
                [ 'label' => 'Memory Wall', 'value' => '8 TB/s', 'trend' => 'HBM3e' ],
                [ 'label' => 'NVLink Bandwidth', 'value' => '1.8 TB/s', 'trend' => 'Bi-directional' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'The physical limits of scaling inference and training clusters across network, power, and memory.' ],
                [ 'title' => 'Who uses this', 'description' => 'Datacenter architects, cooling infrastructure providers, and AI researchers.' ],
                [ 'title' => 'Why it matters', 'description' => 'Hardware bottlenecks drastically reduce Model Flops Utilization (MFU), impacting billion-dollar training runs.' ],
                [ 'title' => 'Key insight', 'description' => 'Power delivery and direct-to-chip liquid cooling are now the primary barriers to 100k+ GPU clusters.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Hardware specifications, ODM blueprints, and empirical performance profiling from early hyperscaler deployments.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Quarterly, aligned with major silicon announcements and supercomputing conferences.' ],
                [ 'category' => 'Assumptions', 'details' => 'Theoretical maximums are discounted based on historical network overhead and software routing inefficiencies.' ],
            ],
            'enterpriseSignals' => ["Architecture Focus", "Hardware Specs", "Institutional Access"],
            'visualType' => "architecture",
            'related' => [
                'models' => ["data-center-power-model", "cloud-infrastructure-growth-model"],
                'articles' => ["flagship-1", "article-6"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>'
        ],
        'semiconductor-capacity-tracker' => [
            'id' => 'semiconductor-capacity',
            'title' => 'Semiconductor Capacity Tracker',
            'description' => 'Maps leading-edge fab utilization at TSMC, Samsung, and Intel Foundry across N3, N2, and 18A nodes — including yield-adjusted wafer output and CapEx timelines.',
            'category' => 'Semiconductors',
            'lastUpdated' => 'Apr 2026',
            'dataPoints' => '60+ variables',
            'memberOnly' => true,
            'content' => [
                "The Semiconductor Capacity Tracker provides an exhaustive view of global leading-edge and mature node manufacturing. We map fab utilization rates, CapEx deployment, and yield curves across TSMC, Samsung, and Intel Foundry Services.",
                "The model distinguishes between nominal capacity and true yield-adjusted output, offering a realistic view of how many functional die can actually reach the market.",
                "This intelligence allows supply chain managers and equity analysts to front-run structural oversupply or undersupply dynamics before they are reflected in broader market indices."
            ],
            'features' => [
                "Fab-by-fab utilization rates across major foundries",
                "Node transition timelines (N3 to N2, 18A ramp)",
                "Wafer fab equipment (WFE) spending projections",
                "Geographic capacity distribution and reshoring impacts"
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>'
        ],
        'cloud-infrastructure-growth-model' => [
            'id' => 'cloud-infra-growth',
            'title' => 'Cloud Infrastructure Growth Model',
            'description' => 'Projects hyperscaler CapEx deployment, GPU cluster buildout velocity, and power procurement timelines across AWS, Azure, Google, and Meta through 2027.',
            'category' => 'Cloud Computing',
            'lastUpdated' => 'May 2026',
            'dataPoints' => '35+ variables',
            'memberOnly' => true,
            'content' => [
                "The Cloud Infrastructure Growth Model projects the capital expenditure and physical infrastructure deployment velocity of the world's largest hyperscalers (AWS, Azure, Google, Meta).",
                "By synthesizing data from server ODMs, networking component suppliers, and regional data center construction permits, we model the exact footprint of upcoming AI training clusters.",
                "This framework bridges the gap between announced corporate AI strategies and the physical reality of concrete, steel, and fiber deployments."
            ],
            'features' => [
                "Quarterly CapEx projections separated by compute vs. facilities",
                "Network architecture transitions (400G to 800G+)",
                "Custom silicon (TPU, Trainium, Maia) vs. merchant silicon deployment",
                "Regional availability zone expansion timelines"
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/></svg>'
        ],
        'memory-supply-model' => [
            'id' => 'memory-supply',
            'title' => 'Memory Supply Model',
            'description' => 'Analyzes HBM3e and GDDR7 production ramp curves, SK Hynix/Samsung/Micron capacity allocations, and pricing dynamics for AI accelerator memory through 2026.',
            'category' => 'Semiconductors',
            'lastUpdated' => 'Apr 2026',
            'dataPoints' => '30+ variables',
            'memberOnly' => true,
            'content' => [
                "Memory is increasingly becoming the gating factor for both AI performance and system cost. Our Memory Supply Model tracks the complex dynamics of DRAM, NAND, and specialized High Bandwidth Memory (HBM).",
                "We analyze bit growth, wafer capacity allocations between conventional memory and HBM, and the resulting pricing dynamics.",
                "With HBM yield structures significantly altering traditional memory economics, this model provides clarity on supplier margins and hyperscaler procurement costs."
            ],
            'features' => [
                "HBM generation transitions (HBM3 to HBM3e/HBM4)",
                "SK Hynix, Samsung, and Micron market share and capacity allocations",
                "Through-Silicon Via (TSV) capacity constraints",
                "DRAM and NAND blended ASP forecasts"
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>'
        ],
        'data-center-power-model' => [
            'id' => 'data-center-power',
            'title' => 'Data Center Power Model',
            'description' => 'Tracks gigawatt-scale power procurement timelines, utility agreements, nuclear SMR deployment schedules, and their impact on AI cluster expansion plans.',
            'category' => 'Data Centers',
            'lastUpdated' => 'May 2026',
            'dataPoints' => '45+ variables',
            'memberOnly' => false,
            'content' => [
                "The Data Center Power Model addresses the most critical bottleneck facing the next decade of computing: energy. We track gigawatt-scale power procurement across primary and emerging data center markets.",
                "The model synthesizes utility interconnection queue data, power purchase agreements (PPAs), and behind-the-meter generation strategies including natural gas and nuclear Small Modular Reactors (SMRs).",
                "As grid capacity becomes the primary constraint on cluster size, this framework identifies which hyperscalers and colocation providers have secured the necessary power to execute their roadmaps."
            ],
            'features' => [
                "Utility interconnection timelines and queue backlogs by region",
                "Hyperscaler power purchase agreement (PPA) tracking",
                "Stranded power and behind-the-meter generation economics",
                "Nuclear SMR deployment timelines and regulatory hurdles"
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6" y2="6"/><line x1="6" y1="18" x2="6" y2="18"/></svg>'
        ]
    ];
}
function get_semi_articles() {
    return [
        'article-2' => [
            'id' => "article-2",
            'slug' => "ai-compute-demand-vs-gpu-supply-2026",
            'title' => "AI Compute Demand vs GPU Supply: 2026 Outlook",
            'description' => "Despite significant capacity expansions, the gap between foundation model training requirements and physical silicon supply continues to widen. Here is where the true bottlenecks lie across the supply chain.",
        ],
        'article-3' => [
            'id' => "article-3",
            'slug' => "tsmc-advanced-node-capacity-chip-supply-constraints",
            'title' => "TSMC Advanced Node Capacity and Global Chip Supply Constraints",
            'description' => "An assessment of N3 and N2 utilization rates, CoWoS-L packaging yield challenges, and how Apple, NVIDIA, and AMD are fighting for limited wafer allocations over the next 24 months.",
        ],
        'flagship-1' => [
            'id' => "flagship-1",
            'slug' => "nvidia-blackwell-architecture-scaling-bottlenecks",
            'title' => "NVIDIA Blackwell Architecture: Performance and Scaling Bottlenecks",
            'description' => "An architectural deep dive into the B200 and GB200 NVL72 rack-scale systems. We analyze the complexities of the 5th generation NVLink switch network, liquid cooling requirements, and the true TCO implications for hyperscalers.",
        ],
        'article-6' => [
            'id' => "article-6",
            'slug' => "inference-optimization-strategies-modern-ai",
            'title' => "Inference Optimization Strategies Across Modern AI Systems",
            'description' => "With inference costs dwarfing training costs at scale, we analyze the hardware-software co-design strategies hyperscalers are utilizing, including MoE routing, speculative decoding, and custom inferentia silicon.",
        ]
    ];
}
?>
