import Hero from '@/components/Hero';
import PricingNoticeSection from '@/components/PricingNoticeSection';
import PestsSection from '@/components/PestsSection';
import QuoteCalculator from '@/components/QuoteCalculator';
import ProcessSection from '@/components/ProcessSection';
import InterventionZonesSection from '@/components/InterventionZonesSection';
import ContactForm from '@/components/ContactForm';
import FAQSection from '@/components/FAQSection';

export default function Home() {
  return (
    <>
      <Hero />
      <PricingNoticeSection />
      <PestsSection />
      <QuoteCalculator />
      <ProcessSection />
      <InterventionZonesSection />
      <ContactForm />
      <FAQSection />
    </>
  );
}
