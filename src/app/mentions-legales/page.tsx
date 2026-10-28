import React from 'react';
import Link from 'next/link';
import { Shield, ArrowLeft } from 'lucide-react';

export const metadata = {
  title: 'Mentions Légales | SOS PARASITES',
  description: 'Mentions légales et conditions d\'utilisation du site sosparasites.fr'
};

export default function MentionsLegalesPage() {
  return (
    <div className="py-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-gray-800">
      <Link href="/" className="inline-flex items-center gap-2 text-sm text-red-600 font-bold mb-6 hover:underline">
        <ArrowLeft className="w-4 h-4" />
        Retour à l'accueil
      </Link>

      <h1 className="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-4">
        Mentions Légales
      </h1>

      <div className="space-y-6 text-sm leading-relaxed">
        <section>
          <h2 className="text-xl font-bold text-gray-900 mb-2">1. Éditeur du site</h2>
          <p>
            Le site internet <strong>sosparasites.fr</strong> est édité par la société SOS PARASITES.<br />
            Spécialiste de la lutte anti-nuisibles (Dératisation, Désinsectisation, Désinfection).<br />
            <strong>Téléphone direct :</strong> +33 7 71 50 26 78 (07 71 50 26 78)<br />
            <strong>Email de contact :</strong> contact@sosparasites.fr
          </p>
        </section>

        <section>
          <h2 className="text-xl font-bold text-gray-900 mb-2">2. Hébergement</h2>
          <p>
            Le site est hébergé sur des serveurs sécurisés conformes aux normes européennes.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-bold text-gray-900 mb-2">3. Propriété intellectuelle</h2>
          <p>
            L'ensemble des contenus (textes, graphismes, logos, icônes) présents sur le site sosparasites.fr est la propriété exclusive de SOS PARASITES ou fait l'objet d'une autorisation d'utilisation. Toute reproduction sans autorisation préalable est interdite.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-bold text-gray-900 mb-2">4. Protection des données personnelles (RGPD)</h2>
          <p>
            Les données recueillies via les formulaires de contact (nom, téléphone, ville, détails) sont destinées exclusivement au traitement de votre demande d'intervention ou de devis par l'équipe SOS PARASITES. Elles ne sont en aucun cas vendues ou cédées à des tiers.
          </p>
          <p className="mt-2">
            Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et de suppression de vos données en envoyant un email à <strong>contact@sosparasites.fr</strong>.
          </p>
        </section>

        <section>
          <h2 className="text-xl font-bold text-gray-900 mb-2">5. Tarification & Devis</h2>
          <p>
            Conformément à nos engagements de transparence, il n’y a pas de tarif fixe unique. Les prix des interventions dépendent du type de nuisible, du niveau d’infestation, de la superficie à traiter et des méthodes appliquées. Chaque devis est établi après évaluation personnalisée des besoins.
          </p>
        </section>
      </div>
    </div>
  );
}
