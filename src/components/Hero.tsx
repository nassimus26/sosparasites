'use client';

import React from 'react';
import { Phone, ShieldCheck, Clock, MapPin, CheckCircle, Flame, ArrowRight, Award } from 'lucide-react';

export default function Hero() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <section className="relative bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white pt-10 pb-16 lg:py-20 overflow-hidden">
      {/* Subtle Background Pattern */}
      <div className="absolute inset-0 opacity-10 bg-[radial-gradient(#dc2626_1px,transparent_1px)] [background-size:16px_16px]"></div>

      {/* Decorative Glow */}
      <div className="absolute top-1/4 left-1/2 -translate-x-1/2 w-96 h-96 bg-red-600/20 rounded-full blur-3xl pointer-events-none"></div>

      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

          {/* Left Column - Main Copy & CTAs */}
          <div className="lg:col-span-7 text-center lg:text-left space-y-6">

            {/* Status Badge */}
            <div className="inline-flex items-center gap-2 bg-red-950/80 border border-red-500/30 text-red-300 px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-semibold backdrop-blur">
              <span className="relative flex h-2.5 w-2.5">
                <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                <span className="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
              </span>
              <span>Urgence Nuisibles 24h/24 & 7j/7 - Intervention Rapide en 1h</span>
            </div>

            {/* Main Headline */}
            <h1 className="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
              SOS PARASITES : <br />
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-red-400 via-orange-400 to-amber-300">
                Solution Anti-Nuisibles
              </span>
            </h1>

            <p className="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0">
              Dératisation, désinsectisation et désinfection professionnelles dans <strong className="text-white font-semibold">toute l'Île-de-France et Marseille</strong>. Traitements certifiés, résultats garantis et intervention immédiate.
            </p>

            {/* Highlighted Call To Action Buttons */}
            <div className="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">

              {/* Call Directly Button */}
              <a
                href={phoneTel}
                className="w-full sm:w-auto bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white font-black px-8 py-4 rounded-2xl shadow-xl hover:shadow-2xl hover:scale-[1.02] transition-all duration-200 flex items-center justify-center gap-3 text-lg sm:text-xl border border-red-400/30 group animate-pulse-call"
              >
                <div className="bg-white/20 p-2 rounded-xl group-hover:rotate-12 transition">
                  <Phone className="w-6 h-6 fill-current text-white" />
                </div>
                <div className="text-left">
                  <span className="block text-xs font-bold text-red-200 uppercase tracking-wide">Appeler Un Expert Maintenant</span>
                  <span className="text-xl sm:text-2xl font-black">{phoneDisplay}</span>
                </div>
              </a>

              {/* Get Quote / Contact Button */}
              <a
                href="#contact"
                className="w-full sm:w-auto bg-slate-800/80 hover:bg-slate-700 text-slate-200 hover:text-white font-bold px-6 py-4 rounded-2xl border border-slate-700 transition flex items-center justify-center gap-2 text-base"
              >
                Demander Un Devis En Ligne
                <ArrowRight className="w-5 h-5 text-red-400" />
              </a>
            </div>

            {/* Quick Benefits Bullet Points */}
            <div className="pt-4 grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs sm:text-sm text-slate-300 font-medium">
              <div className="flex items-center gap-2 justify-center lg:justify-start">
                <Clock className="w-4 h-4 text-red-400 shrink-0" />
                <span>Déplacement 1H</span>
              </div>
              <div className="flex items-center gap-2 justify-center lg:justify-start">
                <ShieldCheck className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>Certifié Certibiocide</span>
              </div>
              <div className="flex items-center gap-2 justify-center lg:justify-start">
                <Award className="w-4 h-4 text-amber-400 shrink-0" />
                <span>Résultats Garantis</span>
              </div>
              <div className="flex items-center gap-2 justify-center lg:justify-start">
                <MapPin className="w-4 h-4 text-sky-400 shrink-0" />
                <span>IDF & Marseille</span>
              </div>
            </div>

            {/* Target Pests Pills */}
            <div className="pt-2">
              <p className="text-xs uppercase tracking-wider font-bold text-slate-400 mb-2">
                Nuisibles pris en charge d'urgence :
              </p>
              <div className="flex flex-wrap justify-center lg:justify-start gap-1.5 text-xs font-semibold">
                {[
                  'Punaises de lit',
                  'Cafards & Blattes',
                  'Souris & Rats',
                  'Fourmis',
                  'Guêpes & Frelons',
                  'Puces',
                  'Mouches',
                  'Mites',
                  'Araignées',
                  'Moustiques'
                ].map((pest, idx) => (
                  <span
                    key={idx}
                    className="bg-slate-800/90 text-slate-200 px-2.5 py-1 rounded-lg border border-slate-700/60"
                  >
                    {pest}
                  </span>
                ))}
              </div>
            </div>

          </div>

          {/* Right Column - Urgence Quick Box / Card */}
          <div className="lg:col-span-5">
            <div className="bg-slate-800/90 border border-slate-700 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur relative">

              {/* Badge */}
              <div className="absolute -top-3 right-6 bg-amber-500 text-slate-950 font-black text-xs uppercase px-3 py-1 rounded-full shadow">
                Évaluation Gratuite
              </div>

              <h3 className="text-xl sm:text-2xl font-bold text-white mb-2 flex items-center gap-2">
                <Flame className="w-6 h-6 text-red-500 fill-current" />
                Besoin d'une intervention ?
              </h3>

              <p className="text-slate-300 text-sm mb-6">
                Appelez nos techniciens directement ou remplissez notre formulaire pour recevoir un rappel immédiat.
              </p>

              {/* Emergency Call Highlight */}
              <div className="bg-red-950/60 border border-red-600/40 rounded-2xl p-4 text-center mb-6">
                <p className="text-xs text-red-300 uppercase font-bold tracking-wider mb-1">
                  Ligne téléphonique directe 24/7
                </p>
                <a
                  href={phoneTel}
                  className="text-2xl sm:text-3xl font-black text-white hover:text-red-400 transition block tracking-tight"
                >
                  {phoneDisplay}
                </a>
                <p className="text-xs text-slate-400 mt-1">
                  Intervention possible dans l'heure chez vous
                </p>
              </div>

              {/* Key Promises */}
              <ul className="space-y-3 text-sm text-slate-300">
                <li className="flex items-start gap-2.5">
                  <CheckCircle className="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" />
                  <span><strong>Techniciens qualifiés :</strong> Équipés de produits biocides professionnels puissants.</span>
                </li>
                <li className="flex items-start gap-2.5">
                  <CheckCircle className="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" />
                  <span><strong>Discrétion garantie :</strong> Véhicules et interventions respectueux de votre tranquillité.</span>
                </li>
                <li className="flex items-start gap-2.5">
                  <CheckCircle className="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" />
                  <span><strong>Tarifs sur-mesure :</strong> Adaptés exactement à la superficie et à l'infestation.</span>
                </li>
              </ul>

              <div className="mt-6 pt-6 border-t border-slate-700/80">
                <a
                  href="#contact"
                  className="w-full bg-slate-700 hover:bg-slate-600 text-white font-bold py-3 px-4 rounded-xl text-center block transition text-sm"
                >
                  Accéder au Formulaire de Contact
                </a>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  );
}
