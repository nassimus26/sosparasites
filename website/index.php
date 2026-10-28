<?php
/**
 * SOS PARASITES - Home Page (PHP 8) - Bilingual Support
 */
declare(strict_types=1);

require_once __DIR__ . '/protected/config.php';
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/pests_data.php';

$pests = get_pests_data();
$pageTitle = "SOS PARASITES - Anti-Nuisibles 24/7 Île-de-France, Marseille & Lyon | Tel: " . PHONE_DISPLAY;
$pageDesc = __('hero_desc');

require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white pt-10 pb-16 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#dc2626_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-7 text-center lg:text-left space-y-6">
                <div class="inline-flex items-center gap-2 bg-red-950/80 border border-red-500/30 text-red-300 px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-semibold">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
                    </span>
                    <span><?= __('hero_badge') ?></span>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                    <?= __('hero_title_1') ?> <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 via-orange-400 to-amber-300">
                        <?= __('hero_title_2') ?>
                    </span>
                </h1>

                <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0">
                    <?= __('hero_desc') ?>
                </p>

                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="<?= PHONE_TEL ?>" class="w-full sm:w-auto bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white font-black px-8 py-4 rounded-2xl shadow-xl flex items-center justify-center gap-3 text-lg sm:text-xl border border-red-400/30 animate-pulse-call">
                        <i data-lucide="phone" class="w-6 h-6"></i>
                        <div class="text-left">
                            <span class="block text-xs font-bold text-red-200 uppercase tracking-wide"><?= __('call_expert') ?></span>
                            <span class="text-xl sm:text-2xl font-black"><?= PHONE_DISPLAY ?></span>
                        </div>
                    </a>

                    <a href="#contact" class="w-full sm:w-auto bg-slate-800/80 hover:bg-slate-700 text-slate-200 hover:text-white font-bold px-6 py-4 rounded-2xl border border-slate-700 transition flex items-center justify-center gap-2 text-base">
                        <?= __('request_quote') ?>
                        <i data-lucide="arrow-right" class="w-5 h-5 text-red-400"></i>
                    </a>
                </div>

                <div class="pt-4 grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs sm:text-sm text-slate-300 font-medium">
                    <div class="flex items-center gap-2 justify-center lg:justify-start"><i data-lucide="clock" class="w-4 h-4 text-red-400"></i> <?= __('benefit_1') ?></div>
                    <div class="flex items-center gap-2 justify-center lg:justify-start"><i data-lucide="shield-check" class="w-4 h-4 text-emerald-400"></i> <?= __('benefit_2') ?></div>
                    <div class="flex items-center gap-2 justify-center lg:justify-start"><i data-lucide="award" class="w-4 h-4 text-amber-400"></i> <?= __('benefit_3') ?></div>
                    <div class="flex items-center gap-2 justify-center lg:justify-start"><i data-lucide="map-pin" class="w-4 h-4 text-sky-400"></i> <?= __('benefit_4') ?></div>
                </div>

                <div class="pt-2">
                    <p class="text-xs uppercase tracking-wider font-bold text-slate-400 mb-2">
                        <?= __('pests_list_title') ?>
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-1.5 text-xs font-semibold">
                        <?php foreach ($pests as $p): ?>
                            <span class="bg-slate-800/90 text-slate-200 px-2.5 py-1 rounded-lg border border-slate-700/60">
                                <?= htmlspecialchars($p['name']) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Emergency Card -->
            <div class="lg:col-span-5">
                <div class="bg-slate-800/90 border border-slate-700 rounded-3xl p-6 sm:p-8 shadow-2xl relative">
                    <span class="absolute -top-3 right-6 bg-amber-500 text-slate-950 font-black text-xs uppercase px-3 py-1 rounded-full">
                        <?= __('card_badge') ?>
                    </span>

                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 flex items-center gap-2">
                        <i data-lucide="flame" class="w-6 h-6 text-red-500"></i>
                        <?= __('card_title') ?>
                    </h3>
                    <p class="text-slate-300 text-sm mb-6">
                        <?= __('card_desc') ?>
                    </p>

                    <div class="bg-red-950/60 border border-red-600/40 rounded-2xl p-4 text-center mb-6">
                        <p class="text-xs text-red-300 uppercase font-bold tracking-wider mb-1">
                            <?= __('card_phone_label') ?>
                        </p>
                        <a href="<?= PHONE_TEL ?>" class="text-2xl sm:text-3xl font-black text-white hover:text-red-400 transition block">
                            <?= PHONE_DISPLAY ?>
                        </a>
                        <p class="text-xs text-slate-400 mt-1">
                            <?= __('card_sub') ?>
                        </p>
                    </div>

                    <ul class="space-y-3 text-sm text-slate-300">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="check-circle" class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5"></i>
                            <span><?= __('card_li_1') ?></span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="check-circle" class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5"></i>
                            <span><?= __('card_li_2') ?></span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="check-circle" class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5"></i>
                            <span><?= __('card_li_3') ?></span>
                        </li>
                    </ul>

                    <div class="mt-6 pt-6 border-t border-slate-700/80">
                        <a href="#contact" class="w-full bg-slate-700 hover:bg-slate-600 text-white font-bold py-3 px-4 rounded-xl text-center block transition text-sm">
                            <?= __('card_btn') ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pricing Notice Section -->
