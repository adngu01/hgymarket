<?php
$products = [
    ["name" => "HGY Hoodie", "price" => "499 kr"],
    ["name" => "HGY T-shirt", "price" => "249 kr"],
    ["name" => "HGY Cap", "price" => "199 kr"]
];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkter - HGY Market</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>HGY Market</h1>

        <nav>
            <a href="index.php">Hem</a>
            <a href="products.php">Produkter</a>
            <a href="#">Rea</a>
            <a href="login.php">Logga in</a>
        </nav>
    </header>

    <main class="products">
        <?php foreach ($products as $product): ?>
            <article class="product">
                <h2><?php echo $product["name"]; ?></h2>
                <p><?php echo $product["price"]; ?></p>
                <button>Köp nu</button>
            </article>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>© 2026 HGY Market</p>
    </footer>
</body>
</html>
 