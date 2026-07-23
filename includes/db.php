<?php
/**
 * Database Connection (PDO MySQL)
 */

require_once __DIR__ . '/config.php';

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'shreeashirwad_db';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    // Graceful fallback if database is not initialized yet
    $pdo = null;
}
