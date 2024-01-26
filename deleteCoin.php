
<?php

$coinId = $_GET['id'];
include_once 'userRepository.php';



$userRepository = new UserRepository();

$userRepository->deleteCoin($coinId);

header("location:dashboard.php");


?>