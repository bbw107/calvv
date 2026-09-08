<?php
/**
 * English UI strings — the chrome that repeats on every page.
 *
 * Page body copy is NOT here. It lives in the page files themselves,
 * because translating long prose through a key/value table is unworkable.
 */

return [

    // Patient form served for this language. Spanish uses the English
    // form until a Spanish version exists; both Chinese variants share one.
    'forms_pdf' => 'Demo-form-ENG.pdf',

    'nav' => [
        'home'       => 'Home',
        'about'      => 'About Us',
        'ophthalmic' => 'Ophthalmic Care',
        'aesthetic'  => 'Aesthetic Service',
        'forms'      => 'Forms',
        'portal'     => 'Patient Portal',
        'contact'    => 'Contact Us',
        'appointment'=> 'Request Appointment',
        'menu_open' => 'Toggle Menu',
        'menu_close'=> 'Close Menu',
        'skip'      => 'Skip to main content',
        'lang_switch'=> 'Change language',
    ],

    'conditions' => [
        'blepharospasm'        => 'Blepharospasm',
        'cataracts'            => 'Cataract',
        'diabetic-eye-disease' => 'Diabetic Eye Disease',
        'droopy-eyelids'       => 'Droopy Eyelids',
        'dry-eye'              => 'Dry Eye',
        'entropion-ectropion'  => 'Entropion &amp; Ectropion',
        'epiphora'             => 'Epiphora',
        'eyelid-skin-cancer'   => 'Eyelid Skin Cancer',
        'flashes-floaters'     => 'Flashes &amp; Floaters',
        'glaucoma'             => 'Glaucoma',
        'macular-degeneration' => 'Macular Degeneration',
        'pink-eye'             => 'Pink Eye',
        'refractive-error'     => 'Refractive Error',
        'retina'               => 'Retina',
        'torn-retina'          => 'Torn Retina',
        'blepharoplasty'       => 'Blepharoplasty',
        'botox'                => 'Botox',
    ],

    // Contact form service dropdown. Keys are the values the handler
    // validates and mails; in English the label is the same as the key.
    'services' => [],

    'footer' => [
        'tagline'     => "Southern California's premier ophthalmic and aesthetic practice — committed to the highest quality of care.",
        'disclaimer'  => 'The material on this site is for informational purposes only and is not a substitute for professional medical advice.',
        'screenreader'=> 'If you are using a screen reader and are having problems. using this website, please call 626-656-6550 .',
        'contact'     => 'Contact',
        'practice'    => 'California Vision and Visage',
        'office_industry' => 'City of Industry Office',
        'office_gabriel'  => 'San Gabriel Office',
        'hours'       => 'Monday to Friday <br>9:00am-5:00pm',
        'between'     => '( Located between Fullerton and Nogales, across the street from Seasons Plaza )',
        'appointment_only' => 'By appointment only',
        'south_of'    => '( South of Huntington Drive )',
        'phone'       => 'Phone',
        'email'       => 'Email',
        'copyright'   => '&copy; %s California Vision and Visage Medical Group, Inc. All rights reserved.',
        'accessibility' => 'Accessibility',
        'legal'       => 'Disclaimer',
        'no_surprises'=> 'No Surprises Act',
        'privacy'     => 'Notice of Privacy Practices',
    ],
    /* Floating quick-links panel (includes/footer.php). */
    'widget' => [
        'aria'        => 'Quick links',
        'call'        => 'Call Us',
        'appointment' => 'Request Appointment',
        'pay'         => 'Ways to Pay',
        'locations'   => 'Our Locations',
        'facebook'    => 'Facebook',
        'new_tab'     => 'opens in a new tab',
    ],

    'form' => [
        'first_name' => 'First Name',
        'last_name'  => 'Last Name',
        'email'      => 'Email',
        'phone'      => 'Phone Number',
        'service'    => 'What service you want ?',
        'message'    => 'Message',
        'submit'     => 'Submit',
        'success'    => "Thank you — your message has been sent. We'll be in touch shortly.",
        'err_first'  => 'Please enter your first name.',
        'err_email'  => 'Please enter a valid email address.',
        'err_message'=> 'Please enter a message.',
        'err_service'=> 'Please choose a service from the list.',
        'err_send'   => 'Sorry — we could not send your message just now. Please call us on 626-810-0689.',
    ],
];
