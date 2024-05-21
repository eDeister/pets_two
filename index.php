<?php

//Set error reporting to true, require autoload, and start session
ini_set('error_reporting',1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');
session_start();

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
        $type = $_POST['types'];


        if(!empty($type)) {
            if($type == 'robotic') {
                $pet = new RoboticPet("", $_POST['color'],"");
                $f3->set('SESSION.pet',$pet);
                $f3->reroute('robotic');
            } else if($type == 'stuffed') {
                $pet = new StuffedPet("", $_POST['color'],"","","");
                $f3->set('SESSION.pet',$pet);
                $f3->reroute('stuffed');
            }


        }

        //Validate the data
        if (!isset($_POST['color']) || !isset($_POST['types'])) {
            echo 'Please enter a pet type.';
        } else {
            //Data is valid
            $f3->set('SESSION.pet',$pet);
            $f3->reroute('summary');
        }
    }

    $view = new Template();
    echo $view->render('views/pet-order.html');
});

$f3->route('GET|POST /stuffed', function($f3) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pet = $f3->get('SESSION.pet');

        $pet->setSize($_POST['size']);
        $pet->setMaterial($_POST['material']);

        $f3->set('SESSION.pet',$pet);
        $f3->reroute('summary');
    }

    $view = new Template();
    echo $view->render('views/stuffed.html');
});

$f3->route('GET|POST /robotic', function($f3) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pet = $f3->get('SESSION.pet');

        $pet->setAccessories($_POST['accessories']);

        $f3->set('SESSION.pet',$pet);
        $f3->reroute('summary');
    }

    $view = new Template();
    echo $view->render('views/robotic.html');
});

$f3->route('GET|POST /summary', function($f3) {
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

//Run fat free
$f3->run();