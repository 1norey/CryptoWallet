<?php
    require_once 'Database.php';
    require_once 'User.php';
    require_once 'LoginController.php';
    
    $database = new Database("localhost", "root", "", "cryptodb");
    $conn = $database->getConnection();
    
    $user = new User($conn);
    $loginController = new LoginController($user);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $loginController->attemptLogin($username, $password);
    }
    
    $database->closeConnection();
    ?>
    <?php
  if(isset($_POST['loginbtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        //validate
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once 'users.php';// <-<-<-<-<-
        $i=0;
        
        foreach($users as $user){
          if($user['username'] == $username && $user['password'] == $password){
            session_start();
      
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:home-page.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }
?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="log-in.css">
    <script src="script.js"></script>
  
</head>
<body>
    <div class="container">
        <h2>Pocket Free</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="My" onsubmit="validateForm(); return false;">
            <div class="field">
                <input type="text" id="username" placeholder="Username">
                <div class="error-message" id="usernameError"></div>
            </div>

            <div class="field">
                <input type="password" id="password" placeholder="Password">
                <div class="error-message" id="passwordError"></div>
            </div>
            <div class="field-button">
                <button type="submit" name="loginbtn">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>