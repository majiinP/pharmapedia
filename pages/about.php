<?php
    if(isset($_GET['accept-cookies'])){
        setcookie('accept-cookies', 'true', time() + 31556925);
        header('Location: ./about.php');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>

        <!-- ==================== FAVICON =============================== -->
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
        
        <!-- ==================== EXTERNAL SOURCES =============================== -->
        <script src="https://use.fontawesome.com/dc8cb5d611.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <!-- ==================== JS INTERNAL  =============================== -->
        <script type="text/javascript" src="../js/reponsive-menu.js"></script>
        <script type="text/javascript" src="../js/cookie-banner.js"></script>
        <script type="text/javascript" src="../js/cookie-banner.js"></script>

        <!-- ==================== CSS INTERNAL =============================== -->
        <!-- NAV-MENU STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/nav-menu.css"/>
        <!-- COOKIE BANNER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/cookie-banner.css">
         <!-- GENERAL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/GeneralStylesheet.css">
        <!-- MEDIA-QUERIES -->
        <link rel="stylesheet" type="text/css" href="../css/media-queries.css">
        <!-- CARDS (MEDICATION DESCRIPTION) -->
        <link rel="stylesheet" type="text/css" href="../css/card-description.css">
        <!-- FOOTER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/footer.css">

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
                    <li><a href="../">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="../pages/legal.php">Legal</a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="container">
                
                <h1>About Us</h1>
                <br>
                <div class="nav-cards">

                <p>Pharmacy (from the Greek φάρμακον 'pharmakon' = drug) is the health profession that links the health sciences with the chemical sciences, and it is charged with ensuring the safe and effective use of medication.</p>
                <br>
                <p>The scope of pharmacy practice includes more traditional roles such as compounding and dispensing medications, and it also includes more modern services related to patient care, including clinical services, reviewing medications for safety and efficacy, and providing drug information. Pharmacists, therefore, are the experts on drug therapy and are the primary health professionals who optimize medication use to provide patients with positive health outcomes. Pharmacy is also the term for an establishment where pharmacy (in the first sense) is practice (synonym: drugstore). The first pharmacy in Europe (still working) was opened in 1241 in Trier, Germany.[citation needed]</p>
                <br>    
                <p>The word pharmacy is derived from its root word pharma which was a term used since the 1400–1600s. In addition to pharma responsibilities, the pharma offered general medical advice and a range of services that are now performed solely by other specialist practitioners, such as surgery and midwifery. The pharma (as it was referred to) often operated through a retail shop which, in addition to ingredients for medicines, sold tobacco and patent medicines. The pharmas also used many other herbs not listed.</p>
                <br>    
                <p>In its investigation of herbal and chemical ingredients, the work of the pharma may be regarded as a precursor of the modern sciences of chemistry and pharmacology, prior to the formulation of the scientific method.</p>
                <br>
                <p>Welcome to Pharmapendium, your number one source for all informations related to pharmaceutical products. We're dedicated to providing you the very best of pharmaceutical knowledge, with an emphasis on reliability, precision and information.</p>
                <br>
                <p>Founded in 2019 by Pescaru Softwares, pharmapendium has come a long way from its beginnings. When Pescaru Softwares first started out, the passion for world wide pharmaceutical knowledge drove them to start this website.</p>    
                <br>        
                <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>

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