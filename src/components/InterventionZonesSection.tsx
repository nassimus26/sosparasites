'use client';

import React from 'react';
import { DEPARTMENTS_IDF, MARSEILLE_REGION } from '@/lib/pestsData';
import { MapPin, Navigation, Clock, Phone, Shield } from 'lucide-react';

export default function InterventionZonesSection() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <section id="zones" className="py-16 sm:py-24 bg-slate-50 border-t border-gray-200">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {/* Section Title */}
        <div className="text-center max-w-3xl mx-auto mb-12">
          <div className="inline-flex items-center gap-2 bg-red-100 text-red-800 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
            <MapPin className="w-4 h-4" />
            Périmètre d'Intervention Rapide
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">
            Toute l’Île-de-France & Marseille
          </h2>
          <p className="mt-4 text-lg text-gray-600">
            Nos techniciens sont positionnés stratégiquement pour intervenir chez vous en moins d'une heure.
          </p>
        </div>

        {/* Marseille Featured Banner */}
        <div className="mb-10 bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-6 sm:p-8 shadow-xl relative overflow-hidden">
          <div className="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
            <div className="space-y-2 text-center md:text-left">
              <span className="bg-sky-500 text-slate-950 text-xs font-black uppercase px-3 py-1 rounded-full">
                Secteur Sud & Méditerranée
              </span>
              <h3 className="text-2xl sm:text-3xl font-black text-white">
                Marseille (13) & Bouches-du-Rhône
              </h3>
              <p className="text-slate-300 text-sm max-w-xl">
                Intervention urgente 24h/24 et 7j/7 dans tous les arrondissements de Marseille (1er au 16e), Aix-en-Provence, Aubagne, Martigues, Vitrolles et communes environnantes.
              </p>
            </div>
            <a
              href={phoneTel}
              className="bg-red-600 hover:bg-red-700 text-white font-extrabold px-6 py-3.5 rounded-2xl shadow-lg transition flex items-center gap-2 text-base shrink-0"
            >
              <Phone className="w-5 h-5 fill-current" />
              Appeler Marseille ({phoneDisplay})
            </a>
          </div>
        </div>

        {/* IDF Departments Grid */}
        <div className="bg-white rounded-3xl p-6 sm:p-10 border border-gray-200 shadow-sm mb-12">
          <div className="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
            <Navigation className="w-6 h-6 text-red-600" />
            <h3 className="text-xl sm:text-2xl font-bold text-gray-900">
              Départements de la région Île-de-France
            </h3>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {DEPARTMENTS_IDF.map((dept) => (
              <div
                key={dept.code}
                className="p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-red-400 transition"
              >
                <div className="flex items-center gap-3 mb-3">
                  <span className="bg-red-600 text-white font-black text-sm px-2.5 py-1 rounded-lg">
                    {dept.code}
                  </span>
                  <h4 className="font-bold text-gray-900 text-base">
                    {dept.name}
                  </h4>
                </div>

                <ul className="text-xs text-gray-600 space-y-1">
                  {dept.mainCities.map((city, idx) => (
                    <li key={idx} className="flex items-center gap-1.5">
                      <span className="text-red-500 font-bold">•</span>
                      <span>{city}</span>
                    </li>
                  ))}
                </ul>
              </div>
            ))}
          </div>
        </div>

        {/* Promise Callout */}
        <div className="bg-white border border-gray-200 rounded-3xl p-6 sm:p-8 text-center max-w-4xl mx-auto space-y-4">
          <div className="flex justify-center">
            <div className="bg-emerald-100 text-emerald-800 p-3 rounded-2xl">
              <Clock className="w-8 h-8" />
            </div>
          </div>
          <h3 className="text-2xl font-bold text-gray-900">
            Délai d'intervention Garanti en 1 Heure
          </h3>
          <p className="text-gray-600 text-sm max-w-2xl mx-auto">
            Que vous soyez un particulier en appartement/maison ou un professionnel (restaurant, hôtel, boulangerie, syndic, bureaux), nous dépêchons un technicien de proximité immédiatement.
          </p>
          <div className="pt-2">
            <a
              href={phoneTel}
              className="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-extrabold px-8 py-3.5 rounded-2xl shadow-lg transition text-base"
            >
              <Phone className="w-5 h-5 fill-current" />
              Demander Un Déplacement au {phoneDisplay}
            </a>
          </div>
        </div>

      </div>
    </section>
  );
}
