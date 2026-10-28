<?php
/**
 * Header Template - SOS PARASITES (PHP 8)
 */
declare(strict_types=1);
require_once __DIR__ . '/../protected/config.php';
require_once __DIR__ . '/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $currentLang ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'SOS PARASITES - Anti-Nuisibles 24/7 Île-de-France, Marseille & Lyon' ?></title>
    <meta name="description" content="<?= $pageDesc ?? __('hero_desc') ?>">
    <meta name="keywords" content="sos parasites, dératisation Paris, désinsectisation Île-de-France, punaises de lit Marseille, exterminateur cafards Lyon, traitement rats souris, destruction nid de guêpes, puces, moustiques tigres, société anti nuisible, devis gratuit, intervention urgente 24/7">
    <meta name="author" content="SOS PARASITES">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://sosparasites.fr<?= $_SERVER['REQUEST_URI'] ?? '/' ?>">

    <!-- Open Graph SEO -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sosparasites.fr">
    <meta property="og:title" content="<?= $pageTitle ?? 'SOS PARASITES - Anti-Nuisibles 24/7 Île-de-France, Marseille & Lyon' ?>">
    <meta property="og:description" content="<?= $pageDesc ?? __('hero_desc') ?>">
    <meta property="og:locale" content="<?= $currentLang === 'en' ? 'en_US' : 'fr_FR' ?>">
    <meta property="og:site_name" content="SOS PARASITES">

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VRWHY74XPB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VRWHY74XPB');
    </script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        red: {
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                            950: '#450a0a',
                        }
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @keyframes pulse-ring {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.7); }
            70% { transform: scale(1.05); box-shadow: 0 0 0 12px rgba(220, 38, 38, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(220, 38, 38, 0); }
        }
        .animate-pulse-call { animation: pulse-ring 2s infinite; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-slate-50 text-slate-900 antialiased">

    <!-- Top Emergency Bar -->
    <div style="background-color: #b91c1c;" class="text-white text-xs md:text-sm py-1.5 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-1 text-white">
            <div class="flex items-center gap-2">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-400"></span>
                </span>
                <span class="font-semibold"><?= __('emergency_bar') ?></span>
            </div>
            <div class="flex items-center gap-4 font-medium">
                <!-- Language Switcher -->
                <div class="flex items-center gap-1.5 bg-red-900/80 px-2 py-0.5 rounded text-xs font-bold">
                    <a href="?lang=fr" class="<?= $currentLang === 'fr' ? 'text-white underline' : 'text-red-200 hover:text-white' ?>">FR</a>
                    <span>|</span>
                    <a href="?lang=en" class="<?= $currentLang === 'en' ? 'text-white underline' : 'text-red-200 hover:text-white' ?>">EN</a>
                </div>

                <a href="<?= PHONE_TEL ?>" class="bg-white text-red-700 hover:bg-gray-100 font-bold px-3 py-0.5 rounded transition flex items-center gap-1 text-xs">
                    <i data-lucide="phone" class="w-3 h-3"></i>
                    <?= __('emergency_call') ?> : <?= PHONE_DISPLAY ?>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="/" class="flex items-center gap-2.5 group">
                    <div class="bg-gradient-to-br from-red-600 to-red-800 text-white p-2.5 rounded-xl shadow-md">
                        <i data-lucide="shield" class="w-7 h-7"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-gray-900 leading-none">
                            SOS<span class="text-red-600">PARASITES</span><span class="text-xs font-normal text-gray-500 block">.fr</span>
                        </span>
                        <span class="text-[10px] font-medium text-gray-500 uppercase tracking-wider">
                            Anti-Nuisibles IDF, Marseille & Lyon
                        </span>
                    </div>
                </a>

                <nav class="hidden xl:flex items-center gap-4 text-xs font-semibold text-gray-700">
                    <a href="/" class="hover:text-red-600 transition"><?= __('nav_home') ?></a>
                    <a href="/#nuisibles" class="hover:text-red-600 transition"><?= __('nav_pests') ?></a>
                    <a href="/tarifs.php" class="hover:text-red-600 transition"><?= __('nav_tarifs') ?></a>
                    <a href="/zones.php" class="hover:text-red-600 transition"><?= __('nav_zones') ?></a>
                    <a href="/nous-rejoindre.php" class="hover:text-sky-600 transition font-bold text-sky-700 bg-sky-50 px-2.5 py-1 rounded-lg border border-sky-200"><?= __('nav_partners') ?></a>
                    <a href="/#processus" class="hover:text-red-600 transition"><?= __('nav_process') ?></a>
                    <a href="/#contact" class="hover:text-red-600 transition"><?= __('nav_contact') ?></a>
                </nav>

                <div class="hidden sm:flex items-center gap-3">
                    <a href="<?= PHONE_TEL ?>" class="bg-red-600 hover:bg-red-700 text-white px-5 py-3 rounded-xl font-bold text-sm shadow-md transition flex items-center gap-2.5 animate-pulse-call">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span class="text-lg font-black tracking-wide"><?= PHONE_DISPLAY ?></span>
                    </a>
                </div>

                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="xl:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden xl:hidden bg-white border-b border-gray-200 px-4 pt-2 pb-6 space-y-3">
            <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                <span class="text-xs font-bold text-gray-500 uppercase">Langue / Language :</span>
                <div class="flex items-center gap-2 font-bold text-sm">
                    <a href="?lang=fr" class="<?= $currentLang === 'fr' ? 'text-red-600 underline' : 'text-gray-600' ?>">Français</a>
                    <span>|</span>
                    <a href="?lang=en" class="<?= $currentLang === 'en' ? 'text-red-600 underline' : 'text-gray-600' ?>">English</a>
                </div>
            </div>
            <a href="/" class="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"><?= __('nav_home') ?></a>
            <a href="/#nuisibles" class="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"><?= __('nav_pests') ?></a>
            <a href="/tarifs.php" class="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"><?= __('nav_tarifs') ?></a>
            <a href="/zones.php" class="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"><?= __('nav_zones') ?></a>
            <a href="/nous-rejoindre.php" class="block py-2 text-base font-semibold text-sky-700 hover:text-sky-800 font-bold"><?= __('nav_partners') ?></a>
            <a href="/#contact" class="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"><?= __('nav_contact') ?></a>
            <div class="pt-2">
                <a href="<?= PHONE_TEL ?>" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-xl shadow text-center flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    <?= __('emergency_call') ?> <?= PHONE_DISPLAY ?>
                </a>
            </div>
        </div>
    </header>
