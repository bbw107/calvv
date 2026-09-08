</main>

<footer class="footer_section bG_Blue textColor_offWhite">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-xl-4 col-lg-4">
        <div class="footer_LogoDiv">
          <div class="footer_logo">
            <a href="<?php echo $base . $languages[$lang]['path']; ?>" class="logo"><img src="<?php echo $base; ?>assets/images/footer_logo.svg" width="424" height="87" alt="California Vision and Visage" /></a>
            <p><?php echo $t['footer']['tagline']; ?></p>
            <p><?php echo $t['footer']['disclaimer']; ?></p>
            <p><?php echo str_replace('626-656-6550', '<a href="tel:6266566550">626-656-6550</a>', $t['footer']['screenreader']); ?></p>
          </div>
          <?php /* Hidden at client request -- no social accounts in use yet.
          <div class="social_icon">
            <a href="#"><img src="<?php echo $base; ?>assets/images/facebook.svg" alt="Facebook" /></a>
            <a href="#"><img src="<?php echo $base; ?>assets/images/twitter.svg" alt="Twitter" /></a>
            <a href="#"><img src="<?php echo $base; ?>assets/images/insta.svg" alt="Instagram" /></a>
            <a href="#"><img src="<?php echo $base; ?>assets/images/yelp.svg" alt="Yelp" /></a>
          </div>
          */ ?>
        </div>
      </div>
      <div class="col-xl-7 col-lg-8">
        <div class="row footer_menu_row justify-content-end">
          <div class="col-xl-5 col-lg-5">
            <div class="footer_menu">
              <h5 role="heading" aria-level="2"><?php echo $t['footer']['office_industry']; ?></h5>
              <?php /* Hidden at client request: <span><?php echo $t['footer']['practice']; ?></span> */ ?>
              <div class="footer_detils">
                <a href="https://maps.app.goo.gl/maTCmyabc9Gy89xr8">18575 Gale Avenue, Suite 168 <br>City of Industry, CA
                  91748</a>
                <p><?php echo $t['footer']['hours']; ?></p>
                <p><?php echo $t['footer']['between']; ?></p>
                <a href="tel:626-810-0689"><span><?php echo $t['footer']['phone']; ?></span> 626-810-0689</a><br />
                <a href="mailto:info@calvv.com"><span><?php echo $t['footer']['email']; ?></span> info@calvv.com</a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5">
            <div class="footer_menu">
              <h5 role="heading" aria-level="2"><?php echo $t['footer']['office_gabriel']; ?></h5>
              <?php /* Hidden at client request: <span><?php echo $t['footer']['practice']; ?></span> */ ?>
              <div class="footer_detils">
                <a href="https://maps.app.goo.gl/kSzFVrHwd5a5wSrh7">7232 Rosemead Blvd, Suite 202 <br>San Gabriel, CA 91775</a>
                <p><?php echo $t['footer']['appointment_only']; ?></p>
                <p><?php echo $t['footer']['south_of']; ?></p>
                <a href="tel:626-656-6550"><span><?php echo $t['footer']['phone']; ?></span> 626-656-6550</a><br />
                <a href="mailto:info@calvv.com"><span><?php echo $t['footer']['email']; ?></span> info@calvv.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom_footer">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="bottom_footer_left">
            <p><?php printf($t['footer']['copyright'], date('Y')); ?></p>
          </div>
        </div>
        <div class="col-lg-6 footer_col">
          <div class="bottom_footer_left">
            <ul>
              <li><a href="<?php echo $base; ?>assets/pdf/accessibility-statement-<?php echo strtolower($lang); ?>.pdf" target="_blank" rel="noopener"><?php echo $t['footer']['accessibility']; ?></a></li>
              <li><a href="<?php echo $base; ?>assets/pdf/website-disclaimer-<?php echo strtolower($lang); ?>.pdf" target="_blank" rel="noopener"><?php echo $t['footer']['legal']; ?></a></li>
              <li><a href="<?php echo $base; ?>assets/pdf/no-surprises-act-<?php echo strtolower($lang); ?>.pdf" target="_blank" rel="noopener"><?php echo $t['footer']['no_surprises']; ?></a></li>
              <li><a href="<?php echo $base; ?>assets/pdf/notice-of-privacy-practices-<?php echo strtolower($lang); ?>.pdf" target="_blank" rel="noopener"><?php echo $t['footer']['privacy']; ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php
