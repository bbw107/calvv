<?php
/**
 * Chinese (Traditional) UI strings — draft.
 *
 * This is NOT a character-level conversion of zh.php. Taiwan/Hong Kong
 * ophthalmology uses different terms, not just different characters:
 *   乾眼症   not 干眼症      (干 is the wrong character entirely)
 *   黃斑部病變 not 黄斑变性
 *   人工水晶體 not 人工晶状体
 *   雷射     not 激光
 *   次專科   not 亚专科
 * A tool that only maps 简 -> 繁 gets the characters right and the
 * terminology wrong, which reads as machine-translated to a native speaker.
 *
 * Replace with your reviewed translations. Do NOT translate: array keys,
 * 'California Vision and Visage', street addresses, phone numbers, or
 * 'Botox' / 'BOTOX®'.
 */

return [

    // Patient form served for this language. Spanish uses the English
    // form until a Spanish version exists; both Chinese variants share one.
    'forms_pdf' => 'Demo-form-CHN.pdf',

    'nav' => [
        'home'       => '首頁',
        'about'      => '關於我們',
        'ophthalmic' => '眼科診療',
        'aesthetic'  => '醫學美容',
        'forms'      => '表格下載',
        'portal'     => '患者專區',
        'contact'    => '聯絡我們',
        'appointment'=> '預約看診',
        'menu_open' => '開啟選單',
        'menu_close'=> '關閉選單',
        'skip'      => '跳至主要內容',
        'lang_switch'=> '切換語言',
    ],

    'conditions' => [
        'blepharospasm'        => '眼瞼痙攣',
        'cataracts'            => '白內障',
        'diabetic-eye-disease' => '糖尿病眼病變',
        'droopy-eyelids'       => '眼瞼下垂',
        'dry-eye'              => '乾眼症',
        'entropion-ectropion'  => '眼瞼內翻與外翻',
        'epiphora'             => '溢淚症',
        'eyelid-skin-cancer'   => '眼瞼皮膚癌',
        'flashes-floaters'     => '閃光與飛蚊症',
        'glaucoma'             => '青光眼',
        'macular-degeneration' => '黃斑部病變',
        'pink-eye'             => '結膜炎',
        'refractive-error'     => '屈光不正',
        'retina'               => '視網膜',
        'torn-retina'          => '視網膜裂孔',
        'blepharoplasty'       => '眼瞼整形術',
        'botox'                => '保妥適 (Botox)',
    ],

    // Keys are the English values the handler validates and mails.
    'services' => [
        'Cataract'              => '白內障',
        'Glaucoma'              => '青光眼',
        'Dry Eye'               => '乾眼症',
        'Diabetic Eye Disease'  => '糖尿病眼病變',
        'Macular Degeneration'  => '黃斑部病變',
        'Droopy Eyelids'        => '眼瞼下垂',
        'Entropion & Ectropion' => '眼瞼內翻與外翻',
        'Epiphora'              => '溢淚症',
        'Eyelid Skin Cancer'    => '眼瞼皮膚癌',
        'Flashes & Floaters'    => '閃光與飛蚊症',
        'Pink Eye'              => '結膜炎',
        'Refractive Error'      => '屈光不正',
        'Torn Retina'           => '視網膜裂孔',
        'Blepharoplasty'        => '眼瞼整形術',
        'Blepharospasm'         => '眼瞼痙攣',
        'Botox'                 => '保妥適 (Botox)',
    ],

    'footer' => [
        'tagline'     => '南加州領先的眼科與醫學美容診所 — 致力於提供最高品質的醫療服務。',
        'disclaimer'  => '本網站內容僅供參考，不能取代專業醫療建議。',
        'screenreader'=> '若您使用螢幕閱讀器，在瀏覽本網站時遇到困難，請致電 626-656-6550。',
        'contact'     => '聯絡資訊',
        'practice'    => 'California Vision and Visage',
        'office_industry' => 'City of Industry 診所',
        'office_gabriel'  => 'San Gabriel 診所',
        'hours'       => '週一至週五 <br>上午9:00–下午5:00',
        'between'     => '（位於 Fullerton 與 Nogales 之間，Seasons Plaza 對面）',
        'appointment_only' => '僅限預約',
        'south_of'    => '（Huntington Drive 以南）',
        'phone'       => '電話',
        'email'       => '電子郵件',
        'copyright'   => '&copy; %s California Vision and Visage Medical Group, Inc. 版權所有。',
        'accessibility' => '無障礙服務',
        'legal'       => '免責聲明',
        'no_surprises'=> '禁止意外帳單法',
        'privacy'     => '隱私權保護須知',
    ],
    /* Floating quick-links panel (includes/footer.php). */
    'widget' => [
        'aria'        => '快速連結',
        'call'        => '致電我們',
        'appointment' => '預約看診',
        'pay'         => '付款方式',
        'locations'   => '診所地點',
        'facebook'    => 'Facebook',
        'new_tab'     => '在新分頁中開啟',
    ],

    'form' => [
        'first_name' => '名字',
        'last_name'  => '姓氏',
        'email'      => '電子郵件',
        'phone'      => '電話號碼',
        'service'    => '您需要哪項服務？',
        'message'    => '留言',
        'submit'     => '送出',
        'success'    => '感謝您的來信 — 我們已收到您的留言，會盡快與您聯絡。',
        'err_first'  => '請填寫您的名字。',
        'err_email'  => '請填寫有效的電子郵件地址。',
        'err_message'=> '請填寫留言內容。',
        'err_service'=> '請從清單中選擇一項服務。',
        'err_send'   => '抱歉，目前無法送出您的留言。請致電 626-810-0689。',
    ],
];
