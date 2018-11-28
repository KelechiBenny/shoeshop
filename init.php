<?php
ob_start();
session_start();

$url = 'http://shoeshop.ng/';

define('DIR', __DIR__);
define('URL', $url);

date_default_timezone_set('Africa/Lagos');


require __DIR__ . '/vendor/autoload.php';

// spl_autoload_register(function ($class_name) {
//     include 'controllers/'.$class_name . '.php';
// });




use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

//setting up connection for eloquent model
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'shoeshop',
    'username'  => 'root',
    'password'  => '',
    'prefix'    => ''
    
]);


$capsule->setAsGlobal();


$capsule->bootEloquent();


ob_end_flush();