<section id="tarifs" class="py-16 sm:py-24 bg-gradient-to-b from-slate-50 to-white text-gray-900 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-red-100 text-red-800 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
                <i data-lucide="info" class="w-4 h-4"></i> <?= __('pricing_badge') ?>
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">
                <?= __('pricing_title') ?>
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                <?= __('pricing_desc') ?>
            </p>
        </div>

        <div class="bg-gradient-to-br from-red-600 via-red-700 to-red-800 text-white rounded-3xl p-6 sm:p-10 shadow-xl mb-12 text-center">
            <span class="bg-white/20 text-white font-semibold text-xs uppercase tracking-widest px-4 py-1 rounded-full inline-block mb-3">
                <?= __('pricing_engagement') ?>
            </span>
            <blockquote class="text-lg sm:text-2xl font-bold leading-relaxed italic max-w-4xl mx-auto mb-6">
                « <?= PRICING_NOTICE_TEXT ?> »
            </blockquote>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="<?= PHONE_TEL ?>" class="bg-white text-red-700 hover:bg-gray-100 font-extrabold px-6 py-3.5 rounded-2xl shadow-lg transition flex items-center gap-2 text-base">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    <?= __('free_call') ?> : <?= PHONE_DISPLAY ?>
                </a>
                <a href="#contact" class="bg-red-900/60 hover:bg-red-900/90 text-white border border-white/30 font-bold px-6 py-3.5 rounded-2xl transition flex items-center gap-2 text-base">
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                    <?= __('request_quote') ?>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="bug" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?= __('factor_1_title') ?></h3>
                <p class="text-sm text-gray-600"><?= __('factor_1_desc') ?></p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="activity" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?= __('factor_2_title') ?></h3>
                <p class="text-sm text-gray-600"><?= __('factor_2_desc') ?></p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="maximize" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?= __('factor_3_title') ?></h3>
                <p class="text-sm text-gray-600"><?= __('factor_3_desc') ?></p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="wrench" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?= __('factor_4_title') ?></h3>
                <p class="text-sm text-gray-600"><?= __('factor_4_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Pests Grid (10 Pests) -->
<section id="nuisibles" class="py-16 sm:py-24 bg-slate-900 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-red-950 border border-red-500/30 text-red-400 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
                <i data-lucide="bug" class="w-4 h-4"></i> <?= __('pests_section_badge') ?>
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                <?= __('pests_section_title') ?>
            </h2>
            <p class="mt-4 text-slate-300">
                <?= __('pests_section_desc') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($pests as $p): ?>
                <div class="bg-slate-800/90 border border-slate-700 rounded-3xl p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-xs font-bold uppercase px-3 py-1 rounded-full border bg-red-950 border-red-600/50 text-red-400">
                                <?= __('danger_label') ?> <?= htmlspecialchars($p['danger']) ?>
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-2"><?= htmlspecialchars($p['name']) ?></h3>
                        <p class="text-xs font-medium text-slate-400 mb-4"><?= htmlspecialchars($p['subtitle']) ?></p>
                        <p class="text-sm text-slate-300 mb-6 leading-relaxed"><?= htmlspecialchars($p['description']) ?></p>

                        <div class="bg-slate-900/60 rounded-2xl p-3.5 border border-slate-700/60 mb-6 text-xs text-slate-300 space-y-1">
                            <span class="font-bold text-red-400 block uppercase text-[10px]"><?= __('symptoms_label') ?></span>
                            <p>• <?= htmlspecialchars($p['symptoms'][0]) ?></p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-700/80 flex items-center gap-3">
                        <a href="#contact" class="flex-1 bg-slate-700 hover:bg-slate-600 text-white font-semibold py-2.5 px-3 rounded-xl text-xs sm:text-sm text-center transition">
                            <?= __('btn_details') ?>
                        </a>
                        <a href="<?= PHONE_TEL ?>" class="bg-red-600 hover:bg-red-700 text-white p-2.5 rounded-xl transition">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="py-16 sm:py-24 bg-slate-950 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="lg:col-span-5 space-y-6">
                <span class="inline-flex items-center gap-2 bg-red-950 border border-red-500/40 text-red-400 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                    <i data-lucide="mail" class="w-4 h-4"></i> <?= __('contact_badge') ?>
                </span>

                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                    <?= __('contact_title') ?>
                </h2>

                <p class="text-slate-300 text-base">
                    <?= __('contact_desc') ?>
                </p>

                <div class="bg-gradient-to-br from-red-600 to-red-800 rounded-3xl p-6 sm:p-8 shadow-2xl text-white border border-red-400/30">
                    <span class="bg-white/20 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block mb-2">
                        <?= __('contact_card_title') ?>
                    </span>
                    <p class="text-xs text-red-100 uppercase tracking-wider font-semibold"><?= __('contact_card_sub') ?></p>
                    <a href="<?= PHONE_TEL ?>" class="text-3xl sm:text-4xl font-black text-white hover:text-red-200 transition block mt-1">
                        <?= PHONE_DISPLAY ?>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="bg-white text-gray-900 rounded-3xl p-5 sm:p-9 shadow-2xl transform scale-[0.95] origin-top">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2"><?= __('form_title') ?></h3>
                    <p class="text-xs text-gray-500 mb-6"><?= __('form_sub') ?></p>

                    <div id="form-response" class="hidden mb-4 p-4 rounded-xl text-sm font-semibold"></div>

                    <form id="contact-form" action="/process-contact.php" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_name') ?></label>
                                <input type="text" name="name" required placeholder="Votre nom" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-red-600 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_phone') ?></label>
                                <input type="tel" name="phone" required placeholder="07 12 34 56 78" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm font-bold text-red-600 focus:ring-2 focus:ring-red-600 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_email') ?></label>
                                <input type="email" name="email" placeholder="votre@email.com" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-red-600 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_pest') ?></label>
                                <select name="pestType" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm font-semibold focus:ring-2 focus:ring-red-600 focus:outline-none">
                                    <?php foreach ($pests as $p): ?>
                                        <option value="<?= htmlspecialchars($p['name']) ?>"><?= htmlspecialchars($p['name']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="sm:col-span-2">
                                <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_city') ?></label>
                                <input type="text" name="city" required placeholder="Ex: Paris, Marseille, Lyon..." class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-red-600 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_surface') ?></label>
                                <input type="number" name="surface" placeholder="Ex: 50" class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-red-600 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-gray-700 mb-1"><?= __('label_details') ?></label>
                            <textarea name="details" rows="3" placeholder="Décrivez les signes constatés..." class="w-full bg-gray-50 border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-red-600 focus:outline-none"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-extrabold py-4 px-6 rounded-2xl shadow-lg transition text-base">
                            <?= __('submit_btn') ?>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    const responseBox = document.getElementById('form-response');
    responseBox.classList.add('hidden');

    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());

    try {
        const res = await fetch('/process-contact.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });
        const result = await res.json();

        responseBox.classList.remove('hidden');
        if (res.ok && result.success) {
            responseBox.className = 'mb-4 p-4 rounded-xl text-sm font-semibold bg-emerald-100 text-emerald-800 border border-emerald-300';
            responseBox.innerText = result.message;
            this.reset();
        } else {
            responseBox.className = 'mb-4 p-4 rounded-xl text-sm font-semibold bg-red-100 text-red-800 border border-red-300';
            responseBox.innerText = result.message || 'Erreur lors de l\'envoi. Veuillez appeler le <?= PHONE_DISPLAY ?>.';
        }
    } catch (err) {
        responseBox.classList.remove('hidden');
        responseBox.className = 'mb-4 p-4 rounded-xl text-sm font-semibold bg-red-100 text-red-800 border border-red-300';
        responseBox.innerText = 'Un problème est survenu. Veuillez nous contacter directement au <?= PHONE_DISPLAY ?>.';
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
