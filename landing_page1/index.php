<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="icon" href="./src/assets/icons/favicon.ico" type="image/x-icon">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
            <!-- EXIBIÇÃO INICIAL DO SITE -->
            <div class="header__content">
                <div class="header__content-header">
                    <h1 class="header__content-title">Experience<br>/Elevated<br>Living</h1>
                    <p class="header__content-subtitle">Luxurius spaces, refined design, personalized services, and modern</p>
                    <p class="header__content-subtitle2">amenities for a sophisticated, upscale lifestyle.</p>
                </div>

                <div class="header__content-btn">
                    <button class="header__content-button">
                        <span>Learn more</span>
                    </button>
                </div>
            </div>

            <div class="body__content">
                <!-- SECTION 1 -->
                <section class="body__content-valores">
                    <div class="valor__card1">
                        <span class="title">No.1</span>
                        <span class="subtitle">Research Market</span>
                        <span class="text">Explore neighborhoods, property types, and prices to find the right real estate investiment opportunities.</span>
                    </div>
                    <div class="valor__card2">
                        <span class="title">No.2</span>
                        <span class="subtitle">Secure Financing</span>
                        <span class="text">Arrange mortgage options and gather necessary funds to ensure a smooth purchasing process.</span>
                    </div>
                    <div class="valor__card3">
                        <span class="title">No.3</span>
                        <span class="subtitle">Close Deal</span>
                        <span class="text">Finalize paperwork, negotiate terms, and transfer ownership to complete your real estate purchase.</span>
                    </div>
                </section>

                <!-- SECTION 2 -->
                <section class="body__content-about">
                    <div class="title">
                        <h1 class="title-bar">/</h1>
                        <h1>About us</h1>
                    </div>
                    <div class="subtitle">
                        <div class="subtitle-line-arrow">
                            <div class="subtitle-line">
                                <hr>
                            </div>
                            <div>
                                <span class="subtitle-arrow"><i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <div class="subtitle-text">
                            <p>At Griyo Real Estate, we provide tailored property solutions, expert guidance, and exceptional service to ensure seamless transactions and satisfaction in every real estate deal.</p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="./src/assets/imagens/casa_about.jpg" alt="Casa de Campo">
                    </div>
                    <div class="text">
                        <p>
                            Find comprehensive answars to all your Naturely travel questions right here.<br>
                            Whether Find comprehensive answars to all
                        </p>
                    </div>
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