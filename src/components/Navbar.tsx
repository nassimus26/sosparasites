'use client';

import React, { useState } from 'react';
import Link from 'next/link';
import { Phone, Shield, Menu, X, Clock, MapPin } from 'lucide-react';

export default function Navbar() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
      {/* Top emergency bar */}
      <div className="bg-red-700 text-white text-xs md:text-sm py-1.5 px-4">
        <div className="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-1">
          <div className="flex items-center gap-2">
            <span className="relative flex h-2.5 w-2.5">
              <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span className="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-400"></span>
            </span>
            <span className="font-semibold">Interventions 7j/7 & 24h/24</span>
            <span className="hidden md:inline">• Île-de-France (75, 77, 78, 91, 92, 93, 94, 95) & Marseille (13)</span>
          </div>
          <div className="flex items-center gap-4 font-medium">
            <span className="hidden sm:inline flex items-center gap-1">
              <Clock className="w-3.5 h-3.5 inline" /> Déplacement en 1 heure
            </span>
            <a
              href={phoneTel}
              className="bg-white text-red-700 hover:bg-gray-100 font-bold px-2.5 py-0.5 rounded transition flex items-center gap-1 text-xs"
            >
              <Phone className="w-3 h-3 fill-current" />
              Appel d'urgence
            </a>
          </div>
        </div>
      </div>

      {/* Main navigation */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-20">

          {/* Logo */}
          <Link href="/" className="flex items-center gap-2.5 group">
            <div className="bg-gradient-to-br from-red-600 to-red-800 text-white p-2.5 rounded-xl shadow-md group-hover:scale-105 transition">
              <Shield className="w-7 h-7" />
            </div>
            <div className="flex flex-col">
              <span className="text-xl sm:text-2xl font-black tracking-tight text-gray-900 leading-none">
                SOS<span className="text-red-600">PARASITES</span>
                <span className="text-xs font-normal text-gray-500 block">.fr</span>
              </span>
              <span className="text-[10px] font-medium text-gray-500 uppercase tracking-wider">
                Anti-Nuisibles Île-de-France & Marseille
              </span>
            </div>
          </Link>

          {/* Desktop Links */}
          <nav className="hidden lg:flex items-center gap-7 text-sm font-semibold text-gray-700">
            <Link href="/" className="hover:text-red-600 transition">
              Accueil
            </Link>
            <Link href="/#nuisibles" className="hover:text-red-600 transition">
              Nuisibles Traités
            </Link>
            <Link href="/#tarifs" className="hover:text-red-600 transition">
              Nos Tarifs
            </Link>
            <Link href="/#zones" className="hover:text-red-600 transition">
              Zones d'Intervention
            </Link>
            <Link href="/#processus" className="hover:text-red-600 transition">
              Notre Méthode
            </Link>
            <Link href="/#contact" className="hover:text-red-600 transition">
              Contact & Devis
            </Link>
          </nav>

          {/* Desktop Phone Call CTA */}
          <div className="hidden sm:flex items-center gap-3">
            <a
              href={phoneTel}
              className="bg-red-600 hover:bg-red-700 text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-md hover:shadow-lg transition flex items-center gap-2 animate-pulse-call"
            >
              <Phone className="w-4 h-4 fill-current" />
              <div className="text-left">
                <span className="block text-[10px] uppercase font-bold text-red-200 leading-none">Appel Gratuit</span>
                <span className="text-base font-extrabold leading-none">{phoneDisplay}</span>
              </div>
            </a>
          </div>

          {/* Mobile menu trigger */}
          <div className="flex lg:hidden items-center gap-2">
            <a
              href={phoneTel}
              className="sm:hidden bg-red-600 text-white p-2.5 rounded-lg font-bold flex items-center justify-center"
              aria-label="Appeler SOS Parasites"
            >
              <Phone className="w-5 h-5 fill-current" />
            </a>
            <button
              onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
              className="p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none"
              aria-label="Menu"
            >
              {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile Drawer */}
      {mobileMenuOpen && (
        <div className="lg:hidden bg-white border-b border-gray-200 px-4 pt-2 pb-6 space-y-3">
          <Link
            href="/"
            onClick={() => setMobileMenuOpen(false)}
            className="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"
          >
            Accueil
          </Link>
          <Link
            href="/#nuisibles"
            onClick={() => setMobileMenuOpen(false)}
            className="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"
          >
            Nuisibles Traités
          </Link>
          <Link
            href="/#tarifs"
            onClick={() => setMobileMenuOpen(false)}
            className="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"
          >
            Pourquoi Pas de Tarif Fixe ?
          </Link>
          <Link
            href="/#zones"
            onClick={() => setMobileMenuOpen(false)}
            className="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"
          >
            Zones (Île-de-France & Marseille)
          </Link>
          <Link
            href="/#contact"
            onClick={() => setMobileMenuOpen(false)}
            className="block py-2 text-base font-semibold text-gray-800 hover:text-red-600"
          >
            Formulaire de Contact
          </Link>

          <div className="pt-2">
            <a
              href={phoneTel}
              className="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-xl shadow text-center flex items-center justify-center gap-2"
            >
              <Phone className="w-5 h-5 fill-current" />
              Appeler le {phoneDisplay}
            </a>
          </div>
        </div>
      )}
    </header>
  );
}
