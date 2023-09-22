<?php
    require 'connect.php';
    $email = htmlentities(trim($_POST['subscribe']));
    $time = date(DATE_RFC822);
    class Subscribe{
        public $email;
        public $time;
        public $connect;
        public $subject;
        public $message;
        public $headers;
        function __construct($email, $time, $connect){
            $this->email = $email;
            $this->time = $time;
            $this->connect = $connect;
        }
        function message($request){
            $message = array(
                $request
            );
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        function insert(){
            $insert = "INSERT INTO Subscribe (Emails, TimeSubscribe) VALUES('$this->email', '$this->time')";
            if($this->connect->query($insert)){
                $mail = mail($this->email, $this->subject, $this->message, $this->headers);
                if($mail){
                    $this->message('Спасибо за подписку. На ваш почтовый ящик отправлено письмо');
                }else{
                    $this->message('Письмо не отправлено');
                }
                
            }else{
                $this->message($this->connect->error);
            }
        }
        function compare(){
            $select = "SELECT * FROM Subscribe WHERE Emails = '$this->email'";
            if($result = $this->connect->query($select)){
                foreach($result as $key=>$value){}
                if($this->email != ''){
                    if($this->email != $value['Emails']){
                        $this->insert();
                    }else{
                        $this->message('Пользователь '.$this->email.' подписан');
                    }
                }else{
                    $this->message('Поле email должно быть заполнено');
                }
            }else{
                $this->message($this->connect->error);
            }
        }
    }
    $subscribe = new Subscribe($email, $time, $connect);
    $subscribe->subject = 'Спасибо за подписку';
    $subscribe->message = 'Здесь будет разметка';
    $subscribe->headers = 'Content-type: text/html; charset=iso-8859-1';
    $subscribe->compare();
?>