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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        h2{
            margin-right:5px;
        }
        form {
            background-color: #45A29E;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #45A29E;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #45A29E;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #35807C;
        }
    </style>
</head>
<body>
    <h2>Pocket Free Market Coins</h2>
    <form action="addCoinController.php" method="post">
        <input type="text" name="name" placeholder="Name..."> <br><br>
        <input type="text" name="price" placeholder="Price..."> <br><br>
        <input type="text" name="last_24h" placeholder="Last_24h..."> <br><br>
        <input type="text" name="market_cap" placeholder="Market_Cap..."><br><br>
        <input type="text" name="last_7_days" placeholder="Last_7_Days..."><br><br>

        <input type="submit" name="addBtn" value="Add"><br><br>
    </form>
</body>
</html>