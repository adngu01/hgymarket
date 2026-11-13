<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Logga in på HGY Market.">
    <title>Logga in - HGY Market</title>
    <link rel="stylesheet" href="css/style.css?v=6">
</head>
<body>
    <header class="login-header">
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
        <nav aria-label="Huvudmeny">
            <a href="index.php">Hem</a>
            <a href="products.php">Produkter</a>
            <a href="#">Rea</a>
            <a href="login.php" aria-current="page">Logga in</a>
            <div class="nav-icons" aria-label="Varukorg och gillade varor">
                <a class="nav-icon" href="cart.php" aria-label="Varukorg">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 4h2l2.2 11.1a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 1.9-1.4L22 8H6"></path>
                        <circle cx="10" cy="20" r="1"></circle>
                        <circle cx="18" cy="20" r="1"></circle>
                    </svg>
                </a>
                <a class="nav-icon" href="favorites.php" aria-label="Gillade varor">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                    </svg>
                </a>
            </div>

                       
        </nav>
    </header>

    <main class="login-page">
        <section class="login-card" aria-labelledby="login-title">
            <h2 id="login-title">Välkommen tillbaka</h2>
            <p class="login-intro">Fyll i e-postadressen och lösenordet för ditt HGY Market-konto och välj Logga in.</p>

            <form class="login-form" action="login.php" method="post">
                <div class="form-field">
                    <label for="email">E-postadress</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        autocomplete="email"
                        placeholder="namn@exempel.se"
                        required
                    >
                </div>

                <div class="form-field">
                    <label for="password">Lösenord</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        autocomplete="current-password"
                        placeholder="Ange ditt lösenord"
                        required
                    >
                </div>

                <button class="login-button" type="submit">Logga in</button>
            </form>

            <a class="back-link" href="index.php">Tillbaka till startsidan</a>
        </section>
    </main>

    <footer>
        <p>© 2026 HGY Market</p>
    </footer>
</body>
</html>
