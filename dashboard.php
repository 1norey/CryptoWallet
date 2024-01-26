<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #919191;
            margin: 0;
            padding: 0;
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
        .custom-button {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        background-color: #45A29E;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .custom-button:hover {
        background-color: #35807C; 
    }
    </style>
</head>
<body>
    
<h1>Users</h1>
    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>AGE</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                <td>{$user['id']}</td>
                <td>{$user['name']}</td>
                <td>{$user['age']}</td>
                <td>{$user['email']}</td>
                <td>{$user['username']}</td>
                <td>{$user['password']}</td>
                <td><a href='edit.php?id={$user['id']}'>Edit</a></td>
                <td><a href='delete.php?id={$user['id']}'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
    <br><br>
    <h1>Contac Us</h1>
    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>EMAIL</th>
                 <th>MESSAGE</th>
                 
             </tr>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $messages = $userRepository->getAllMsg();

             foreach($messages as $message){
                echo 
                "
                <tr>
                <td>{$message['ID']}</td>
                <td>{$message['Name']}</td>
                <td>{$message['Email']}</td>
                <td>{$message['Message']}</td>
                </tr>
                ";
             }
             ?>
    </table>
    <br><br>
    <h1>Market Coins</h1>
    <a href="addCoin.php" class="custom-button">Add New Coin</a>

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>PRICE</th>
                 <th>LAST 24H</th>
                 <th>MARKET CAP</th>
                 <th>LAST 7 DAYS</th>
                 <th>Edit</th>
                 <th>Delete</th>
               
             </tr>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $coins = $userRepository->getAllCoins();

             foreach($coins as $coin){
                echo 
                "
                <tr>
                <td>{$coin['ID']}</td>
                <td>{$coin['Name']}</td>
                <td>€{$coin['Price']}</td>
                <td>{$coin['Last_24h']}%</td>
                <td>€{$coin['Market_Cap']}</td>
                <td>{$coin['Last_7_Days']}</td>
                <td><a href='editCoin.php?id={$coin['ID']}'>Edit</a></td>
                <td><a href='deleteCoin.php?id={$coin['ID']}'>Delete</a></td>
                </tr>
                ";
             }
             ?>
    </table>
    <br><br>
</body>
</html>