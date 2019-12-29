<?php
    if(isset($_GET['accept-cookies'])){
        setcookie('accept-cookies', 'true', time() + 31556925);
        header('Location: ./');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A womans's formula</title>
        
        <!-- ==================== EXTERNAL SOURCES =============================== -->
        <script src="https://use.fontawesome.com/dc8cb5d611.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <!-- ==================== JS INTERNAL  =============================== -->
        <script type="text/javascript" src="../../js/reponsive-menu.js"></script>
        <script type="text/javascript" src="../../js/cookie-banner.js"></script>

        <!-- ==================== CSS INTERNAL =============================== -->
        <!-- NAV-MENU STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../css/nav-menu.css"/>
        <!-- COOKIE BANNER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../css/cookie-banner.css">
         <!-- GENERAL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../css/GeneralStylesheet.css">
        <!-- MEDIA-QUERIES -->
        <link rel="stylesheet" type="text/css" href="../../css/media-queries.css">
        <!-- CARDS (MEDICATION DESCRIPTION) -->
        <link rel="stylesheet" type="text/css" href="../../css/card-description.css">
        <!-- FOOTER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">

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
                    <li><a href="../../">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="container">
                <h1>A woman's formula</h1>
                    <br>
                    <div class="card">
                        <h3>Common Uses</h3>
                        <p>This medication is typically used as a vitamin and mineral supplement.</p>
                        <br>
                        <h3>Price</h3>
                        <p>This medication's price varies between 10$ & 30$.</p>
                    </div>
                    
                    <div class="card">
                        <h3>Instructions</h3>
                        <p>This medication should be taken with a meal and a large glass of water.</p>
                        <br>
                        <h3>Storage</h3>
                        <p>As with most medications, this product should be stored at room temperature. Store it in a secure location where it will not be exposed to excessive heat, moisture or direct sunlight. Make sure that any leftover portion is disposed of safely.</p>
                    </div>

                    <div class="card">
                        <h3>Side effects</h3>
                        <p>In addition to its desired action, this medication may cause some side effects, notably: <br>
                            <br>
                            &#8226; it may cause constipation -- to prevent this, drink plenty of water or juice, and eat more dietary fibre.<br>
                            <br>
                            Each person may react differently to a treatment. If you think this medication may be causing side effects (including those described here, or others), talk to your doctor or pharmacist. He or she can help you to determine whether or not the medication is the source of the problem.</p>
                    </div>
                    
                    <div class="card">
                        <h3>Additionnal Information</h3>
                        <p>This medication may interact with other medications or supplements, sometimes significantly. Many interactions, however, may be dealt with by a dosage adjustment or a change in medication schedule. Check with your pharmacist before using this medication in combination with any other medications (including non-prescription products), vitamins or natural products.</p>
                    </div>

                    <div class="card">
                        <h3>General Notes</h3>
                        <p>When meeting with any health professional, it is important for you to share the following information:<br>
                            <br>
                                &#8226; Your medical history and allergies (medication, food, or other);
                            <br>
                            <br>
                                &#8226; If you smoke, are pregnant, are planning a pregnancy, or are breastfeeding;
                            <br>
                            <br>
                                &#8226; The names of all the medications you take, whether you take them regularly or once in a while, including over-the-counter medications, vitamins, and natural health products.<br>
                            <br>
                            It is also strongly recommended that you keep an up-to-date list of all the medications you take and carry it with you at all times. This could be useful if you have to see a health professional or need emergency care.
                        </p>
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