<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "database name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

for ($i = 0; $i < 10; $i++) {
    $hasard = rand(0, 1000);
    $username = "utilisateur" . $hasard;
    $email = "utilisateur" . $hasard . $hasard. "@exemple.com";
    $role = json_encode(["ROLE_USER"]);
    $password = password_hash('password123', PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO user (email, roles, password, username ) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $role, $password, $username);

    if ($stmt->execute() !== TRUE) {
        echo "Erreur lors de l'insertion de l'utilisateur : " . $stmt->error;
    }

    $userId = $conn->insert_id;
    $stmt->close();

    $title = "Titre du tweet " . $i;
    $message = "Contenu du tweet " . $i;

    $date = new DateTimeImmutable();

    $likeCount = rand(0, 100);

    $viewCount = rand(0, 1000);

    $stmt = $conn->prepare("INSERT INTO tweet (title, message, user_id, created_at, like_count) VALUES (?, ?, ?, ?, ?)");
    $formattedDate = $date->format('Y-m-d H:i:s');
    $stmt->bind_param("ssisi", $title, $message, $userId, $formattedDate, $likeCount);

    if ($stmt->execute() !== TRUE) {
        echo "Erreur lors de l'insertion du tweet : " . $stmt->error;
    }

    $tweetId = $conn->insert_id;
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO view (user_id, tweet_id, created_at) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $userId, $tweetId, $formattedDate);

    if ($stmt->execute() !== TRUE) {
        echo "Erreur lors de l'insertion de la vue : " . $stmt->error;
    }

    $stmt->close();
}

echo "Les données ont été ajoutées avec succès.";

$conn->close();

