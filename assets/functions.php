<?php
declare(strict_types=1);

function getProducts(): array
{
    return [
        'hoodie' => [
            'name' => 'HGY Hoodie',
            'description' => 'En mjuk hoodie med HGY Market-logotyp.',
            'price' => 499,
            'category' => 'Kläder',
        ],
        'tshirt' => [
            'name' => 'HGY T-shirt',
            'description' => 'En klassisk t-shirt för vardag och skola.',
            'price' => 249,
            'category' => 'Kläder',
        ],
        'cap' => [
            'name' => 'HGY Cap',
            'description' => 'En enkel keps med broderad HGY-logotyp.',
            'price' => 199,
            'category' => 'Accessoarer',
        ],
    ];
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function getCartCount(array $cart): int
{
    return array_sum($cart);
}

function renderHeader(string $title, array $cart): void
{
    $pageTitle = escape($title);
    $cartCount = getCartCount($cart);

    echo <<<HTML
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Upptäck kläder och accessoarer från HGY Market.">
    <title>{$pageTitle} | HGY Market</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="index.php" aria-label="HGY Market – startsida">HGY<span>Market</span></a>
        <nav class="site-nav" aria-label="Huvudmeny">
            <a href="index.php">Hem</a>
            <a href="products.php">Produkter</a>
            <a class="cart-link" href="cart.php">Varukorg <span class="cart-count">{$cartCount}</span></a>
        </nav>
    </header>
    <main>
HTML;
}

function renderFooter(): void
{
    echo <<<'HTML'
    </main>
    <footer class="site-footer">
        <p>&copy; 2026 HGY Market</p>
        <p>En enkel webbshop under uppbyggnad.</p>
    </footer>
</body>
</html>
HTML;
}

function formatPrice(int $price): string
{
    return number_format($price, 0, ',', ' ') . ' kr';
}