/* Floating quick-links panel (client request, modelled on the reference
   site). Fixed to the right edge on desktop, docked along the bottom on
   phones -- styles are under .side_widget in style.css. It is a <nav>
   with its own label so screen-reader users can jump to it or skip it,
   and every item is a plain link: no JavaScript, nothing to expand.
   The Call button dials the City of Industry main line; San Gabriel is
   appointment-only and both numbers stay in the footer above.
   Ways to Pay goes to Contact Us until the client supplies a payment
   URL, matching the homepage card. */
$w = $t['widget'];
$widget_phone = '626-810-0689';
$widget_home  = $base . $languages[$lang]['path'];
/* PLACEHOLDER -- replace with the practice's real Facebook page URL. */
$widget_facebook = 'https://www.facebook.com/';
?>
<nav class="side_widget" aria-label="<?php echo e($w['aria']); ?>">
  <ul>
    <li>
      <a href="tel:<?php echo $widget_phone; ?>" class="side_btn">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1A17 17 0 0 1 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1l-2.3 2.2z"/></svg>
        <span><?php echo $w['call']; ?></span>
        <span class="visually-hidden"><?php echo $widget_phone; ?></span>
      </a>
    </li>
    <li>
      <a href="contact-us.php" class="side_btn side_btn_primary">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 16H5V9h14v11zM7 11h4v4H7z"/></svg>
        <span><?php echo $w['appointment']; ?></span>
      </a>
    </li>
    <li>
      <a href="contact-us.php" class="side_btn">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2zM6 15h5v2H6z"/></svg>
        <span><?php echo $w['pay']; ?></span>
      </a>
    </li>
    <li>
      <a href="<?php echo $widget_home; ?>#find-us" class="side_btn">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
        <span><?php echo $w['locations']; ?></span>
      </a>
    </li>
    <?php /* Facebook button -- hidden at client request until a page URL exists.
       To restore: delete the opening comment line above and the closing comment line below,
       leave the <li> block itself as it is.
    <li>
      <a href="<?php echo $widget_facebook; ?>" class="side_btn" target="_blank" rel="noopener">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M13.5 22v-8.2h2.8l.4-3.3h-3.2V8.4c0-.9.3-1.6 1.6-1.6h1.7V3.9c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2.4H7.3v3.3h2.8V22h3.4z"/></svg>
        <span><?php echo $w['facebook']; ?></span>
        <span class="visually-hidden">(<?php echo $w['new_tab']; ?>)</span>
      </a>
    </li>
    */ ?>
  </ul>
</nav>

