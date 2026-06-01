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
    $model = reset($all_models);
}
$total_features = !empty($model['features']) ? count($model['features']) : 0;

$visual_images = [
    'supply-chain'  => get_template_directory_uri() . '/assets/placeholders/supply-chain.png',
    'cloud'         => get_template_directory_uri() . '/assets/placeholders/data_dashboard.png',
    'architecture'  => get_template_directory_uri() . '/assets/placeholders/blueprint.png',
    'semiconductor' => get_template_directory_uri() . '/assets/placeholders/wafer.png',
];
$hero_image = $visual_images[$model['visualType']] ?? (get_template_directory_uri() . '/assets/placeholders/data_dashboard.png');

get_header();
?>
<main class="min-h-screen bg-root pb-24">

    <!-- Page Hero -->
    <section class="relative border-b border-border-subtle bg-root pt-14 pb-16 overflow-hidden">
        <!-- Warm glow -->
        <div class="absolute inset-0 z-0 pointer-events-none bg-[radial-gradient(ellipse_at_60%_0%,rgba(247,176,65,0.06),transparent_55%)]"></div>
        <!-- Fine dot grid -->
        <div class="pointer-events-none absolute inset-0 opacity-[0.035] z-0"
             style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 22px 22px;"></div>

        <!-- Model-specific hero background image — right side spread, matching /models hero style -->
        <div class="absolute inset-0 z-0">
            <img src="<?php echo esc_url($hero_image); ?>" alt=""
                 class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-60 grayscale contrast-125 brightness-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-[10px] sm:text-[11px] text-content-tertiary font-bold tracking-[0.22em] uppercase mb-10">
                <a href="/" class="hover:text-accent-secondary transition-colors duration-150">Home</a>
                <span class="opacity-40">/</span>
                <a href="/models" class="hover:text-accent-secondary transition-colors duration-150">Models</a>
                <span class="opacity-40">/</span>
                <span class="text-content-secondary truncate"><?php echo esc_html($model['title']); ?></span>
            </nav>

            <div class="max-w-[52rem]">
                <!-- Amber editorial rule -->
                <div class="w-10 h-[3px] bg-accent-secondary mb-8 rounded-sm"></div>

                <h1 class="text-4xl sm:text-5xl md:text-[60px] lg:text-[72px] font-extrabold tracking-tighter text-content-primary leading-[1.03] mb-10 text-balance">
                    <?php echo esc_html($model['title']); ?>
                </h1>

                <!-- Description as blockquote with left rule -->
                <blockquote class="border-l-[3px] border-accent-secondary pl-7 text-[17px] sm:text-[19px] md:text-[21px] text-content-secondary leading-[1.65] font-medium italic text-balance">
                    <?php echo esc_html($model['description']); ?>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Body -->
    <section class="pt-16 pb-4">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-14 lg:gap-20 items-start">

                <!-- Left: Editorial body copy -->
                <div class="lg:col-span-7 space-y-14">

                    <!-- Content paragraphs -->
                    <?php if (!empty($model['content'])): ?>
                    <div class="space-y-7">
                        <?php $content_count = count($model['content']); ?>
                        <?php foreach ($model['content'] as $idx => $para): ?>
                            <?php if ($idx === 0): ?>
                                <!-- First paragraph — drop-cap -->
                                <p class="text-[16px] sm:text-[17px] leading-[1.8] text-content-secondary font-medium
                                          first-letter:text-[4.5rem] first-letter:font-extrabold first-letter:text-accent-secondary
                                          first-letter:float-left first-letter:leading-[0.78] first-letter:mr-3 first-letter:mt-2
                                          first-letter:tracking-tighter">
                                    <?php echo esc_html($para); ?>
                                </p>
                            <?php elseif ($idx === $content_count - 1): ?>
                                <!-- Last paragraph — lighter, separated -->
                                <p class="text-[14px] sm:text-[15px] leading-[1.8] text-content-tertiary font-medium pt-6 border-t border-border-subtle">
                                    <?php echo esc_html($para); ?>
                                </p>
                            <?php else: ?>
                                <p class="text-[15px] sm:text-[16px] leading-[1.8] text-content-secondary font-medium">
                                    <?php echo esc_html($para); ?>
                                </p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Features list — numbered editorial style -->
                    <?php if (!empty($model['features'])): ?>
                    <div>
                        <!-- Section label -->
                        <div class="flex items-center gap-4 mb-8">
                            <span class="text-[10px] font-bold uppercase tracking-[0.25em] text-content-tertiary">
                                What's Included
                            </span>
                            <div class="h-px flex-1 bg-border-subtle"></div>
                            <span class="font-mono text-[10px] text-content-tertiary tracking-wider">
                                <?php echo str_pad($total_features, 2, '0', STR_PAD_LEFT); ?> datasets
                            </span>
                        </div>

                        <!-- Numbered rows -->
                        <ol class="space-y-0">
                            <?php foreach ($model['features'] as $idx => $feature): ?>
                            <li class="group flex gap-5 py-5 border-b border-border-subtle last:border-b-0
                                       hover:bg-white/[0.015] -mx-3 px-3 rounded transition-colors duration-150">
                                <!-- Number -->
                                <span class="font-mono text-[11px] font-bold text-accent-secondary/70
                                             group-hover:text-accent-secondary transition-colors duration-150
                                             pt-0.5 w-6 shrink-0 select-none">
                                    <?php echo str_pad($idx + 1, 2, '0', STR_PAD_LEFT); ?>
                                </span>
                                <!-- Text -->
                                <p class="text-[14px] sm:text-[15px] text-content-secondary leading-relaxed font-medium
                                          group-hover:text-content-primary transition-colors duration-150">
                                    <?php echo esc_html($feature); ?>
                                </p>
                            </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                    <?php endif; ?>

                </div>

                <!-- Right: Sticky inquiry form -->
                <div class="lg:col-span-5 lg:sticky lg:top-24">
                    <div class="relative overflow-hidden rounded-xl border border-border-strong bg-surface shadow-2xl">
                        <!-- Gradient amber top-edge accent -->
                        <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-accent-secondary to-transparent"></div>

                        <!-- Model image banner -->
                        <div class="relative h-36 overflow-hidden border-b border-border-strong">
                            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($model['title']); ?>"
                                 class="w-full h-full object-cover grayscale opacity-40" />
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-surface"></div>
                        </div>

                        <div class="p-7 sm:p-9">
                            <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-accent-secondary mb-5">
                                Institutional Access
                            </p>

                            <h3 class="text-[22px] font-extrabold tracking-tight text-content-primary leading-snug mb-3">
                                Request access to this model
                            </h3>
                            <p class="text-[13px] text-content-secondary leading-relaxed mb-7 font-medium">
                                This model is available exclusively to enterprise clients. Our analyst team will be in touch to discuss your requirements.
                            </p>

                            <div class="border-t border-border-subtle pt-7" id="model-inquiry-container">
                                <form id="b2b-model-form" class="space-y-4">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="space-y-1.5 text-left">
                                            <label for="firstName" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">First Name</label>
                                            <input type="text" id="firstName" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                                            <p id="error-firstName" class="text-[10px] text-red-400 font-bold mt-1 hidden"></p>
                                        </div>
                                        <div class="space-y-1.5 text-left">
                                            <label for="lastName" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Last Name</label>
                                            <input type="text" id="lastName" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                                            <p id="error-lastName" class="text-[10px] text-red-400 font-bold mt-1 hidden"></p>
                                        </div>
                                    </div>
                                    <div class="space-y-1.5 text-left">
                                        <label class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Model</label>
                                        <div class="relative">
                                            <select id="selectedModel" class="w-full h-10 px-3 pr-8 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary appearance-none focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors">
                                                <?php foreach ($all_models as $key => $m): ?>
                                                <option value="<?php echo esc_attr($key); ?>" <?php selected($slug, $key); ?>><?php echo esc_html($m['title']); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-content-tertiary">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-1.5 text-left">
                                        <label for="email" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Work Email</label>
                                        <input type="email" id="email" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                                        <p id="error-email" class="text-[10px] text-red-400 font-bold mt-1 hidden"></p>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="space-y-1.5 text-left">
                                            <label for="company" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Company</label>
                                            <input type="text" id="company" class="w-full h-10 px-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors" />
                                            <p id="error-company" class="text-[10px] text-red-400 font-bold mt-1 hidden"></p>
                                        </div>
                                        <div class="space-y-1.5 text-left">
                                            <label for="companySize" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">Company Size</label>
                                            <div class="relative">
                                                <select id="companySize" class="w-full h-10 px-3 pr-8 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary appearance-none focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors">
                                                    <option value="">Select size...</option>
                                                    <option value="1-10">1 - 10 employees</option>
                                                    <option value="11-50">11 - 50 employees</option>
                                                    <option value="51-200">51 - 200 employees</option>
                                                    <option value="201-1000">201 - 1,000 employees</option>
                                                    <option value="1000+">1,000+ employees</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-content-tertiary">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                </div>
                                            </div>
                                            <p id="error-companySize" class="text-[10px] text-red-400 font-bold mt-1 hidden"></p>
                                        </div>
                                    </div>
                                    <div class="space-y-1.5 text-left">
                                        <label for="message" class="text-[11px] font-bold uppercase tracking-widest text-content-secondary">How will you use this model?</label>
                                        <textarea id="message" rows="3" placeholder="Describe your use case or dataset requirements (min 20 chars)..." class="w-full p-3 rounded-lg bg-surface-hover border border-border-strong text-sm text-content-primary focus:outline-none focus:border-accent-secondary/50 focus:ring-1 focus:ring-accent-secondary/50 transition-colors resize-none"></textarea>
                                        <p id="error-message" class="text-[10px] text-red-400 font-bold mt-1 hidden"></p>
                                    </div>
                                    <button type="submit" class="w-full h-12 mt-3 rounded-lg bg-accent-secondary text-root text-sm font-bold hover:bg-accent-secondary/90 transition-colors duration-200 active:scale-95">
                                        Submit Inquiry
                                    </button>
                                    <div class="text-[10px] text-center font-bold text-content-tertiary mt-3">
                                        By submitting, you agree to our <button type="button" onclick="alert('Coming soon!')" class="underline hover:text-content-secondary">Privacy Policy</button>.
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("b2b-model-form");
    if (!form) return;

    const personalDomains = [
        "gmail.com", "yahoo.com", "hotmail.com", "outlook.com", 
        "aol.com", "icloud.com", "mail.com", "zoho.com", 
        "yandex.com", "protonmail.com", "proton.me", "gmx.com"
    ];

    const modelNames = {
        "accelerator-hbm-model": "Accelerator & HBM Model",
        "ai-cloud-tco-model": "AI Cloud TCO Model",
        "ai-networking-model": "AI Networking Model",
        "datacenter-industry-model": "Datacenter Industry Model",
        "wafer-fab-model": "Wafer Fab Equipment Model"
    };

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        // Clear previous errors
        document.querySelectorAll("[id^='error-']").forEach(el => {
            el.classList.add("hidden");
            el.textContent = "";
        });
        document.querySelectorAll("input, select, textarea").forEach(el => {
            el.classList.remove("border-red-500/50");
        });

        let hasError = false;

        const firstName = document.getElementById("firstName");
        const lastName = document.getElementById("lastName");
        const email = document.getElementById("email");
        const company = document.getElementById("company");
        const companySize = document.getElementById("companySize");
        const message = document.getElementById("message");
        const selectedModel = document.getElementById("selectedModel");

        function showError(inputEl, errorElId, msg) {
            const errorEl = document.getElementById(errorElId);
            if (errorEl) {
                errorEl.textContent = msg;
                errorEl.classList.remove("hidden");
            }
            inputEl.classList.add("border-red-500/50");
            hasError = true;
        }

        if (!firstName.value.trim()) {
            showError(firstName, "error-firstName", "First name is required");
        }
        if (!lastName.value.trim()) {
            showError(lastName, "error-lastName", "Last name is required");
        }
        if (!company.value.trim()) {
            showError(company, "error-company", "Company name is required");
        }
        if (!companySize.value) {
            showError(companySize, "error-companySize", "Company size is required");
        }

        const emailVal = email.value.trim();
        if (!emailVal) {
            showError(email, "error-email", "Work email is required");
        } else {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailVal)) {
                showError(email, "error-email", "Please enter a valid email address");
            } else {
                const domain = emailVal.split("@")[1]?.toLowerCase();
                if (personalDomains.includes(domain)) {
                    showError(email, "error-email", "Please enter a corporate email. We do not accept personal domains.");
                }
            }
        }

        const messageVal = message.value.trim();
        if (!messageVal) {
            showError(message, "error-message", "Use case description is required");
        } else if (messageVal.length < 20) {
            showError(message, "error-message", "Please provide more details (minimum 20 characters)");
        }

        if (hasError) return;

        // Render success state
        const container = document.getElementById("model-inquiry-container");
        const selectedModelVal = selectedModel.value;
        const modelName = modelNames[selectedModelVal] || "AI Cloud TCO Model";
        const referenceId = "SA-RQ-" + Math.floor(100000 + Math.random() * 900000);

        container.innerHTML = `
            <div class="space-y-6 text-left animate-fade-in">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500/10 text-emerald-400 shrink-0">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-emerald-400">Inquiry Received</h4>
                        <p class="text-xs text-content-tertiary font-mono">Ref ID: ${referenceId}</p>
                    </div>
                </div>

                <div class="border-t border-b border-border-subtle py-4 space-y-3">
                    <p class="text-[13px] text-content-secondary leading-relaxed">
                        Thank you, <strong class="text-content-primary">${escapeHTML(firstName.value)} ${escapeHTML(lastName.value)}</strong>. Your request for access to the <strong class="text-content-primary">${modelName}</strong> has been registered.
                    </p>
                    <div class="bg-surface-hover/30 p-3.5 rounded-lg border border-border-subtle/50 text-[12px] space-y-1 text-content-secondary">
                        <div><span class="text-content-tertiary font-mono">Company:</span> ${escapeHTML(company.value)} (${escapeHTML(companySize.value)})</div>
                        <div><span class="text-content-tertiary font-mono">Work Email:</span> ${escapeHTML(emailVal)}</div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary">
                        Next Steps Checklist
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-xs text-content-secondary">
                            <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded bg-emerald-500/10 text-emerald-400 text-[10px] font-bold">✓</span>
                            <div>
                                <strong class="text-content-primary">Work Email Verified</strong>
                                <p class="text-[10px] text-content-tertiary">Corporate domain lookup complete.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 text-xs text-content-secondary">
                            <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded border border-border-strong text-content-tertiary text-[10px] font-bold">2</span>
                            <div>
                                <strong class="text-content-primary">Institutional Profile Review</strong>
                                <p class="text-[10px] text-content-tertiary">Our analyst team will verify your firm size and use case.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 text-xs text-content-secondary">
                            <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded border border-border-strong text-content-tertiary text-[10px] font-bold">3</span>
                            <div>
                                <strong class="text-content-primary">Consultation Call Setup</strong>
                                <p class="text-[10px] text-content-tertiary">A scheduling link will be sent to your work email.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        `;
    });

    function escapeHTML(str) {
        return str.replace(/[&<>'"]/g, 
            tag => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                "'": '&#39;',
                '"': '&quot;'
            }[tag] || tag)
        );
    }
});
</script>
<?php get_footer(); ?>
