'use client';

import React from 'react';
import { Phone, Clock } from 'lucide-react';

export default function FloatingCallButton() {
  const phoneDisplay = "07 71 50 26 78";
  const phoneTel = "tel:+33771502678";

  return (
    <div className="fixed bottom-0 left-0 right-0 z-50 lg:hidden p-3 bg-slate-900/95 border-t border-slate-800 backdrop-blur shadow-2xl">
      <div className="max-w-md mx-auto flex items-center justify-between gap-3">
        <div className="flex flex-col text-left pl-1">
          <span className="flex items-center gap-1.5 text-[10px] uppercase font-bold text-emerald-400">
            <span className="h-2 w-2 rounded-full bg-emerald-400 animate-ping"></span>
            Technicien dispo 24/7
          </span>
          <span className="text-xs text-slate-300">Intervention Île-de-France & Marseille</span>
        </div>

        <a
          href={phoneTel}
          className="bg-red-600 hover:bg-red-700 text-white font-black px-5 py-3 rounded-xl shadow-lg flex items-center gap-2 text-sm animate-pulse-call"
        >
          <Phone className="w-4 h-4 fill-current" />
          <span>Appeler {phoneDisplay}</span>
        </a>
      </div>
    </div>
  );
}
