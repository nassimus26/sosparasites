<?php
/**
 * Footer Template - SOS PARASITES (PHP 8)
 */
declare(strict_types=1);
require_once __DIR__ . '/../protected/config.php';
?>
    <footer class="bg-slate-950 text-slate-400 text-sm border-t border-slate-800 pt-12 pb-24 lg:pb-12 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-12 border-b border-slate-800">
                <div class="lg:col-span-2 space-y-4">
                    <a href="/" class="flex items-center gap-2.5">
                        <div class="bg-red-600 text-white p-2 rounded-xl">
                            <i data-lucide="shield" class="w-6 h-6"></i>
                        </div>
                        <span class="text-2xl font-black text-white tracking-tight">
                            SOS<span class="text-red-600">PARASITES</span>.fr
                        </span>
                    </a>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        Entreprise spécialisée en dératisation, désinsectisation et désinfection d'urgence pour particuliers et professionnels. Interventions 7j/7 et 24h/24 dans toute l'Île-de-France et Marseille.
                    </p>
                    <div class="pt-2 space-y-2 text-xs">
                        <div class="flex items-center gap-2 text-slate-300 font-semibold">
                            <i data-lucide="phone" class="w-4 h-4 text-red-500"></i>
                            <span>Téléphone direct : <a href="<?= PHONE_TEL ?>" class="text-white hover:text-red-400 font-bold"><?= PHONE_DISPLAY ?></a></span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-300">
                            <i data-lucide="mail" class="w-4 h-4 text-red-500"></i>
                            <span>Contact : <?= SENDER_EMAIL ?></span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-300">
                            <i data-lucide="map-pin" class="w-4 h-4 text-red-500"></i>
                            <span>Paris, Île-de-France (75-95), Marseille & Lyon</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-3">Nuisibles Traités</h4>
                    <ul class="space-y-1.5 text-xs">
                        <li><a href="/#nuisibles" class="hover:text-white transition">Punaises de lit</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Cafards et blattes</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Souris et rats</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Fourmis</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Guêpes et frelons</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Puces</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Mouches et moucherons</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Mites</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Araignées</a></li>
                        <li><a href="/#nuisibles" class="hover:text-white transition">Moustiques</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-3">Secteurs</h4>
                    <ul class="space-y-1.5 text-xs">
                        <li><a href="/zones.php" class="hover:text-white transition">75 - Paris</a></li>
                        <li><a href="/zones.php" class="hover:text-white transition">92 - Hauts-de-Seine</a></li>
                        <li><a href="/zones.php" class="hover:text-white transition">93 - Seine-Saint-Denis</a></li>
                        <li><a href="/zones.php" class="hover:text-white transition">94 - Val-de-Marne</a></li>
                        <li><a href="/zones.php" class="hover:text-white transition">77, 78, 91, 95</a></li>
                        <li><a href="/zones.php" class="hover:text-white font-bold text-red-400 transition">Marseille & Lyon</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-3">Informations</h4>
                    <ul class="space-y-1.5 text-xs">
                        <li><a href="/tarifs.php" class="hover:text-white transition">Pourquoi Pas de Tarif Fixe ?</a></li>
                        <li><a href="/partenaires.php" class="hover:text-sky-400 font-bold text-sky-400 transition">Espace Sous-Traitants</a></li>
                        <li><a href="/devis.php" class="hover:text-white transition">Calculateur de Devis</a></li>
                        <li><a href="/#processus" class="hover:text-white transition">Notre Méthode</a></li>
                        <li><a href="/#contact" class="hover:text-white transition">Formulaire Contact</a></li>
                        <li><a href="/mentions-legales.php" class="hover:text-white transition">Mentions Légales</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                <p>© <?= date('Y') ?> SOSPARASITES.fr — Tous droits réservés. Anti-Nuisibles Île-de-France & Marseille.</p>
                <div class="flex items-center gap-4">
                    <a href="/mentions-legales.php" class="hover:text-slate-300">Mentions Légales</a>
                    <span>•</span>
                    <a href="<?= PHONE_TEL ?>" class="text-red-400 font-bold hover:underline">
                        Appel d'urgence : <?= PHONE_DISPLAY ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Floating Call Bar -->
    <div class="fixed bottom-0 left-0 right-0 z-50 lg:hidden p-3 bg-slate-900/95 border-t border-slate-800 backdrop-blur shadow-2xl">
        <div class="max-w-md mx-auto flex items-center justify-between gap-3">
            <div class="flex flex-col text-left pl-1">
                <span class="flex items-center gap-1.5 text-[10px] uppercase font-bold text-emerald-400">
                    <span class="h-2 w-2 rounded-full bg-emerald-400 animate-ping"></span>
                    Dispo 24/7 en 1h
                </span>
                <span class="text-xs text-slate-300">IDF & Marseille</span>
            </div>
            <a href="<?= PHONE_TEL ?>" class="bg-red-600 hover:bg-red-700 text-white font-black px-5 py-3 rounded-xl shadow-lg flex items-center gap-2 text-sm animate-pulse-call">
                <i data-lucide="phone" class="w-4 h-4"></i>
                <span>Appeler <?= PHONE_DISPLAY ?></span>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.lucide) {
                lucide.createIcons();
            }
        });
    </script>
</body>
</html>
