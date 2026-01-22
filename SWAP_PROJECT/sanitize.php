<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
function sanitize_input($input) {
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}
