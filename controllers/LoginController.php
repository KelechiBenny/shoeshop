<?php
namespace Controllers;

use Models\Login;

class LoginController
{
    public $email;
    public $password;

    public function loginShopper()
    {
        if (isset($_POST['login'])) {
            $this->email = htmlentities($_POST['email']);
            $this->password = md5(htmlentities($_POST['password']));

            $error_array = array();

            if (empty($this->email)) {
                $error_array[0] = '<p class="error> Email field should not be empty</p>';
            }

            if (empty($this->password)) {
                $error_array[1] = '<p class="error"> Password field should not be empty</p>';
            }

            if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == false) {
                $error_array[2] = '<p class="error"> Email should be a valid email</p>';
            }

            if ($error_array != 0) {
                echo implode ($error_array);
            }else {
                $this->loginUser($this->email, $this->password);
            }
        }
    }

    public function loginUser($email, $password)
    {
        $models = new Models;
        $models->login($email, $password);
    }
}