'use client';

import React, { useState } from 'react';
import { Mail, Phone, Send, CheckCircle2, AlertCircle, Clock, ShieldCheck, MapPin } from 'lucide-react';

export default function ContactForm() {
  const [formData, setFormData] = useState({
    name: '',
    phone: '',
    email: '',
    pestType: 'Punaises de lit',
    city: '',
    postalCode: '',
    surface: '',
    urgency: 'Intervention sous 1h',
    details: ''
  });

  const [loading, setLoading] = useState(false);
  const [status, setStatus] = useState<{ type: 'success' | 'error'; message: string } | null>(null);

  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement | HTMLTextAreaElement>) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);
    setStatus(null);

    try {
      const response = await fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData)
      });

      const data = await response.json();

      if (response.ok) {
        setStatus({
          type: 'success',
          message: 'Votre message a bien été envoyé ! Un technicien SOS Parasites va vous recontacter par téléphone immédiatement.'
        });
        setFormData({
          name: '',
          phone: '',
          email: '',
          pestType: 'Punaises de lit',
          city: '',
          postalCode: '',
          surface: '',
          urgency: 'Intervention sous 1h',
          details: ''
        });
      } else {
        setStatus({
          type: 'error',
          message: data.error || 'Erreur lors de l\'envoi. Veuillez nous appeler directement au 07 71 50 26 78.'
        });
      }
    } catch (err) {
      setStatus({
        type: 'error',
        message: 'Un problème réseau est survenu. Veuillez nous contacter directement au 07 71 50 26 78.'
      });
    } finally {
      setLoading(false);
    }
  };

  return (
    <section id="contact" className="py-16 sm:py-24 bg-slate-900 text-white relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12">

          {/* Left Column: Direct Phone CTA & Details */}
          <div className="lg:col-span-5 space-y-6">
            <div className="inline-flex items-center gap-2 bg-red-950 border border-red-500/40 text-red-400 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full">
              <Mail className="w-4 h-4" />
              Formulaire & Contact Direct
            </div>

            <h2 className="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight">
              Besoin d'une intervention urgente contre les nuisibles ?
            </h2>

            <p className="text-slate-300 text-base leading-relaxed">
              Pour une prise en charge immédiate, <strong className="text-white">le téléphone reste le moyen le plus rapide</strong>. Notre ligne d'urgence est ouverte 24h/24 et 7j/7.
            </p>

            {/* Direct Big Call Box */}
            <div className="bg-gradient-to-br from-red-600 to-red-800 rounded-3xl p-6 sm:p-8 shadow-2xl text-white relative overflow-hidden border border-red-400/30">
              <div className="relative z-10 space-y-3">
                <span className="bg-white/20 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
                  Ligne Téléphonique Prioritaire
                </span>
                <p className="text-xs text-red-100 uppercase tracking-wider font-semibold">
                  Appel gratuit • Rappel immédiat
                </p>
                <a
                  href={phoneTel}
                  className="text-3xl sm:text-4xl font-black text-white hover:text-red-200 transition block tracking-tight"
                >
                  {phoneDisplay}
                </a>
                <p className="text-xs text-red-100">
                  Nos techniciens interviennent sur tout Paris, l'Île-de-France et Marseille en 1 heure.
                </p>
              </div>
            </div>

            {/* Guarantees */}
            <div className="bg-slate-800/80 border border-slate-700/80 rounded-2xl p-5 space-y-3 text-sm text-slate-300">
              <div className="flex items-center gap-3">
                <Clock className="w-5 h-5 text-red-400 shrink-0" />
                <span>Intervention d'urgence en 1 heure</span>
              </div>
              <div className="flex items-center gap-3">
                <ShieldCheck className="w-5 h-5 text-emerald-400 shrink-0" />
                <span>Produits biocides professionnels homologués</span>
              </div>
              <div className="flex items-center gap-3">
                <MapPin className="w-5 h-5 text-amber-400 shrink-0" />
                <span>Déplacement sur toute la région IDF & Marseille</span>
              </div>
            </div>

          </div>

          {/* Right Column: Contact Form */}
          <div className="lg:col-span-7">
            <div className="bg-white text-gray-900 rounded-3xl p-6 sm:p-10 shadow-2xl border border-gray-100">

              <div className="mb-6 pb-4 border-b border-gray-200">
                <h3 className="text-2xl font-bold text-gray-900">
                  Formulaire de demande de rappel & devis
                </h3>
                <p className="text-xs text-gray-500 mt-1">
                  Remplissez ce formulaire pour recevoir un devis gratuit et personnalisé par email et téléphone.
                </p>
              </div>

              <form onSubmit={handleSubmit} className="space-y-4">

                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                      Nom & Prénom *
                    </label>
                    <input
                      type="text"
                      name="name"
                      required
                      value={formData.name}
                      onChange={handleChange}
                      placeholder="Votre nom"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none"
                    />
                  </div>

                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                      Téléphone (Contact Principal) *
                    </label>
                    <input
                      type="tel"
                      name="phone"
                      required
                      value={formData.phone}
                      onChange={handleChange}
                      placeholder="07 12 34 56 78"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none font-bold text-red-600"
                    />
                  </div>
                </div>

                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                      Email (pour le devis)
                    </label>
                    <input
                      type="email"
                      name="email"
                      value={formData.email}
                      onChange={handleChange}
                      placeholder="votre@email.com"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none"
                    />
                  </div>

                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                      Type de Nuisible *
                    </label>
                    <select
                      name="pestType"
                      value={formData.pestType}
                      onChange={handleChange}
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none font-semibold"
                    >
                      <option value="Punaises de lit">Punaises de lit</option>
                      <option value="Cafards et blattes">Cafards et blattes</option>
                      <option value="Souris et rats">Souris et rats</option>
                      <option value="Fourmis">Fourmis</option>
                      <option value="Guêpes et frelons">Guêpes et frelons</option>
                      <option value="Puces">Puces</option>
                      <option value="Mouches et moucherons">Mouches et moucherons</option>
                      <option value="Mites">Mites</option>
                      <option value="Araignées">Araignées</option>
                      <option value="Moustiques">Moustiques</option>
                      <option value="Autre nuisible / Inconnu">Autre nuisible / Inconnu</option>
                    </select>
                  </div>
                </div>

                <div className="grid grid-cols-1 sm:grid-cols-3 gap-4">
                  <div className="sm:col-span-2">
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                      Ville ou Code Postal *
                    </label>
                    <input
                      type="text"
                      name="city"
                      required
                      value={formData.city}
                      onChange={handleChange}
                      placeholder="Ex: Paris 15, Marseille, Versailles..."
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none"
                    />
                  </div>

                  <div>
                    <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                      Surface (m²)
                    </label>
                    <input
                      type="number"
                      name="surface"
                      value={formData.surface}
                      onChange={handleChange}
                      placeholder="Ex: 50"
                      className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none"
                    />
                  </div>
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                    Degré d'urgence
                  </label>
                  <select
                    name="urgency"
                    value={formData.urgency}
                    onChange={handleChange}
                    className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none"
                  >
                    <option value="Intervention sous 1h">Urgent - Intervention sous 1h</option>
                    <option value="Dans la journée">Dans la journée</option>
                    <option value="Dans la semaine">Programmé cette semaine</option>
                    <option value="Renseignement / Devis simple">Demande de devis d'information</option>
                  </select>
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase text-gray-700 mb-1">
                    Précisions sur votre situation
                  </label>
                  <textarea
                    name="details"
                    rows={3}
                    value={formData.details}
                    onChange={handleChange}
                    placeholder="Décrivez les signes constatés (piqûres, bruit, présence vue...), nombre de pièces..."
                    className="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl p-3 focus:ring-2 focus:ring-red-600 focus:outline-none"
                  ></textarea>
                </div>

                {status && (
                  <div className={`p-4 rounded-xl text-sm font-semibold flex items-center gap-2 ${
                    status.type === 'success'
                      ? 'bg-emerald-100 text-emerald-800 border border-emerald-300'
                      : 'bg-red-100 text-red-800 border border-red-300'
                  }`}>
                    {status.type === 'success' ? <CheckCircle2 className="w-5 h-5 shrink-0" /> : <AlertCircle className="w-5 h-5 shrink-0" />}
                    <span>{status.message}</span>
                  </div>
                )}

                <button
                  type="submit"
                  disabled={loading}
                  className="w-full bg-red-600 hover:bg-red-700 text-white font-extrabold py-4 px-6 rounded-2xl shadow-lg transition flex items-center justify-center gap-2 text-base disabled:opacity-50"
                >
                  {loading ? (
                    <span>Envoi du formulaire...</span>
                  ) : (
                    <>
                      <Send className="w-5 h-5" />
                      Envoyer Ma Demande D'Intervention
                    </>
                  )}
                </button>

              </form>

            </div>
          </div>

        </div>

      </div>
    </section>
  );
}
