<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/requare/requare.css">    
</head>
<body>
    <div class="modalBox">
        <div class="modalBox__window">
            <div class="modalBox__mes">
                <span class="message">
                    Здесь отображается ответ с сервера!
                </span>
            </div>
            <div class="modalBox__but">
                <button class="closeModalWindow">Закрыть</button>
            </div>
        </div>
    </div>
    <div class="box-view-image">
        <div class="box-view-image__image">
            <img src="images/1.jpg"alt="view">
        </div>
    </div>
    <header>
        <div class="container">
            <section class="header-section">
                <div class="header-section__logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                
                <nav class="header-section__navigation">
                    <ul class="navigation-ul">
                        <li>
                            <a href="index.php"
                            
                            >HOME</a> 
                        </li>
                        <li>
                            <a href=""
                            
                            >ABOUT</a> 
                        </li>
                        <li>
                            <a href=""
                            
                            >NEWS</a> 
                        </li>
                        <li>
                            <a href=""
                            
                            >GALLERY</a> 
                        </li>
                        <li>
                            <a href=""
                            
                            >CONTACTS</a> 
                        </li>
                    </ul>
                </nav>

            </section>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <section class="banner__section">
                <div class="old-drift-2000">
                    <span>OLD</span>
                    <span>DRIFT STYLE</span>
                    <span>2000</span>
                </div>
            </section>
        </div>
    </section>
    <section class="wrapper">
        <?php require 'pages/home.php'; ?>
    </section>
    <footer>
        <div class="container">
            <section class="section__footer">
                <nav class="footer-nav">
                    <ul class="footer-nav__ul">
                        <li class="footer-nav__li"><a href="index.php?page=home">HOME</a></li>
                        <li class="footer-nav__li"><a href="index.php?page=about">ABOUT</a></li>
                        <li class="footer-nav__li"><a href="index.php?page=gallery">GALLERY</a></li>
                        <li class="footer-nav__li"><a href="index.php?page=news">NEWS</a></li>
                        <li class="footer-nav__li"><a href="index.php?page=contacts">CONTACTS</a></li>
                    </ul>
                </nav>
                <div class="footer-right">
                    <h3>All rights reserved <?php echo date('Y'); ?> </h3>
                </div>
                <div class="footer-visit">
                    <span class="footer-visit__span">VISIT US IN:</span>
                    <ul class="footer-visit__ul">
                        <li class="footer-visit__li"><a href="#" class="icon-vk"></a></li>
                        <li class="footer-visit__li"><a href="#" class="icon-facebook2"></a></li>
                        <li class="footer-visit__li"><a href="#" class="icon-instagram"></a></li>
                        <li class="footer-visit__li"><a href="#" class="icon-twitter"></a></li>
                    </ul>
                </div>
            </section>
        </div>
        
    </footer>
    
    <script src="JavaScript/viewWideo.js"></script>
    <script src="JavaScript/slider.js"></script>
    <script src="JavaScript/subscribe.js"></script>
    <script src="JavaScript/viewImageGallery.js"></script>
    <script src="JavaScript/subscribe.js"></script>

   
    

    

</body>
</html>