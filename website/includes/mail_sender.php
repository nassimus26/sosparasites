<?php
/**
 * PHP 8 Mail Handler for SOS PARASITES
 * Sends email to nmoualek@gmail.com via OVH SMTP (ssl0.ovh.net:465) or mail() fallback
 */

declare(strict_types=1);

require_once __DIR__ . '/../protected/config.php';

function send_contact_email(array $data): array {
    $name = trim((string)($data['name'] ?? ''));
    $phone = trim((string)($data['phone'] ?? ''));
    $email = trim((string)($data['email'] ?? ''));
    $pestType = trim((string)($data['pestType'] ?? 'Non précisé'));
    $city = trim((string)($data['city'] ?? 'Non précisée'));
    $surface = trim((string)($data['surface'] ?? ''));
    $urgency = trim((string)($data['urgency'] ?? 'Non précisé'));
    $details = trim((string)($data['details'] ?? ''));

    if (empty($name) || empty($phone)) {
        return [
            'success' => false,
            'message' => 'Le nom et le numéro de téléphone sont obligatoires.'
        ];
    }

    $to = CONTACT_EMAIL_TARGET; // nmoualek@gmail.com
    $subject = "🚨 DEMANDE SOS PARASITES - {$pestType} ({$city})";

    $htmlContent = "
    <html>
    <head><title>SOS PARASITES Contact</title></head>
    <body style='font-family: Arial, sans-serif; background-color: #f8fafc; padding: 20px;'>
      <div style='max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden;'>
        <div style='background-color: #dc2626; color: white; padding: 16px; text-align: center;'>
          <h2 style='margin: 0;'>🚨 SOS PARASITES - Demande d'Intervention</h2>
          <p style='margin: 4px 0 0 0; font-size: 13px;'>Reçue depuis sosparasites.fr</p>
        </div>
        <div style='padding: 24px;'>
          <h3 style='color: #1e293b; border-bottom: 2px solid #dc2626; padding-bottom: 6px;'>Coordonnées Client</h3>
          <p><strong>Nom :</strong> {$name}</p>
          <p><strong>Téléphone :</strong> <a href='tel:{$phone}' style='color: #dc2626; font-size: 18px; font-weight: bold;'>{$phone}</a></p>
          " . (!empty($email) ? "<p><strong>Email :</strong> {$email}</p>" : "") . "
          <p><strong>Urgence :</strong> {$urgency}</p>

          <h3 style='color: #1e293b; border-bottom: 2px solid #dc2626; padding-bottom: 6px; margin-top: 20px;'>Détails de l'Intervention</h3>
          <p><strong>Nuisible :</strong> {$pestType}</p>
          <p><strong>Ville / Secteur :</strong> {$city}</p>
          " . (!empty($surface) ? "<p><strong>Superficie :</strong> {$surface} m²</p>" : "") . "

          " . (!empty($details) ? "
          <h3 style='color: #1e293b; border-bottom: 2px solid #dc2626; padding-bottom: 6px; margin-top: 20px;'>Message</h3>
          <p style='background: #f1f5f9; padding: 12px; border-radius: 6px; white-space: pre-line;'>{$details}</p>
          " : "") . "
        </div>
        <div style='background: #f1f5f9; text-align: center; padding: 12px; font-size: 12px; color: #64748b;'>
          Rappeler le client directement au <strong>{$phone}</strong>
        </div>
      </div>
    </body>
    </html>
    ";

    $sent = send_smtp_email_native($to, $subject, $htmlContent, $email);

    if ($sent) {
        return [
            'success' => true,
            'message' => 'Votre demande d\'intervention a bien été envoyée ! Un technicien va vous rappeler très rapidement.'
        ];
    }

    return [
        'success' => true,
        'message' => 'Votre demande a été prise en compte. N\'hésitez pas à nous appeler directement au ' . PHONE_DISPLAY . ' pour une prise en charge immédiate.'
    ];
}

function send_smtp_email_native(string $to, string $subject, string $htmlBody, string $replyTo = ''): bool {
    $host = defined('SMTP_HOST') ? SMTP_HOST : 'ssl0.ovh.net';
    $port = defined('SMTP_PORT') ? SMTP_PORT : 465;
    $user = defined('SMTP_USER') ? SMTP_USER : 'contact@sosparasites.fr';
    $pass = defined('SMTP_PASS') ? SMTP_PASS : '';

    // If password is not configured, fallback to standard mail()
    if (empty($pass) || $pass === 'votre_mot_de_passe_ovh_securise') {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: SOS Parasites <" . SENDER_EMAIL . ">\r\n";
        if (!empty($replyTo)) {
            $headers .= "Reply-To: " . $replyTo . "\r\n";
        }
        return @mail($to, $subject, $htmlBody, $headers);
    }

    // Connect via SSL socket to OVH SMTP
    $socket = @fsockopen("ssl://{$host}", $port, $errno, $errstr, 15);
    if (!$socket) {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: SOS Parasites <" . SENDER_EMAIL . ">\r\n";
        if (!empty($replyTo)) {
            $headers .= "Reply-To: " . $replyTo . "\r\n";
        }
        return @mail($to, $subject, $htmlBody, $headers);
    }

    $read = function() use ($socket) {
        $data = '';
        while ($str = fgets($socket, 515)) {
            $data .= $str;
            if (substr($str, 3, 1) === ' ') break;
        }
        return $data;
    };

    $read();
    fwrite($socket, "EHLO " . ($_SERVER['SERVER_NAME'] ?? 'sosparasites.fr') . "\r\n");
    $read();

    fwrite($socket, "AUTH LOGIN\r\n");
    $read();

    fwrite($socket, base64_encode($user) . "\r\n");
    $read();

    fwrite($socket, base64_encode($pass) . "\r\n");
    $authResp = $read();

    if (strpos($authResp, '235') === false) {
        fclose($socket);
        return false;
    }

    fwrite($socket, "MAIL FROM: <" . $user . ">\r\n");
    $read();

    fwrite($socket, "RCPT TO: <" . $to . ">\r\n");
    $read();

    fwrite($socket, "DATA\r\n");
    $read();

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: SOS Parasites <" . $user . ">\r\n";
    $headers .= "To: <" . $to . ">\r\n";
    if (!empty($replyTo)) {
        $headers .= "Reply-To: <" . $replyTo . ">\r\n";
    }
    $headers .= "Subject: " . "=?UTF-8?B?" . base64_encode($subject) . "?=\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";

    fwrite($socket, $headers . $htmlBody . "\r\n.\r\n");
    $dataResp = $read();

    fwrite($socket, "QUIT\r\n");
    fclose($socket);

    return strpos($dataResp, '250') !== false;
}
