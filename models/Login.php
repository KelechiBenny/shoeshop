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
        $sql = "SELECT * FROM users WHERE `email` = '$email' and `password` = '$password'";

        $result = $this->conn->query($sql);

        if (!$result) {
            die('Could not login '. $this->conn->error);
        }else {
            if ($result->num_rows == 1) {
                $_SESSION['user'] = $email;
                echo ('<script>location.href= "index.php";</script>');
            }else {
                echo '<p class="error"> Incorrect Email or Password</p>';
            }
        }
   }

}