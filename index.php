<?php include("app.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo pages($page, 'head')?></title>
    <link rel="icon" href="assets/FAVICONS/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="app.js"></script> -->

</head>

<body>
    <!-- Header
    -------------------------------------------------------------->
    <header id="top-header" class="top-header row">

        <figure id="logo">
            <a href="index"><img src="assets/img/teddy-images/teddy-official-logo1.png"></a>
        </figure>

        <figure id="nav-triggers">
            <a href="#" id="open-menu" class="trigger"><img src="assets/ICONS/burger-icon.svg" alt="burger menu"></a>
            <a href="#" id="close-menu" class="trigger"><img src="assets/ICONS/close-icon.svg" alt="close menu"></a>

        </figure>

        <nav id="main-nav">
            <ul class="menu row font400">
                <?php pages($page); ?>
            </ul>
        </nav>
    </header>
    <!-- END OF HEADERc
    --------------------------------------->

    <main>
        <!-- main
    -------------------------------------------------------------->
    <?php include("html/" .$page. ".html")?>


    </main>
    <!--FOOTER ----------------------------------------------------->
    <footer>
        <div class="footer-box">
            <ul class="social-icons">
                <li class="display">
                    <a href="https://www.youtube.com/channel/UCydlocDyvRtFmMffKytKqgQ"><img src='assets/ICONS/youtube.svg' /></a>
                </li>
                <li class="display">
                    <a href="https://www.instagram.com/p/BVF9ZNoBPx7/"><img src='assets/ICONS/instagram.svg' /></a>
                </li>
                <li class="display">
                    <a href="https://www.facebook.com/TeddyAfroMusic" target="blank"><img src='assets/ICONS/facebook.svg' /></a>
                </li>
                <li class="display">
                    <a href="https://twitter.com/teddyafromusic" target="blank"><img src='assets/ICONS/twitter.svg' /></a>
                </li>

            </ul>
            <p class="copyright"> &#169 Untitled. All rights reserved.</p>
        </div>
    </footer>
    <script src="assets/js/app.js"></script>

</body>

</html>