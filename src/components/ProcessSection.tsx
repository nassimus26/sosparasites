'use client';

import React from 'react';
import { ShieldCheck, Search, Wrench, RefreshCw, Phone, ArrowRight } from 'lucide-react';

export default function ProcessSection() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  const steps = [
    {
      step: "01",
      icon: Search,
      title: "Diagnostic & Diagnostic Gratuit",
      description: "Premier échange téléphonique pour identifier le nuisible, évaluer la superficie, le niveau d'infestation et organiser l'intervention rapide."
    },
    {
      step: "02",
      icon: Wrench,
      title: "Plan d'Action Sur-Mesure",
      description: "Le technicien inspecte le site et détermine le protocole le plus efficace (chimique certifié, thermique, gel appât, pièges sécurisés ou poudrage)."
    },
    {
      step: "03",
      icon: ShieldCheck,
      title: "Traitement Certifié Certibiocide",
      description: "Application professionnelle du traitement en toute sécurité, respectant les normes de santé, la discrétion et la protection de vos animaux."
    },
    {
      step: "04",
      icon: RefreshCw,
      title: "Suivi & Garantie Anti-Récidive",
      description: "Vérification des résultats, deuxième passage si nécessaire, conseils de prévention et garantie de satisfaction jusqu'à éradication totale."
    }
  ];

  return (
    <section id="processus" className="py-16 sm:py-24 bg-white text-gray-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {/* Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <span className="bg-red-100 text-red-800 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-block mb-3">
            Efficacité R rigoureuse
          </span>
          <h2 className="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">
            Notre Protocole d'Intervention en 4 Étapes
          </h2>
          <p className="mt-4 text-lg text-gray-600">
            Une démarche professionnelle éprouvée pour garantir une éradication définitive de vos parasites.
          </p>
        </div>

        {/* Steps Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
          {steps.map((s, idx) => {
            const Icon = s.icon;
            return (
              <div
                key={idx}
                className="bg-slate-50 border border-slate-200 rounded-3xl p-6 relative flex flex-col justify-between hover:border-red-500 hover:shadow-lg transition duration-200"
              >
                <div>
                  <div className="flex justify-between items-center mb-6">
                    <div className="w-12 h-12 bg-red-600 text-white rounded-2xl flex items-center justify-center font-bold shadow-md">
                      <Icon className="w-6 h-6" />
                    </div>
                    <span className="text-3xl font-black text-slate-300 font-mono">
                      {s.step}
                    </span>
                  </div>

                  <h3 className="text-xl font-bold text-gray-900 mb-2">
                    {s.title}
                  </h3>

                  <p className="text-sm text-gray-600 leading-relaxed">
                    {s.description}
                  </p>
                </div>

                <div className="mt-6 pt-4 border-t border-slate-200 text-xs font-semibold text-red-600 flex items-center gap-1">
                  <span>Étape indispensable</span>
                  <ArrowRight className="w-3.5 h-3.5" />
                </div>
              </div>
            );
          })}
        </div>

        {/* Bottom Callout Banner */}
        <div className="mt-16 bg-slate-900 text-white rounded-3xl p-8 sm:p-10 text-center flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
          <div className="text-left max-w-2xl">
            <h3 className="text-2xl font-bold text-white mb-2">
              Prêt à retrouver un logement ou local sain ?
            </h3>
            <p className="text-slate-300 text-sm">
              Nos équipes se déplacent en 1 heure sur Paris, toute l'Île-de-France et Marseille.
            </p>
          </div>

          <a
            href={phoneTel}
            className="bg-red-600 hover:bg-red-700 text-white font-extrabold px-8 py-4 rounded-2xl shadow-lg transition flex items-center gap-3 text-lg shrink-0"
          >
            <Phone className="w-5 h-5 fill-current" />
            Appeler le {phoneDisplay}
          </a>
        </div>

      </div>
    </section>
  );
}
