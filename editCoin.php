<?php
$coinId = isset($_GET['id']) ? $_GET['id'] : null;

if ($coinId === null) {
    exit("Coin ID not provided");
}

include_once 'userRepository.php';

$userRepository = new UserRepository();
$coin = $userRepository->getCoinById($coinId);

if(isset($_POST['editBtn'])){
    $id = $coin['ID']; 
    $name = $_POST['name'];
    $price = $_POST['price'];
    $last_24h = $_POST['last_24h'];
    $market_cap = $_POST['market_cap'];
    $last_7_days = $_POST['last_7_days'];

    $userRepository->updateCoin($id, $name, $price, $last_24h, $market_cap, $last_7_days);
    header("location:dashboard.php");
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Coin</title>
    <style>
    body {
        display:flex;
        justify-content:center;
        font-family: Arial, sans-serif;
        background-color: #333;
        color: #919191;
        margin: 0;
        padding: 0;
    }

    h3 {
        color: #45A29E;
    }

    form {
        margin-top: 20px;
    }

    input[type="text"] {
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #45A29E;
        border-radius: 4px;
        background-color: #333;
        color: #919191;
    }

    input[type="submit"] {
        background-color: #45A29E;
        color: #333;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #45A29E;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #45A29E;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #45A29E;
        color: #333;
    }

    tr:nth-child(odd) {
        background-color: #919191;
        color: #333;
    }

    a {
        color: #333;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div>
    <h3>Edit Coin</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?= htmlspecialchars($coin['ID'] ?? '') ?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?= htmlspecialchars($coin['Name'] ?? '') ?>"> <br> <br>
        <input type="text" name="price"  value="<?= htmlspecialchars($coin['Price'] ?? '') ?>"> <br> <br>
        <input type="text" name="last_24h"  value="<?= htmlspecialchars($coin['Last_24h'] ?? '') ?>"> <br> <br>
        <input type="text" name="market_cap"  value="<?= htmlspecialchars($coin['Market_Cap'] ?? '') ?>"> <br> <br>
        <input type="text" name="last_7_days"  value="<?= htmlspecialchars($coin['Last_7_Days'] ?? '') ?>"> <br> <br>

        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
</div>
</body>
</html>
