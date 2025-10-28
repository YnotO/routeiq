<?php
require_once '../config.php';

// Allow CORS (for development)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

try {
    // Connect to the database using values from config.php
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'DB Connection failed: ' . $e->getMessage()]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $type = $_POST['type'] ?? '';
    $description = $_POST['description'] ?? '';
    $latitude = $_POST['latitude'] ?? '';
    $longitude = $_POST['longitude'] ?? '';

    if ($name && $latitude && $longitude) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO devices (name, type, description, latitude, longitude)
                VALUES (?, ?, ?, ?, ?)
            ");
            $stmt->execute([$name, $type, $description, $latitude, $longitude]);

            echo json_encode(['success' => true, 'message' => 'Device saved successfully']);
        } catch (PDOException $e) {
            echo json_encode([
                'success' => false,
                'error' => 'SQL Error: ' . $e->getMessage()
            ]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
