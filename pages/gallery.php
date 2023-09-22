<?php
    require 'PHP/connect.php';
    function deb($deb){
        '<pre>'.print_r($deb).'</pre>';
    }
    
    //*Получаем елементы из базы данных в виде ASSOC
    $selCountElem = "SELECT * FROM Gallery";
    if($resultCountElem = $connect ->query($selCountElem)){
        $totalCountElem = $resultCountElem->fetch_all(MYSQLI_ASSOC);
    }
    
    //* Количество элементов, которое будет отображаться на странице
    $countImage = 9;

    //*Количество страниц
    $countPages = ceil(count($totalCountElem) / $countImage); //2
    
    //*Создаем параметр GET
    $list = $_GET['list'] ?? 1;
    
    if(!intval($list) || $list < 0){
        $list = 1;
    }
    if($list > $countPages){
        $list = $countPages;
    }
    //*Формула расчета выводимых записей
    $start = ($list - 1) * $countImage; 
    $slice = array_slice($totalCountElem, $start, $countImage); //*из 15 элементов начать с $start и показать $countImage элементов
    echo '
        <section class="gallery">
            <div class="container">
                <section class="gallery__box">
                    <div class="gallery__items">                    
        ';    
            foreach($slice as $key => $value){
                echo '
                <article class ="item">
                    <h3 class="item__head">'.$value['description'].'</h3>
                    <div class="item__picture">
                        <img src="gallery/'.$value['image'].'" alt="cars" class="item__img" >
                    </div>
                    <form class="item__buttons" method="post" action="PHP/addLike.php">
                        <button class="icon-heart" name="get_like" value="'.$value['id'].'"></button>
                        <span>'.$value['like_buttons'].'</span>
                    </form>
                </article>
                '; 
            }
            
            echo '
            </div>
                <div class="pagination">
                    <ul class="pagination__ul">
                    '; 
                        for($i = 1; $i <= $countPages; $i++){ 
                            if($list == $i){
                                echo '
                                <li class="pagination__li active"><a href="index.php?page=gallery&list='.$i.'" class="pag">'.$i.'</a></li>
                                ';
                            }else{
                                echo '
                                <li class="pagination__li"><a href="index.php?page=gallery&list='.$i.'" class="pag">'.$i.'</a></li>
                                ';
                            }
                        }
                    echo'
                    </ul>
                </div>
            </section>
        </div>
    </section>
    ';
    
                        
    
?>
