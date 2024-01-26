<?php
include_once 'userRepository.php';
include_once 'Coin.php';

if(isset($_POST['addBtn'])){
    if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['last_24h']) || empty($_POST['market_cap']) || empty($_POST['last_7_days'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $price = $_POST['price'];
        $last_24h = $_POST['last_24h'];
        $market_cap = $_POST['market_cap'];
        $last_7_days = $_POST['last_7_days'];

        $coin  = new Coin($name,$price,$last_24h,$market_cap,$last_7_days);
        $userRepository = new UserRepository();

        $userRepository->insertCoin($coin);
        header("Location: dashboard.php");


    }
}



?>