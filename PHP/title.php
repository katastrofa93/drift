<?php
    //*Создаем две переменные с массивом страниц и названия титула.
    //*Проводится проверка с помощью in_array, имеется $page в созданных нами переменных массивов.
    //*Если таково имеется создается новая переменная и в нее записываем значение поиска т.е. $page
    //*$page это глобальная переменная $_GET['page'], получемая из файла arrayPages.php
    
    $titles_array = array('home', 'about', 'news', 'gallery', 'contacts');
    if(in_array($page, $titles_array)){ 
        $resultTitle = $page; 
        $resultPages = $page;
    }
    
    function showBorder($pages, $page, $titles){
        //*$pages это $page, $page это $resultPages, $titles это $resultTitle
        if($pages == $page){
            echo '<title>'.$titles.'</title>';
        }    
    }
    
?>