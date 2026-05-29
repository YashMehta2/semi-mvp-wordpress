<?php
function get_semi_models() {
    return [
        'accelerator-hbm-model' => [
            'id' => 'accelerator-hbm-model',
            'slug' => 'accelerator-hbm-model',
            'title' => 'Accelerator & HBM Model',
            'description' => 'The SemiAnalysis AI accelerator model is used to gauge historical and future accelerator production by company and type.',
            'useCase' => 'Gathering upstream and downstream supply chain information from equipment requirements to deployed capacity and FLOPS.',
            'category' => 'AI Infrastructure',
            'lastUpdated' => 'Q2 2026',
            'dataPoints' => '2023 - 2027',
            'memberOnly' => true,
            'content' => [
                "The SemiAnalysis AI accelerator model is used to gauge historical and future accelerator production by company and type. Our clients include hyperscalers and major semiconductor companies for competitive analysis and supply chain planning, as well as large investors in public and private markets.",
                "It can be used to gather upstream and downstream supply chain information from equipment requirements to deployed capacity and FLOPS. Many firms in the downstream and upstream supply chain can have their revenue estimated based on our data.",
                "Our data is provided for 2023 to 2027 on a quarterly basis. Subscription to this model grants the user quarterly updates for one year. These models are not included with the annual membership to the SemiAnalysis Newsletter. All models are separate institutional offerings."
            ],
            'features' => [
                "Number of shipments and ASPs of AI accelerators by SKU.",
                "Accelerator revenue forecasts for merchant and semi-custom providers: Nvidia, AMD, Broadcom, Marvell, Intel, Alchip, Mediatek.",
                "Supply chain and capacity orders for these chips from both a supply perspective (total potential units based on capacity orders) and actual demand perspective (actual shipments).",
                "Shipments by customer and accelerator installed base for over 60 major customers.",
                "Total compute install base including peak theoretical FLOPS and effective FLOPS based on training Model Flops Utilization by chip."
            ],
            'metrics' => [
                [ 'label' => 'Coverage Period', 'value' => '2023 - 2027', 'trend' => 'Quarterly' ],
                [ 'label' => 'Major Customers', 'value' => '60+', 'trend' => 'Tracked' ],
                [ 'label' => 'Providers Covered', 'value' => '7 Major', 'trend' => 'Merchant & Custom' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'Shipments and ASPs of AI accelerators by SKU, revenue forecasts, capacity orders, and customer install base.' ],
                [ 'title' => 'Who uses this', 'description' => 'Hyperscalers, major semiconductor companies, and large investors in public and private markets.' ],
                [ 'title' => 'Why it matters', 'description' => 'Enables upstream and downstream supply chain information tracking from equipment to deployed capacity.' ],
                [ 'title' => 'Key insight', 'description' => 'Helps estimate revenue for firms across the fabrication, packaging, and equipment value chain.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Upstream and downstream supply chain information gathered from equipment requirements, foundry capacity, and customer allocations.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Quarterly updates for one year included with the subscription.' ],
                [ 'category' => 'Usage', 'details' => 'Separate institutional offering, not included with the annual newsletter membership.' ],
            ],
            'enterpriseSignals' => ["Updated Quarterly", "2023 - 2027 Forecasts", "Institutional Access"],
            'visualType' => "supply-chain",
            'related' => [
                'models' => ["wafer-fab-model", "ai-networking-model"],
                'articles' => ["article-3", "article-2"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>'
        ],
        'ai-cloud-tco-model' => [
            'id' => 'ai-cloud-tco-model',
            'slug' => 'ai-cloud-tco-model',
            'title' => 'AI Cloud TCO Model',
            'description' => 'The SemiAnalysis AI Cloud Total Cost of Ownership Model examines the ownership economics of AI Clouds that purchase accelerators and sell either bare metal or cloud GPU compute.',
            'useCase' => 'Evaluating the business case for establishing and running an AI Cloud and benchmarking procurement costs.',
            'category' => 'Cloud Computing',
            'lastUpdated' => 'Q2 2026',
            'dataPoints' => 'Cloud TCO & Economics',
            'memberOnly' => true,
            'content' => [
                "The SemiAnalysis AI Cloud Total Cost of Ownership Model examines the ownership economics of AI Clouds that purchase accelerators and sell either bare metal or cloud GPU compute. It also sheds light on the likely future cost curves for AI Compute based on the capabilities of upcoming AI Accelerators as well as the impact of various optimization techniques and parallelism schemes being implemented in the market.",
                "It can be used to evaluate the business case for establishing and running an AI Cloud for various stakeholders from AI Cloud management teams to equity and debt investors, examining the economics of business operations as well as AI Accelerator residual value. It can also serve as a useful benchmarking and planning tool for customers that are currently purchasing or are considering procuring AI Compute, particularly on a long-term basis.",
                "The model will also include one year of quarterly updates for additional features and improvements, an initial call with SemiAnalysis to explain the model and methodologies employed, as well as subsequent ad-hoc calls to answer any questions that arise from the use of the models. These models are not included with the annual membership to the SemiAnalysis Newsletter. All models are separate institutional offerings."
            ],
            'features' => [
                "Examines the ownership economics of AI Clouds purchasing accelerators and selling bare metal or cloud GPU compute.",
                "Sheds light on the likely future cost curves for AI Compute based on upcoming AI Accelerators.",
                "Analyzes the impact of various optimization techniques and parallelism schemes being implemented in the market.",
                "Evaluates the business case for establishing and running an AI Cloud for management, equity, and debt investors.",
                "Benchmarking and planning tool for customers procuring AI Compute, particularly on a long-term basis."
            ],
            'metrics' => [
                [ 'label' => 'Residual Value', 'value' => 'Accelerators', 'trend' => 'Estimated' ],
                [ 'label' => 'Future Cost Curves', 'value' => 'AI Compute', 'trend' => 'Projected' ],
                [ 'label' => 'Update Cadence', 'value' => 'Quarterly', 'trend' => '1 Year' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'Ownership economics of AI Clouds, cloud GPU compute economics, future cost curves, and parallelism schemes.' ],
                [ 'title' => 'Who uses this', 'description' => 'AI Cloud management teams, equity/debt investors, and customers procuring AI compute on a long-term basis.' ],
                [ 'title' => 'Why it matters', 'description' => 'Evaluates the business case for establishing and running an AI Cloud, and serves as a benchmarking tool.' ],
                [ 'title' => 'Key insight', 'description' => 'Sheds light on future cost curves based on upcoming accelerators and optimization techniques.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Bottom-up analysis of accelerator hardware capital expenditure, facility power constraints, PUE, and network overhead.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Quarterly updates for one year included with subscription.' ],
                [ 'category' => 'Support', 'details' => 'Includes initial methodology call and subsequent ad-hoc consulting Q&A support.' ],
            ],
            'enterpriseSignals' => ["TCO & Economics", "Quarterly Updates", "Institutional Access"],
            'visualType' => "cloud",
            'related' => [
                'models' => ["datacenter-industry-model", "accelerator-hbm-model"],
                'articles' => ["flagship-1", "article-6"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>'
        ],
        'ai-networking-model' => [
            'id' => 'ai-networking-model',
            'slug' => 'ai-networking-model',
            'title' => 'AI Networking Model',
            'description' => 'The SemiAnalysis AI Networking Model decodes the increasingly critical networking layer of Al and cloud infrastructure.',
            'useCase' => 'Analyzing Switches, Transceivers, Cables, AEC/DACs, scaling limits, design architectures, and vendor dynamics.',
            'category' => 'AI Infrastructure',
            'lastUpdated' => 'Q2 2026',
            'dataPoints' => 'Optical & Switching',
            'memberOnly' => true,
            'content' => [
                "The SemiAnalysis AI Networking Model is built to decode the increasingly critical networking layer of Al and cloud infrastructure. This model completes our suite by providing granular visibility into Switches, Transceivers, Cables, AEC/DACs for scale up, scale-out backend, front end, and out of band networks for Al, offering a deeper understanding of scaling limits, design architectures, and vendor dynamics.",
                "These models are not included with the annual membership to the SemiAnalysis Newsletter. All models are separate institutional offerings."
            ],
            'features' => [
                "Detailed Cluster Configuration Analysis by each hyperscaler.",
                "Bottom-up build-up of AI data center networking structures for each hyperscaler (Microsoft, Google, Meta, Amazon, Oracle, X.AI) as well as for the Neoclouds.",
                "Top-down analysis of total market conditions and vendor market shares for optical modules, switches, and AECs.",
                "Master pricing table of key networking devices and components used in AI data centers including pricing for Hyperscalers/Neocloud Giants/Emerging Neoclouds and power budgets."
            ],
            'metrics' => [
                [ 'label' => 'Tracked Providers', 'value' => 'Microsoft, Google', 'trend' => 'Meta, AWS, Oracle' ],
                [ 'label' => 'Neocloud Giants', 'value' => 'X.AI & more', 'trend' => 'Tracked' ],
                [ 'label' => 'Device Types', 'value' => 'AEC/DAC/Optical', 'trend' => 'Switches & Cables' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'Switches, transceivers, cables, AEC/DACs for scale-up, scale-out backend, front end, and out of band networks.' ],
                [ 'title' => 'Who uses this', 'description' => 'Hyperscalers, neocloud giants, and infrastructure planners evaluating networking device options.' ],
                [ 'title' => 'Why it matters', 'description' => 'Decodes the increasingly critical networking layer of AI and cloud infrastructure.' ],
                [ 'title' => 'Key insight', 'description' => 'Provides bottom-up data center structures, master pricing table, and power budgets.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Hyperscaler data center architecture profiling, optical vendor market share checks, and master component pricing surveys.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Regular updates with market conditions and pricing shifts.' ],
                [ 'category' => 'Scope', 'details' => 'Covers optical transceivers, AEC/DAC copper connections, and backend networks.' ],
            ],
            'enterpriseSignals' => ["Optical & Switches", "Pricing Tables", "Institutional Access"],
            'visualType' => "architecture",
            'related' => [
                'models' => ["accelerator-hbm-model", "datacenter-industry-model"],
                'articles' => ["flagship-1", "article-8"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/></svg>'
        ],
        'datacenter-industry-model' => [
            'id' => 'datacenter-industry-model',
            'slug' => 'datacenter-industry-model',
            'title' => 'Datacenter Industry Model',
            'description' => 'The SemiAnalysis AI Datacenter Model is used to understand current and forecast datacenter critical IT power capacity for both colocation and hyperscale datacenters.',
            'useCase' => 'Understanding capacity constraints, location drivers, capex requirements, and cloud/colocation economics.',
            'category' => 'Data Centers',
            'lastUpdated' => 'Q2 2026',
            'dataPoints' => '5,000+ Datacenters',
            'memberOnly' => true,
            'content' => [
                "The SemiAnalysis AI Datacenter Model is used to understand current and forecast datacenter critical IT power capacity for both colocation and hyperscale datacenters with a focus on the demand driven by deployments of AI accelerators into datacenters. Our clients include hyperscalers and major semiconductor companies for competitive analysis and supply chain planning, as well as large investors in public and private markets.",
                "We track over 5,000 datacenters and their deployments with publicly available information including but not limited to property records, permits, power usage, FOIA requests, and satellite images. We use computer vision models to accelerate the frequent satellite imaging of datacenters to track size, capacity, timelines, and progress.",
                "The model can be used to understand capacity constraints by major player, key considerations driving location decisions for datacenter deployment, economics of AI Accelerator clouds and datacenter colocation, and capex requirements for facility level data.",
                "Our data is provided for 2023 to 2030. The model will also include one year of quarterly updates, an initial call with SemiAnalysis to explain the model and methodologies employed, as well as subsequent ad-hoc calls to answer any questions that arise from the use of the models. These models are not included with the annual membership to the SemiAnalysis Newsletter. All models are separate institutional offerings."
            ],
            'features' => [
                "Tracks over 5,000 datacenters and their deployments globally.",
                "Uses property records, permits, power usage, FOIA requests, and satellite images.",
                "Employs computer vision models to accelerate satellite imaging and track progress.",
                "Analyzes capacity constraints by major player and location drivers.",
                "Examines economics of AI Accelerator clouds, datacenter colocation, and facility capex."
            ],
            'metrics' => [
                [ 'label' => 'Tracked Facilities', 'value' => '5,000+', 'trend' => 'Globally' ],
                [ 'label' => 'Coverage Period', 'value' => '2023 - 2030', 'trend' => 'Projections' ],
                [ 'label' => 'Update Cadence', 'value' => 'Quarterly', 'trend' => '1 Year' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'Current and forecast critical IT power capacity for colocation and hyperscale datacenters.' ],
                [ 'title' => 'Who uses this', 'description' => 'Hyperscalers, major semiconductor companies, and large investors in public and private markets.' ],
                [ 'title' => 'Why it matters', 'description' => 'Helps understand location decisions, economics of accelerator clouds, and facility capex.' ],
                [ 'title' => 'Key insight', 'description' => 'Tracks power usage and timelines using computer vision models on satellite imagery.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Property records, permits, power usage reports, FOIA requests, and satellite images.' ],
                [ 'category' => 'Processing', 'details' => 'Computer vision models run on satellite imagery to track datacenter footprints, critical substation power, and construction timelines.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Quarterly updates for one year included.' ],
            ],
            'enterpriseSignals' => ["5,000+ Datacenters", "2023 - 2030 Forecasts", "Satellite Auditing"],
            'visualType' => "cloud",
            'related' => [
                'models' => ["ai-cloud-tco-model", "ai-networking-model"],
                'articles' => ["article-4", "article-8"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6" y2="6"/><line x1="6" y1="18" x2="6" y2="18"/></svg>'
        ],
        'wafer-fab-model' => [
            'id' => 'wafer-fab-model',
            'slug' => 'wafer-fab-model',
            'title' => 'Wafer Fab Equipment Model',
            'description' => 'Our wafer fab model forecasts semiconductor equipment sales via a bottoms-up approach, where wafer capacity and process node requirements drive equipment sales.',
            'useCase' => 'Modeling process requirements with detailed layer-by-layer flow and specifications for next-gen logic and lithography tools.',
            'category' => 'Semiconductors',
            'lastUpdated' => 'Q2 2026',
            'dataPoints' => '2021 - 2027',
            'memberOnly' => true,
            'content' => [
                "Our wafer fab model forecasts semiconductor equipment sales via a bottoms-up approach, where wafer capacity and process node requirements drive equipment sales. Process requirements are modeled with a detailed layer-by-layer flow for advanced logic. Critical specifications for leading edge and next generation logic processes and lithography tools are enumerated in a database, including 1.4nm-class processes and high-NA EUV.",
                "The data is provided for 2021 to 2027 on an annual basis. The model will also include one year of quarterly updates, an initial call with SemiAnalysis to explain the model and methodologies employed, as well as subsequent ad-hoc calls to answer any questions that arise from the use of the models. These models are not included with the annual membership to the SemiAnalysis Newsletter. All models are separate institutional offerings."
            ],
            'features' => [
                "Bottoms-up forecast of semiconductor equipment sales based on wafer capacity and process nodes.",
                "Detailed layer-by-layer flow modeling for advanced logic process requirements.",
                "Critical specifications database for leading edge and next-generation processes (including 1.4nm-class).",
                "Lithography tool tracking, including high-NA EUV equipment bookings and requirements."
            ],
            'metrics' => [
                [ 'label' => 'Coverage Period', 'value' => '2021 - 2027', 'trend' => 'Annual' ],
                [ 'label' => 'Advanced Process', 'value' => '1.4nm-class', 'trend' => 'Tracked' ],
                [ 'label' => 'Lithography Node', 'value' => 'High-NA EUV', 'trend' => 'Detailed' ],
            ],
            'takeaways' => [
                [ 'title' => 'What this model tracks', 'description' => 'Semiconductor equipment sales, wafer capacity, and process node requirements via a bottoms-up approach.' ],
                [ 'title' => 'Who uses this', 'description' => 'Foundry managers, wafer capacity planners, and capital equipment investors.' ],
                [ 'title' => 'Why it matters', 'description' => 'Models process requirements with a detailed layer-by-layer flow for advanced logic.' ],
                [ 'title' => 'Key insight', 'description' => 'Critical specifications for leading edge and next generation logic processes and tools are database-enumerated.' ],
            ],
            'methodology' => [
                [ 'category' => 'Data Sources', 'details' => 'Bottoms-up fab capacity planning, process node requirements, and layer-by-layer lithography flow modeling.' ],
                [ 'category' => 'Update Cadence', 'details' => 'Annual forecasting with quarterly adjustments and updates.' ],
                [ 'category' => 'Support', 'details' => 'Includes setup methodology briefings and direct Q&A support call blocks.' ],
            ],
            'enterpriseSignals' => ["1.4nm & EUV Focus", "Layer-by-Layer Flow", "Annual Forecasts"],
            'visualType' => "semiconductor",
            'related' => [
                'models' => ["accelerator-hbm-model", "datacenter-industry-model"],
                'articles' => ["article-3", "article-7"]
            ],
            'icon' => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>'
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
