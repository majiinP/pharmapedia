<?php
    if(isset($_GET['accept-cookies'])){
        setcookie('accept-cookies', 'true', time() + 31556925);
        header('Location: ./contact.php');
    }

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $mailTo = "68.pierre.pescaru@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: contact.php?mailsend");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        
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
        <!-- CONTACT FORM STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="../css/contact-form.css">
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
                    <li><a href="../pages/about.php">About</a></li>
                    <li><a href="../pages/legal.php">Legal</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="container">
            <div class="contact-section">
                <h1>Contact Us</h1>
                <form class="contact-form" action="contact.php" method="post">
                    <input type="text" name="name" class="contact-form-text" placeholder="Your name" required>
                    <input type="email" name="mail" class="contact-form-text" placeholder="Your email" required>
                    <input type="text" name="phone" class="contact-form-text" placeholder="Your phone" required>
                    <textarea name="message" class="contact-form-text" placeholder="Your message" required></textarea>
                    <input type="Submit" name="submit" class="contact-form-button" value="Send">
                </form>
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