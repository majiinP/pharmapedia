<?php
    if(isset($_GET['accept-cookies'])){
        setcookie('accept-cookies', 'true', time() + 31556925);
        header('Location: ./a_womans_formula.php');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A. C. AND C. 8, 375+8+15MG</title>

        <!-- ==================== FAVICON =============================== -->
        <link rel="shortcut icon" href="../../../img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon">
        
        <!-- ==================== EXTERNAL SOURCES =============================== -->
        <script src="https://use.fontawesome.com/dc8cb5d611.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css">
        <!-- ==================== JS INTERNAL  =============================== -->
        <script type="text/javascript" src="../../../js/reponsive-menu.js"></script>
        <script type="text/javascript" src="../../../js/cookie-banner.js"></script>

        <!-- ==================== CSS INTERNAL =============================== -->
        <!-- NAV-MENU STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../../css/nav-menu.css"/>
        <!-- COOKIE BANNER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../../css/cookie-banner.css">
         <!-- GENERAL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../../css/GeneralStylesheet.css">
        <!-- MEDIA-QUERIES -->
        <link rel="stylesheet" type="text/css" href="../../../css/media-queries.css">
        <!-- CARDS (MEDICATION DESCRIPTION) -->
        <link rel="stylesheet" type="text/css" href="../../../css/card-description.css">
        <!-- FOOTER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../../css/footer.css">

    </head>

    <body class="content">

        <div class="wrapper">

            <?php
                if(!isset($_COOKIE['accept-cookies'])){
            ?>
                <div class="cookie-banner">
                    <div class="container">
                        <p>We use cookies on this website. By using this website, we assume you consent to our privacy policy, user agreement and cookie policy we have set on this website.</p>
                        <a href="?accept-cookies" class="button-cookie">Ok, continue</a>
                    </div>
                </div>
            <?php
                }
            ?>

            <!-- NAVBAR SECTION -->
            <nav>
                <div class="toggle">
                    <i class="fa fa-bars menu" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="../../../index.php">Home</a></li>
                    <li><a href="../../about.php">About</a></li>
                    <li><a href="../../legal.php">Legal</a></li>
                    <li><a href="../../contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="container">
                <h1>A. C. AND C. 8, 375+8+15MG</h1>
                    <br>
                    <div class="card">
                        <iframe src="../../drug_list_description/a/A_C_AND-C-8_375_8_15MG_iframe/A_C_And-C_8-tablet-375_8_15mg_price.html" style="border:0px" height="100%" width="100%">
                        </iframe>   
                    </div>
                    
                    <div class="card">
                        <iframe src="../../drug_list_description/a/A_C_AND-C-8_375_8_15MG_iframe/A_C_And-C_8-tablet-375_8_15mg_instructions.html" style="border:0px" height="100%" width="100%">
                        </iframe>
                    </div>

                    <div class="card">
                        <iframe src="../../drug_list_description/a/A_C_AND-C-8_375_8_15MG_iframe/A_C_And-C_8-tablet-375_8_15mg_sideeffects.html" style="border:0px" height="100%" width="100%">
                        </iframe>
                    </div>
                
            </div>
        </div>

        <!-- FOOTER SECTION -->
    <footer id="footer">
        <div class="footer-bottom">
            <p>&copy; pSoftwares.com | Designed by PSoftwares</p>
        </div>
    </footer>
    <!-- FOOTER SECTION -->
        
    </body>
</html>