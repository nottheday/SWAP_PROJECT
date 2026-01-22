<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'");

// Include security files
require "security.php";
require "sanitize.php";
require "securitylog.php";
require "db.php";

/** @var PDO $db */

$user = "test_user"; // simulated login
$remarks = $_POST['remarks'];

// Validate input
if (!validate_input($remarks)) {
    die("Invalid input");
}

// Sanitize input
$sanitized = sanitize_input($remarks);

// Log suspicious input if sanitization changed it
if ($remarks !== $sanitized) {
    log_xss_attempt($user, "remarks", $remarks, $sanitized);
}

// --- AUTO-INCREMENT RESET ---
// Reset AUTO_INCREMENT if table is empty
$count = $db->query("SELECT COUNT(*) FROM requests")->fetchColumn();
if ($count == 0) {
    $db->exec("ALTER TABLE requests AUTO_INCREMENT = 1");
}

// Store sanitized input in DB
$stmt = $db->prepare("INSERT INTO requests (remarks) VALUES (?)");
$stmt->execute([$sanitized]);

echo "Submitted successfully";
