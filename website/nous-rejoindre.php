<?php
/**
 * Nous Rejoindre (Partners / Subcontractors Page) - SOS PARASITES (PHP 8)
 */
declare(strict_types=1);

require_once __DIR__ . '/protected/config.php';
require_once __DIR__ . '/includes/lang.php';

$pageTitle = "Nous Rejoindre | SOS PARASITES - Réseau National Sous-Traitants";
$pageDesc = "Rejoignez notre réseau national de techniciens indépendants et sous-traitants en désinsectisation et dératisation. Recevez des missions qualifiées.";

require_once __DIR__ . '/includes/header.php';
?>

<!-- Partner Hero -->
<section class="bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white py-16 lg:py-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#0284c7_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="bg-sky-500/20 border border-sky-500/40 text-sky-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full inline-block mb-4">
            Réseau National • Indépendants & Sous-traitants
        </span>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6">
            <?= __('partner_hero_title') ?>
        </h1>
        <p class="text-slate-300 text-base sm:text-xl max-w-3xl mx-auto leading-relaxed">
            <?= __('partner_hero_desc') ?>
        </p>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-white text-gray-900 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900"><?= __('partner_benefits_title') ?></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 text-center space-y-4">
                <div class="w-14 h-14 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mx-auto">
                    <i data-lucide="briefcase" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900"><?= __('partner_b1_title') ?></h3>
                <p class="text-sm text-gray-600 leading-relaxed"><?= __('partner_b1_desc') ?></p>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 text-center space-y-4">
                <div class="w-14 h-14 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center mx-auto">
                    <i data-lucide="zap" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900"><?= __('partner_b2_title') ?></h3>
                <p class="text-sm text-gray-600 leading-relaxed"><?= __('partner_b2_desc') ?></p>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 text-center space-y-4">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto">
                    <i data-lucide="award" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900"><?= __('partner_b3_title') ?></h3>
                <p class="text-sm text-gray-600 leading-relaxed"><?= __('partner_b3_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Partner Application Form Section -->
<section id="candidature" class="py-16 sm:py-24 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-200">

            <div class="text-center mb-8">
                <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-2"><?= __('partner_form_title') ?></h3>
                <p class="text-sm text-gray-600"><?= __('partner_form_sub') ?></p>
            </div>

            <div id="partner-response" class="hidden mb-6 p-4 rounded-xl text-sm font-semibold"></div>

            <form id="partner-form" action="/process-partenaire.php" method="POST" class="space-y-6">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_company') ?></label>
                        <input type="text" name="name" required placeholder="Nom / Entreprise" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm focus:ring-2 focus:ring-sky-600 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_phone') ?></label>
                        <input type="tel" name="phone" required placeholder="06 12 34 56 78" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm font-bold text-sky-600 focus:ring-2 focus:ring-sky-600 focus:outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_email') ?></label>
                        <input type="email" name="email" required placeholder="contact@entreprise.fr" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm focus:ring-2 focus:ring-sky-600 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_region') ?></label>
                        <input type="text" name="region" required placeholder="Ex: Rhône (69), Bouches-du-Rhône (13), Île-de-France..." class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm focus:ring-2 focus:ring-sky-600 focus:outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_certibiocide') ?></label>
                        <select name="certibiocide" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm font-semibold focus:ring-2 focus:ring-sky-600 focus:outline-none">
                            <option value="Oui - Valide"><?= __('cert_yes') ?></option>
                            <option value="En cours / Autre"><?= __('cert_no') ?></option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_experience') ?></label>
                        <input type="text" name="experience" placeholder="Ex: 5 ans" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm focus:ring-2 focus:ring-sky-600 focus:outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-2"><?= __('label_details') ?></label>
                    <textarea name="details" rows="4" placeholder="Présentez votre activité, vos équipements et vos zones d'intervention précises..." class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3.5 text-sm focus:ring-2 focus:ring-sky-600 focus:outline-none"></textarea>
                </div>

                <button type="submit" class="w-full bg-sky-600 hover:bg-sky-700 text-white font-extrabold py-4 px-6 rounded-2xl shadow-lg transition text-base">
                    <?= __('partner_submit_btn') ?>
                </button>

            </form>

        </div>
    </div>
</section>

<script>
document.getElementById('partner-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    const responseBox = document.getElementById('partner-response');
    responseBox.classList.add('hidden');

    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());

    try {
        const res = await fetch('/process-partenaire.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });
        const result = await res.json();

        responseBox.classList.remove('hidden');
        if (res.ok && result.success) {
            responseBox.className = 'mb-6 p-4 rounded-xl text-sm font-semibold bg-emerald-100 text-emerald-800 border border-emerald-300';
            responseBox.innerText = result.message;
            this.reset();
        } else {
            responseBox.className = 'mb-6 p-4 rounded-xl text-sm font-semibold bg-red-100 text-red-800 border border-red-300';
            responseBox.innerText = result.message || 'Erreur lors de l\'envoi. Veuillez réessayer.';
        }
    } catch (err) {
        responseBox.classList.remove('hidden');
        responseBox.className = 'mb-6 p-4 rounded-xl text-sm font-semibold bg-red-100 text-red-800 border border-red-300';
        responseBox.innerText = 'Un problème est survenu. Veuillez nous contacter directement au <?= PHONE_DISPLAY ?>.';
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
