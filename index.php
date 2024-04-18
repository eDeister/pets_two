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
//    $view = new Template();
//    echo $view->render('home.html');
});