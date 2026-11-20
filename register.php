<?php

session_start();

require_once 'assets/functions.php';

$error = false;
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (
        $username === '' ||
        $email === '' ||
        $password === ''
    ) {
        $error = true;

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    
    } else {

        $userData = [
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];

        if (addUser($userData)) {
            $success = true;
        } else {
            $error = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Skapa konto - HGY Market</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a href="index.php">Hem</a>
        <a href="products.php">Produkter</a>
        <a href="register.php">Registrera</a>
        <a href="login.php">Logga in</a>
    </nav>

    <main>

        <h1>Skapa konto</h1>

        <?php if ($error): ?>
            <p>Kontrollera dina uppgifter. Kontot kunde inte skapas.</p>
        <?php endif; ?>

        <?php if ($success): ?>
            <p>Kontot har skapats!</p>
            <p><a href="login.php">Logga in här</a></p>
        <?php endif; ?>

        <?php if (!$success): ?>

           <form method="POST" action="register.php">

                <label for="username">Användarnamn:</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    required
                >

                <br>

                <label for="email">E-post:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >

                <br>

                <label for="password">Lösenord:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >

                <br>

                <button type="submit">Skapa konto</button>

            </form>

            <p>
                Har du redan ett konto?
                <a href="login.php">Logga in</a>
            </p>

        <?php endif; ?>

    </main>

</body>

</html>
