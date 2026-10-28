import QuoteCalculator from '@/components/QuoteCalculator';
import ContactForm from '@/components/ContactForm';
import { Phone } from 'lucide-react';

export const metadata = {
  title: 'Demande de Devis Anti-Nuisibles | SOS PARASITES',
  description: 'Obtenez une estimation gratuite et rapide pour votre intervention anti-nuisibles en Île-de-France et Marseille.'
};

export default function DevisPage() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <div className="pt-6">
      <div className="bg-slate-900 text-white py-12 px-4 text-center">
        <div className="max-w-4xl mx-auto space-y-4">
          <span className="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
            Devis Gratuit
          </span>
          <h1 className="text-3xl sm:text-5xl font-extrabold">
            Demandez Votre Estimation En Ligne
          </h1>
          <p className="text-slate-300 text-base sm:text-lg">
            Remplissez notre calculateur pour transmettre vos besoins à notre équipe.
          </p>
        </div>
      </div>

      <QuoteCalculator />
      <ContactForm />
    </div>
  );
}
