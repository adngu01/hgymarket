<?php

require_once __DIR__ . '/db.php';

function addUser($felt) {
    global $forum;

    $username = trim($felt['username'] ?? '');
    $email = trim($felt['email'] ?? '');
    $password = $felt['password'] ?? '';

    if (
        $username === '' ||
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
        $sql = "INSERT INTO users
                (username, email, password)
                VALUES
                (:username, :email, :password)";

        $stmt = $forum->prepare($sql);

        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashedPassword
        ]);

        return true;

    } catch (PDOException $e) {
        return false;
    }
}