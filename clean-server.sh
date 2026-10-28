#!/bin/bash
set -e

# ==============================================================================
# SOS PARASITES - Clean unwanted dev files from OVH Server
# ==============================================================================

FTP_HOST="ftp.cluster129.hosting.ovh.net"
FTP_PORT="22"
FTP_USER="sospark"
FTP_PASS="MkNassimWin64"

echo "=================================================="
echo "🧹 Nettoyage du serveur OVH (Suppression .idea, .next, .git, node_modules, etc.)"
echo "=================================================="

lftp -e "
    set net:timeout 20;
    set net:max-retries 3;
    set sftp:auto-confirm yes;
    open -u $FTP_USER,$FTP_PASS sftp://$FTP_HOST:$FTP_PORT;

    echo 'Suppression de node_modules, .idea, .next, .git, src sur le serveur...';
    rm -rf www/node_modules 2>/dev/null || true;
    rm -rf www/src 2>/dev/null || true;
    rm -rf www/.next 2>/dev/null || true;
    rm -rf www/.idea 2>/dev/null || true;
    rm -rf www/.git 2>/dev/null || true;

    echo 'Suppression des fichiers de configuration dev sur le serveur...';
    rm -f www/package.json 2>/dev/null || true;
    rm -f www/package-lock.json 2>/dev/null || true;
    rm -f www/tsconfig.json 2>/dev/null || true;
    rm -f www/postcss.config.mjs 2>/dev/null || true;
    rm -f www/php.sh 2>/dev/null || true;
    rm -f www/clean-server.sh 2>/dev/null || true;
    rm -f www/deploy.sh 2>/dev/null || true;

    quit;
"

echo "--------------------------------------------------"
echo "✅ Nettoyage du serveur terminé avec succès !"
echo "=================================================="
