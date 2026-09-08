<?php
/**
 * Spanish UI strings.
 *
 * These were drafted here so the chrome works end to end. Replace them
 * with your DeepL output and have a native speaker check the nav labels
 * in particular -- they are the most visible strings on the site.
 *
 * Do NOT translate: the array keys, 'California Vision and Visage',
 * street addresses, phone numbers, 'Botox', or 'BOTOX®'.
 */

return [

    // Patient form served for this language. Spanish uses the English
    // form until a Spanish version exists; both Chinese variants share one.
    'forms_pdf' => 'Demo-form-ESP.pdf',

    'nav' => [
        'home'       => 'Inicio',
        'about'      => 'Sobre Nosotros',
        'ophthalmic' => 'Atención Oftalmológica',
        'aesthetic'  => 'Servicios Estéticos',
        'forms'      => 'Formularios',
        'portal'     => 'Portal del Paciente',
        'contact'    => 'Contáctenos',
        'appointment'=> 'Solicitar Cita',
        'menu_open' => 'Abrir menú',
        'menu_close'=> 'Cerrar menú',
        'skip'      => 'Saltar al contenido principal',
        'lang_switch'=> 'Cambiar idioma',
    ],

    'conditions' => [
        'blepharospasm'        => 'Blefaroespasmo',
        'cataracts'            => 'Cataratas',
        'diabetic-eye-disease' => 'Enfermedad Ocular Diabética',
        'droopy-eyelids'       => 'Párpados Caídos',
        'dry-eye'              => 'Ojo Seco',
        'entropion-ectropion'  => 'Entropión y Ectropión',
        'epiphora'             => 'Epífora',
        'eyelid-skin-cancer'   => 'Cáncer de Piel del Párpado',
        'flashes-floaters'     => 'Destellos y Moscas Volantes',
        'glaucoma'             => 'Glaucoma',
        'macular-degeneration' => 'Degeneración Macular',
        'pink-eye'             => 'Conjuntivitis',
        'refractive-error'     => 'Error Refractivo',
        'retina'               => 'Retina',
        'torn-retina'          => 'Desgarro de Retina',
        'blepharoplasty'       => 'Blefaroplastia',
        'botox'                => 'Bótox',
    ],

    // Labels for the contact form's service dropdown. The KEYS are the
    // English values the handler validates against and mails out -- never
    // translate those, only the labels on the right.
    'services' => [
        'Cataract'              => 'Cataratas',
        'Glaucoma'              => 'Glaucoma',
        'Dry Eye'               => 'Ojo Seco',
        'Diabetic Eye Disease'  => 'Enfermedad Ocular Diabética',
        'Macular Degeneration'  => 'Degeneración Macular',
        'Droopy Eyelids'        => 'Párpados Caídos',
        'Entropion & Ectropion' => 'Entropión y Ectropión',
        'Epiphora'              => 'Epífora',
        'Eyelid Skin Cancer'    => 'Cáncer de Piel del Párpado',
        'Flashes & Floaters'    => 'Destellos y Moscas Volantes',
        'Pink Eye'              => 'Conjuntivitis',
        'Refractive Error'      => 'Error Refractivo',
        'Torn Retina'           => 'Desgarro de Retina',
        'Blepharoplasty'        => 'Blefaroplastia',
        'Blepharospasm'         => 'Blefaroespasmo',
        'Botox'                 => 'Bótox',
    ],

    'footer' => [
        'tagline'     => 'La consulta oftalmológica y estética de referencia en el sur de California, comprometida con la más alta calidad de atención.',
        'disclaimer'  => 'El material de este sitio tiene únicamente fines informativos y no sustituye el consejo médico profesional.',
        'screenreader'=> 'Si utiliza un lector de pantalla y tiene problemas para usar este sitio web, llame al 626-656-6550.',
        'contact'     => 'Contacto',
        'practice'    => 'California Vision and Visage',
        'office_industry' => 'Consultorio de City of Industry',
        'office_gabriel'  => 'Consultorio de San Gabriel',
        'hours'       => 'De lunes a viernes <br>9:00am-5:00pm',
        'between'     => '( Ubicado entre Fullerton y Nogales, frente a Seasons Plaza )',
        'appointment_only' => 'Solo con cita previa',
        'south_of'    => '( Al sur de Huntington Drive )',
        'phone'       => 'Teléfono',
        'email'       => 'Correo electrónico',
        'copyright'   => '&copy; %s California Vision and Visage Medical Group, Inc. Todos los derechos reservados.',
        'accessibility' => 'Accesibilidad',
        'legal'       => 'Aviso Legal',
        'no_surprises'=> 'Ley No Surprises Act',
        'privacy'     => 'Aviso de Prácticas de Privacidad',
    ],
    /* Floating quick-links panel (includes/footer.php). */
    'widget' => [
        'aria'        => 'Enlaces rápidos',
        'call'        => 'Llámenos',
        'appointment' => 'Solicitar Cita',
        'pay'         => 'Formas de Pago',
        'locations'   => 'Nuestras Sedes',
        'facebook'    => 'Facebook',
        'new_tab'     => 'se abre en una pestaña nueva',
    ],

    'form' => [
        'first_name' => 'Nombre',
        'last_name'  => 'Apellido',
        'email'      => 'Correo electrónico',
        'phone'      => 'Número de teléfono',
        'service'    => '¿Qué servicio desea?',
        'message'    => 'Mensaje',
        'submit'     => 'Enviar',
        'success'    => 'Gracias — su mensaje ha sido enviado. Nos pondremos en contacto con usted en breve.',
        'err_first'  => 'Por favor, introduzca su nombre.',
        'err_email'  => 'Por favor, introduzca una dirección de correo electrónico válida.',
        'err_message'=> 'Por favor, escriba un mensaje.',
        'err_service'=> 'Por favor, elija un servicio de la lista.',
        'err_send'   => 'Lo sentimos — no hemos podido enviar su mensaje en este momento. Llámenos al 626-810-0689.',
    ],
];
