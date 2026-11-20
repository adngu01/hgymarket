<?php

session_start();

require_once 'assets/db.php';

$error = false;
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (
        $username === '' ||
        $password === ''
    ) {
        $error = true;

    } else {

        try {

            $sql = "SELECT user_id, username, password, role
                    FROM users
                    WHERE username = :username";

            $stmt = $forum->prepare($sql);

            $stmt->execute([
                'username' => $username
            ]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {

                session_regenerate_id(true);

                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header("Location: index.php");
                exit();

            } else {
                $error = true;
            }

        } catch (PDOException $e) {
            error_log($e->getMessage());
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

    <title>Logga in - HGY Market</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
    <a href="index.php">Hem</a>
    <a href="products.php">Produkter</a>

    <?php if (isset($_SESSION['user_id'])): ?>

        <a href="cart.php">Varukorg</a>
        <a href="orders.php">Mina beställningar</a>
        <a href="logout.php">Logga ut</a>

    <?php else: ?>

        <a href="register.php">Registrera</a>
        <a href="login.php">Logga in</a>

    <?php endif; ?>
</nav>
    <main>

        <h1>Logga in</h1>

        <?php if ($error): ?>
            <p>Fel användarnamn eller lösenord. Kontrollera dina uppgifter.</p>
        <?php endif; ?>

        <form method="POST" action="login.php">

            <label for="username">Användarnamn:</label>
            <input
                type="text"
                id="username"
                name="username"
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

            <button type="submit">Logga in</button>

        </form>

        <p>
            Har du inget konto?
            <a href="register.php">Registrera dig här</a>
        </p>

    </main>

</body>

</html>