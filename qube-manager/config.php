<?php
session_start();

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'km_refrigeracao');
define('DB_USER', 'root');
define('DB_PASS', '');

// Admin panel configuration
define('ADMIN_URL', '/qube-manager');
define('SITE_ROOT', dirname(__DIR__));

// Database connection
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['admin_user_id']) && isset($_SESSION['admin_email']);
}

// Check authentication
function requireAuth() {
    if (!isLoggedIn()) {
        header('Location: ' . ADMIN_URL . '/login.php');
        exit;
    }
}

// Get current user
function getCurrentUser() {
    global $pdo;
    if (!isLoggedIn()) {
        return null;
    }

    $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE id = ?");
    $stmt->execute([$_SESSION['admin_user_id']]);
    return $stmt->fetch();
}

// Logout
function logout() {
    session_destroy();
    header('Location: ' . ADMIN_URL . '/login.php');
    exit;
}

// Format date
function formatDate($date) {
    return date('d/m/Y H:i', strtotime($date));
}

// Sanitize input
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}
?>
