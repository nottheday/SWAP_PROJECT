<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
function validate_input($input) {
    if (!is_string($input)) return false;
    if (strlen($input) > 500) return false;
    return true;
}
