<?php
/* Template Name: Developer Portal Prototype */
get_header();
?>

<main class="min-h-screen bg-root pb-24 font-sans text-content-primary">
  
  <!-- ── Editorial Hero ── -->
  <section class="relative border-b border-border-subtle bg-root pt-16 pb-16 lg:pt-24 lg:pb-24 overflow-hidden">
    <!-- Dot-grid texture -->
    <div
      class="pointer-events-none absolute inset-0 opacity-[0.04] z-10"
      style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 26px 26px"
    ></div>
    <div class="pointer-events-none absolute top-0 right-0 h-80 w-80 rounded-full bg-accent-secondary/5 blur-[100px] z-10"></div>

    <!-- Background Image fading from right -->
    <div class="absolute inset-0 z-0 hidden lg:block pointer-events-none">
      <img 
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/placeholders/data_dashboard.png" 
        alt="" 
        class="absolute inset-y-0 right-0 w-[60%] h-full object-cover opacity-100 brightness-110 contrast-125 grayscale" 
      />
      <div class="absolute inset-0 bg-gradient-to-r from-root via-root/60 to-transparent"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
    </div>

    <div class="container relative z-10 sa-reveal">
      <div class="max-w-3xl">
        <div class="flex items-center gap-2 mb-4">
          <span class="h-1.5 w-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
          <span class="text-xs font-bold uppercase tracking-[0.15em] text-accent-secondary">
            Internal Prototype
          </span>
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-[56px] font-extrabold tracking-tight text-content-primary leading-[1.05] mb-6">
          Developer &amp; 
          <span
            style="background: linear-gradient(135deg, var(--color-accent-primary) 0%, var(--color-accent-primary-hover) 55%, var(--color-accent-primary) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"
          >
            API Access
          </span>
        </h1>
        <p class="text-[16px] sm:text-[17px] md:text-[18px] text-content-secondary leading-relaxed font-medium text-balance">
          Programmatic access to SemiAnalysis data infrastructure. 
          This portal demonstrates how institutional clients can pipe proprietary intelligence directly into algorithmic models and internal dashboards.
        </p>
      </div>
    </div>
  </section>

  <!-- ── Main Content Area ── -->
  <div class="container pt-16 grid grid-cols-1 lg:grid-cols-[300px_1fr] gap-12 sa-reveal sa-stagger-1">
    
    <!-- Left Sidebar: Products Reference -->
    <aside class="space-y-8">
      <h2 class="text-sm font-bold uppercase tracking-widest text-content-tertiary border-b border-border-subtle pb-2">
        Institutional Products
      </h2>
      <div class="space-y-6">
        <div class="sa-card bg-surface p-5 rounded-xl border border-border-strong">
          <h3 class="text-[16px] font-bold text-content-primary mb-2">GPU Pricing API</h3>
          <p class="text-[13px] text-content-secondary leading-relaxed">
            Official programmatic access for tracking global GPU pricing metrics. Distributed privately.
          </p>
        </div>
        <div class="sa-card bg-surface p-5 rounded-xl border border-border-strong">
          <h3 class="text-[16px] font-bold text-content-primary mb-2">ChipBook</h3>
          <p class="text-[13px] text-content-secondary leading-relaxed">
            The monthly AI & semiconductor tracker. High-level programmatic ingestion available for select enterprise partners.
          </p>
        </div>
      </div>
      
      <div class="sa-card bg-surface/50 p-5 rounded-xl border border-border-strong">
        <h3 class="text-sm font-bold uppercase tracking-widest text-content-primary mb-2">Authentication</h3>
        <p class="text-xs text-content-secondary leading-relaxed mb-4">
          Generate a local test key to authenticate with the prototype endpoints.
        </p>
        
        <!-- Auth State Container -->
        <div id="auth-container">
          <button 
            id="btn-generate-key"
            class="w-full bg-content-primary text-root py-2.5 px-4 text-xs font-bold uppercase tracking-widest rounded hover:bg-content-secondary transition-colors"
          >
            Generate Test Key
          </button>
        </div>
        
        <div id="key-display-container" class="hidden">
          <code id="api-key-text" class="block bg-root border border-border-strong p-3 text-xs font-mono text-accent-primary break-all rounded mb-3">
          </code>
          <button id="btn-regenerate-key" class="text-[10px] uppercase tracking-widest font-bold text-content-tertiary hover:text-content-primary underline">
            Regenerate Key
          </button>
        </div>

      </div>
    </aside>

    <!-- Right Area: Endpoints & Testing -->
    <div class="space-y-12 min-w-0 w-full">
      
      <section>
        <h2 class="text-sm font-bold uppercase tracking-widest text-content-tertiary border-b border-border-subtle pb-2 mb-6">
          Prototype Endpoints
        </h2>
        
        <div class="border border-border-strong rounded-xl overflow-hidden shadow-sm">
          <div class="bg-surface border-b border-border-strong p-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
              <span class="bg-accent-secondary text-root px-2 py-1 text-[10px] font-extrabold uppercase tracking-wider rounded">GET</span>
              <code class="text-sm font-mono text-content-primary font-bold">/api/v1/models</code>
            </div>
            <span class="text-xs text-content-tertiary uppercase tracking-wider font-bold hidden sm:block">Industry Models Prototype</span>
          </div>
          
          <div class="p-6 md:p-8 bg-root">
            <p class="text-[15px] font-medium text-content-secondary mb-8">
              Fetches the complete <code class="text-content-primary bg-surface px-1.5 py-0.5 rounded border border-border-subtle">INDUSTRY_MODELS</code> dataset programmatically. Requires a Bearer token.
            </p>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-8">
              <div>
                <div class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary mb-2">cURL Request</div>
                <pre class="bg-[#0b0b0b] border border-border-strong p-4 rounded-lg overflow-x-auto text-[13px] font-mono text-[#d1d5db]"><span class="text-[#fca5a5]">curl</span> -X GET https://semianalysis.com/api/v1/models \
  -H <span class="text-[#a7f3d0]">"Authorization: Bearer <span id="curl-key-placeholder">sk_test_...</span>"</span></pre>
              </div>
              
              <div>
                <div class="text-[10px] font-bold uppercase tracking-widest text-content-tertiary mb-2">Python (Requests)</div>
                <pre class="bg-[#0b0b0b] border border-border-strong p-4 rounded-lg overflow-x-auto text-[13px] font-mono text-[#d1d5db]"><span class="text-[#fca5a5]">import</span> requests

