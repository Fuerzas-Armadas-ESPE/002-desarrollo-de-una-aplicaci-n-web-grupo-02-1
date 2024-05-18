<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Legacy</title>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
    <link rel="shortcut icon" href="../images/logo_legacy.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/my_style.css">
</head>

<body class="is-preload">
    <div id="wrapper">
        <header id="header">
            <nav>
                <ul>
                    <li>
                        <a href="">Golosinas</a>
                    </li>
                    <li>
                        <a href="">Juegos</a>
                    </li>
                    <li>
                        <a href="#promotions">Promociones</a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- Main -->
        <main id="main">
            <!--table of promotions-->
            <?php
            include 'promotions.php';
            ?>
            <!--form of promotions-->
            <?php
            include 'form/form_promotion.php';
            ?>
        </main>
        <footer>

        </footer>
    </div>
    <!-- BG -->
    <div id="bg"></div>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>