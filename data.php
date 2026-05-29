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
                "Number of shipments and ASPs of AI accelerators by SKU (including Nvidia, Google TPU, Meta MTIA, AWS Inferentia/Trainium, Microsoft Maia, OpenAI, Softbank Izanagi, Tesla Dojo, AMD, Intel, Bytedance, Huawei, Iluvater, Cambricon, and more).",
                "Accelerator revenue forecasts for merchant and semi-custom providers: Nvidia, AMD, Broadcom, Marvell, Intel, Alchip, Mediatek.",
                "Supply chain and capacity orders for these chips: Number of Foundry wafers, Number of 2.5D wafers, package sizes, and yields (TSMC, Samsung, Intel, Amkor, ASE SPIL), and Total number of die attach steps (BESI, ASMPT, etc) from both a supply and actual shipments perspective.",
                "Implications for upstream fabrication, packaging, and equipment demand: HBM type, Total capacity, Layer count, Total number of stacks, Total bits, and Manufacturer.",
                "Shipments by customer and accelerator installed base for over 60 major customers (US and Chinese hyperscalers, Enterprises, Neoclouds such as Coreweave, other startups and sovereign AI initiatives).",
                "Total compute install base including peak theoretical FLOPS and effective FLOPS based on training Model Flops Utilization by chip."
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
                "Historical and future rental price analysis and estimates for a variety of GPUs, incorporating detailed install base by GPU projections through 2028 and estimated GPU total unit shipments by major vendor through 2034.",
                "GPU metrics including Inference throughput, Training throughput, GPU TDP, All-in TDP per GPU, cost of ownership ($/hr), Inference Cost per M tokens, and Training Cost per FLOP for Nvidia, AMD, Intel, and custom accelerators.",
                "Market-wide metrics: inference/training throughput, advanced inference/training cost ($/M tokens), and average training cost ($/hr per PFLOP).",
                "Analysis of the impact of various optimizations and parallelism schemes (Pipeline Parallel, Tensor Parallel, Expert Parallel, Data Parallel) on GPU inference and training throughput.",
                "Future GPU rental price scenario analysis based on supply-demand dynamics and cost curve evolution given future GPU capabilities.",
                "GPU Total Cost of Ownership analysis: comprehensive cost of operating GPU servers ($/hr) based on upfront server capex, system power consumption, colocation and electricity costs, and cost of capital.",
                "Returns and Residual Value analysis: NPV and residual value analysis for a GPU cluster based on future earnings, cumulative project/equity cash flow, IRR, return on assets, ROIC, and ROE.",
                "AI Cloud Full Financial Model: Three-statement model (Income Statement, Balance Sheet, Cash Flow) including server depreciation, unearned revenue, and borrowings.",
                "Support for key financial assumptions: capital structures, PIK interest, depreciation, colocation, electricity, maintenance contracts, sales and marketing, fixed pricing duration, customer prepay, operating lifetime, and taxes."
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
                "Over 80 configuration panels detailing how each hyperscaler (Microsoft, Google, Meta, Amazon, Oracle, X.AI) as well as how Neoclouds build their AI Cluster networks, covering scale-up, scale-out, front-end, and out of band networks.",
                "Provides all configurations in use across different accelerator SKUs for each Hyperscaler as well as for the Neoclouds.",
                "Detailed device tracking per configuration: SKU and quantity of switches, optical modules, fibers, AECs, ACCs, and DACs utilized, along with their attachment ratios to accelerators.",
                "Pricing and power consumption breakdown of switches, optical modules, fibers, AECs, ACCs, DACs, and other networking devices.",
                "Networking configuration breakdown per each deployed accelerator (H100, H200, B100, B200, GB200 NVL36, GB200 NVL72, B300, GB300 NVL, VR200, MI300, MI325, MI350, custom ASICs).",
                "Summary of by-customer and market-wide units and spend for switches, transceivers, and cables, including forecasts for 200G/400G/800G/1.6T transceivers and Broadcom/Arista/Nvidia switches.",
                "Detailed breakdown by SKU of Switches, Optical Modules, AECs/ACCs/DACs procured by each hyperscaler for their AI data centers.",
                "Switch vendor wallet share breakdown covering Nvidia, Arista, Celestica, Cisco, Accton, Juniper, Nexthop, Huawei, Broadcom, Marvell, and others.",
                "Optical module vendor wallet share and market forecasts covering Nvidia, Zhongji Innolight, Coherent, Eoptolink, Fabrinet, TFC Optical, Lumentum/Cloudlight, AAOI, Accelink, Source Photonics, and others.",
                "AEC/ACC/DAC/fiber vendor coverage including Nvidia, Credo, Astera Labs, Amphenol, TE Connectivity, Molex, Luxshare, Broadex, and others.",
                "Total market volume and market share breakdown quarterly from 2023 to 1Q 2025, and forecasts for 2025 and 2026.",
                "Detailed breakdown of vendor wallet share at each hyperscaler for optical modules (1.6T/800G/400G), switches (BlackBox/WhiteBox), and AECs (800G/400G)."
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
                "Accelerator unit shipment forecasts through 2027, deployments, install base, and AI datacenter requirements by major Hyperscalers and AI clouds.",
                "All-in power requirements per Accelerator unit across various major chips/models.",
                "Forecast AI datacenter critical IT power demand, PUE, utility power, and annual power consumption by major geography (US, North America, Asia Pacific, China, EMEA) and region.",
                "Historical, current, and forecast datacenter capacity by major hyperscaler by site, cluster, and region, along with forecast major hyperscaler datacenter and IT capex, based on over 5,000 individual datacenter facilities tracked.",
                "Accelerator deployments plans and installed base of >50 companies (including US hyperscalers, Chinese hyperscalers, neoclouds like Coreweave, enterprises, and sovereign AI initiatives).",
                "Self-build and leased capacity (in MW) and future plans for Microsoft, AWS, Meta, Google, Oracle, Apple, Coreweave, Tesla, x.AI, and more.",
                "Critical IT capacity of cities and major buildings in USA, Canada, China, Singapore, Malaysia, Australia, India, Europe & UK, and Middle East.",
                "Forecast industry-wide datacenter capex (excluding IT equipment) and breakdown by major category (Power, Cooling, Facilities) and subcategories.",
                "AI Supply/Demand Analysis by major hyperscaler and geographic region, examining whether under-development supply will meet power demand from estimated accelerator shipments.",
                "Geospatial data and grid tagging for US Datacenter power consumption.",
                "Datacenter Anatomy and key suppliers of equipment (Generators, Transformers, UPS, Chillers, CDUs, CRAH/CRAC/PAHUs).",
                "AI/GPU Cloud Total Cost of Ownership Analysis, solar power economics, global industrial electricity tariffs, and power cost scenario analysis."
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
                "Wafer capacity for leading edge logic major nodes out to 2027.",
                "Lithography equipment sales forecasts through 2027 for advanced logic major nodes (processes using EUV lithography) by model, units, and revenue, broken down by chipmaker and process node.",
                "Layer by layer lithography requirements for advanced logic major nodes, by technology (EUV, ArFi, KrF, etc.), broken down by chipmaker and process node, from 1st use of EUV through 1.4nm-equivalent including finFET, GAA, and backside power delivery.",
                "Wafer capacity forecasts through 2027 for advanced logic and leading-edge memory chipmakers (10-nm class DRAM), by major process node.",
                "Wafer fab equipment sales through 2027 for major segments: lithography, deposition, etch, wafer track (coat, bake, develop), and metrology/inspection.",
                "Covers all major equipment vendors: Applied Materials, ASML, Lam Research, KLA, Screen, ASMI, Kokusai Electric, Tokyo Electron, and more.",
                "Sales revenue broken down by end-use segment: leading edge logic, specialty (trailing edge logic, analog, power, rf, etc), DRAM, NAND/non-volatile, and China.",
                "Aggregate specialty equipment sales revenue by equipment segment through 2027.",
                "Annual equipment capital expenditure by advanced logic chipmaker and process, forecast through 2027.",
                "Detailed lithography tool database including model, throughput, uptime, rework rate, release date, and ASP including upcoming next generation tools.",
                "Non-lithography tool database as an easy reference for key tools.",
                "Includes forecast on effect of pattern shaping (Applied Material's Sculpta tool) and directed-self assembly on EUV lithography requirements."
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
