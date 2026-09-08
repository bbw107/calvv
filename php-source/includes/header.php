<?php
/**
 * Shared header.
 *
 * Pages set these before including it:
 *   $lang       a key from $languages in config.php: 'en' (default), 'es',
 *               'zh' (Simplified) or 'zh-Hant' (Traditional)
 *   $base       './' for pages at the web root, '../' for pages in /es/
 *   $page_slug  filename used by the language switcher, '' for the home page
 *   $page_title <title> text
 */

require __DIR__ . '/config.php';

$lang       = isset($lang) && isset($languages[$lang]) ? $lang : 'en';
$base       = $base ?? './';
$page_slug  = $page_slug ?? '';
$page_title = $page_title ?? 'California';

// lang-<code> on <body> lets the stylesheet absorb the fact that some
// languages set much longer nav labels than English.
$body_class = trim(($body_class ?? '') . ' lang-' . $lang);

// UI strings for this language. Falls back to English if a file is missing.
$t = file_exists(__DIR__ . '/lang/' . $lang . '.php')
    ? require __DIR__ . '/lang/' . $lang . '.php'
    : require __DIR__ . '/lang/en.php';

/** URL of the current page in the given language. */
function lang_url($code, $languages, $base, $page_slug)
{
    return $base . $languages[$code]['path'] . $page_slug;
}

/** Escape for HTML output. */
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="<?php echo e($languages[$lang]['locale']); ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo e($page_title); ?></title>
<?php
// Preload the hero image, home page only ($page_slug is '' there).
//
// The hero is a CSS background-image on <section class="hero_section">, so the
// browser cannot discover it until style.css has downloaded and parsed. That
// made the largest asset on the page the last one requested -- and it is the
// LCP element, so LCP could not finish until it arrived. fetchpriority="high"
// puts it ahead of the stylesheets in the queue.
if ($page_slug === ''):
?>
    <link rel="preload" as="image" href="<?php echo e($base); ?>assets/images/hero_image.webp" fetchpriority="high" media="(min-width: 768px)" />
    <link rel="preload" as="image" href="<?php echo e($base); ?>assets/images/hero_image_mobile.webp" fetchpriority="high" media="(max-width: 767px)" />
<?php endif; ?>
<?php
// Pages set $page_description before including this file. The per-language
// fallback keeps every page from shipping without one, but a page-specific
// description is always better -- search engines routinely ignore duplicates.
$page_description = $page_description ?? ($t['meta']['description'] ?? '');
if ($page_description !== ''):
?>
    <meta name="description" content="<?php echo e($page_description); ?>" />
<?php endif; ?>
<?php foreach ($languages as $code => $meta): ?>
    <link rel="alternate" hreflang="<?php echo e($meta['locale']); ?>" href="<?php echo e($site_url . '/' . $meta['path'] . $page_slug); ?>" />
<?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?php echo e($site_url . '/' . $page_slug); ?>" />
    <?php // Warm up the font hosts early; the two font stylesheets are render-blocking. ?>
    <?php // Site icon. Without these, browsers request /favicon.ico on every page and logged a 404. ?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e($base); ?>assets/images/favicon-32.png" />
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo e($base); ?>assets/images/favicon-48.png" />
    <link rel="apple-touch-icon" href="<?php echo e($base); ?>assets/images/apple-touch-icon.png" />
    <?php // Fonts are self-hosted (see the @font-face block at the top of style.css). Preload the two
          // upright files so text renders in the right font on first paint; italics load on demand. ?>
    <link rel="preload" as="font" type="font/woff2" crossorigin href="<?php echo e($base); ?>assets/font/dm-sans.woff2" />
    <link rel="preload" as="font" type="font/woff2" crossorigin href="<?php echo e($base); ?>assets/font/dm-serif-text.woff2" />
    <?php // Font Awesome removed: no fa- classes exist anywhere on the site, and it was render-blocking. ?>
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/bootstrap.min.css" />
    <?php
    // Cache-buster. Without it, anyone who has visited before keeps their cached
    // style.css and never receives changes -- which silently withheld the whole
    // accessibility layer (focus rings, skip link) from returning visitors.
    // filemtime changes whenever style.css is edited, so the URL changes with it
    // and browsers fetch the new file; between edits it still caches normally.
    $style_v = @filemtime(__DIR__ . '/../style.css') ?: '1';
    ?>
    <link rel="stylesheet" href="<?php echo $base; ?>style.css?v=<?php echo e($style_v); ?>" />
  </head>
  <body<?php echo $body_class ? ' class="' . e($body_class) . '"' : ''; ?>>
    <a class="skip-link" href="#main-content"><?php echo e($t['nav']['skip']); ?></a>
    <header class="site-header">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-2 col-md-4 col-6">
            <div class="logo_div">
              <a href="<?php echo $base . $languages[$lang]['path']; ?>" class="logo"
                ><img src="<?php echo $base; ?>assets/images/logo.svg" width="183" height="40" alt="California Vision and Visage"
              /></a>
            </div>
          </div>
          <div class="col-lg-10 col-md-7 col-5">
            <div class="menu_div">
              <nav class="main_menu" id="mainNav">
                <ul>
                  <li><a href="<?php echo $base . $languages[$lang]['path']; ?>" class="menu_item"><?php echo $t['nav']['home']; ?></a></li>
                  <li><a href="about-us.php" class="menu_item"><?php echo $t['nav']['about']; ?></a></li>
                  <li class="dropdown_menu">
                    <?php
                    // This is a submenu toggle, not a destination -- href="#"
                    // makes a screen reader announce it as a link that goes
                    // nowhere. role="button" plus aria-expanded describes what
                    // it actually is, and aria-controls ties it to the list it
                    // opens. The CSS :focus-within rule does the opening.
                    ?>
                    <a href="#" class="menu_item" role="button" aria-expanded="false"
                       aria-controls="ophthalmic-submenu" aria-haspopup="true"><?php echo $t['nav']['ophthalmic']; ?></a>

                    <ul class="dropdown" id="ophthalmic-submenu">
