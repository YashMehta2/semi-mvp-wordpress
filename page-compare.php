<?php
/**
 * Template Name: Compare Models
 */

require_once get_stylesheet_directory() . '/data.php';
$all_models = get_semi_models();

$visual_images = [
    'supply-chain'  => get_template_directory_uri() . '/assets/placeholders/supply-chain.png',
    'cloud'         => get_template_directory_uri() . '/assets/placeholders/data_dashboard.png',
    'architecture'  => get_template_directory_uri() . '/assets/placeholders/blueprint.png',
    'semiconductor' => get_template_directory_uri() . '/assets/placeholders/wafer.png'
];

get_header(); ?>

<main class="min-h-screen bg-root pb-24 font-sans text-content-primary">
    <!-- Strict Editorial Header with Background Fade -->
    <section class="relative border-b border-border-strong bg-root pt-16 pb-12 overflow-hidden">
        <!-- Background Image Placeholder Fade -->
        <div class="absolute inset-0 z-0">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/abstract_data_dashboard.png"
                alt=""
                class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-30 grayscale contrast-125 brightness-90"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10">
            <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-content-tertiary mb-3">
                Internal Information Architecture
            </p>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-content-primary mb-8 max-w-2xl">
                Model Comparison Matrix
            </h1>

            <!-- Model Selector Toggles -->
            <div class="space-y-4 bg-surface/50 backdrop-blur-sm p-6 rounded-xl border border-border-subtle inline-block shadow-sm">
                <p class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">
                    Select up to 3 models to compare:
                </p>
                <div id="model-toggles" class="flex flex-wrap gap-2 max-w-4xl">
                    <!-- Toggles injected by JS -->
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Matrix -->
    <section class="pt-12">
        <div class="container" id="matrix-container">
            <!-- Matrix injected by JS -->
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const allModels = <?php echo json_encode($all_models); ?>;
    const visualImages = <?php echo json_encode($visual_images); ?>;
    
    // Convert object to array for easier mapping
    const modelsList = Object.values(allModels);
    
    // State
    let selectedIds = [modelsList[0].id, modelsList[1].id];
    let isFeaturesExpanded = true;

    const togglesContainer = document.getElementById('model-toggles');
    const matrixContainer = document.getElementById('matrix-container');

    function renderToggles() {
        togglesContainer.innerHTML = '';
        modelsList.forEach(model => {
            const isSelected = selectedIds.includes(model.id);
            const isDisabled = !isSelected && selectedIds.length >= 3;
            
            const btn = document.createElement('button');
            btn.className = `text-sm font-semibold px-5 py-2.5 rounded-full border transition-all duration-300 transform active:scale-95 ${
                isSelected
                    ? "bg-content-primary text-root border-content-primary shadow-md"
                    : "bg-root text-content-secondary border-border-strong hover:border-content-tertiary hover:bg-surface"
            } ${isDisabled ? "opacity-30 cursor-not-allowed" : "cursor-pointer"}`;
            
            btn.innerHTML = (isSelected ? '<span class="mr-2 text-accent-primary">✓</span>' : '') + model.title;
            
            if (!isDisabled || isSelected) {
                btn.addEventListener('click', () => {
                    if (selectedIds.includes(model.id)) {
                        if (selectedIds.length > 1) {
                            selectedIds = selectedIds.filter(id => id !== model.id);
                        }
                    } else {
                        if (selectedIds.length < 3) {
                            selectedIds.push(model.id);
                        }
                    }
                    render();
                });
            }
            togglesContainer.appendChild(btn);
        });
    }

    function getGridClass(count) {
        if (count === 1) return "lg:grid-cols-1";
        if (count === 2) return "lg:grid-cols-2";
        if (count === 3) return "lg:grid-cols-3";
        return "lg:grid-cols-2";
    }

    function renderMatrix() {
        // Maintain selection order relative to original list
        const selectedModels = modelsList.filter(m => selectedIds.includes(m.id)).sort(
            (a, b) => selectedIds.indexOf(a.id) - selectedIds.indexOf(b.id)
        );
        const colClass = getGridClass(selectedModels.length);

        let html = `
            <!-- Sticky Headers -->
            <div class="sticky top-[70px] z-50 bg-root/95 backdrop-blur-xl border-b-2 border-content-primary pb-4 mb-12 grid grid-cols-1 gap-8 ${colClass} transition-all duration-500">
        `;

        selectedModels.forEach(model => {
            const imgUrl = visualImages[model.visualType] || visualImages['cloud'];
            html += `
                <div class="pt-6 flex flex-col h-full animate-fade-in">
                    <div class="w-20 h-20 shrink-0 rounded-lg overflow-hidden border border-border-strong mb-5 hidden sm:block shadow-sm relative group cursor-pointer">
                        <img src="${imgUrl}" alt="" class="w-full h-full object-cover grayscale opacity-80 transition-all duration-500 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105" />
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent-secondary mb-2">${model.category}</span>
                    <h2 class="text-xl font-extrabold tracking-tight leading-snug">${model.title}</h2>
                </div>
            `;
        });

        html += `</div><div class="space-y-20">`;

        // Row Helper
        const renderRow = (title, contentRenderer) => {
            let rowHtml = `
                <div>
                    <div class="flex items-center gap-4 mb-8">
                        <h3 class="text-xs font-extrabold uppercase tracking-[0.2em] text-content-primary shrink-0">${title}</h3>
                        <div class="h-[1px] flex-1 bg-border-strong"></div>
                    </div>
                    <div class="grid grid-cols-1 gap-y-10 gap-x-8 ${colClass} divide-y lg:divide-y-0 lg:divide-x divide-border-subtle">
            `;
            selectedModels.forEach((model, idx) => {
                rowHtml += `<div class="animate-fade-in ${idx !== 0 ? 'pt-6 lg:pt-0 lg:pl-8' : 'pr-4 lg:pr-8'}">`;
                rowHtml += contentRenderer(model);
                rowHtml += `</div>`;
            });
            rowHtml += `</div></div>`;
            return rowHtml;
        };

        // Use Case Row
        html += renderRow('Primary Use Case', (model) => `
            <p class="text-[15px] leading-relaxed text-content-secondary font-medium">${model.useCase}</p>
        `);

        // Metadata Row
        html += renderRow('Coverage & Cadence', (model) => {
            let metaHtml = `
                <div class="space-y-6">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-content-tertiary mb-2">Data Points</p>
                        <p class="font-mono text-[15px] text-content-primary font-bold bg-surface inline-block px-3 py-1.5 rounded border border-border-subtle">${model.dataPoints}</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-content-tertiary mb-2">Update Cadence</p>
                        <p class="font-mono text-sm text-content-primary font-semibold">${model.lastUpdated}</p>
                    </div>
            `;
            if (model.enterpriseSignals && model.enterpriseSignals.length > 0) {
                metaHtml += `<div><p class="text-[10px] font-bold uppercase tracking-[0.15em] text-content-tertiary mb-2">Signals</p><ul class="space-y-2">`;
                model.enterpriseSignals.forEach(signal => {
                    metaHtml += `<li class="font-mono text-[13px] text-content-secondary flex items-start gap-2"><span class="text-accent-secondary">›</span> ${signal}</li>`;
                });
                metaHtml += `</ul></div>`;
            }
            metaHtml += `</div>`;
            return metaHtml;
        });

        // Features Row (Interactive Accordion)
        html += `
            <div class="scroll-mt-32">
                <div class="flex items-center gap-4 mb-6">
                    <h3 class="text-xs font-extrabold uppercase tracking-[0.2em] text-content-primary shrink-0">Model Capabilities & Data Feeds</h3>
                    <div class="h-[1px] flex-1 bg-border-strong"></div>
                    <button id="toggle-features-btn" class="text-[10px] font-bold uppercase tracking-wider text-accent-secondary hover:text-accent-primary transition-colors flex items-center gap-1 shrink-0 bg-surface px-3 py-1.5 rounded-full border border-border-subtle">
                        ${isFeaturesExpanded ? "Collapse Features −" : "Expand Features +"}
                    </button>
                </div>
        `;

        if (isFeaturesExpanded) {
            html += `<div class="grid grid-cols-1 gap-y-10 gap-x-8 ${colClass} divide-y lg:divide-y-0 lg:divide-x divide-border-subtle pt-4 pb-8 transition-all duration-500 overflow-hidden" id="features-accordion">`;
            selectedModels.forEach((model, idx) => {
                html += `<div class="animate-fade-in ${idx !== 0 ? 'pt-6 lg:pt-0 lg:pl-8' : 'pr-4 lg:pr-8'}"><ul class="space-y-6">`;
                model.features.forEach((feature, fIdx) => {
                    html += `
                        <li class="flex gap-4 items-start group">
                            <span class="font-mono text-[10px] font-bold text-content-tertiary bg-surface border border-border-subtle rounded-full w-6 h-6 flex items-center justify-center shrink-0 select-none transition-colors group-hover:border-accent-secondary group-hover:text-accent-primary">${fIdx + 1}</span>
                            <p class="text-[14px] leading-[1.65] text-content-secondary font-medium transition-colors group-hover:text-content-primary">${feature}</p>
                        </li>
                    `;
                });
                html += `</ul></div>`;
            });
            html += `</div>`;
        }

        html += `</div></div>`;
        matrixContainer.innerHTML = html;

        // Attach event listener to accordion toggle
        const toggleFeaturesBtn = document.getElementById('toggle-features-btn');
        if (toggleFeaturesBtn) {
            toggleFeaturesBtn.addEventListener('click', () => {
                isFeaturesExpanded = !isFeaturesExpanded;
                renderMatrix();
            });
        }
    }

    function render() {
        renderToggles();
        renderMatrix();
    }

    // Add animation style block dynamically
    if (!document.getElementById('matrix-animations')) {
        const style = document.createElement('style');
        style.id = 'matrix-animations';
        style.textContent = `
            @keyframes fadeInSlide {
                from { opacity: 0; transform: translateX(20px); }
                to { opacity: 1; transform: translateX(0); }
            }
            .animate-fade-in {
                animation: fadeInSlide 0.4s ease-out forwards;
            }
        `;
        document.head.appendChild(style);
    }

    // Init
    render();
});
</script>

<?php get_footer(); ?>
