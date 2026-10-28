<?php
/**
 * Bilingual Support (French & English) with Smart DNS & Accept-Language Detection
 * - .com domain defaults to English (unless browser prefers French)
 * - .fr domain defaults to French (unless browser prefers English)
 */

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Handle explicit language selection via GET (?lang=fr or ?lang=en) or cookie
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en'], true)) {
    $_SESSION['lang'] = $_GET['lang'];
    setcookie('sos_lang', $_GET['lang'], time() + (86400 * 30), '/');
} elseif (isset($_COOKIE['sos_lang']) && in_array($_COOKIE['sos_lang'], ['fr', 'en'], true)) {
    $_SESSION['lang'] = $_COOKIE['sos_lang'];
} else {
    // 2. Smart Detection based on DNS (.com vs others) and Accept-Language header
    $host = $_SERVER['HTTP_HOST'] ?? 'sosparasites.fr';
    $isComDomain = (str_ends_with(strtolower($host), '.com') || str_contains(strtolower($host), '.com'));

    $acceptLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    $firstLang = strtolower(substr($acceptLang, 0, 2));

    if ($isComDomain) {
        // .com default is English, except if browser's first language is French
        if ($firstLang === 'fr') {
            $_SESSION['lang'] = 'fr';
        } else {
            $_SESSION['lang'] = 'en';
        }
    } else {
        // .fr / default is French, except if browser's first language is English
        if ($firstLang === 'en') {
            $_SESSION['lang'] = 'en';
        } else {
            $_SESSION['lang'] = 'fr';
        }
    }
}

$currentLang = $_SESSION['lang'] ?? 'fr';

