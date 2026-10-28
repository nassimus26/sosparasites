<?php
/**
 * Mentions Légales - PHP 8
 */
declare(strict_types=1);

require_once __DIR__ . '/protected/config.php';
$pageTitle = "Mentions Légales | SOS PARASITES";
$pageDesc = "Mentions légales et conditions d'utilisation du site sosparasites.fr";

require_once __DIR__ . '/includes/header.php';
?>

<div class="py-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-gray-800">
    <a href="/" class="inline-flex items-center gap-2 text-sm text-red-600 font-bold mb-6 hover:underline">
        <i data-lucide="arrow-left" class="w-4 h-4"></i> Retour à l'accueil
    </a>

    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-4">Mentions Légales</h1>

    <div class="space-y-6 text-sm leading-relaxed">
        <section>
            <h2 class="text-xl font-bold text-gray-900 mb-2">1. Éditeur du site</h2>
            <p>
                Le site internet <strong>sosparasites.fr</strong> est édité par la société SOS PARASITES.<br>
                Spécialiste de la lutte anti-nuisibles (Dératisation, Désinsectisation, Désinfection).<br>
                <strong>Téléphone direct :</strong> <?= PHONE_DISPLAY ?> (<?= PHONE_NUMBER ?>)<br>
                <strong>Email de contact :</strong> <?= SENDER_EMAIL ?>
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-gray-900 mb-2">2. Hébergement & Sécurité</h2>
            <p>
                Le site est hébergé sur des serveurs sécurisés compatibles PHP 8. Les configurations sensibles sont stockées dans le dossier protégé <code>./protected</code> conformément aux bonnes pratiques de sécurité web.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-gray-900 mb-2">3. Tarification & Devis</h2>
            <p>
                <?= PRICING_NOTICE_TEXT ?>
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-gray-900 mb-2">4. Protection des données (RGPD)</h2>
            <p>
                Les données recueillies via les formulaires de contact sont transmises directement à l'adresse <strong><?= CONTACT_EMAIL_TARGET ?></strong>. Vous disposez d'un droit d'accès et de rectification en contactant <strong><?= SENDER_EMAIL ?></strong>.
            </p>
        </section>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
