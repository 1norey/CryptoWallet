<?php

class Contact{
    private $id;
    private $name;
    private $email;
    private $message;

    function __construct($name,$email,$message){
    
            $this->name = $name;
            $this->email = $email;
            $this->message = $message;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getMessage(){
        return $this->message;
    }

}

?>