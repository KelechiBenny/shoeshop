<?php
namespace Models;

class Register extends Connection
{

    function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function registerPerson($email, $fullname, $password, $date)
    {   
        $check = "SELECT * FROM users WHERE `email` = '$email'";
        $data = $this->conn->query($check) or die("could not register" . $this->conn->error);

        if ($data->num_rows == 0) {
            $date = date('Y-m-d');
            $sql = "INSERT INTO users (`email`, `fullname`, `password`,`register_date`) VALUES ('$email', '$fullname', '$password', '$date')";

            $_SESSION['user'] = $email;

            $result = $this->conn->query($sql) or die("Could not register user ". $this->conn->error);

            //header('location: login.php');
            echo ('<script>location.href= "login.php";</script>');
        }else {
            echo '<p class="error">Email already exists in the database</p>';
        }
    }
}