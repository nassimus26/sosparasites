<?php
/**
 * PROTECTED SENSITIVE CONFIGURATION - SOS PARASITES
 * This file is stored inside the secure ./protected/ directory on production.
 */

declare(strict_types=1);

// Primary Contact Information
define('PHONE_DISPLAY', '07 71 50 26 78');
define('PHONE_NUMBER', '+33771502678');
define('PHONE_TEL', 'tel:+33771502678');

// Email Configuration
define('CONTACT_EMAIL_TARGET', 'nmoualek@gmail.com');
define('SENDER_EMAIL', 'contact@castmypitch.com');

// OVH SMTP Sensitive Credentials
define('SMTP_HOST', 'ssl0.ovh.net');
define('SMTP_PORT', 465);
define('SMTP_USER', 'contact@castmypitch.com');
define('SMTP_PASS', 'Castwin64*!');

// Official Pricing Notice Text
define('PRICING_NOTICE_TEXT', "Il n’y a pas de tarif fixe, car le prix dépend du type de nuisible, du niveau d’infestation, de la superficie du logement ou du local et du traitement nécessaire. Les tarifs sont donc établis en fonction de chaque situation, après évaluation des besoins.");
