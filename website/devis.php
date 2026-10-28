<?php
/**
 * Devis Page - PHP 8
 */
declare(strict_types=1);

require_once __DIR__ . '/protected/config.php';
$pageTitle = "Demande de Devis Anti-Nuisibles | SOS PARASITES";
$pageDesc = "Obtenez une estimation gratuite et rapide pour votre intervention anti-nuisibles en Île-de-France et Marseille.";

require_once __DIR__ . '/includes/header.php';
?>

<div class="bg-slate-900 text-white py-12 px-4 text-center">
    <div class="max-w-4xl mx-auto space-y-4">
        <span class="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
            Devis Gratuit
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold">Demandez Votre Estimation En Ligne</h1>
        <p class="text-slate-300 text-base">Remplissez notre formulaire pour transmettre vos besoins à notre équipe.</p>
    </div>
</div>

<div class="py-12 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-200 text-center space-y-6">
            <h2 class="text-2xl font-bold text-gray-900">Besoin d'une réponse immédiate ?</h2>
            <p class="text-gray-600">Appelez directement notre technicien conseil au numéro d'urgence :</p>
            <div>
                <a href="<?= PHONE_TEL ?>" class="inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white font-black text-2xl sm:text-3xl px-8 py-4 rounded-2xl shadow-lg transition">
                    <i data-lucide="phone" class="w-8 h-8"></i> <?= PHONE_DISPLAY ?>
                </a>
            </div>
            <p class="text-xs text-gray-500">Service 7j/7 et 24h/24 - Appel gratuit</p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
