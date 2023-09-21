<?php
    require 'connect.php';
    $id = intval($_POST['get_like']);
            
            
    if(isset($_POST['get_like'])){
        $sel = "SELECT * FROM Gallery Where id = $id";
        if($result = $connect->query($sel)){
            foreach($result as $key => $value){
                
            }
            $sqlLike = intval($value['like_buttons']);
        }
        $sqlLike++;
        $upd = "UPDATE Gallery SET like_buttons = $sqlLike WHERE id = $id";
        if($connect->query($upd)){
            echo 'Обновлено';
        }else{
            echo 'Не обновлено';
        }  
    }
    


?>