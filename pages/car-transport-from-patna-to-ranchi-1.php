<?php
require_once __DIR__ . '/../includes/config.php';
// 301 Permanent Redirect to primary non-duplicate URL
header("HTTP/1.1 301 Moved Permanently");
header("Location: " . SITE_URL . "/pages/car-transport-from-patna-to-ranchi.php");
exit();
?>
