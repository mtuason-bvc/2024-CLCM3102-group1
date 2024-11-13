<?php

declare(strict_types=1);

function getUsername(object $pdo, string $username){
    $query = "SELECT * FROM users WHERE username = :username LIMIT 1;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}