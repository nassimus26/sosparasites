import InterventionZonesSection from '@/components/InterventionZonesSection';
import ContactForm from '@/components/ContactForm';
import { MapPin, Phone } from 'lucide-react';

export const metadata = {
  title: 'Zones d\'Intervention | SOS PARASITES - Île-de-France & Marseille',
  description: 'Déplacement rapide en 1h dans tout Paris, la région Île-de-France (75, 77, 78, 91, 92, 93, 94, 95) et Marseille (13).'
};

export default function ZonesPage() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <div className="pt-6">
      <div className="bg-slate-900 text-white py-12 px-4 text-center">
        <div className="max-w-4xl mx-auto space-y-4">
          <span className="bg-red-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block">
            Périmètre d'action
          </span>
          <h1 className="text-3xl sm:text-5xl font-extrabold">
            Déplacement en 1h sur Paris, Île-de-France & Marseille
          </h1>
          <p className="text-slate-300 text-base sm:text-lg">
            Des techniciens de proximité disponibles 24h/24 et 7j/7 dans votre secteur.
          </p>
        </div>
      </div>

      <InterventionZonesSection />
      <ContactForm />
    </div>
  );
}
