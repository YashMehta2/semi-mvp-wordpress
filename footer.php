<?php
?>
    </main>
    <footer class="border-t border-border-subtle bg-root pt-12 sm:pt-14 pb-8">
      <div class="container">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-10 mb-10 sm:mb-12">
          <div class="col-span-2 sm:col-span-2 md:col-span-1 space-y-4">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/logo.png"
              alt="SemiAnalysis"
              width="138"
              height="57"
              class="h-7 sm:h-8 w-auto object-contain"
            />
            <p class="text-sm text-content-secondary leading-relaxed max-w-xs">
              Premium intelligence on AI, semiconductors, cloud infrastructure, and the supply chains that power them.
            </p>
            <div class="flex gap-4 text-xs text-content-tertiary">
              <span class="hover:text-accent-secondary transition-colors cursor-pointer">Twitter</span>
              <span class="hover:text-accent-secondary transition-colors cursor-pointer">LinkedIn</span>
              <span class="hover:text-accent-secondary transition-colors cursor-pointer">Substack</span>
            </div>
          </div>
          <div class="space-y-3 sm:space-y-4">
            <h4 class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-content-primary">
              Research &amp; Archive
            </h4>
            <ul class="space-y-2.5 sm:space-y-3">
              <li><a href="/research" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Research Briefings</a></li>
              <li><a href="/models" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Industry Models</a></li>
              <li><a href="/products" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Data Products Hub</a></li>
            </ul>
          </div>
          <div class="space-y-3 sm:space-y-4">
            <h4 class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-content-primary">
              Platform &amp; Tools
            </h4>
            <ul class="space-y-2.5 sm:space-y-3">
              <li><a href="/compare" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Model Comparison</a></li>
              <li><a href="/products/preview" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Schema Explorer</a></li>
              <li><a href="/developers" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Developer Portal</a></li>
            </ul>
          </div>
          <div class="space-y-3 sm:space-y-4">
            <h4 class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-content-primary">
              Company
            </h4>
            <ul class="space-y-2.5 sm:space-y-3">
              <li><a href="/about" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">About Us</a></li>
              <li><a href="/subscribe" class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150">Subscription Plans</a></li>
            </ul>
          </div>
          <div class="space-y-3 sm:space-y-4">
            <h4 class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-content-primary">
              Legal
            </h4>
            <ul class="space-y-2.5 sm:space-y-3">
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Privacy Policy</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Terms of Service</span></li>
            </ul>
          </div>
        </div>
        <div class="border-t border-border-subtle pt-6 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-content-tertiary">
          <p>© 2026 SemiAnalysis. All rights reserved.</p>
          <p class="text-content-tertiary opacity-70 text-center sm:text-right">
            Bridging the gap between the world's most important industry and business.
          </p>
        </div>
      </div>
    </footer>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("sa-visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });
    document.querySelectorAll(".sa-reveal, .sa-reveal-fast").forEach(el => {
        observer.observe(el);
    });
});
</script>
<?php wp_footer(); ?>
<script>
    function toggleDropdown() {
        const btn = document.getElementById('nav-dropdown-btn');
        const panel = document.getElementById('nav-dropdown-panel');
        const icon = document.getElementById('nav-dropdown-icon');
        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
        if (isExpanded) {
            btn.setAttribute('aria-expanded', 'false');
            btn.classList.remove('text-accent-secondary', 'bg-accent-secondary/10');
            btn.classList.add('text-content-secondary');
            panel.classList.remove('opacity-100', 'visible');
            panel.classList.add('opacity-0', 'invisible');
            icon.classList.remove('rotate-180');
        } else {
            btn.setAttribute('aria-expanded', 'true');
            btn.classList.add('text-accent-secondary', 'bg-accent-secondary/10');
            btn.classList.remove('text-content-secondary');
            panel.classList.remove('opacity-0', 'invisible');
            panel.classList.add('opacity-100', 'visible');
            icon.classList.add('rotate-180');
        }
    }
    document.addEventListener('click', function(e) {
        const container = document.getElementById('nav-dropdown-container');
        const btn = document.getElementById('nav-dropdown-btn');
        if (container && btn && btn.getAttribute('aria-expanded') === 'true') {
            if (!container.contains(e.target)) {
                toggleDropdown();
            }
        }
    });
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            document.getElementById('mobile-drawer').classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('mobile-drawer-inner').classList.remove('translate-y-0');
            document.getElementById('mobile-drawer-inner').classList.add('-translate-y-4');
            document.body.classList.remove('overflow-hidden');
        }
    });
</script>



<script>
/* ── Scroll-reveal: IntersectionObserver (mirrors Next.js ScrollReveal component) ── */
(function() {
    function initReveal() {
        var els = document.querySelectorAll('.sa-reveal');
        if (!els.length) return;
        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('sa-visible');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
            els.forEach(function(el) { io.observe(el); });
        } else {
            /* Fallback for old browsers */
            els.forEach(function(el) { el.classList.add('sa-visible'); });
        }
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initReveal);
    } else {
        initReveal();
    }
})();
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const guestBtns = [document.getElementById('auth-btn-guest'), document.getElementById('auth-btn-guest-mobile')];
    const proBtns = [document.getElementById('auth-btn-pro'), document.getElementById('auth-btn-pro-mobile')];

    function setAuthState(isPro) {
        localStorage.setItem('semi_mock_auth_is_pro', isPro ? 'true' : 'false');
        if (isPro) {
            document.body.classList.add('is-pro-member');
            guestBtns.forEach(btn => {
                if (btn) {
                    btn.classList.remove('bg-white/10', 'text-content-primary');
                    btn.classList.add('text-content-secondary', 'hover:text-content-primary');
                }
            });
            proBtns.forEach(btn => {
                if (btn) {
                    btn.classList.remove('text-content-secondary', 'hover:text-content-primary');
                    btn.classList.add('bg-accent-primary', 'text-root');
                }
            });
        } else {
            document.body.classList.remove('is-pro-member');
            guestBtns.forEach(btn => {
                if (btn) {
                    btn.classList.add('bg-white/10', 'text-content-primary');
                    btn.classList.remove('text-content-secondary', 'hover:text-content-primary');
                }
            });
            proBtns.forEach(btn => {
                if (btn) {
                    btn.classList.remove('bg-accent-primary', 'text-root');
                    btn.classList.add('text-content-secondary', 'hover:text-content-primary');
                }
            });
        }
    }

    // Initialize state
    const savedIsPro = localStorage.getItem('semi_mock_auth_is_pro') === 'true';
    setAuthState(savedIsPro);

    // Event listeners
    guestBtns.forEach(btn => {
        if (btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                setAuthState(false);
            });
        }
    });
    proBtns.forEach(btn => {
        if (btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                setAuthState(true);
            });
        }
    });
});
</script>
</body>
</html>
