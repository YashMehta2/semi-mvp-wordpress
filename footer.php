<?php
/**
 * The footer for our theme
 */
?>
    </main><!-- #primary -->

    </main><!-- #primary -->

    <!-- Footer -->
    <footer class="border-t border-border-subtle bg-root pt-12 sm:pt-14 pb-8">
      <div class="container mx-auto px-5 max-w-[1280px]">

        <!-- Top grid: brand + links -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-10 mb-10 sm:mb-12">

          <!-- Brand column — full width on mobile -->
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

          <!-- Link columns -->
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
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Careers</span></li>
              <li><span class="text-xs sm:text-sm text-content-secondary hover:text-accent-secondary transition-colors duration-150 cursor-pointer">Events</span></li>
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

        <!-- Bottom bar -->
        <div class="border-t border-border-subtle pt-6 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-content-tertiary">
          <p>© 2026 SemiAnalysis. All rights reserved.</p>
          <p class="text-content-tertiary opacity-70 text-center sm:text-right">
            Bridging the gap between the world's most important industry and business.
          </p>
        </div>
      </div>
    </footer>
</div><!-- #page -->

<!-- Scroll Reveal Animation Script -->
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
            // Close
            btn.setAttribute('aria-expanded', 'false');
            btn.classList.remove('text-accent-secondary', 'bg-accent-secondary/10');
            btn.classList.add('text-content-secondary');
            panel.classList.remove('opacity-100', 'visible');
            panel.classList.add('opacity-0', 'invisible');
            icon.classList.remove('rotate-180');
        } else {
            // Open
            btn.setAttribute('aria-expanded', 'true');
            btn.classList.add('text-accent-secondary', 'bg-accent-secondary/10');
            btn.classList.remove('text-content-secondary');
            panel.classList.remove('opacity-0', 'invisible');
            panel.classList.add('opacity-100', 'visible');
            icon.classList.add('rotate-180');
        }
    }

    // Close on outside click
    document.addEventListener('click', function(e) {
        const container = document.getElementById('nav-dropdown-container');
        const btn = document.getElementById('nav-dropdown-btn');
        if (container && btn && btn.getAttribute('aria-expanded') === 'true') {
            if (!container.contains(e.target)) {
                toggleDropdown();
            }
        }
    });

    // Close mobile drawer on desktop resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            document.getElementById('mobile-drawer').classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('mobile-drawer-inner').classList.remove('translate-y-0');
            document.getElementById('mobile-drawer-inner').classList.add('-translate-y-4');
            document.body.classList.remove('overflow-hidden');
        }
    });
</script>

</body>
</html>
