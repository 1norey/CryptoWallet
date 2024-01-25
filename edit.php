<?php
$userId = isset($_GET['id']) ? $_GET['id'] : null;

if ($userId === null) {
    exit("User ID not provided");
}

include_once 'userRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);

if(isset($_POST['editBtn'])){
    $id = $user['id']; 
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRepository->updateUser($id, $name, $age, $email, $username, $password);
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
    <title>Edit User</title>
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
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?= htmlspecialchars($user['id'] ?? '') ?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?= htmlspecialchars($user['name'] ?? '') ?>"> <br> <br>
        <input type="text" name="age"  value="<?= htmlspecialchars($user['age'] ?? '') ?>"> <br> <br>
        <input type="text" name="email"  value="<?= htmlspecialchars($user['email'] ?? '') ?>"> <br> <br>
        <input type="text" name="username"  value="<?= htmlspecialchars($user['username'] ?? '') ?>"> <br> <br>
        <input type="text" name="password"  value="<?= htmlspecialchars($user['password'] ?? '') ?>"> <br> <br>

        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
</div>
</body>
</html>
