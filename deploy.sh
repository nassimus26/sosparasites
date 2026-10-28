#!/bin/bash
set -e

# ==============================================================================
# SOS PARASITES - Automated Deployment Script from website/ to OVH Hosting
# Supports .fr (user: sospark) and .com (argument: com / user: sosparc)
# ==============================================================================

FTP_HOST="ftp.cluster129.hosting.ovh.net"
FTP_PORT="22"
LOCAL_DIR="website"

# Default to .fr
TARGET_DOMAIN="sosparasites.fr"
FTP_USER="sospark"

# Check arguments
for arg in "$@"; do
  case $arg in
    com|--com)
      TARGET_DOMAIN="sosparasites.com"
      FTP_USER="sosparc"
      ;;
  esac
done

FTP_PASS="MkNassimWin64"

echo "=================================================="
echo "🚀 SOS PARASITES - OVH Website Deployment ($TARGET_DOMAIN)"
echo "=================================================="
echo "Host: $FTP_HOST:$FTP_PORT"
echo "User: $FTP_USER"
echo "Domain: https://$TARGET_DOMAIN"
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
    rm -f www/index.html 2>/dev/null || true;

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
echo "✅ Déploiement vers $TARGET_DOMAIN terminé avec succès !"
echo "🌐 Website Live URL: https://$TARGET_DOMAIN"
echo "=================================================="
