<?php
$emails = [];
$file = '../emails.json';
$fopen = fopen($file, 'w');
function writeOnJson($pathFile, $conToDB, $arrayMails, $fileOpens){
    if(is_file($pathFile)){
        $sel = "SELECT * FROM Subscribe";
        if($result = $conToDB->query($sel)){
            foreach($result as $key => $value){
                $arrayMails[$value['id']] = $value['Emails']; 
            }
            
            /*$emails = 
                
                    [1] => 'qwerty',
                    [2] => 'uiop'
                
            */
            //print_r($arrayMails);
            $encode = json_encode($arrayMails);
            fwrite($fileOpens, $encode);
        }
    }
}


?>