$translations = [
    'fr' => [
        'emergency_bar' => 'Interventions 7j/7 & 24h/24 en 1h • Île-de-France (75-95), Marseille & Lyon',
        'emergency_call' => 'Appel d\'urgence',
        'nav_home' => 'Accueil',
        'nav_pests' => 'Nuisibles Traités',
        'nav_tarifs' => 'Nos Tarifs',
        'nav_zones' => 'Zones d\'Intervention',
        'nav_process' => 'Notre Méthode',
        'nav_contact' => 'Contact & Devis',
        'nav_partners' => 'Devenez Partenaires',
        'free_call' => 'Appel Gratuit 24/7',

        // Hero
        'hero_badge' => 'Urgence Nuisibles 24h/24 & 7j/7 - Intervention Rapide en 1h',
        'hero_title_1' => 'SOS PARASITES :',
        'hero_title_2' => 'Solution Anti-Nuisibles',
        'hero_desc' => 'Dératisation, désinsectisation et désinfection professionnelles dans toute l\'Île-de-France, Marseille et Lyon. Traitements certifiés, résultats garantis et intervention immédiate.',
        'call_expert' => 'Appeler Un Expert Maintenant',
        'request_quote' => 'Demander Un Devis En Ligne',
        'benefit_1' => 'Déplacement 1H',
        'benefit_2' => 'Certifié Certibiocide',
        'benefit_3' => 'Résultats Garantis',
        'benefit_4' => 'IDF, Marseille & Lyon',
        'pests_list_title' => 'Nuisibles pris en charge d\'urgence :',

        // Emergency Card
        'card_badge' => 'Évaluation Gratuite',
        'card_title' => 'Besoin d\'une intervention ?',
        'card_desc' => 'Appelez nos techniciens directement ou remplissez notre formulaire pour un rappel immédiat.',
        'card_phone_label' => 'Ligne d\'urgence directe 24h/24',
        'card_sub' => 'Intervention sous 1 heure chez vous',
        'card_li_1' => 'Techniciens qualifiés : Produits biocides professionnels.',
        'card_li_2' => 'Discrétion garantie : Interventions respectueuses.',
        'card_li_3' => 'Tarifs sur-mesure : Adaptés à la superficie et au problème.',
        'card_btn' => 'Accéder au Formulaire de Contact',

        // Pricing Notice
        'pricing_badge' => 'Transparence & Tarification',
        'pricing_title' => 'Pourquoi il n’y a pas de tarif fixe ?',
        'pricing_desc' => 'Chaque cas d\'infestation est unique. Nous privilégions une évaluation honnête et un tarif juste calculé au plus près de votre besoin réel.',
        'pricing_engagement' => 'Notre Engagement Tarifaire',
        'factor_1_title' => '1. Type de Nuisible',
        'factor_1_desc' => 'Chaque parasite (punaise, blatte, rat, guêpe) requiert un produit spécifique et une stratégie adaptée.',
        'factor_2_title' => '2. Niveau d\'Infestation',
        'factor_2_desc' => 'Une intervention précoce nécessite un traitement standard, tandis qu\'une forte colonie impose plusieurs passages.',
        'factor_3_title' => '3. Superficie (m²)',
        'factor_3_desc' => 'La surface à traiter conditionne la quantité de produit et le temps d\'intervention des techniciens.',
        'factor_4_title' => '4. Traitement Appliqué',
        'factor_4_desc' => 'Méthode chimique certifiée, gel pro, thermothérapie ou colmatage hermétique des accès.',

        // Pests Section
        'pests_section_badge' => '10 Types de Nuisibles Pris en Charge',
        'pests_section_title' => 'Nos Services d\'Éradication Anti-Nuisibles',
        'pests_section_desc' => 'Des solutions certifiées pour chaque type de parasite à Paris, en Île-de-France, à Marseille et à Lyon.',
        'danger_label' => 'Danger:',
        'symptoms_label' => 'Symptômes principaux :',
        'btn_details' => 'Demander un devis',

        // Contact Section
        'contact_badge' => 'Formulaire & Contact Direct',
        'contact_title' => 'Besoin d\'une intervention urgente contre les nuisibles ?',
        'contact_desc' => 'Pour une prise en charge immédiate, le téléphone reste le moyen le plus rapide. Notre ligne d\'urgence est ouverte 24h/24 et 7j/7.',
        'contact_card_title' => 'Ligne Téléphonique Directe',
        'contact_card_sub' => 'Appel gratuit • Rappel immédiat',
        'form_title' => 'Formulaire de demande de rappel & devis',
        'form_sub' => 'Un technicien va vous recontacter très rapidement par téléphone.',
        'label_name' => 'Nom & Prénom *',
        'label_phone' => 'Téléphone *',
        'label_email' => 'Email',
        'label_pest' => 'Nuisible *',
        'label_city' => 'Ville / Secteur *',
        'label_surface' => 'Surface (m²)',
        'label_details' => 'Précisions',
        'submit_btn' => 'Envoyer Ma Demande D\'Intervention',

        // Partners Page
        'partner_hero_title' => 'Rejoignez nos équipes d\'interventions à travers toute la France',
        'partner_hero_desc' => 'Recevez des missions d\'intervention anti-nuisibles qualifiées dans toute la France. Développez votre activité avec SOS PARASITES.',
        'partner_benefits_title' => 'Pourquoi rejoindre notre réseau ?',
        'partner_b1_title' => 'Missions Régulières',
        'partner_b1_desc' => 'Bénéficiez d\'un flux constant de clients et d\'interventions qualifiées près de chez vous.',
        'partner_b2_title' => 'Liberté & Flexibilité',
        'partner_b2_desc' => 'Acceptez les missions selon vos disponibilités et votre zone géographique.',
        'partner_b3_title' => 'Rémunération Attractive',
        'partner_b3_desc' => 'Tarifs de sous-traitance valorisants et règlements rapides.',
        'partner_form_title' => 'Formulaire de Candidature Sous-Traitant / Indépendant',
        'partner_form_sub' => 'Remplissez ce formulaire pour rejoindre notre réseau national d\'intervenants.',
        'label_company' => 'Société / Nom complet *',
        'label_region' => 'Département / Région d\'intervention *',
        'label_certibiocide' => 'Certificat Certibiocide *',
        'label_experience' => 'Années d\'expérience en lutte anti-nuisibles',
        'cert_yes' => 'Oui - Certificat valide',
        'cert_no' => 'En cours / Autre',
        'partner_submit_btn' => 'Soumettre Ma Candidature Partenaire',

        // Footer
        'footer_desc' => 'Entreprise spécialisée en dératisation, désinsectisation et désinfection d\'urgence pour particuliers et professionnels. Interventions 7j/7 et 24h/24 dans toute l\'Île-de-France, Marseille et Lyon.',
        'footer_pests' => 'Nuisibles Traités',
        'footer_sectors' => 'Secteurs',
        'footer_info' => 'Informations',
        'footer_rights' => 'Tous droits réservés. Anti-Nuisibles Île-de-France, Marseille & Lyon.',
        'emergency_call_bar' => 'Dispo 24/7 en 1h',
        'call_btn_text' => 'Appeler'
    ],
    'en' => [
        'emergency_bar' => '7/7 & 24/24 Emergency Pest Control in 1h • Île-de-France, Marseille & Lyon',
        'emergency_call' => 'Emergency Call',
        'nav_home' => 'Home',
        'nav_pests' => 'Treated Pests',
        'nav_tarifs' => 'Our Pricing',
        'nav_zones' => 'Coverage Areas',
        'nav_process' => 'Our Method',
        'nav_contact' => 'Contact & Quote',
        'nav_partners' => 'Become a Partner',
        'free_call' => 'Free Call 24/7',

        // Hero
        'hero_badge' => 'Pest Emergency 24/7 - Rapid Intervention in 1h',
        'hero_title_1' => 'SOS PARASITES :',
        'hero_title_2' => 'Pest Control Solutions',
        'hero_desc' => 'Professional rodent control, disinfection, and extermination across Île-de-France, Marseille, and Lyon. Certified treatments, guaranteed results, and immediate intervention.',
        'call_expert' => 'Call An Expert Now',
        'request_quote' => 'Request Online Quote',
        'benefit_1' => '1H Response',
        'benefit_2' => 'Certified Biocide',
        'benefit_4' => 'IDF, Marseille & Lyon',
        'pests_list_title' => 'Emergency Pest Services:',

        // Emergency Card
        'card_badge' => 'Free Assessment',
        'card_title' => 'Need an intervention?',
        'card_desc' => 'Call our technicians directly or fill out our form for an immediate callback.',
        'card_phone_label' => 'Direct 24/7 Emergency Line',
        'card_sub' => 'Intervention within 1 hour at your location',
        'card_li_1' => 'Qualified technicians: Professional biocides.',
        'card_li_2' => 'Guaranteed discretion: Respectful interventions.',
        'card_li_3' => 'Custom pricing: Tailored to surface and severity.',
        'card_btn' => 'Access Contact Form',

        // Pricing Notice
        'pricing_badge' => 'Transparency & Pricing',
        'pricing_title' => 'Why is there no fixed price?',
        'pricing_desc' => 'Every infestation case is unique. We prioritize honest assessment and fair pricing calculated precisely to your real needs.',
        'pricing_engagement' => 'Our Pricing Commitment',
        'factor_1_title' => '1. Pest Type',
        'factor_1_desc' => 'Each parasite (bed bug, roach, rat, wasp) requires a specific product and tailored strategy.',
        'factor_2_title' => '2. Infestation Level',
        'factor_2_desc' => 'Early intervention requires standard treatment, while heavy colonies may require multiple visits.',
        'factor_3_title' => '3. Area (sqm)',
        'factor_3_desc' => 'The surface area determines the product volume and technician labor time.',
        'factor_4_title' => '4. Applied Treatment',
        'factor_4_desc' => 'Certified chemical method, professional gel, heat treatment, or sealing access points.',

        // Pests Section
        'pests_section_badge' => '10 Treated Pest Categories',
        'pests_section_title' => 'Pest Eradication Services',
        'pests_section_desc' => 'Certified solutions for every parasite type in Paris, Île-de-France, Marseille, and Lyon.',
        'danger_label' => 'Danger:',
        'symptoms_label' => 'Main symptoms:',
        'btn_details' => 'Request Quote',

        // Contact Section
        'contact_badge' => 'Form & Direct Contact',
        'contact_title' => 'Need urgent pest control intervention?',
        'contact_desc' => 'For immediate assistance, phone is the fastest way. Our emergency line is open 24/7.',
        'contact_card_title' => 'Direct Phone Line',
        'contact_card_sub' => 'Free call • Immediate callback',
        'form_title' => 'Callback & Quote Request Form',
        'form_sub' => 'A technician will contact you very quickly by phone.',
        'label_name' => 'Full Name *',
        'label_phone' => 'Phone *',
        'label_email' => 'Email',
        'label_pest' => 'Pest *',
        'label_city' => 'City / Sector *',
        'label_surface' => 'Area (sqm)',
        'label_details' => 'Details',
        'submit_btn' => 'Send Intervention Request',

        // Partners Page
        'partner_hero_title' => 'Join our intervention teams across all of France',
        'partner_hero_desc' => 'Receive qualified pest control missions across all of France. Grow your business with SOS PARASITES.',
        'partner_benefits_title' => 'Why join our network?',
        'partner_b1_title' => 'Regular Missions',
        'partner_b1_desc' => 'Benefit from a steady flow of clients and qualified interventions near you.',
        'partner_b2_title' => 'Freedom & Flexibility',
        'partner_b2_desc' => 'Accept missions based on your availability and geographical area.',
        'partner_b3_title' => 'Attractive Pay',
        'partner_b3_desc' => 'Valuing subcontractor rates and prompt settlements.',
        'partner_form_title' => 'Subcontractor / Independent Application Form',
        'partner_form_sub' => 'Fill out this form to join our national network of technicians.',
        'label_company' => 'Company / Full Name *',
        'label_region' => 'Department / Region of intervention *',
        'label_certibiocide' => 'Certibiocide Certificate *',
        'label_experience' => 'Years of experience in pest control',
        'cert_yes' => 'Yes - Valid certificate',
        'cert_no' => 'In progress / Other',
        'partner_submit_btn' => 'Submit Partner Application',

        // Footer
        'footer_desc' => 'Company specialized in emergency pest control, disinfection, and extermination for residential and commercial clients. 7/7 & 24/24 service across Île-de-France, Marseille, and Lyon.',
        'footer_pests' => 'Treated Pests',
        'footer_sectors' => 'Sectors',
        'footer_info' => 'Information',
        'footer_rights' => 'All rights reserved. Pest Control Île-de-France, Marseille & Lyon.',
        'emergency_call_bar' => 'Available 24/7 in 1h',
        'call_btn_text' => 'Call'
    ]
];

function __($key) {
    global $translations, $currentLang;
    return $translations[$currentLang][$key] ?? $translations['fr'][$key] ?? $key;
}
