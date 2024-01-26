<?php 
include_once 'Database.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new Database;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $age = $user->getAge();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $sql = "INSERT INTO users (id,name,age,email,username,password) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$age,$email,$username,$password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$username,$password){
         $conn = $this->connection;

         $sql = "UPDATE users SET name=?, age=?, email=?, username=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$surname,$email,$username,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
   function getAllMsg(){
    $conn = $this->connection;

    $sql = "SELECT * FROM contact_us";

    $statement = $conn->query($sql);
    $messages= $statement->fetchAll();

    return $messages;
}

    function getAllCoins(){
    $conn = $this->connection;

    $sql = "SELECT * FROM market_coins";

    $statement = $conn->query($sql);
    $coins= $statement->fetchAll();

    return $coins;
}

    function insertMessage($message){

    $conn = $this->connection;

    $id = $message->getId();
    $name = $message->getName();
    $email = $message->getEmail();
    $message = $message->getMessage();

    $sql = "INSERT INTO contact_us (id,name,email,message) VALUES (?,?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$id,$name,$email,$message]);

    echo "<script> alert('Your message was sent successfuly!'); </script>";

}

}
?>