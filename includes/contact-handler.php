<?php
/**
 * Contact form handler.
 *
 * Included at the top of contact-us.php, before any output, so that a
 * successful submission can redirect (Post/Redirect/Get) and a refresh
 * doesn't re-send the enquiry.
 */

/* ------------------------------------------------------------------ *
 * Settings -- edit these two.
 * ------------------------------------------------------------------ */

// Where enquiries are delivered.
$contact_recipient = 'info@calvv.com';

// The From address. Must be on THIS domain or most hosts will drop the
// mail as spoofed. The visitor's address goes in Reply-To instead, so
// hitting reply in the inbox still answers them.
$contact_from = 'no-reply@calvv.com';

// Offered in the dropdown, and the whitelist the submitted value is
// checked against -- one list so the two can't drift apart.
$contact_services = [
    'Cataract',
    'Glaucoma',
    'Dry Eye',
    'Diabetic Eye Disease',
    'Macular Degeneration',
    'Droopy Eyelids',
    'Entropion & Ectropion',
    'Epiphora',
    'Eyelid Skin Cancer',
    'Flashes & Floaters',
    'Pink Eye',
    'Refractive Error',
    'Torn Retina',
    'Blepharoplasty',
    'Blepharospasm',
    'Botox',
];

/* ------------------------------------------------------------------ *
 * State the page renders from.
 * ------------------------------------------------------------------ */

// Validation messages in the page's language. The page sets $lang before
// including this file; header.php loads the same file again for the rest
// of the UI strings.
$handler_lang = isset($lang) && file_exists(__DIR__ . '/lang/' . $lang . '.php') ? $lang : 'en';
$tf = require __DIR__ . '/lang/' . $handler_lang . '.php';
$tf = $tf['form'];

$contact_sent   = isset($_GET['sent']);
$contact_errors = [];
$contact_values = [
    'first_name' => '',
    'last_name'  => '',
    'email'      => '',
    'phone'      => '',
    'service'    => '',
    'message'    => '',
];

/**
 * Strip CR/LF before a value is used in a mail header. Without this a
 * newline in the address field lets an attacker append their own headers
 * (Bcc, etc.) and turn the form into an open relay.
 */
function contact_header_safe($value)
{
    return trim(str_replace(["\r", "\n", '%0a', '%0d', '%0A', '%0D'], ' ', $value));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Honeypot: a field hidden from people but filled in by most bots.
    // Report success so the bot doesn't retry with a different shape.
    if (trim($_POST['website'] ?? '') !== '') {
        header('Location: contact-us.php?sent=1');
        exit;
    }

    foreach ($contact_values as $field => $_unused) {
        $contact_values[$field] = trim($_POST[$field] ?? '');
    }

    if ($contact_values['first_name'] === '') {
        $contact_errors[] = $tf['err_first'];
    }

    if ($contact_values['email'] === '' || !filter_var($contact_values['email'], FILTER_VALIDATE_EMAIL)) {
        $contact_errors[] = $tf['err_email'];
    }

    if ($contact_values['message'] === '') {
        $contact_errors[] = $tf['err_message'];
    }

    // Never trust a select just because the browser rendered one.
    if ($contact_values['service'] !== '' && !in_array($contact_values['service'], $contact_services, true)) {
        $contact_errors[] = $tf['err_service'];
    }

    if (!$contact_errors) {
        $name = contact_header_safe(trim($contact_values['first_name'] . ' ' . $contact_values['last_name']));

        $subject = 'Website enquiry: ' . contact_header_safe($contact_values['service'] ?: 'General');

        $body = "New enquiry from the website contact form.\n\n"
              . 'Name:    ' . $name . "\n"
              . 'Email:   ' . $contact_values['email'] . "\n"
              . 'Phone:   ' . ($contact_values['phone'] !== '' ? $contact_values['phone'] : '-') . "\n"
              . 'Service: ' . ($contact_values['service'] !== '' ? $contact_values['service'] : '-') . "\n\n"
              . "Message:\n"
              . $contact_values['message'] . "\n";

        $headers = implode("\r\n", [
            'From: California Vision and Visage <' . $contact_from . '>',
            'Reply-To: ' . contact_header_safe($name . ' <' . $contact_values['email'] . '>'),
            'Content-Type: text/plain; charset=UTF-8',
            'MIME-Version: 1.0',
        ]);

        // -f sets the envelope sender, which many hosts require before
        // they will hand the message to the MTA at all.
        $sent = @mail(
            $contact_recipient,
            $subject,
            $body,
            $headers,
            '-f' . $contact_from
        );

        if ($sent) {
            header('Location: contact-us.php?sent=1');
            exit;
        }

        $contact_errors[] = $tf['err_send'];
    }
}
