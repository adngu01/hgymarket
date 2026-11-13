<?php
$products = [

 ["name" => "HGY Hoodie", "price" => "499 kr", "image" => "images/hoodie.svg"],
    ["name" => "HGY T-shirt", "price" => "249 kr", "image" => "images/tshirt.svg"],
    ["name" => "HGY Keps", "price" => "199 kr", "image" => "images/cap.svg"],
    ["name" => "HGY Sweatpants", "price" => "399 kr", "image" => "images/sweatpants.svg"],
    
    ["name" => "HGY Dam Hoodie", "price" => "499 kr", "image" => "images/HGY Merch hoodie Gray A.png"],
    ["name" => "HGY Tanktop grå", "price" => "199 kr", "image" => "images/HGY merch tank top gray.png"],
    ["name" => "HGY T-shirt grå", "price" => "249 kr", "image" => "images/HGY Merch t-shirt Gray .png"],
    ["name" => "HGY Sweatpants svart", "price" => "399 kr", "image" => "images/HGY Merch swet pants.png"],
    ["name" => "HGY Sweatpants grå", "price" => "399 kr", "image" => "images/HGY Merch gray sweat.png"],
    ["name" => "HGY T-shirt svart", "price" => "249 kr", "image" => "images/HGY Merch t-shirt svart.png"],
    ["name" => "HGY T-shirt svart classic", "price" => "249 kr", "image" => "images/HGY Merch black t .png"],
    ["name" => "HGY Sweatpants svart classic", "price" => "399 kr", "image" => "images/HGY Merch Black sweat.png"],
    ["name" => "HGY Hoodie svart", "price" => "499 kr", "image" => "images/HGY Merch hoodie.png"],
    ["name" => "HGY Tanktop svart", "price" => "199 kr", "image" => "images/HGY Merch Black tank.png"]
];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkter - HGY Market</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>HGY Market</h1>

        <div class="nav-dropdown">
                <details>
                    <summary>HGY Merch</summary>
                    <ul class="dropdown-menu">
                        <li>
                            <details>
                                <summary>Dam</summary>
                                <ul class="dropdown-submenu">
                                    <li><a href="products.php">Hoodie</a></li>
                                    <li><a href="products.php">T-shirt</a></li>
                                    <li><a href="products.php">Sweatpants</a></li>
                                    <li><a href="products.php">Övriga kläder</a></li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary>Herr</summary>
                                <ul class="dropdown-submenu">
                                    <li><a href="products.php">Hoodie</a></li>
                                    <li><a href="products.php">T-shirt</a></li>
                                    <li><a href="products.php">Sweatpants</a></li>
                                    <li><a href="products.php">Övriga kläder</a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </details>
            </div>
        <nav>
            <a href="index.php">Hem</a>
            <a href="products.php">Produkter</a>
            <a href="rea.php">Rea</a>
            <a href="login.php">Logga in</a>
        </nav>
    </header>

    <main class="products">
        <?php foreach ($products as $product): ?>
            <article class="product">
                <img
                    class="product-image"
                    src="<?php echo htmlspecialchars($product["image"], ENT_QUOTES, "UTF-8"); ?>"
                    alt="<?php echo htmlspecialchars($product["name"], ENT_QUOTES, "UTF-8"); ?>"
                >
                <h2><?php echo $product["name"]; ?></h2>
                <p class="product-price"><?php echo $product["price"]; ?></p>
                <button type="button">Köp nu</button>
            </article>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>© 2026 HGY Market</p>
    </footer>
</body>
</html>
 