<?php
$ophthalmic = [
    'blepharospasm', 'cataracts', 'diabetic-eye-disease', 'droopy-eyelids',
    'dry-eye', 'entropion-ectropion', 'epiphora', 'eyelid-skin-cancer',
    'flashes-floaters', 'glaucoma', 'macular-degeneration', 'pink-eye',
    'refractive-error', 'torn-retina','blepharoplasty','botox'
];
foreach ($ophthalmic as $slug):
    // Retina has no page yet.
    $href = $slug === 'retina' ? '#' : $slug . '.php';
?>
                      <li>
                        <a href="<?php echo $href; ?>" class="dropdown_menu_item"
                          ><?php echo $t['conditions'][$slug]; ?></a>
                      </li>
<?php endforeach; ?>
                    </ul>
                  </li>
                  <!-- <li class="dropdown_menu">
                    <a href="#" class="menu_item"><?php echo $t['nav']['aesthetic']; ?></a>
                    <ul class="dropdown">
                      <li>
                        <a href="blepharoplasty.php" class="dropdown_menu_item"
                          ><?php echo $t['conditions']['blepharoplasty']; ?></a>
                      </li>
                      <li>
                        <a href="botox.php" class="dropdown_menu_item"><?php echo $t['conditions']['botox']; ?></a>
                      </li>
                    </ul>
                  </li> -->
                  <li><a href="<?php echo $base; ?>assets/pdf/<?php echo $t['forms_pdf']; ?>" class="menu_item" target="_blank"><?php echo $t['nav']['forms']; ?></a></li>
                  <li><a href="patient-portal.php" class="menu_item"><?php echo $t['nav']['portal']; ?></a></li>
                  <li><a href="contact-us.php" class="menu_item"><?php echo $t['nav']['contact']; ?></a></li>
                </ul>
                <div class="header-btn">
                  <a href="contact-us.php" class="btn btnGreen"><?php echo $t['nav']['appointment']; ?></a>
                </div>
              </nav>
              <div class="header_right">
                <div class="header-btn">
                  <a href="contact-us.php" class="btn btnGreen"><?php echo $t['nav']['appointment']; ?></a>
                </div>
                <div class="language">
                  <?php
                  // The visible label is just "EN"/"ES"/"简"/"繁", which tells a
                  // screen reader nothing about what the control does. aria-label
                  // states the purpose and the current language; aria-expanded and
                  // aria-controls describe it as the disclosure it actually is.
                  $lang_switch_label = $t['nav']['lang_switch'] . ' — ' . $languages[$lang]['name'];
                  ?>
                  <a href="javascript:void(0);" class="language-toggle" role="button"
                     aria-label="<?php echo e($lang_switch_label); ?>"
                     aria-expanded="false" aria-controls="language-dropdown" aria-haspopup="true">
                      <img src="<?php echo $base; ?>assets/images/global.svg" alt="">
                      <span aria-hidden="true"><?php echo e($languages[$lang]['label']); ?></span>
                  </a>
                  <ul class="language-dropdown" id="language-dropdown">
<?php foreach ($languages as $code => $meta): ?>
                      <li><a href="<?php echo e(lang_url($code, $languages, $base, $page_slug)); ?>"><img src="<?php echo $base; ?>assets/images/<?php echo e($meta['flag']); ?>" alt=""><?php echo e($meta['name']); ?></a></li>
<?php endforeach; ?>
                  </ul>
              </div>
                <div class="responsiveToggle">
                  <button class="hamburger" aria-label="<?php echo e($t['nav']['menu_open']); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                  </button>
                  <button class="menu-close" aria-label="<?php echo e($t['nav']['menu_close']); ?>">
                    &times;
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
<script>
  /***********language****/
    const language = document.querySelector('.language');
const toggle = document.querySelector('.language-toggle');

toggle.addEventListener('click', function(e){
    e.preventDefault();
    const open = language.classList.toggle('active');
    // Keep the announced state in sync with the visual state.
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
});

// role="button" leads screen reader users to expect Space to activate this,
// but a link only responds to Enter. Without this it announces one behaviour
// and delivers another.
toggle.addEventListener('keydown', function(e){
    if(e.key === ' ' || e.key === 'Spacebar'){
        e.preventDefault();
        toggle.click();
    }
});

// Escape closes the menu and returns focus to the toggle -- keyboard users
// otherwise have no way out except tabbing through every language link.
document.addEventListener('keydown', function(e){
    if(e.key === 'Escape' && language.classList.contains('active')){
        language.classList.remove('active');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
    }
});

// Close when clicking outside
document.addEventListener('click', function(e){
    if(!language.contains(e.target)){
        language.classList.remove('active');
    }
});
</script>

<main id="main-content" tabindex="-1">
