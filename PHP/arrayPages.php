<?php

    if(isset($_GET['page'])){
        $array_pages = array('home', 'about', 'news', 'gallery', 'contacts');
        if(in_array($_GET['page'], $array_pages)){
            $page = $_GET['page'];
        }else{
            $page = 'home'; //*$page вот та самая переменная, которая и сравнивается с массивом в файле title.php
        }
    }else{
        $page = 'home';
    }
?>