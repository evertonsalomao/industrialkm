<?php
define('CMS_DB_HOST', 'localhost');
define('CMS_DB_NAME', 'kmrefrigeracao_cms');
define('CMS_DB_USER', 'root');
define('CMS_DB_PASS', '');
define('CMS_DB_CHARSET', 'utf8mb4');

function getCMSConnection() {
    try {
        $pdo = new PDO(
            "mysql:host=" . CMS_DB_HOST . ";dbname=" . CMS_DB_NAME . ";charset=" . CMS_DB_CHARSET,
            CMS_DB_USER,
            CMS_DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        return null;
    }
}

function getServiceBySlug($slug) {
    $pdo = getCMSConnection();
    if (!$pdo) {
        return null;
    }

    $stmt = $pdo->prepare("SELECT * FROM services WHERE slug = ? AND active = 1");
    $stmt->execute([$slug]);
    return $stmt->fetch();
}

function getServiceFAQs($serviceId) {
    $pdo = getCMSConnection();
    if (!$pdo) {
        return [];
    }

    $stmt = $pdo->prepare("SELECT * FROM service_faqs WHERE service_id = ? ORDER BY order_position");
    $stmt->execute([$serviceId]);
    return $stmt->fetchAll();
}

function getAllActiveServices() {
    $pdo = getCMSConnection();
    if (!$pdo) {
        return [];
    }

    $stmt = $pdo->query("SELECT * FROM services WHERE active = 1 ORDER BY order_position ASC");
    return $stmt->fetchAll();
}

function getSiteSetting($key, $default = '') {
    $pdo = getCMSConnection();
    if (!$pdo) {
        return $default;
    }

    $stmt = $pdo->prepare("SELECT setting_value FROM site_settings WHERE setting_key = ?");
    $stmt->execute([$key]);
    $result = $stmt->fetch();

    return $result ? $result['setting_value'] : $default;
}
?>
