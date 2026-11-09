<?php
/**
 * Native PHP Graphical CAPTCHA Generator (GD Library)
 */

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate random 5-character string
$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
$captchaString = '';
for ($i = 0; $i < 5; $i++) {
    $captchaString .= $characters[random_int(0, strlen($characters) - 1)];
}

// Store in session (case-insensitive check)
$_SESSION['captcha'] = strtoupper($captchaString);

// Create image (140x45 pixels)
$width = 140;
$height = 45;
$image = imagecreatetruecolor($width, $height);

// Colors
$bgColor = imagecolorallocate($image, 241, 245, 249); // light slate background
$textColor = imagecolorallocate($image, 220, 38, 38);   // red text
$lineColor = imagecolorallocate($image, 203, 213, 225); // subtle lines
$dotColor = imagecolorallocate($image, 148, 163, 184);

// Fill background
imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);

// Add random background lines
for ($i = 0; $i < 6; $i++) {
    imageline($image, random_int(0, $width), random_int(0, $height), random_int(0, $width), random_int(0, $height), $lineColor);
}

// Add random background dots
for ($i = 0; $i < 50; $i++) {
    imagesetpixel($image, random_int(0, $width), random_int(0, $height), $dotColor);
}

// Add characters with slight spacing
$fontSize = 5; // Built-in GD font size (1 to 5)
$x = 18;
for ($i = 0; $i < strlen($captchaString); $i++) {
    $y = random_int(8, 18);
    // Draw character using built-in font
    imagestring($image, $fontSize, $x, $y, $captchaString[$i], $textColor);
    $x += 22;
}

// Output image as PNG
header('Content-Type: image/png');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
imagepng($image);
imagedestroy($image);
exit;
