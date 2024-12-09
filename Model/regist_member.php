<?php
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Gérer les requêtes préflight (OPTIONS)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
    http_response_code(200);
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $data = $_POST;

    if (!$data || !isset($data['name'], $data['email'], $data['institution'], $data['subject'],$data['gender'])) {
        http_response_code(400);
        echo json_encode(["message" => "Invalid input."]);
        exit;
    }

    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $institution = htmlspecialchars($data['institution']);
    $subject = htmlspecialchars($data['subject']);
	$gender = htmlspecialchars($data['gender']);
	
    $host = 'localhost';
    $db = 'hackwebsite';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO members (name, email, institution, subject,gender) VALUES (?, ?, ?, ?,?)");
        $stmt->execute([$name, $email, $institution, $subject,$gender]);

        http_response_code(200);
        echo json_encode(["message" => "User registered successfully."]);
        header("Location:../index.php");
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Error: " . $e->getMessage()]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method not allowed."]);
}
?>