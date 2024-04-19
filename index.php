<?php

//Set error reporting to true
ini_set('error_reporting',1);
error_reporting(E_ALL);

//Require autoload.php
require_once('vendor/autoload.php');

//Instantiate f3 base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Route to order form
$f3->route('GET|POST /order', function() {
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

//Run fat free
$f3->run();