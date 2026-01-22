<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
function log_xss_attempt($user, $field, $original, $sanitized) {
    $log = [
        "misuse_case" => "Stored XSS",
        "user" => $user,
        "field" => $field,
        "original_input" => $original,
        "sanitized_input" => $sanitized,
        "timestamp" => date("Y-m-d H:i:s"),
        "action" => "Sanitized"
    ];

    // Absolute path to logs folder (always points to project root)
    $logDir = dirname(__DIR__) . "/logs";

    // Create folder if missing
    if (!file_exists($logDir)) {
        mkdir($logDir, 0777, true);
    }

    $logFile = $logDir . "/xss.log";

    // Write log
    file_put_contents(
        $logFile,
        json_encode($log) . PHP_EOL,
        FILE_APPEND
    );
}
