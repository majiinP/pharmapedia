<?php
    if(isset($_GET['accept-cookies'])){
        setcookie('accept-cookies', 'true', time() + 31556925);
        header('Location: ./');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pharmapedia</title>

         <!-- ==================== EXTERNAL SOURCES =============================== -->
         <script src="https://use.fontawesome.com/dc8cb5d611.js"></script>
         <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">

        <!-- ==================== JS INTERNAL  =============================== -->
        <script type="text/javascript" src="/js/medication-appear.js"></script>
        <script type="text/javascript" src="/js/reponsive-menu.js"></script>
        <script type="text/javascript" src="/js/cookie-banner.js"></script>

        <!-- ==================== CSS INTERNAL =============================== -->
        <!-- NAV-MENU STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="/css/nav-menu.css"/>
        <!-- COOKIE BANNER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="/css/cookie-banner.css">
        <!-- SEARCHBAR STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="/css/SearchBar.css">
        <!-- BUTTONS STYLE -->
        <link rel="stylesheet" type="text/css" href="/css/buttons.css">
         <!-- OVERLAY STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="/css/overlay.css">
         <!-- GENERAL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="/css/GeneralStylesheet.css">
        <!-- FOOTER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="/css/footer.css">
         <!-- MEDIA-QUERIES -->
        <link rel="stylesheet" type="text/css" href="/css/media-queries.css">

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
            <!-- A ALPAHBET SECTION-->
            <div id="myNav1" class="overlay">
                <!-- Button to close the overlay navigation -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              
                <!-- Overlay content for alphabet A-->
                <div class="overlay-content">
                  <a href="pages/drug_list_description/a_womans_formula.php">A WOMAN'S FORMULA</a>
                  <a href="#">A. C. and C. 8 - 325+8+15mg</a>
                  <a href="#">A. C. AND C. 8, 375+8+15MG</a>
                  <a href="#">A.C.E.S. +Zinc - capsule</a>
                  <a href="#">A.S.F. - capsule</a>
                  <a href="#">AA Amilzide - 50+5mg</a>
                  <a href="#">AA Clozapine - 25mg</a>
                  <a href="#">AA Clozapine - 100mg</a>
                  <a href="#">AA Theo LA - 100mg</a>
                  <a href="#">AA Theo LA - 200mg</a>
                  <a href="#">AA Theo LA - 300mg</a>
                  <a href="#">AAS - 81mg - comp. ent.</a>
                  <a href="#">AAS 325 - 325mg</a>
                  <a href="#">AA Theo LA - 100mg</a>
                  <a href="#">AAS 325 Enterique - 325mg - comp. ent</a>
                  <a href="#">AAS 500 - 500mg</a>
                  <a href="#">AAS 650 Enterique - 650mg</a>
                  <a href="#">AAS 81 - 81mg - comp. ent</a>
                  <a href="#">AAS Cafeine/Codeine - 375+8+15mg</a>
                  <a href="#">AAS EC - 81mg - comp. ent</a>
                  <a href="#">AAS EC - 80mg - comp. ent.</a>
                  <a href="#">AAS Faible Dose - 81mg - comp. ent.</a>
                  <a href="#">AAS X-Fort - 500mg</a>
                  <a href="#">Abacavir-Lamivudine-Zido - 300+150+300m</a>
                  <a href="#">Abbott Citalopram - 10mg</a>
                  <a href="#">Abbott Citalopram - 20mg</a>
                  <a href="#">Abbott Citalopram - 40mg</a>
                  <a href="#">Abbott Clopidogrel - 75mg</a>
                  <a href="#">Abbott Levetiracetam - 750mg</a>
                </div>
              
            </div>
            <!-- B ALPAHBET SECTION-->
            <div id="myNav2" class="overlay">
    
                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNavB()">&times;</a>
                  
                    <!-- Overlay content -->
                    <div class="overlay-content">
                      <a href="#">Services</a>
                      <a href="#">Clients</a>
                      <a href="#">Contact</a>
                    </div>
                  
            </div>
    
            <!-- NAVBAR SECTION -->
            <nav>
                <div class="toggle">
                    <i class="fa fa-bars menu" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
    
            <!-- SEARCH SECTION-->
            <div class="search-box">
                <input type="text" class="search-txt" onkeyup="Function()" placeholder="Search..." title="name">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
    
            <!-- PRESENTATION -->
            <section class="section-Title">
                <div class="row">
                    <H1>Welcome to Pharmapedia</H1>
                    <p class="text-input">
                        The #1 drug online encyclopedia. This app filters and lists all of the current used medications. Simply select one of the alphabetical letters to begin your search and then scroll for your specific drug of choice.
                    </p>
                </div>
            </section>
    
            <!-- BUTTON LAYOUT SECTION -->
            <div class="section">    
                <button class="button alphabet-button" onclick="openNav()">A</button>
                <button class="button alphabet-button" onclick="openNavB()">B</button>
                <button class="button alphabet-button">C</button>
                <button class="button alphabet-button">D</button>
                <button class="button alphabet-button">E</button>
                <button class="button alphabet-button">F</button>
                <button class="button alphabet-button" onclick="openNav()">G</button>
                <button class="button alphabet-button" onclick="openNavB()">H</button>
                <button class="button alphabet-button"><strong>I</strong></button>
                <button class="button alphabet-button">J</button>
                <button class="button alphabet-button">K</button>
                <button class="button alphabet-button">L</button>
                <button class="button alphabet-button" onclick="openNav()">M</button>
                <button class="button alphabet-button" onclick="openNavB()">N</button>
                <button class="button alphabet-button">O</button>
                <button class="button alphabet-button">P</button>
                <button class="button alphabet-button">Q</button>
                <button class="button alphabet-button">R</button>
                <button class="button alphabet-button" onclick="openNav()">S</button>
                <button class="button alphabet-button" onclick="openNavB()">T</button>
                <button class="button alphabet-button">U</button>
                <button class="button alphabet-button">V</button>
                <button class="button alphabet-button">W</button>
                <button class="button alphabet-button">X</button>
                <button class="button alphabet-button">Y</button>
                <button class="button alphabet-button">Z</button>
                    
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