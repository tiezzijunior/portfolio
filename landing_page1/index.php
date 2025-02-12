<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="./src/style/reset.css">
    <link rel="stylesheet" href="./src/style/vars.css"> <!-- VARIAVEIS DO CSS -->
    <link rel="stylesheet" href="./src/style/topbar-footer.css"> <!-- CSS DO TOPBAR - FOOTER -->
    <link rel="stylesheet" href="./src/style/main_index.css"> <!-- CSS DO MAIN -->
</head>

<body>

    <!-- TOPBAR -->
    <?php require_once "topbar.php" ?>

    <main>

    </main>

    <footer>
        <div class="footer__content">
            <div class="footer__content__left">
                <span>Main Street Plaza, Downtown Business District</span>
                <span>+1 (555) 123-4567</span>
            </div>

            <div class="footer__content__center">
                <ul>
                    <li>
                        <a href="#home">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#img">
                            <span>Pictures</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#market">
                            <span>Market</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer__content__right">
                <span>Get in Touch</span>
                <span>GRIYO@BUSINESS.COM</span>
            </div>
        </div>
    </footer>
</body>

</html>