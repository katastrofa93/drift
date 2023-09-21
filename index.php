<?php
    session_start();
    require 'PHP/arrayPages.php';  
    require 'PHP/tab.php';
    require 'PHP/title.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/requare/requare.css">
    <?php 
        showBorder($page, $resultTitle, $resultPages); //*<title> $resultTitle </title>
    ?>
    
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
                            <a href="index.php?page=home"
                            <?php
                               tab($page, 'home');
                            ?>
                            >HOME</a> 
                        </li>
                        <li>
                            <a href="index.php?page=about"
                            <?php
                                tab($page, 'about');
                            ?>
                            >ABOUT</a> 
                        </li>
                        <li>
                            <a href="index.php?page=news"
                            <?php
                                tab($page, 'news');
                            ?>
                            >NEWS</a> 
                        </li>
                        <li>
                            <a href="index.php?page=gallery"
                            <?php
                                tab($page, 'gallery');
                            ?>
                            >GALLERY</a> 
                        </li>
                        <li>
                            <a href="index.php?page=contacts"
                            <?php
                                tab($page, 'contacts');
                            ?>
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
        <?php require $page . '.php'; ?>
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
    
    <script src="JavaScript/video.js"></script>
    <script src="JavaScript/slider.js"></script>
    <script src="JavaScript/subscribe.js"></script>
    <script>
        /*const gallery = document.querySelector('.gallery');
        const pag_li = document.querySelectorAll('.pag');
        const doc = document.documentElement;
        console.log(doc);
        for(let i = 0; i < pag_li.length; i++){
            pag_li[i].addEventListener('click', async (e)=>{
                //e.preventDefault();
                const url = pag_li[i].getAttribute('href');
                fetch(url, {
                    method: 'post'
                }).then(function(response) {
                if(response.ok) {
                    response.json().then(function(json) {
                    products = json;
                    initialize();
                    });
                } else {
                    console.log('Network request for products.json failed with response ' + response.status + ': ' + response.statusText);
                }
                });
                
                
                
            });
        }
        */
       
    </script>

    <script>
        const box = document.querySelector('.box-view-image');
        const item = document.querySelector('.box-view-image__image');
        const view = document.querySelector('.box-view-image__image > img');
        const img = document.querySelectorAll('.item__img');
        
        img.forEach(item => item.addEventListener('click', (e)=>{
            let getAttr = item.getAttribute('src');
            box.classList.remove('box-view-image');
            box.classList.add('box-view-image_active');
            view.setAttribute('src', getAttr);
        }))
        box.addEventListener('click', ()=>{
            box.classList.remove('box-view-image_active');
            box.classList.add('box-view-image');
        })

        

    </script>
    

    

</body>
</html>