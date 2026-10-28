'use client';

import React, { useState } from 'react';
import { Calculator, Phone, CheckCircle, Send, AlertCircle, Info, Sparkles } from 'lucide-react';

export default function QuoteCalculator() {
  const [pest, setPest] = useState('Punaises de lit');
  const [infestation, setInfestation] = useState('Modérée');
  const [surface, setSurface] = useState('50');
  const [region, setRegion] = useState('Paris (75)');
  const [name, setName] = useState('');
  const [phone, setPhone] = useState('');
  const [loading, setLoading] = useState(false);
  const [statusMsg, setStatusMsg] = useState<{ type: 'success' | 'error'; text: string } | null>(null);

  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  const pestsList = [
    'Punaises de lit',
    'Cafards et blattes',
    'Souris et rats',
    'Fourmis',
    'Guêpes et frelons',
    'Puces',
    'Mouches et moucherons',
    'Mites',
    'Araignées',
    'Moustiques'
  ];

  const handleSimulateSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);
    setStatusMsg(null);

    try {
      const res = await fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          name,
          phone,
          pestType: pest,
          city: region,
          surface,
          urgency: `Niveau d'infestation : ${infestation}`,
          details: `Simulateur de devis - Demande d'intervention pour ${pest} sur une surface de ${surface} m² à ${region}. Niveau estimé: ${infestation}.`
        })
      });

      const data = await res.json();
      if (res.ok) {
        setStatusMsg({
          type: 'success',
          text: 'Votre demande d\'estimation a été transmise avec succès ! Un technicien va vous recontacte immédiatement.'
        });
        setName('');
        setPhone('');
      } else {
        setStatusMsg({
          type: 'error',
          text: data.error || 'Erreur lors de l\'envoi. Veuillez nous contacter directement au 07 71 50 26 78.'
        });
      }
    } catch (err) {
      setStatusMsg({
        type: 'error',
        text: 'Erreur réseau. Veuillez appeler le 07 71 50 26 78.'
      });
    } finally {
      setLoading(false);
    }
  };

  return (
    <section id="simulateur" className="py-16 sm:py-24 bg-slate-900 text-white relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

          {/* Left Info Column */}
          <div className="lg:col-span-5 space-y-6">
            <div className="inline-flex items-center gap-2 bg-red-950 border border-red-600/40 text-red-400 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full">
              <Calculator className="w-4 h-4" />
              Simulateur & Évaluation Gratuite
            </div>

            <h2 className="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight">
              Obtenez une estimation personnalisée en 1 minute
            </h2>

            <p className="text-slate-300 text-base leading-relaxed">
              Sélectionnez vos critères (type de nuisible, superficie, zone). Les tarifs définitifs sont établis après évaluation personnalisée par nos techniciens qualifiés Certibiocide.
            </p>

            <div className="bg-slate-800/80 border border-slate-700/80 p-5 rounded-2xl space-y-3 text-sm text-slate-300">
              <div className="flex items-start gap-3">
                <CheckCircle className="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" />
                <span><strong>Évaluation personnalisée :</strong> Adaptée précisément au volume et à l'accès.</span>
              </div>
              <div className="flex items-start gap-3">
                <CheckCircle className="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" />
                <span><strong>Sans engagement :</strong> Conseils et devis téléphoniques gratuits.</span>
              </div>
              <div className="flex items-start gap-3">
                <CheckCircle className="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" />
                <span><strong>Disponibilité 24/7 :</strong> Prise de rendez-vous urgente ou programmée.</span>
              </div>
            </div>

            <div className="p-4 bg-red-950/50 border border-red-500/30 rounded-2xl">
              <p className="text-xs text-red-300 font-bold uppercase tracking-wider mb-1">
                Besoin d'un avis direct immédiat ?
              </p>
              <a
                href={phoneTel}
                className="text-xl sm:text-2xl font-black text-white hover:text-red-400 transition flex items-center gap-2"
              >
                <Phone className="w-5 h-5 text-red-500 fill-current" />
                {phoneDisplay}
              </a>
            </div>
          </div>

          {/* Right Interactive Form Box */}
          <div className="lg:col-span-7">
            <div className="bg-white text-gray-900 rounded-3xl p-6 sm:p-10 shadow-2xl border border-gray-100">

              <div className="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
                <div>
                  <h3 className="text-2xl font-bold text-gray-900 flex items-center gap-2">
                    <Sparkles className="w-5 h-5 text-red-600" />
                    Calculateur de Devis Sur-Mesure
                  </h3>
                  <p className="text-xs text-gray-500">Formulaire rapide d'évaluation de votre besoin</p>
                </div>
              </div>

              <form onSubmit={handleSimulateSubmit} className="space-y-6">

                {/* Pest Selector */}
                <div>
                  <label className="block text-xs font-bold uppercase text-gray-700 mb-2">
                    1. Type de nuisible à traiter *
                  </label>
                  <select
                    value={pest}
                    onChange={(e) => setPest(e.target.value)}
                    className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3.5 focus:ring-2 focus:ring-red-600 focus:outline-none font-semibold"
                  >
                    {pestsList.map((p, idx) => (
                      <option key={idx} value={p}>{p}</option>
                    ))}
                  </select>
                </div>

                {/* Surface & Infestation Level */}
                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-2">
                      2. Superficie approximative (m²)
                    </label>
                    <input
                      type="number"
                      value={surface}
                      onChange={(e) => setSurface(e.target.value)}
                      placeholder="Ex: 60"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3.5 focus:ring-2 focus:ring-red-600 focus:outline-none font-semibold"
                    />
                  </div>

                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-2">
                      3. Niveau d'infestation
                    </label>
                    <select
                      value={infestation}
                      onChange={(e) => setInfestation(e.target.value)}
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3.5 focus:ring-2 focus:ring-red-600 focus:outline-none font-semibold"
                    >
                      <option value="Début d'infestation">Début d'infestation / Suspecté</option>
                      <option value="Modérée">Modérée (Visites régulières)</option>
                      <option value="Forte / Sévère">Forte / Sévère (Présence massive)</option>
                    </select>
                  </div>
                </div>

                {/* Sector / City */}
                <div>
                  <label className="block text-xs font-bold uppercase text-gray-700 mb-2">
                    4. Secteur géographique
                  </label>
                  <select
                    value={region}
                    onChange={(e) => setRegion(e.target.value)}
                    className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3.5 focus:ring-2 focus:ring-red-600 focus:outline-none font-semibold"
                  >
                    <option value="Paris (75)">Paris (75)</option>
                    <option value="Petite Couronne (92, 93, 94)">Petite Couronne (92, 93, 94)</option>
                    <option value="Grande Couronne (77, 78, 91, 95)">Grande Couronne (77, 78, 91, 95)</option>
                    <option value="Marseille (13) & Bouches-du-Rhône">Marseille (13) & Bouches-du-Rhône</option>
                  </select>
                </div>

                {/* Contact Inputs */}
                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 border-t border-gray-200">
                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-2">
                      Votre Nom *
                    </label>
                    <input
                      type="text"
                      required
                      value={name}
                      onChange={(e) => setName(e.target.value)}
                      placeholder="M. / Mme Dupont"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3.5 focus:ring-2 focus:ring-red-600 focus:outline-none"
                    />
                  </div>

                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-2">
                      Numéro de Téléphone *
                    </label>
                    <input
                      type="tel"
                      required
                      value={phone}
                      onChange={(e) => setPhone(e.target.value)}
                      placeholder="06 12 34 56 78"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3.5 focus:ring-2 focus:ring-red-600 focus:outline-none"
                    />
                  </div>
                </div>

                {statusMsg && (
                  <div className={`p-4 rounded-xl text-sm font-semibold flex items-center gap-2 ${
                    statusMsg.type === 'success'
                      ? 'bg-emerald-100 text-emerald-800 border border-emerald-300'
                      : 'bg-red-100 text-red-800 border border-red-300'
                  }`}>
                    {statusMsg.type === 'success' ? <CheckCircle className="w-5 h-5 shrink-0" /> : <AlertCircle className="w-5 h-5 shrink-0" />}
                    <span>{statusMsg.text}</span>
                  </div>
                )}

                {/* Submit button */}
                <button
                  type="submit"
                  disabled={loading}
                  className="w-full bg-red-600 hover:bg-red-700 text-white font-extrabold py-4 px-6 rounded-2xl shadow-lg transition flex items-center justify-center gap-2 text-base disabled:opacity-50"
                >
                  {loading ? (
                    <span>Traitement en cours...</span>
                  ) : (
                    <>
                      <Send className="w-5 h-5" />
                      Envoyer Ma Demande D'Estimation Gratuite
                    </>
                  )}
                </button>

                <p className="text-[11px] text-gray-500 text-center">
                  Vos informations sont confidentielles et utilisées exclusivement pour vous recontacter concernant votre demande d'intervention.
                </p>

              </form>

            </div>
          </div>

        </div>

      </div>
    </section>
  );
}
