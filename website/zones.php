<?php
/**
 * Zones d'Intervention - PHP 8
 */
declare(strict_types=1);

require_once __DIR__ . '/protected/config.php';
$pageTitle = "Zones d'Intervention | SOS PARASITES - Île-de-France, Marseille & Lyon";
$pageDesc = "Déplacement rapide en 1h dans tout Paris, l'Île-de-France, Marseille et Lyon.";

require_once __DIR__ . '/includes/header.php';
?>

<div class="bg-slate-900 text-white py-12 px-4 text-center">
    <div class="max-w-4xl mx-auto space-y-4">
        <span class="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
            Périmètre d'Action
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold">Déplacement en 1h sur Paris, Île-de-France, Marseille & Lyon</h1>
        <p class="text-slate-300 text-base sm:text-lg">Des techniciens de proximité disponibles 24h/24 et 7j/7 dans votre secteur.</p>
    </div>
</div>

<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

        <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-8 shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <span class="bg-sky-500 text-slate-950 text-xs font-black uppercase px-3 py-1 rounded-full">Grandes Métropoles</span>
                <h3 class="text-3xl font-black text-white mt-2">Paris, Marseille & Lyon</h3>
                <p class="text-slate-300 text-sm mt-1">Intervention urgente 24h/24 dans tous les arrondissements de Paris, Marseille et de Lyon ainsi que dans leurs agglomérations.</p>
            </div>
            <a href="<?= PHONE_TEL ?>" class="bg-red-600 hover:bg-red-700 text-white font-extrabold px-6 py-3.5 rounded-2xl shadow-lg transition flex items-center gap-2 shrink-0">
                <i data-lucide="phone" class="w-5 h-5"></i> Appeler Un Expert (<?= PHONE_DISPLAY ?>)
            </a>
        </div>

        <div class="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Départements d'Île-de-France</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $depts = [
                    ['75', 'Paris', ['Paris 1er à 20e']],
                    ['77', 'Seine-et-Marne', ['Meaux', 'Chelles', 'Melun', 'Pontault-Combault']],
                    ['78', 'Yvelines', ['Versailles', 'Sartrouville', 'Mantes-la-Jolie', 'Poissy']],
                    ['91', 'Essonne', ['Évry-Courcouronnes', 'Corbeil-Essonnes', 'Massy']],
                    ['92', 'Hauts-de-Seine', ['Boulogne-Billancourt', 'Nanterre', 'Courbevoie', 'Neuilly']],
                    ['93', 'Seine-Saint-Denis', ['Saint-Denis', 'Montreuil', 'Aulnay-sous-Bois', 'Aubervilliers']],
                    ['94', 'Val-de-Marne', ['Créteil', 'Vitry-sur-Seine', 'Champigny', 'Ivry']],
                    ['95', 'Val-d\'Oise', ['Argenteuil', 'Sarcelles', 'Cergy', 'Franconville']]
                ];
                foreach ($depts as $d):
                ?>
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-red-600 text-white font-black text-sm px-2.5 py-1 rounded-lg"><?= $d[0] ?></span>
                        <h4 class="font-bold text-gray-900 text-base"><?= $d[1] ?></h4>
                    </div>
                    <ul class="text-xs text-gray-600 space-y-1">
                        <?php foreach ($d[2] as $c): ?>
                            <li>• <?= $c ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
