'use client';

import React from 'react';
import Link from 'next/link';
import { Shield, Phone, Mail, MapPin, CheckCircle } from 'lucide-react';

export default function Footer() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <footer className="bg-slate-950 text-slate-400 text-sm border-t border-slate-800 pt-12 pb-24 lg:pb-12">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {/* Main Footer Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-12 border-b border-slate-800">

          {/* Brand Column */}
          <div className="lg:col-span-2 space-y-4">
            <Link href="/" className="flex items-center gap-2.5">
              <div className="bg-red-600 text-white p-2 rounded-xl">
                <Shield className="w-6 h-6" />
              </div>
              <span className="text-2xl font-black text-white tracking-tight">
                SOS<span className="text-red-600">PARASITES</span>.fr
              </span>
            </Link>

            <p className="text-xs text-slate-400 leading-relaxed max-w-sm">
              Entreprise spécialisée dans la dératisation, désinsectisation et désinfection d'urgence pour particuliers et professionnels. Interventions 7j/7 et 24h/24 dans toute l'Île-de-France et Marseille.
            </p>

            <div className="pt-2 space-y-2 text-xs">
              <div className="flex items-center gap-2 text-slate-300 font-semibold">
                <Phone className="w-4 h-4 text-red-500 fill-current" />
                <span>Téléphone direct : <a href={phoneTel} className="text-white hover:text-red-400">{phoneDisplay}</a></span>
              </div>
              <div className="flex items-center gap-2 text-slate-300">
                <Mail className="w-4 h-4 text-red-500" />
                <span>Contact : contact@sosparasites.fr</span>
              </div>
              <div className="flex items-center gap-2 text-slate-300">
                <MapPin className="w-4 h-4 text-red-500" />
                <span>Zone : Paris, Île-de-France (75, 77, 78, 91, 92, 93, 94, 95) & Marseille (13)</span>
              </div>
            </div>
          </div>

          {/* Target Pests */}
          <div>
            <h4 className="text-white font-bold text-sm uppercase tracking-wider mb-3">
              Nuisibles Traités
            </h4>
            <ul className="space-y-1.5 text-xs">
              <li><Link href="/#nuisibles" className="hover:text-white transition">Punaises de lit</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Cafards et blattes</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Souris et rats</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Fourmis</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Guêpes et frelons</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Puces</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Mouches et moucherons</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Mites</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Araignées</Link></li>
              <li><Link href="/#nuisibles" className="hover:text-white transition">Moustiques</Link></li>
            </ul>
          </div>

          {/* Zones */}
          <div>
            <h4 className="text-white font-bold text-sm uppercase tracking-wider mb-3">
              Zones d'Intervention
            </h4>
            <ul className="space-y-1.5 text-xs">
              <li><Link href="/zones" className="hover:text-white transition">75 - Paris</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">92 - Hauts-de-Seine</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">93 - Seine-Saint-Denis</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">94 - Val-de-Marne</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">77 - Seine-et-Marne</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">78 - Yvelines</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">91 - Essonne</Link></li>
              <li><Link href="/zones" className="hover:text-white transition">95 - Val-d'Oise</Link></li>
              <li><Link href="/zones" className="hover:text-white font-bold text-red-400 transition">13 - Marseille & PACA</Link></li>
            </ul>
          </div>

          {/* Informative Links */}
          <div>
            <h4 className="text-white font-bold text-sm uppercase tracking-wider mb-3">
              Informations & Devis
            </h4>
            <ul className="space-y-1.5 text-xs">
              <li><Link href="/tarifs" className="hover:text-white transition">Pourquoi Pas de Tarif Fixe ?</Link></li>
              <li><Link href="/devis" className="hover:text-white transition">Calculateur de Devis</Link></li>
              <li><Link href="/#processus" className="hover:text-white transition">Notre Méthode Certifiée</Link></li>
              <li><Link href="/#contact" className="hover:text-white transition">Formulaire de Contact</Link></li>
              <li><Link href="/mentions-legales" className="hover:text-white transition">Mentions Légales</Link></li>
            </ul>
          </div>

        </div>

        {/* Bottom Legal Copyright */}
        <div className="pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
          <p>© {new Date().getFullYear()} SOSPARASITES.fr — Tous droits réservés. Anti-Nuisibles Île-de-France & Marseille.</p>
          <div className="flex items-center gap-4">
            <Link href="/mentions-legales" className="hover:text-slate-300">Mentions Légales</Link>
            <span>•</span>
            <a href={phoneTel} className="text-red-400 font-bold hover:underline">
              Appel d'urgence : {phoneDisplay}
            </a>
          </div>
        </div>

      </div>
    </footer>
  );
}
