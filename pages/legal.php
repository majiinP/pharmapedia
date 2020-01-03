<?php
    if(isset($_GET['accept-cookies'])){
        setcookie('accept-cookies', 'true', time() + 31556925);
        header('Location: ./legal.php');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Legal</title>
        
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
                    <li><a href="../pages/about.php">About</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="container">
                
                <h1>Legal</h1>
                <br>
                <div class="nav-cards">
                <h2>Privacy Policy</h2>
                <br>
                <p>Your privacy is critically important to us.</p>
                <br>
                <p>It is Pescaru Softwares's policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to this app (hereinafter, "us", "we", or this app). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
                <br>
                <p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>
                <br>    
                <h3>- Website Visitors</h3>
                <p>Like most website operators, Pescaru Softwares collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Pescaru Softwares's purpose in collecting non-personally identifying information is to better understand how Pescaru Softwares's visitors use its website. Pescaru Softwares only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>
                <br>    
                <h3>- Gathering of Personally-Identifying Information</h3>
                <p>Certain visitors to Pescaru Softwares's websites choose to interact with Pescaru Softwares in ways that require Pescaru Softwares to gather personally-identifying information. The amount and type of information that Pescaru Softwares gathers depends on the nature of the interaction.</p>
                <br>   
                <h3>- Security</h3>
                <p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
                <br>    
                <h3>- Advertisements</h3>
                <p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Pescaru Softwares and does not cover the use of cookies by any advertisers.</p>
                <br>    
                <h3>- Links To External Sites</h3>
                <p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit. We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>
                <br>    
                <h3>- This app uses Google AdWords for remarketing</h3>
                <p>This app uses the remarketing services to advertise on third party websites (including Google) to previous visitors to our site. It could mean that we advertise to previous visitors who haven't completed a task on our site, for example using the contact form to make an enquiry. This could be in the form of an advertisement on the Google search results page, or a site in the Google Display Network. Third-party vendors, including Google, use cookies to serve ads based on someone's past visits. Of course, any data collected will be used in accordance with our own privacy policy and Google's privacy policy. You can set preferences for how Google advertises to you using the Google Ad Preferences page, and if you want to you can opt out of interest-based advertising entirely by cookie settings or permanently using a browser plugin.</p>
                <br>    
                <h3>- Protection of Certain Personally-Identifying Information</h3>
                <p>Pescaru Softwares discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Pescaru Softwares's behalf or to provide services available at Pescaru Softwares's website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Pescaru Softwares's website, you consent to the transfer of such information to them. Pescaru Softwares will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Pescaru Softwares discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when Pescaru Softwares believes in good faith that disclosure is reasonably necessary to protect the property or rights of Pescaru Softwares, third parties or the public at large.</p>
                <br>    
                <p>If you are a registered user of this app and have supplied your email address, Pescaru Softwares may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what's going on with Pescaru Softwares and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Pescaru Softwares takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>
                <br>    
                <h3>- Aggregated Statistics</h3>
                <p>Pescaru Softwares may collect statistics about the behavior of visitors to its website. Pescaru Softwares may display this information publicly or provide it to others. However, Pescaru Softwares does not disclose your personally-identifying information.</p>
                <br>    
                <h3>- Affiliate Disclosure</h3>
                <p>This site uses affiliate links and does earn a commission from certain links. This does not affect your purchases or the price you may pay.<p>
                <br>   
                <h3>- Cookies</h3>
                <p>To enrich and perfect your online experience, Pescaru Softwares uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
                <br>
                <p>A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. Pescaru Softwares uses cookies to help Pescaru Softwares identify and track visitors, their usage of this app, and their website access preferences. Pescaru Softwares visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Pescaru Softwares's websites, with the drawback that certain features of Pescaru Softwares's websites may not function properly without the aid of cookies.</p>
                <br>    
                <p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to Pescaru Softwares's use of cookies.</p>
                <br>    
                <h3>Privacy Policy Changes</h3>
                <p>Although most changes are likely to be minor, Pescaru Softwares may change its Privacy Policy from time to time, and in Pescaru Softwares's sole discretion. Pescaru Softwares encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>
                <br>    
                <h3>- Credit & Contact Information</h3>
                <p>This privacy policy was created at termsandconditionstemplate.com If you have any questions about this Privacy Policy, please contact us via or phone.</p>

                </div>

                <div class="nav-cards">
                <h2>End-User License Agreement (EULA) of Pharmapendium</h2>
                <br>
                <p>This End-User License Agreement ("EULA") is a legal agreement between you and Pescaru Softwares</p>
                <br>
                <p>This EULA agreement governs your acquisition and use of our Pharmapendium software ("Software") directly from Pescaru Softwares or indirectly through a Pescaru Softwares authorized reseller or distributor (a "Reseller").</p>
                <br>
                <p>Please read this EULA agreement carefully before completing the installation process and using the Pharmapendium software. It provides a license to use the Pharmapendium software and contains warranty information and liability disclaimers.</p>
                <br>
                <p>If you register for a free trial of the Pharmapendium software, this EULA agreement will also govern that trial. By clicking "accept" or installing and/or using the Pharmapendium software, you are confirming your acceptance of the Software and agreeing to become bound by the terms of this EULA agreement.</p>
                <br>
                <p>If you are entering into this EULA agreement on behalf of a company or other legal entity, you represent that you have the authority to bind such entity and its affiliates to these terms and conditions. If you do not have such authority or if you do not agree with the terms and conditions of this EULA agreement, do not install or use the Software, and you must not accept this EULA agreement.</p>
                <br>
                <p>This EULA agreement shall apply only to the Software supplied by Pescaru Softwares herewith regardless of whether other software is referred to or described herein. The terms also apply to any Pescaru Softwares updates, supplements, Internet-based services, and support services for the Software, unless other terms accompany those items on delivery. If so, those terms apply. This EULA was created by EULA Template for Pharmapendium.</p>
                <br>
                <h3>License Grant</h3>
                <p>Pescaru Softwares hereby grants you a personal, non-transferable, non-exclusive licence to use the Pharmapendium software on your devices in accordance with the terms of this EULA agreement.</p>
                <br>
                <p>You are permitted to load the Pharmapendium software (for example a PC, laptop, mobile or tablet) under your control. You are responsible for ensuring your device meets the minimum requirements of the Pharmapendium software.</p>
                <br>
                <p>You are not permitted to:
                <br>
                <br>
                &#8226; Edit, alter, modify, adapt, translate or otherwise change the whole or any part of the Software nor permit the whole or any part of the Software to be combined with or become incorporated in any other software, nor decompile, disassemble or reverse engineer the Software or attempt to do any such things;
                <br>
                <br>
                &#8226; Reproduce, copy, distribute, resell or otherwise use the Software for any commercial purpose. Allow any third party to use the Software on behalf of or for the benefit of any third party;
                <br>
                <br>
                &#8226; Use the Software in any way which breaches any applicable local, national or international law;
                <br>
                <br>
                &#8226; Use the Software for any purpose that Pescaru Softwares considers is a breach of this EULA agreement.</p>
                <br>
                <h3>Intellectual Property and Ownership</h3>
                <p>Pescaru Softwares shall at all times retain ownership of the Software as originally downloaded by you and all subsequent downloads of the Software by you. The Software (and the copyright, and other intellectual property rights of whatever nature in the Software, including any modifications made thereto) are and shall remain the property of Pescaru Softwares.</p>
                <br>
                <p>Pescaru Softwares reserves the right to grant licences to use the Software to third parties.</p>
                <br>
                <h3>Termination</h3>
                <p>This EULA agreement is effective from the date you first use the Software and shall continue until terminated. You may terminate it at any time upon written notice to Pescaru Softwares.</p>
                <br>
                <p>It will also terminate immediately if you fail to comply with any term of this EULA agreement. Upon such termination, the licenses granted by this EULA agreement will immediately terminate and you agree to stop all access and use of the Software. The provisions that by their nature continue and survive will survive any termination of this EULA agreement.</p>
                <br>
                <h3>Governing Law</h3>
                <p>This EULA agreement, and any dispute arising out of or in connection with this EULA agreement, shall be governed by and construed in accordance with the laws of Canada.</p>
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