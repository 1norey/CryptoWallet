<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['email']) ||
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);

        $user  = new User($id,$name,$age,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}



?>