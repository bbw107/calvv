<?php
/**
 * Site-wide settings shared by the header and footer.
 */

// Absolute URL, no trailing slash. Used to build hreflang tags, which
// must be absolute. Change this when the site moves to its live domain.
$site_url = 'https://calvv.com';

/**
 * Languages the site is published in.
 *
 *   path    folder under the web root -- English is served from the root,
 *           so its path is empty.
 *   locale  BCP 47 tag for <html lang> and hreflang. MUST use hyphens,
 *           not underscores -- "zh_CN" is invalid in HTML, "zh-CN" is not.
 *           For Chinese, the SCRIPT subtag is what matters, not the region:
 *           zh-Hans = Simplified, zh-Hant = Traditional. Search engines and
 *           browsers pick the right variant from those; "zh" alone is
 *           ambiguous and "zh-CN" only says "China", not which script.
 *   cjk     true loads the Noto CJK fallback; DM Sans and DM Serif Text
 *           contain no Chinese glyphs at all.
 *
 * Add a language here and it appears in the switcher, the hreflang tags
 * and the font loading automatically.
 */
$languages = [
    'en' => [
        'label'  => 'EN',
        'name'   => 'English',
        'flag'   => 'english.svg',
        'path'   => '',
        'locale' => 'en',
        'cjk'    => false,
    ],
    'es' => [
        'label'  => 'ES',
        'name'   => 'Español',
        'flag'   => 'spanish.svg',
        'path'   => 'es/',
        'locale' => 'es',
        'cjk'    => false,
    ],
    'zh' => [
        'label'  => '简',
        'name'   => '简体中文',
        'flag'   => 'foreign-language.svg',
        'path'   => 'zh/',
        'locale' => 'zh-Hans',
        'cjk'    => true,
    ],
    'zh-Hant' => [
        'label'  => '繁',
        'name'   => '繁體中文',
        'flag'   => 'foreign-language.svg',
        'path'   => 'zh-hant/',
        'locale' => 'zh-Hant',
        'cjk'    => true,
    ],
];
