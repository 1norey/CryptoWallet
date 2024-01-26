<?php
include_once 'userRepository.php';
include_once 'contact.php';

if(isset($_POST['submitBtn'])){
    if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $messageObj = new Contact($id, $name, $email, $message);
        $userRepository = new UserRepository();

        $userRepository->insertMessage($messageObj);
        echo "<script> alert('Your message was sent successfully!'); window.location.href='contact-us.php'; </script>";
    }
}
?>