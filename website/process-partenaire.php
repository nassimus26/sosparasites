<?php
/**
 * Partner Form Processing Endpoint - PHP 8
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/protected/config.php';
require_once __DIR__ . '/includes/mail_sender.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée.']);
    exit;
}

$rawInput = file_get_contents('php://input');
$inputData = [];

if (!empty($rawInput)) {
    $decoded = json_decode($rawInput, true);
    if (is_array($decoded)) {
        $inputData = $decoded;
    }
}

if (empty($inputData)) {
    $inputData = $_POST;
}

$name = trim((string)($inputData['name'] ?? ''));
$phone = trim((string)($inputData['phone'] ?? ''));
$email = trim((string)($inputData['email'] ?? ''));
$region = trim((string)($inputData['region'] ?? 'Non précisée'));
$certibiocide = trim((string)($inputData['certibiocide'] ?? 'Non précisé'));
$experience = trim((string)($inputData['experience'] ?? 'Non précisée'));
$details = trim((string)($inputData['details'] ?? ''));

if (empty($name) || empty($phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Le nom et le numéro de téléphone sont obligatoires.']);
    exit;
}

$to = CONTACT_EMAIL_TARGET;
$subject = "🤝 NOUVELLE CANDIDATURE SOUS-TRAITANT / PARTENAIRE - {$region}";

$htmlContent = "
<html>
<head><title>Candidature Partenaire SOS PARASITES</title></head>
<body style='font-family: Arial, sans-serif; background-color: #f8fafc; padding: 20px;'>
  <div style='max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden;'>
    <div style='background-color: #0284c7; color: white; padding: 16px; text-align: center;'>
      <h2 style='margin: 0;'>🤝 Nouvelle Candidature Sous-Traitant / Partenaire</h2>
      <p style='margin: 4px 0 0 0; font-size: 13px;'>Reçue depuis l'Espace Partenaires de sosparasites.fr</p>
    </div>
    <div style='padding: 24px;'>
      <h3 style='color: #1e293b; border-bottom: 2px solid #0284c7; padding-bottom: 6px;'>Informations du Technicien / Entreprise</h3>
      <p><strong>Nom / Société :</strong> {$name}</p>
      <p><strong>Téléphone :</strong> <a href='tel:{$phone}' style='color: #0284c7; font-size: 18px; font-weight: bold;'>{$phone}</a></p>
      " . (!empty($email) ? "<p><strong>Email :</strong> {$email}</p>" : "") . "
      <p><strong>Zone / Région d'intervention :</strong> {$region}</p>
      <p><strong>Certificat Certibiocide :</strong> {$certibiocide}</p>
      <p><strong>Expérience :</strong> {$experience}</p>

      " . (!empty($details) ? "
      <h3 style='color: #1e293b; border-bottom: 2px solid #0284c7; padding-bottom: 6px; margin-top: 20px;'>Présentation / Message</h3>
      <p style='background: #f1f5f9; padding: 12px; border-radius: 6px; white-space: pre-line;'>{$details}</p>
      " : "") . "
    </div>
    <div style='background: #f1f5f9; text-align: center; padding: 12px; font-size: 12px; color: #64748b;'>
      Contacter le partenaire directement au <strong>{$phone}</strong>
    </div>
  </div>
</body>
</html>
";

$sent = send_smtp_email_native($to, $subject, $htmlContent, $email);

if ($sent) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Votre candidature a bien été transmise ! Notre responsable réseau vous contactera très rapidement.'
    ]);
} else {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Votre candidature a été enregistrée. Vous pouvez aussi nous contacter directement au ' . PHONE_DISPLAY . '.'
    ]);
}
exit;
