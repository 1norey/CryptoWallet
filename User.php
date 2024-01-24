<?php
// include 'Database.php';

// class User {
//     private $conn;

//     public function __construct($conn) {
//         $this->conn = $conn;
//     }

//     public function authenticate($username, $password) {
//         $username = mysqli_real_escape_string($this->conn, $username);
//         $password = mysqli_real_escape_string($this->conn, $password);

//         $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//         $result = $this->conn->query($query);

//         if ($result->num_rows == 1) {
//             return $result->fetch_assoc();
//         } else {
//             return null;
//         }
//     }
// }
class User{
    private $id;
    private $name;
    private $age;
    private $email;
    private $username;
    private $password;


    function __construct($id,$name,$age,$email,$username,$password){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
}
?>