<?php
namespace Models;

class Login extends Connection
{
   public function __construct()
   {
       $this->conn = $this->getConnection();
   }

   public function login($email, $password)
   {
        $sql = "SELECT email, password FROM users WHERE `email` = '$email' and `password` = '$password'";

        $result = $this->conn->query($sql);
        var_dump($sql);
        die();
        if ($result->num_rows == 1) {
                //$_SESSION['user'] = $email;
            var_dump($result);
            die();
            echo "<h1>Login Successfull</h1>";
        }else {
            echo '<p class="error"> Incorrect Email or Password</p>';
        }
    }   

}