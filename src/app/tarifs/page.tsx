import PricingNoticeSection from '@/components/PricingNoticeSection';
import QuoteCalculator from '@/components/QuoteCalculator';
import ContactForm from '@/components/ContactForm';
import { Phone, ShieldCheck, CheckCircle } from 'lucide-react';

export const metadata = {
  title: 'Tarifs Anti-Nuisibles | SOS PARASITES - Pourquoi pas de tarif fixe ?',
  description: 'Comprendre la tarification SOS PARASITES. Nos prix sont calculés sur-mesure selon le type de nuisible, le niveau d\'infestation et la superficie.'
};

export default function TarifsPage() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <div className="pt-6">
      <div className="bg-slate-900 text-white py-12 px-4 text-center">
        <div className="max-w-4xl mx-auto space-y-4">
          <span className="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
            Politique Tarifaire
          </span>
          <h1 className="text-3xl sm:text-5xl font-extrabold">
            Tarif Sur-Mesure & Transparence Totale
          </h1>
          <p className="text-slate-300 text-base sm:text-lg">
            Pourquoi il n’y a pas de prix forfaitaire unique et comment nous établissons nos devis au juste prix.
          </p>
          <div className="pt-2">
            <a
              href={phoneTel}
              className="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-extrabold px-6 py-3 rounded-2xl shadow transition text-base"
            >
              <Phone className="w-5 h-5 fill-current" />
              Évaluation Téléphonique Gratuite : {phoneDisplay}
            </a>
          </div>
        </div>
      </div>

      <PricingNoticeSection />
      <QuoteCalculator />
      <ContactForm />
    </div>
  );
}
