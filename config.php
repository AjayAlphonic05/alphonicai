<?php
$host = $_SERVER['HTTP_HOST'];
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

if (preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/', $host)) {
    define("_APPLICATION_URL", $scheme.$host."/alphonicai/");
} else {
    define("_APPLICATION_URL", "https://www.alphonicai.com/");
}
?>