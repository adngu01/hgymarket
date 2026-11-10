<?php

require_once __DIR__ . '/../config/db.php';

function addUser($felt) {
    global $forum;

    $username = trim($felt['username'] ?? '');
    $namn = trim($felt['name'] ?? '');
    $email = trim($felt['email'] ?? '');
    $password = $felt['password'] ?? '';

    if (
        $username === '' ||
        $namn === '' ||
        $email === '' ||
        $password === ''
    ) {
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    try {
        $sql = "INSERT INTO user
                (username, namn, email, password)
                VALUES
                (:username, :namn, :email, :password)";

        $stmt = $forum->prepare($sql);

        $stmt->execute([
            ':username' => $username,
            ':namn' => $namn,
            ':email' => $email,
            ':password' => $hashedPassword
        ]);

        return true;

    } catch (PDOException $e) {
        return false;
    }
}