<?php /* jQuery and the Bootstrap JS bundle were removed: nothing on the site calls $(), jQuery() or any data-bs- component; the menus and self-test are plain JavaScript below. */ ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {

    /* Google Maps embeds (homepage FIND US section) are the heaviest thing on the
       site: about 470 KB of script each page load, most of it never seen because
       the maps sit at the bottom. The iframes carry data-src instead of src and
       are loaded only when the visitor scrolls within 300px of them. Browsers
       without IntersectionObserver just load them immediately. */
    const lazyMaps = document.querySelectorAll("iframe[data-src]");
    const loadMap = function(el) { if (!el.src) { el.src = el.getAttribute("data-src"); } };
    const loadAllMaps = function() { lazyMaps.forEach(loadMap); };
    if (lazyMaps.length) {
      /* Two triggers, whichever comes first: the map scrolling near the viewport,
         or the visitor's first interaction of any kind (belt and braces, so the
         maps can never be left unloaded for a real visitor). */
      ["scroll", "pointerdown", "touchstart", "keydown"].forEach(function(ev) {
        window.addEventListener(ev, loadAllMaps, { once: true, passive: true });
      });
      if ("IntersectionObserver" in window) {
        const io = new IntersectionObserver(function(entries) {
          entries.forEach(function(en) { if (en.isIntersecting) { loadMap(en.target); io.unobserve(en.target); } });
        }, { rootMargin: "300px 0px" });
        lazyMaps.forEach(function(el) { io.observe(el); });
      } else {
        loadAllMaps();
      }
    }

    const hamburger = document.querySelector(".hamburger");
    const mainNav = document.getElementById("mainNav");
    const closeBtn = document.querySelector(".menu-close");

    /* The closed drawer is parked off-screen with "right: -100%", not hidden,
       so its 16 condition links and the close button stay in the tab order --
       a keyboard user tabs off the logo and focus vanishes off-screen.

       CSS visibility alone does not fix it: the stylesheet sets
       visibility:visible explicitly on ul.dropdown inside the mobile media
       query, and an explicit value on a descendant overrides the ancestor's
       hidden. The inert attribute removes the whole subtree from the tab order
       and the accessibility tree outright, regardless of the cascade. */
    function setMenuOpen(open) {
      mainNav.classList.toggle("active", open);
      closeBtn.classList.toggle("active", open);
      /* Only below the breakpoint -- above it the nav is the normal desktop bar. */
      const isDrawer = window.matchMedia("(max-width: 1199px)").matches;
      mainNav.inert = isDrawer && !open;
      closeBtn.inert = isDrawer && !open;
      hamburger.setAttribute("aria-expanded", open ? "true" : "false");
    }

    if (hamburger && mainNav && closeBtn) {
      hamburger.setAttribute("aria-expanded", "false");
      hamburger.setAttribute("aria-controls", "mainNav");
      setMenuOpen(false);

      hamburger.addEventListener("click", function() { setMenuOpen(true); });
      closeBtn.addEventListener("click", function() { setMenuOpen(false); });

      /* Escape closes the drawer and returns focus to the hamburger, so a
         keyboard user is never stranded inside it. */
      document.addEventListener("keydown", function(e) {
        if (e.key === "Escape" && mainNav.classList.contains("active")) {
          setMenuOpen(false);
          hamburger.focus();
        }
      });

      /* Re-evaluate on resize: rotating a tablet must not leave the desktop
         nav inert, nor the drawer tabbable. */
      window.addEventListener("resize", function() {
        setMenuOpen(mainNav.classList.contains("active"));
      });
    }


    /* Dropdown toggle below 1199px */
    const dropdownMenus = document.querySelectorAll(
      ".dropdown_menu > .menu_item"
    );

    dropdownMenus.forEach(function(menuItem) {

      menuItem.addEventListener("click", function(e) {

        if (window.innerWidth <= 1199) {

          e.preventDefault();

          const parent = this.closest(".dropdown_menu");
          const dropdown = parent.querySelector(":scope > .dropdown");

          if (dropdown) {
            const open = dropdown.classList.toggle("activeMenu");
            menuItem.setAttribute("aria-expanded", open ? "true" : "false");
          }

        } else {
          /* On desktop the submenu is opened by CSS :focus-within, so the click
             must not navigate to "#" and throw focus back to the top. */
          e.preventDefault();
        }

      });

      const group = menuItem.closest(".dropdown_menu");

      /* Above the breakpoint the submenu is revealed by CSS :focus-within, but
         that pseudo-class is handled inconsistently by older engines. Toggling
         a class on focusin/focusout does the same job deterministically, and
         keeps aria-expanded in step with what is actually on screen. */
      group.addEventListener("focusin", function() {
        if (window.innerWidth > 1199) {
          group.classList.add("submenu-open");
          menuItem.setAttribute("aria-expanded", "true");
        }
      });

      group.addEventListener("focusout", function(e) {
        /* Only collapse once focus has genuinely left the whole group -- not
           while moving between the toggle and its own links. */
        if (!group.contains(e.relatedTarget)) {
          group.classList.remove("submenu-open");
          menuItem.setAttribute("aria-expanded", "false");
        }
      });

      /* Escape closes the submenu and returns focus to its toggle. */
      group.addEventListener("keydown", function(e) {
        if (e.key === "Escape") {
          const dropdown = group.querySelector(":scope > .dropdown");
          if (dropdown) dropdown.classList.remove("activeMenu");
          menuItem.setAttribute("aria-expanded", "false");
          menuItem.focus();
        }
      });

    });

  });
</script>
</body>

</html>