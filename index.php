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
        <title>Pharmapendium</title>

        <!-- ==================== FAVICON =============================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

         <!-- ==================== EXTERNAL SOURCES =============================== -->
         <script src="https://use.fontawesome.com/dc8cb5d611.js"></script>
         <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

        <!-- ==================== JS INTERNAL  =============================== -->
        <script type="text/javascript" src="../js/medication-appear.js"></script>
        <script type="text/javascript" src="../js/reponsive-menu.js"></script>
        <script type="text/javascript" src="../js/cookie-banner.js"></script>

        <!-- ==================== CSS INTERNAL =============================== -->
        <!-- NAV-MENU STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/nav-menu.css"/>
        <!-- COOKIE BANNER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/cookie-banner.css">
        <!-- SEARCHBAR STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/SearchBar.css">
        <!-- BUTTONS STYLE -->
        <link rel="stylesheet" type="text/css" href="../css/buttons.css">
         <!-- OVERLAY STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/Overlay.css">
         <!-- GENERAL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/GeneralStylesheet.css">
        <!-- FOOTER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
         <!-- MEDIA-QUERIES -->
        <link rel="stylesheet" type="text/css" href="../css/media-queries.css">

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
                  <a href="pages/drug_list_description/a/A_C_And-C_8-tablet-325_8_15mg.php">A. C. and C. 8 - 325+8+15mg</a>
                  <a href="pages/drug_list_description/a/A_C_and-C-8-375_8_15mg_tablet.php">A. C. AND C. 8, 375+8+15MG</a>
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
                  <a href="#">Abbott Levetiracetam - 500mg</a>
                  <a href="#">Abbott Levetiracetam - 250mg</a>
                  <a href="#">Abbott Olanzapine ODT - 5mg - desint. tab.</a>
                  <a href="#">Abbott Olanzapine ODT - 10mg - desint. tab.</a>
                  <a href="#">Abbott Olanzapine ODT - 15mg - desint. tab</a>
                  <a href="#">Abbott Olanzapine ODT - 20mg - desint. tab.</a>
                  <a href="#">Abbott Pantoprazole - 20mg - enteric tab.</a>
                  <a href="#">Abbott Pantoprazole - 40mg - enteric tab.</a>
                  <a href="#">Abbott Quetiapine - 25mg - tablet</a>
                  <a href="#">Abbott Quetiapine - 100mg - tablet</a>
                </div>
              
            </div>
            <!-- B ALPAHBET SECTION-->
            <div id="myNav2" class="overlay">
    
                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNavB()">&times;</a>
                  
                    <!-- Overlay content -->
                    <div class="overlay-content">
                      <a href="#">B +C 600 Stress tablet</a>
                      <a href="#">B 100 Complex la-tablet</a>
                      <a href="#">B 50 Complex +Lipotr tablet</a>
                      <a href="#">B 50 Complex tablet</a>
                      <a href="#">B 75 Complex tablet</a>
                      <a href="#">B Complex capsule</a>
                      <a href="#">B Complex Plus C 500 tablet</a>
                      <a href="#">B Complex tablet</a>
                      <a href="#">B Complex With C chewable tab</a>
                      <a href="#">B Compound +Vit C capsule</a>
                      <a href="#">B Compound 100 la-tablet</a>
                      <a href="#">B Plex Complex tablet</a>
                      <a href="#">B Stress P.M. Vit C +Min capsule</a>
                      <a href="#">B50 capsule</a>
                      <a href="#">B6 B12 And Folic Acid capsule</a>
                      <a href="#">B75 High Potency tablet</a>
                      <a href="#">Baby Orajel Nighttime buccal gel 10%</a>
                      <a href="#">Bacimyxin ointment 10,000+500iu</a>
                      <a href="#">Backup Plan Onestep tablet 1.5mg</a>
                      <a href="#">Baclofen tablet 20mg</a>
                      <a href="#">Balance X tablet</a>
                      <a href="#">Balanced B 50 B Complex la-tablet</a>
                      <a href="#">Balanced B Complex capsule</a>
                      <a href="#">Balanced B50 Complex capsule</a>
                      <a href="#">Balminil DM E syrup 15+100mg/5ml</a>
                      <a href="#">Balminil DM syrup 15mg/5ml</a>
                      <a href="#">Balminil Nasal Decongest nasal spray 0.1%</a>
                      <a href="#">Banzel tablet 100mg</a>
                      <a href="#">Baqsimi nasal powder 3mg</a>
                      <a href="#">Bar Morphine SR 12h-tablet 200mg</a>
                      <a href="#">Baraclude tablet 0.5mg</a>
                    </div>
                  
            </div>
            <!-- C ALPAHBET SECTION-->
            <div id="myNav3" class="overlay">
    
                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNavC()">&times;</a>
                  
                    <!-- Overlay content -->
                    <div class="overlay-content">
                      <a href="#">B +C 600 Stress tablet</a>
                      <a href="#">B 100 Complex la-tablet</a>
                      <a href="#">B 50 Complex +Lipotr tablet</a>
                      <a href="#">B 50 Complex tablet</a>
                      <a href="#">B 75 Complex tablet</a>
                      <a href="#">B Complex capsule</a>
                      <a href="#">B Complex Plus C 500 tablet</a>
                      <a href="#">B Complex tablet</a>
                      <a href="#">B Complex With C chewable tab</a>
                      <a href="#">B Compound +Vit C capsule</a>
                      <a href="#">B Compound 100 la-tablet</a>
                      <a href="#">B Plex Complex tablet</a>
                      <a href="#">B Stress P.M. Vit C +Min capsule</a>
                      <a href="#">B50 capsule</a>
                      <a href="#">B6 B12 And Folic Acid capsule</a>
                      <a href="#">B75 High Potency tablet</a>
                      <a href="#">Baby Orajel Nighttime buccal gel 10%</a>
                      <a href="#">Bacimyxin ointment 10,000+500iu</a>
                      <a href="#">Backup Plan Onestep tablet 1.5mg</a>
                      <a href="#">Baclofen tablet 20mg</a>
                      <a href="#">Balance X tablet</a>
                    </div>
                  
            </div>
            <!-- D ALPAHBET SECTION-->
            <div id="myNav4" class="overlay">
    
                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNavD()">&times;</a>
                  
                    <!-- Overlay content -->
                    <div class="overlay-content">
                      <a href="#">B +C 600 Stress tablet</a>
                      <a href="#">B 100 Complex la-tablet</a>
                      <a href="#">B 50 Complex +Lipotr tablet</a>
                      <a href="#">B 50 Complex tablet</a>
                      <a href="#">B 75 Complex tablet</a>
                      <a href="#">B Complex capsule</a>
                      <a href="#">B Complex Plus C 500 tablet</a>
                      <a href="#">B Complex tablet</a>
                      <a href="#">B Complex With C chewable tab</a>
                      <a href="#">B Compound +Vit C capsule</a>
                      <a href="#">B Compound 100 la-tablet</a>
                      <a href="#">B Plex Complex tablet</a>
                      <a href="#">B Stress P.M. Vit C +Min capsule</a>
                      <a href="#">B50 capsule</a>
                      <a href="#">B6 B12 And Folic Acid capsule</a>
                      <a href="#">B75 High Potency tablet</a>
                      <a href="#">Baby Orajel Nighttime buccal gel 10%</a>
                      <a href="#">Bacimyxin ointment 10,000+500iu</a>
                      <a href="#">Backup Plan Onestep tablet 1.5mg</a>
                      <a href="#">Baclofen tablet 20mg</a>
                      <a href="#">Balance X tablet</a>
                    </div>
                  
            </div>
    
            <!-- NAVBAR SECTION -->
            <nav>
                <div class="toggle">
                    <i class="fa fa-bars menu" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="pages/about.php">About</a></li>
                    <li><a href="pages/legal.php">Legal</a></li>
                    <li><a href="pages/contact.php">Contact</a></li>
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
                    <H1>Welcome to Pharmapendium</H1>
                    <p class="text-input">
                        The #1 drug online encyclopedic compendium. This app filters and lists all of the current used medications. Simply select one of the alphabetical letters to begin your search and then scroll for your specific drug of choice.
                    </p>
                </div>
            </section>
    
            <!-- BUTTON LAYOUT SECTION -->
            <div class="section">    
                <button class="button alphabet-button" onclick="openNav()">A</button>
                <button class="button alphabet-button" onclick="openNavB()">B</button>
                <button class="button alphabet-button" onclick="openNavC()">C</button>
                <button class="button alphabet-button" onclick="openNavD()">D</button>
                <button class="button alphabet-button">E</button>
                <button class="button alphabet-button">F</button>
                <button class="button alphabet-button">G</button>
                <button class="button alphabet-button">H</button>
                <button class="button alphabet-button"><strong>I</strong></button>
                <button class="button alphabet-button">J</button>
                <button class="button alphabet-button">K</button>
                <button class="button alphabet-button">L</button>
                <button class="button alphabet-button">M</button>
                <button class="button alphabet-button">N</button>
                <button class="button alphabet-button">O</button>
                <button class="button alphabet-button">P</button>
                <button class="button alphabet-button">Q</button>
                <button class="button alphabet-button">R</button>
                <button class="button alphabet-button">S</button>
                <button class="button alphabet-button">T</button>
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