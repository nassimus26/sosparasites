<?php
/**
 * Tarifs & Pricing Notice Page - PHP 8
 */
declare(strict_types=1);

require_once __DIR__ . '/protected/config.php';
$pageTitle = "Tarifs Anti-Nuisibles | SOS PARASITES - Pourquoi pas de tarif fixe ?";
$pageDesc = "Comprendre la tarification SOS PARASITES. Nos prix sont calculés sur-mesure selon le type de nuisible, le niveau d'infestation et la superficie.";

require_once __DIR__ . '/includes/header.php';
?>

<div class="bg-slate-900 text-white py-12 px-4 text-center">
    <div class="max-w-4xl mx-auto space-y-4">
        <span class="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
            Politique Tarifaire
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold">Tarif Sur-Mesure & Transparence Totale</h1>
        <p class="text-slate-300 text-base sm:text-lg">Pourquoi il n’y a pas de prix forfaitaire unique et comment nous établissons nos devis.</p>
        <div class="pt-2">
            <a href="<?= PHONE_TEL ?>" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-extrabold px-6 py-3 rounded-2xl shadow transition text-base">
                <i data-lucide="phone" class="w-5 h-5"></i> Évaluation Téléphonique Gratuite : <?= PHONE_DISPLAY ?>
            </a>
        </div>
    </div>
</div>

<section class="py-16 bg-white text-gray-900">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-gradient-to-br from-red-600 to-red-800 text-white rounded-3xl p-8 shadow-xl mb-12 text-center">
            <h3 class="text-xl font-bold uppercase tracking-wider mb-3">Notre Engagement Officiel</h3>
            <blockquote class="text-xl font-bold italic">« <?= PRICING_NOTICE_TEXT ?> »</blockquote>
        </div>

        <div class="space-y-6 text-gray-700 leading-relaxed">
            <h2 class="text-2xl font-bold text-gray-900">Comment est calculé le tarif ?</h2>
            <p>Contrairement aux idées reçues, éliminer des nuisibles (punaises de lit, cafards, rongeurs, guêpes) ne s'improvise pas et ne peut pas reposer sur un tarif unique aveugle.</p>
            <p>Lors de votre appel au <strong><?= PHONE_DISPLAY ?></strong> ou via notre formulaire, nous évaluons précisément votre situation pour vous garantir le meilleur rapport qualité-prix sans mauvaise surprise.</p>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
