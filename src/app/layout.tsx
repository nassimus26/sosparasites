import type { Metadata } from 'next';
import './globals.css';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import FloatingCallButton from '@/components/FloatingCallButton';

export const metadata: Metadata = {
  title: 'SOS PARASITES - Anti-Nuisibles 24/7 Île-de-France & Marseille | Tel: 07 71 50 26 78',
  description: 'Dératisation, désinsectisation et extermination urgente de nuisibles (punaises de lit, cafards, rats, guêpes, puces, moustiques...) à Paris, Île-de-France et Marseille. Intervention en 1h.',
  keywords: [
    'SOS Parasites',
    'dératisation Paris',
    'punaises de lit Île-de-France',
    'désinsectisation Marseille',
    'exterminateur cafards',
    'traitement rats souris',
    'destruction nid de guepes',
    'anti moustique tigre',
    'societe anti nuisible'
  ],
  authors: [{ name: 'SOS PARASITES' }],
  openGraph: {
    title: 'SOS PARASITES - Intervention Anti-Nuisibles 24/7 en 1h',
    description: 'Punaises de lit, cafards, rats, souris, guêpes, puces. Intervention rapide Île-de-France & Marseille. Devis gratuit et personnalisé.',
    url: 'https://sosparasites.fr',
    siteName: 'SOS PARASITES',
    locale: 'fr_FR',
    type: 'website',
  },
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  const jsonLd = {
    '@context': 'https://schema.org',
    '@type': 'LocalBusiness',
    'name': 'SOS PARASITES',
    'description': 'Service d\'extermination et de traitement anti-nuisibles en Île-de-France et Marseille.',
    'telephone': '+33771502678',
    'email': 'contact@sosparasites.fr',
    'url': 'https://sosparasites.fr',
    'areaServed': ['Paris', 'Île-de-France', 'Marseille', 'Bouches-du-Rhône'],
    'priceRange': 'Sur Devis / Évaluation Personnalisée',
    'openingHours': 'Mo-Su 00:00-24:00',
    'address': {
      '@type': 'PostalAddress',
      'addressRegion': 'Île-de-France & Bouches-du-Rhône',
      'addressCountry': 'FR'
    }
  };

  return (
    <html lang="fr" className="scroll-smooth">
      <head>
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
        />
      </head>
      <body className="min-h-screen flex flex-col bg-slate-50 text-slate-900 antialiased selection:bg-red-600 selection:text-white">
        <Navbar />
        <main className="flex-grow">{children}</main>
        <Footer />
        <FloatingCallButton />
      </body>
    </html>
  );
}
