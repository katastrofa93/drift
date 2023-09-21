<?php
    require 'connect.php';
    require 'jsonConnect.php';
    echo 'Ответ от сервера <br>';
    $email = htmlspecialchars(trim($_POST['subscribe']));
    $date = date('G:i d-m-Y');
    
    
    
    //if(!empty($email)){     
        $sel = "SELECT * FROM Subscribe WHERE Emails = '$email'";
        if($result = $connect->query($sel)){
            foreach($result as $key => $value){
            }
            if($value['Emails'] === $email){
                echo 'USER '.$email.' JUST SUBSCRIBED';
                writeOnJson($file, $connect, $emails, $fopen); //Функция записи email подписавшщегося в JSON файл
            }else{  
                $to = $email;
                $subject = 'Вы успешно подписались на рассылку';
                $message = '
                    <html>
                        <head>
                            <title>Новости</title>
                        </head>
                        <body>
                            <table>
                                <tr>
                                    <th>'.$subject.'</th>
                                </tr>
                                <tr>
                                    <td>Участник: '.$to.'</td>
                                </tr>
                                <tr>
                                    <td>Поздравляем! Теперь вы будете получать самые свежие новости с www.olddrift2000.ru</td>
                                </tr>
                            </table>
                        </body>
                    </html>
                    ';
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html;' . "\r\n";
                /***************************/
                $insi = "INSERT INTO Subscribe (Emails, TimeSubscribe) VALUES ('$email', '$date');";
                if($connect->query($insi)){
                    echo 'Your subscribe <br>';
                    writeOnJson($file, $connect, $emails, $fopen); //Функция записи email подписавшщегося в JSON файл
                    $send = mail($to, $subject, $message, $headers);
                    if($send){
                        echo 'Mail to send';
                    }else{
                        echo 'Mail not send';
                    }
                }else{
                    $connect->error;
                }

            }
        }else{
            echo $connect->error;
        }  
    /*}else{
        echo 'FIELD MAIL EMPTY';
    }*/
    
    

    
    
    
    

?>