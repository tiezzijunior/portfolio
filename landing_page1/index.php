<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="icon" href="./src/assets/icons/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./src/style/reset.css">
    <link rel="stylesheet" href="./src/style/vars.css"> <!-- VARIAVEIS DO CSS -->
    <link rel="stylesheet" href="./src/style/topbar-footer.css"> <!-- CSS DO TOPBAR - FOOTER -->
    <link rel="stylesheet" href="./src/style/main_index.css"> <!-- CSS DO MAIN -->
</head>

<body>

    <!-- TOPBAR -->
    <?php require_once "topbar.php" ?>

    <main>
        <div class="main-content">
            <div class="header__content">
                <h1 class="header__content-title">Experience<br>/Elevated<br>Living</h1>
                <p class="header__content-subtitle">Luxurius spaces, refined design, personalized services, and modern</p>
                <p class="header__content-subtitle2">amenities for a sophisticated, upscale lifestyle.</p>
            </div>

            <div class="body__content">
                <section class="body__content-valores">
                    <div class="valor__card1">
                        <span>No.1</span>
                        <span>Research Market</span>
                        <span>Explore neighborhoods, property types, and prices to find the right real estate investiment opportunities.</span>
                    </div>
                    <div></div>
                    <div></div>
                </section>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?php require_once "footer.php"; ?>

    <!-- JS -->
    <script src="./src/scripts/index.js"></script>
</body>

</html>