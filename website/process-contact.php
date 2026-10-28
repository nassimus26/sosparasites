<?php
/**
 * AJAX / Form Processing Endpoint - PHP 8
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

$result = send_contact_email($inputData);

if ($result['success']) {
    http_response_code(200);
    echo json_encode($result);
} else {
    http_response_code(400);
    echo json_encode($result);
}
exit;
