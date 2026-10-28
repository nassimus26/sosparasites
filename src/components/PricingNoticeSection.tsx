'use client';

import React from 'react';
import { Info, Bug, Activity, Maximize, Wrench, Phone, FileText, CheckCircle2 } from 'lucide-react';

export default function PricingNoticeSection() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  const pricingFactors = [
    {
      icon: Bug,
      title: "Type de Nuisible",
      description: "Chaque parasite (punaise de lit, blatte, rat, guêpe, puce...) requiert un produit biocide spécifique et une stratégie d'éradication adaptée."
    },
    {
      icon: Activity,
      title: "Niveau d'Infestation",
      description: "Une intervention précoce nécessite généralement un traitement standard, tandis qu'une forte colonie installée peut imposer plusieurs passages."
    },
    {
      icon: Maximize,
      title: "Superficie du Logement ou Local",
      description: "La surface à traiter (m²) conditionne la quantité de traitement nécessaire et le temps d'intervention des techniciens."
    },
    {
      icon: Wrench,
      title: "Traitement Nécessaire",
      description: "Méthode chimique certifiée, application de gel professionnel, poudrage haute pression, thermothérapie ou colmatage hermétique des accès."
    }
  ];

  return (
    <section id="tarifs" className="py-16 sm:py-24 bg-gradient-to-b from-slate-50 to-white text-gray-900 border-y border-gray-200">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-12">
          <div className="inline-flex items-center gap-2 bg-red-100 text-red-800 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
            <Info className="w-4 h-4" />
            Transparence & Tarification
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">
            Pourquoi il n’y a pas de tarif fixe ?
          </h2>
          <p className="mt-4 text-lg text-gray-600">
            Chaque cas d'infestation est unique. Nous privilégions une évaluation honnête et un tarif juste calculé au plus près de votre besoin réel.
          </p>
        </div>

        {/* Featured Official Statement Box */}
        <div className="bg-gradient-to-br from-red-600 via-red-700 to-red-800 text-white rounded-3xl p-6 sm:p-10 shadow-xl mb-12 relative overflow-hidden">
          <div className="absolute -right-10 -bottom-10 w-60 h-60 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

          <div className="relative z-10 max-w-4xl mx-auto text-center space-y-4">
            <span className="bg-white/20 text-white font-semibold text-xs uppercase tracking-widest px-4 py-1 rounded-full inline-block">
              Notre Engagement Tarifaire
            </span>
            <blockquote className="text-lg sm:text-2xl font-bold leading-relaxed italic">
              « Il n’y a pas de tarif fixe, car le prix dépend du type de nuisible, du niveau d’infestation, de la superficie du logement ou du local et du traitement nécessaire. Les tarifs sont donc établis en fonction de chaque situation, après évaluation des besoins. »
            </blockquote>
            <div className="pt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
              <a
                href={phoneTel}
                className="bg-white text-red-700 hover:bg-gray-100 font-extrabold px-6 py-3.5 rounded-2xl shadow-lg transition flex items-center gap-2 text-base"
              >
                <Phone className="w-5 h-5 fill-current" />
                Évaluation Téléphonique Gratuite au {phoneDisplay}
              </a>
              <a
                href="#contact"
                className="bg-red-900/60 hover:bg-red-900/90 text-white border border-white/30 font-bold px-6 py-3.5 rounded-2xl transition flex items-center gap-2 text-base"
              >
                <FileText className="w-5 h-5" />
                Demander Un Devis Sur-Mesure
              </a>
            </div>
          </div>
        </div>

        {/* 4 Criteria Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {pricingFactors.map((factor, index) => {
            const Icon = factor.icon;
            return (
              <div
                key={index}
                className="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-200 flex flex-col justify-between"
              >
                <div>
                  <div className="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <Icon className="w-6 h-6" />
                  </div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2">
                    {factor.title}
                  </h3>
                  <p className="text-sm text-gray-600 leading-relaxed">
                    {factor.description}
                  </p>
                </div>
                <div className="mt-4 pt-4 border-t border-gray-100 text-xs text-red-600 font-semibold flex items-center gap-1.5">
                  <CheckCircle2 className="w-4 h-4 shrink-0" />
                  Pris en compte lors du diagnostic
                </div>
              </div>
            );
          })}
        </div>

        {/* Estimation Guide Table / Examples */}
        <div className="mt-12 bg-white rounded-3xl border border-gray-200 p-6 sm:p-8 shadow-sm">
          <h3 className="text-xl sm:text-2xl font-bold text-gray-900 mb-4 text-center">
            Comment se déroule la tarification chez SOS PARASITES ?
          </h3>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">

            <div className="p-5 bg-slate-50 rounded-2xl border border-slate-200">
              <div className="w-8 h-8 bg-red-600 text-white rounded-full font-bold flex items-center justify-center mx-auto mb-3">1</div>
              <h4 className="font-bold text-gray-900 mb-1">Diagnostic Initial Gratuit</h4>
              <p className="text-xs text-gray-600">Au téléphone ou sur place, nous identifions le type de nuisible, le type d'habitation et la surface.</p>
            </div>

            <div className="p-5 bg-slate-50 rounded-2xl border border-slate-200">
              <div className="w-8 h-8 bg-red-600 text-white rounded-full font-bold flex items-center justify-center mx-auto mb-3">2</div>
              <h4 className="font-bold text-gray-900 mb-1">Devis Clair & Sans Surprise</h4>
              <p className="text-xs text-gray-600">Un prix ferme vous est communiqué avant tout début d'intervention. Aucun frais caché.</p>
            </div>

            <div className="p-5 bg-slate-50 rounded-2xl border border-slate-200">
              <div className="w-8 h-8 bg-red-600 text-white rounded-full font-bold flex items-center justify-center mx-auto mb-3">3</div>
              <h4 className="font-bold text-gray-900 mb-1">Intervention & Garantie</h4>
              <p className="text-xs text-gray-600">Nos techniciens appliquent le traitement certifié avec un suivi jusqu'à disparition totale.</p>
            </div>

          </div>
        </div>

      </div>
    </section>
  );
}
