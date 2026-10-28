'use client';

import React, { useState } from 'react';
import { PESTS_DATA, PestInfo } from '@/lib/pestsData';
import { Bug, ShieldAlert, Phone, CheckCircle2, ChevronRight, AlertTriangle, X } from 'lucide-react';

export default function PestsSection() {
  const [selectedPest, setSelectedPest] = useState<PestInfo | null>(null);
  const [filter, setFilter] = useState<string>('Tous');

  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  const categories = ['Tous', 'Parasites', 'Insects', 'Rodents', 'Flying'];

  const categoryLabels: Record<string, string> = {
    'Tous': 'Tous les nuisibles (10)',
    'Parasites': 'Parasites (Punaises & Puces)',
    'Insects': 'Insectes rampant (Cafards, Fourmis, Mites, Araignées)',
    'Rodents': 'Rongeurs (Rats & Souris)',
    'Flying': 'Volants (Guêpes, Frelons, Mouches, Moustiques)'
  };

  const filteredPests = filter === 'Tous'
    ? PESTS_DATA
    : PESTS_DATA.filter(p => p.category === filter);

  return (
    <section id="nuisibles" className="py-16 sm:py-24 bg-slate-900 text-white relative overflow-hidden">

      {/* Background accents */}
      <div className="absolute top-0 right-0 w-96 h-96 bg-red-600/10 rounded-full blur-3xl pointer-events-none"></div>
      <div className="absolute bottom-0 left-0 w-96 h-96 bg-amber-600/10 rounded-full blur-3xl pointer-events-none"></div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {/* Section Title */}
        <div className="text-center max-w-3xl mx-auto mb-12">
          <div className="inline-flex items-center gap-2 bg-red-950/90 border border-red-500/30 text-red-400 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
            <Bug className="w-4 h-4" />
            10 Types de Nuisibles Pris en Charge
          </div>
          <h2 className="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
            Traitement & Éradication de vos Nuisibles
          </h2>
          <p className="mt-4 text-slate-300 text-base sm:text-lg">
            Découvrez nos méthodes d'intervention certifiées pour débarrasser votre domicile ou local professionnel de tout indésirable.
          </p>
        </div>

        {/* Category Filters */}
        <div className="flex flex-wrap justify-center gap-2 mb-10">
          {categories.map((cat) => (
            <button
              key={cat}
              onClick={() => setFilter(cat)}
              className={`px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition ${
                filter === cat
                  ? 'bg-red-600 text-white shadow-lg shadow-red-600/30'
                  : 'bg-slate-800 text-slate-300 hover:bg-slate-700'
              }`}
            >
              {categoryLabels[cat]}
            </button>
          ))}
        </div>

        {/* Pests Grid (10 Pests) */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {filteredPests.map((pest) => (
            <div
              key={pest.id}
              className="bg-slate-800/90 border border-slate-700 rounded-3xl p-6 hover:border-red-500/50 transition-all duration-300 flex flex-col justify-between group hover:shadow-xl hover:shadow-red-900/20"
            >
              <div>
                {/* Top Badge */}
                <div className="flex justify-between items-start mb-4">
                  <span className={`text-xs font-bold uppercase px-3 py-1 rounded-full border ${
                    pest.dangerLevel === 'Critique'
                      ? 'bg-red-950 border-red-600/50 text-red-400'
                      : pest.dangerLevel === 'Élevé'
                      ? 'bg-amber-950 border-amber-600/50 text-amber-400'
                      : 'bg-yellow-950 border-yellow-600/50 text-yellow-300'
                  }`}>
                    Danger: {pest.dangerLevel}
                  </span>
                  <span className="text-xs text-slate-400 font-mono">SOS-0{pest.id}</span>
                </div>

                <h3 className="text-2xl font-bold text-white mb-2 group-hover:text-red-400 transition">
                  {pest.name}
                </h3>

                <p className="text-xs font-medium text-slate-400 mb-4 line-clamp-2">
                  {pest.subtitle}
                </p>

                <p className="text-sm text-slate-300 mb-6 leading-relaxed line-clamp-3">
                  {pest.description}
                </p>

                {/* Key Symptom Preview */}
                <div className="bg-slate-900/60 rounded-2xl p-3.5 border border-slate-700/60 mb-6 text-xs text-slate-300 space-y-1.5">
                  <span className="font-bold text-red-400 block uppercase text-[10px] tracking-wider">Signes d'infestation :</span>
                  <p className="line-clamp-2">• {pest.symptoms[0]}</p>
                </div>
              </div>

              {/* Actions */}
              <div className="pt-4 border-t border-slate-700/80 flex items-center gap-3">
                <button
                  onClick={() => setSelectedPest(pest)}
                  className="flex-1 bg-slate-700 hover:bg-slate-600 text-white font-semibold py-2.5 px-3 rounded-xl text-xs sm:text-sm transition flex items-center justify-center gap-1"
                >
                  Détails du traitement
                  <ChevronRight className="w-4 h-4" />
                </button>
                <a
                  href={phoneTel}
                  className="bg-red-600 hover:bg-red-700 text-white p-2.5 rounded-xl transition flex items-center justify-center"
                  title={`Appeler pour ${pest.name}`}
                >
                  <Phone className="w-4 h-4 fill-current" />
                </a>
              </div>
            </div>
          ))}
        </div>

        {/* Modal for Pest Details */}
        {selectedPest && (
          <div className="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto">
            <div className="bg-slate-800 border border-slate-700 rounded-3xl max-w-2xl w-full p-6 sm:p-8 relative shadow-2xl text-white my-8">

              <button
                onClick={() => setSelectedPest(null)}
                className="absolute top-4 right-4 text-slate-400 hover:text-white bg-slate-700/50 p-2 rounded-full transition"
              >
                <X className="w-6 h-6" />
              </button>

              <div className="flex items-center gap-3 mb-2">
                <span className="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full">
                  Fiche Traitement
                </span>
                <span className="text-xs text-slate-400">Niveau : {selectedPest.dangerLevel}</span>
              </div>

              <h3 className="text-2xl sm:text-3xl font-extrabold text-white mb-2">
                {selectedPest.name}
              </h3>
              <p className="text-slate-300 text-sm mb-6 font-medium">
                {selectedPest.subtitle}
              </p>

              <div className="space-y-6 text-sm text-slate-300">

                <div>
                  <h4 className="text-xs font-bold text-red-400 uppercase tracking-wider mb-2 flex items-center gap-1.5">
                    <AlertTriangle className="w-4 h-4" />
                    Signes d'infestation courante :
                  </h4>
                  <ul className="space-y-1.5 bg-slate-900/60 p-4 rounded-2xl border border-slate-700">
                    {selectedPest.symptoms.map((symp, i) => (
                      <li key={i} className="flex items-start gap-2 text-xs sm:text-sm">
                        <span className="text-red-500 font-bold">•</span>
                        <span>{symp}</span>
                      </li>
                    ))}
                  </ul>
                </div>

                <div>
                  <h4 className="text-xs font-bold text-amber-400 uppercase tracking-wider mb-2 flex items-center gap-1.5">
                    <ShieldAlert className="w-4 h-4" />
                    Risques majeurs :
                  </h4>
                  <ul className="space-y-1.5 bg-slate-900/60 p-4 rounded-2xl border border-slate-700">
                    {selectedPest.risks.map((risk, i) => (
                      <li key={i} className="flex items-start gap-2 text-xs sm:text-sm">
                        <span className="text-amber-500 font-bold">•</span>
                        <span>{risk}</span>
                      </li>
                    ))}
                  </ul>
                </div>

                <div>
                  <h4 className="text-xs font-bold text-emerald-400 uppercase tracking-wider mb-2 flex items-center gap-1.5">
                    <CheckCircle2 className="w-4 h-4" />
                    Méthode d'éradication SOS PARASITES :
                  </h4>
                  <p className="bg-emerald-950/40 border border-emerald-500/30 p-4 rounded-2xl text-emerald-200 text-xs sm:text-sm leading-relaxed">
                    {selectedPest.treatmentMethod}
                  </p>
                </div>

              </div>

              {/* Modal Footer Call Buttons */}
              <div className="mt-8 pt-6 border-t border-slate-700 flex flex-col sm:flex-row gap-3">
                <a
                  href={phoneTel}
                  className="flex-1 bg-red-600 hover:bg-red-700 text-white font-bold py-3.5 px-4 rounded-xl text-center transition flex items-center justify-center gap-2 text-sm"
                >
                  <Phone className="w-4 h-4 fill-current" />
                  Appeler pour {selectedPest.name} ({phoneDisplay})
                </a>
                <a
                  href="#contact"
                  onClick={() => setSelectedPest(null)}
                  className="bg-slate-700 hover:bg-slate-600 text-slate-200 font-semibold py-3.5 px-4 rounded-xl text-center transition text-sm"
                >
                  Demander un devis
                </a>
              </div>

            </div>
          </div>
        )}

      </div>
    </section>
  );
}
