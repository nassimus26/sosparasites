#!/usr/bin/env bash
# ==============================================================================
# Script de démarrage PHP 8 pour sosparasites.fr (depuis le dossier website/)
# ==============================================================================

HOST="127.0.0.1"
PORT="8000"

echo "======================================================"
echo " 🚨 Démarrage du serveur web PHP 8 (Dossier website/)"
echo "======================================================"
echo " -> Site accessible sur : http://${HOST}:${PORT}"
echo " -> Dossier protégé     : website/protected (sécurisé)"
echo " -> Contact principal   : 07 71 50 26 78"
echo " -> Email destinataire  : nmoualek@gmail.com"
echo "======================================================"
echo "Appuyez sur [Ctrl + C] pour arrêter le serveur."
echo ""

# Lancement du serveur intégré PHP 8 pointant sur le dossier website/
php -S "${HOST}:${PORT}" -t website
