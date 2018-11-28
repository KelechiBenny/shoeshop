<?php
namespace Controllers;

use Models\Register;

class RegisterController
{
    public $email;
    public $fullname;
    public $password;
    public $phone;
    public $address;
    public $date;

    public function Register()
    {
        if (isset($_POST['register'])) {
            $this->email = htmlentities($_POST['email']);
            $this->fullname = htmlentities($_POST['full_name']);
            $this->password = md5(htmlentities($_POST['password']));
            $this->phone = intval($_POST['phone']);
            $this->address = htmlentities($_POST['address']);
            
            $error_array = [];

            if (empty($this->email)) {
                $error_array[0] = '<p class="error"> Email field should not be empty</p>';
            }

            if (empty($this->fullname)) {
                $error_array[1] = '<p class="error"> Full name field should not be empty </p>';
            }

            if (empty($this->password)) {
                $error_array[2] = '<p class="error"> Password field should not empty</p>';
            }

            if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == false) {
                $error_array[3] = '<p class="error"> Email is not a valid email </p>';
            }

            if (is_numeric($this->fullname)) {
                $error_array[4] = '<p class="error"> Full name should not contain numbers</p>';
            }

            if (!is_numeric($this->phone)) {
                $error_array[5] = '<p class="error"> Mobile Phone field should include digits only.</p>';
            }

            if (count($error_array) != 0 ) {
                echo implode($error_array);
            }else {
                $this->registerUser($this->email, $this->fullname, $this->password, $this->date);
            }
        }
    }

    public function registerUser($email, $fullname, $password, $date) 
    {
        $models = new Register;

        $register = $models->registerPerson($email, $fullname, $password, $date);
    }
}