url = <span class="text-[#a7f3d0]">"https://semianalysis.com/api/v1/models"</span>
headers = &#123;<span class="text-[#a7f3d0]">"Authorization"</span>: <span class="text-[#a7f3d0]">"Bearer <span id="python-key-placeholder">sk_test_...</span>"</span>&#125;

res = requests.get(url, headers=headers)
<span class="text-[#93c5fd]">print</span>(res.json())</pre>
              </div>
            </div>

            <!-- Relocated Full-Width Test Console -->
            <div class="border-t border-border-subtle pt-8">
              <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 gap-4">
                <div>
                  <h3 class="text-sm font-bold uppercase tracking-widest text-content-primary mb-1">Live Test Console</h3>
                  <p class="text-[11px] text-content-tertiary uppercase tracking-wider font-bold">Verify API Integration directly to Backend</p>
                </div>
                <button 
                  id="btn-execute"
                  class="shrink-0 inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-lg bg-content-primary text-root text-[13px] font-bold hover:bg-content-secondary active:scale-95 transition-all duration-200"
                >
                  Execute Request
                </button>
              </div>
              
              <!-- Console Output Container -->
              <div id="console-output-wrapper" class="hidden bg-[#0b0b0b] border border-border-strong rounded-lg overflow-hidden mt-4 shadow-inner transition-all duration-300 opacity-0">
                <div class="bg-surface border-b border-border-strong px-4 py-2 flex items-center justify-between">
                  <span class="text-[10px] font-bold text-content-tertiary uppercase tracking-widest">HTTP Response</span>
                  <span id="console-status-badge" class="text-[11px] font-extrabold uppercase tracking-widest px-2 py-0.5 rounded">
                    <!-- Status injected via JS -->
                  </span>
                </div>
                <div class="p-4 bg-[#0a0a0a]">
                  <pre id="console-json" class="text-[13px] font-mono text-[#a1a1aa] overflow-x-auto max-h-[600px] overflow-y-auto custom-scrollbar whitespace-pre-wrap break-words"></pre>
                </div>
              </div>
            </div>

          </div>
        </div>
        
        <div class="mt-12 text-center text-[13px] text-content-tertiary font-medium">
          <p>For production access to Industry Models, please contact <a href="mailto:sales@semianalysis.com" class="text-content-primary hover:underline font-bold">sales@semianalysis.com</a>.</p>
        </div>
      </section>

    </div>

  </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentApiKey = null;
    
    const btnGenerate = document.getElementById("btn-generate-key");
    const btnRegenerate = document.getElementById("btn-regenerate-key");
    const authContainer = document.getElementById("auth-container");
    const keyDisplayContainer = document.getElementById("key-display-container");
    const apiKeyText = document.getElementById("api-key-text");
    const curlPlaceholder = document.getElementById("curl-key-placeholder");
    const pythonPlaceholder = document.getElementById("python-key-placeholder");
    
    const btnExecute = document.getElementById("btn-execute");
    const consoleWrapper = document.getElementById("console-output-wrapper");
    const consoleBadge = document.getElementById("console-status-badge");
    const consoleJson = document.getElementById("console-json");

    function generateKey() {
        // Generate random string
        const randomString = Math.random().toString(36).substring(2, 15);
        currentApiKey = "sk_test_" + randomString;
        
        // Update DOM elements
        authContainer.classList.add("hidden");
        keyDisplayContainer.classList.remove("hidden");
        apiKeyText.textContent = currentApiKey;
        curlPlaceholder.textContent = currentApiKey;
        pythonPlaceholder.textContent = currentApiKey;
        
        // Hide console on key change
        consoleWrapper.classList.add("hidden");
        consoleWrapper.classList.remove("opacity-100");
        consoleWrapper.classList.add("opacity-0");
    }

    btnGenerate.addEventListener("click", generateKey);
    btnRegenerate.addEventListener("click", generateKey);

    btnExecute.addEventListener("click", async function() {
        btnExecute.textContent = "Fetching...";
        btnExecute.disabled = true;
        
        // Ensure console is visible
        consoleWrapper.classList.remove("hidden");
        // Slight delay for animation
        setTimeout(() => {
            consoleWrapper.classList.remove("opacity-0");
            consoleWrapper.classList.add("opacity-100");
        }, 10);
        
        consoleJson.textContent = "Waiting for response...";
        consoleBadge.className = "text-[11px] font-extrabold uppercase tracking-widest px-2 py-0.5 rounded bg-surface text-content-secondary";
        consoleBadge.textContent = "PENDING";

        try {
            // Direct call to Python FastAPI backend
            const response = await fetch("http://localhost:8000/api/v1/models", {
                method: "GET",
                headers: {
                    "Authorization": currentApiKey ? "Bearer " + currentApiKey : ""
                }
            });
            
            const data = await response.json();
            
            // Set badge styling based on status
            if (response.status === 200) {
                consoleBadge.className = "text-[11px] font-extrabold uppercase tracking-widest px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400";
                consoleBadge.textContent = "200 OK";
            } else if (response.status === 401) {
                consoleBadge.className = "text-[11px] font-extrabold uppercase tracking-widest px-2 py-0.5 rounded bg-red-500/10 text-red-400";
                consoleBadge.textContent = "401 Unauthorized";
            } else {
                consoleBadge.className = "text-[11px] font-extrabold uppercase tracking-widest px-2 py-0.5 rounded bg-red-500/10 text-red-400";
                consoleBadge.textContent = response.status + " Error";
            }
            
            consoleJson.textContent = JSON.stringify(data, null, 2);

        } catch (error) {
            consoleBadge.className = "text-[11px] font-extrabold uppercase tracking-widest px-2 py-0.5 rounded bg-red-500/10 text-red-400";
            consoleBadge.textContent = "500 Error";
            consoleJson.textContent = JSON.stringify({ error: "Network Error: Cannot reach API server" }, null, 2);
        }
        
        btnExecute.textContent = "Execute Request";
        btnExecute.disabled = false;
    });
});
</script>

<?php get_footer(); ?>
