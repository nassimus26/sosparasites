#!/bin/bash
set -e

# ==============================================================================
# SOS PARASITES - Automated Deployment Script from website/ to OVH Hosting
# ==============================================================================

FTP_HOST="ftp.cluster129.hosting.ovh.net"
FTP_PORT="22"
FTP_USER="sospark"
FTP_PASS="MkNassimWin64"
LOCAL_DIR="website"

echo "=================================================="
echo "🚀 SOS PARASITES - OVH Website Deployment"
echo "=================================================="
echo "Host: $FTP_HOST:$FTP_PORT"
echo "User: $FTP_USER"
echo "Local Directory: $LOCAL_DIR"
echo "--------------------------------------------------"

if [ ! -d "$LOCAL_DIR" ]; then
    echo "❌ Error: Local directory '$LOCAL_DIR' not found!"
    exit 1
fi

# Ensure correct permissions locally before upload
chmod -R 755 "$LOCAL_DIR" 2>/dev/null || true
if [ -f "$LOCAL_DIR/protected/config.php" ]; then
    chmod 600 "$LOCAL_DIR/protected/config.php"
fi

echo "🧹 Nettoyage optionnel des vieux fichiers sur le serveur OVH..."
lftp -e "
    set net:timeout 20;
    set net:max-retries 3;
    set sftp:auto-confirm yes;
    open -u $FTP_USER,$FTP_PASS sftp://$FTP_HOST:$FTP_PORT;

    rm -rf www/node_modules 2>/dev/null || true;
    rm -rf www/src 2>/dev/null || true;
    rm -rf www/.next 2>/dev/null || true;
    rm -rf www/.idea 2>/dev/null || true;
    rm -rf www/.git 2>/dev/null || true;

    quit;
"

echo "🚀 Upload propre du dossier website/ vers www/ via SFTP (lftp)..."
lftp -e "
    set net:timeout 20;
    set net:max-retries 3;
    set sftp:auto-confirm yes;
    open -u $FTP_USER,$FTP_PASS sftp://$FTP_HOST:$FTP_PORT;

    mirror -R --verbose --exclude-glob='*.DS_Store' website/ www/;

    quit;
"

echo "--------------------------------------------------"
echo "✅ Déploiement terminé avec succès !"
echo "🌐 Website Live URL: https://sosparasites.fr"
echo "=================================================="
