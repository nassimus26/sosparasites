'use client';

import React, { useState } from 'react';
import { HelpCircle, ChevronDown, Phone } from 'lucide-react';

export default function FAQSection() {
  const [openIdx, setOpenIdx] = useState<number | null>(0);

  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  const faqs = [
    {
      q: "Pourquoi n’y a-t-il pas de tarif fixe unique ?",
      a: "Il n’y a pas de tarif fixe, car le prix dépend du type de nuisible, du niveau d’infestation, de la superficie du logement ou du local et du traitement nécessaire. Les tarifs sont donc établis en fonction de chaque situation, après évaluation des besoins. Un devis clair vous est communiqué avant toute intervention."
    },
    {
      q: "En combien de temps un technicien peut-il intervenir chez moi ?",
      a: "Nos techniciens sont répartis sur l'ensemble de l'Île-de-France (75, 77, 78, 91, 92, 93, 94, 95) et Marseille (13). Nous pouvons intervenir chez vous en urgence sous 1 heure 7j/7 et 24h/24."
    },
    {
      q: "Les traitements sont-ils dangereux pour les enfants et les animaux domestiques ?",
      a: "Non. Nos techniciens utilisent des biocides professionnels agréés Certibiocide avec des dosages stricts et sécurisés. Nous vous donnons des consignes claires (aération, temps d'attente si nécessaire) pour protéger parfaitement votre famille et vos animaux."
    },
    {
      q: "Faut-il quitter le logement pendant le traitement ?",
      a: "Cela dépend du type de nuisible et de la méthode appliquée. Pour l'application de gel anti-cafards, vous pouvez rester sur place. Pour un traitement chimique contre les punaises de lit ou les puces, une absence de 2h à 4h ainsi qu'une aération de 30 minutes sont habituellement demandées."
    },
    {
      q: "Proposez-vous une garantie de résultat ?",
      a: "Oui. Toutes nos interventions font l'objet d'un suivi rigoureux. En cas d'infestation tenace (punaises de lit ou blattes sévères), un protocole en plusieurs passages est mis en œuvre pour garantir l'éradication totale."
    },
    {
      q: "Intervenez-vous auprès des professionnels (restaurants, hôtels, syndics) ?",
      a: "Absolument. Nous accompagnons les professionnels de la restauration, les commerces, les hôtels, les syndics de copropriété et les entreprises avec des contrats de prévention HACCP et des interventions curatives discrètes."
    }
  ];

  return (
    <section className="py-16 sm:py-24 bg-slate-50 border-t border-gray-200">
      <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {/* Title */}
        <div className="text-center mb-12">
          <div className="inline-flex items-center gap-2 bg-red-100 text-red-800 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
            <HelpCircle className="w-4 h-4" />
            Questions Fréquentes
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold text-gray-900">
            Vos questions sur nos interventions anti-nuisibles
          </h2>
          <p className="mt-3 text-gray-600">
            Toutes les réponses pour aborder votre traitement en toute sérénité.
          </p>
        </div>

        {/* FAQ Accordion */}
        <div className="space-y-4">
          {faqs.map((faq, idx) => {
            const isOpen = openIdx === idx;
            return (
              <div
                key={idx}
                className="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm transition"
              >
                <button
                  onClick={() => setOpenIdx(isOpen ? null : idx)}
                  className="w-full p-5 text-left font-bold text-gray-900 text-base sm:text-lg flex justify-between items-center gap-4 hover:text-red-600 transition"
                >
                  <span>{faq.q}</span>
                  <ChevronDown className={`w-5 h-5 text-gray-500 shrink-0 transition-transform duration-200 ${isOpen ? 'rotate-180 text-red-600' : ''}`} />
                </button>
                {isOpen && (
                  <div className="px-5 pb-5 pt-0 text-sm sm:text-base text-gray-600 leading-relaxed border-t border-gray-100 mt-1">
                    {faq.a}
                  </div>
                )}
              </div>
            );
          })}
        </div>

        {/* Direct Call Prompt */}
        <div className="mt-12 text-center bg-white border border-gray-200 rounded-3xl p-6 sm:p-8">
          <h3 className="text-xl font-bold text-gray-900 mb-2">
            Une question spécifique à votre situation ?
          </h3>
          <p className="text-sm text-gray-600 mb-4">
            Nos conseillers vous répondent immédiatement par téléphone sans aucun engagement.
          </p>
          <a
            href={phoneTel}
            className="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-extrabold px-6 py-3 rounded-xl shadow transition text-sm"
          >
            <Phone className="w-4 h-4 fill-current" />
            Appeler SOS PARASITES au {phoneDisplay}
          </a>
        </div>

      </div>
    </section>
  );
}
