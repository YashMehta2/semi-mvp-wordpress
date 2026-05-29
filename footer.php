<?php
?>
    </main>
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
              Research
            </h4>
            <ul class="space-y-2.5 sm:space-y-3">
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">AI Infrastructure</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">GPU Markets</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Semiconductors</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Cloud Computing</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Data Centers</span></li>
            </ul>
          </div>
          <div class="space-y-3 sm:space-y-4">
            <h4 class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-content-primary">
              Company
            </h4>
            <ul class="space-y-2.5 sm:space-y-3">
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">About</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Contact</span></li>
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

<!-- Coming Soon Modal -->
<div id="coming-soon-modal" class="fixed inset-0 z-[100] flex items-center justify-center opacity-0 invisible transition-all duration-200">
  <div class="absolute inset-0 bg-root/70 backdrop-blur-sm modal-backdrop"></div>
  <div class="relative bg-surface border border-border-strong p-6 sm:p-8 max-w-sm w-full mx-4 shadow-2xl rounded-2xl transform scale-95 transition-transform duration-200 modal-content">
    <button class="modal-close absolute top-4 right-4 text-content-secondary hover:text-content-primary transition-colors">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    <div class="text-accent-primary mb-5">
      <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
    </div>
    <h3 class="text-xl font-bold text-content-primary mb-2">Coming Soon</h3>
    <p class="text-sm text-content-secondary leading-relaxed mb-6">
      This feature or page is not yet implemented in the current MVP phase. Please check back later.
    </p>
    <button class="modal-close w-full bg-accent-primary hover:bg-accent-primary-hover text-root rounded-lg py-3 text-sm font-bold transition-colors active:scale-95 duration-200">
      Okay, got it
    </button>
  </div>
</div>

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
document.addEventListener('DOMContentLoaded', () => {

  const modal = document.getElementById('coming-soon-modal');
  if (!modal) return;
  const content = modal.querySelector('.modal-content');
  const closeBtns = modal.querySelectorAll('.modal-close');
  const backdrop = modal.querySelector('.modal-backdrop');

  const openModal = (e) => {
    const isDropdownToggle = e.currentTarget.id === 'nav-dropdown-btn';
    if (isDropdownToggle) return; // ignore the mobile nav dropdown

    e.preventDefault();
    modal.classList.remove('opacity-0', 'invisible');
    modal.classList.add('opacity-100', 'visible');
    content.classList.remove('scale-95');
    content.classList.add('scale-100');
  };

  const closeModal = () => {
    modal.classList.add('opacity-0', 'invisible');
    modal.classList.remove('opacity-100', 'visible');
    content.classList.add('scale-95');
    content.classList.remove('scale-100');
  };

  document.querySelectorAll('a[href="#"], span.cursor-pointer, .cursor-pointer').forEach(el => {
    // Only attach if it's not the dropdown button
    if (el.id !== 'nav-dropdown-btn' && !el.closest('#nav-dropdown-btn')) {
        el.addEventListener('click', openModal);
    }
  });

  closeBtns.forEach(btn => btn.addEventListener('click', closeModal));
  backdrop.addEventListener('click', closeModal);
});
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
