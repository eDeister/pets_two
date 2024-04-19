<?php

//Set error reporting to true, require autoload, and start session
ini_set('error_reporting',1);
error_reporting(E_ALL);
session_start();
require_once('vendor/autoload.php');

//Instantiate f3 base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Route to order form
$f3->route('GET|POST /order', function($f3) {

    //Check if the form was posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Get data
        $color = $_POST['color'];
        $pet = $_POST['type'];

        //Validate the data
        if (!isset($_POST['color']) || !isset($_POST['type'])) {
            echo 'Please enter a pet type.';
            echo var_dump($_POST);
        } else {
            //Data is valid
            $f3->set('SESSION.color', $color);
            $f3->set('SESSION.type', $pet);
            $f3->reroute('summary');
        }
    } else {
        echo 'get method';
    }

    $view = new Template();
    echo $view->render('views/pet-order.html');
});

$f3->route('GET /summary', function() {
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

//Run fat free
$f3->run();