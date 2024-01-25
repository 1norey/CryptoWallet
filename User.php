<?php

class User{
    private $id;
    private $name;
    private $age;
    private $email;
    private $username;
    private $password;


    function __construct($id,$name,$age,$email,$username,$password){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
}
?>