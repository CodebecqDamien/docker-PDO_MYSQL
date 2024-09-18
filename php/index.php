<?php
$host = 'db'; // Nom donné dans le docker-compose.yml
$user = 'myuser';
$password = 'monpassword';
$db = 'tutoseu';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
    $conn = new PDO($dsn, $user, $password);
    // Configuration des attributs PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion à MySQL ok<br />";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage() . "<br />";
}

// Lorsque tu n'as plus besoin de la connexion, tu peux la fermer
$conn = null;
?>
