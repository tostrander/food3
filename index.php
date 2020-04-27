<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");

//Instantiate the F3 Base class
$f3 = Base::instance();

//Default route
$f3->route('GET /', function() {
    //echo '<h1>Welcome to my Food Page</h1>';

    $view = new Template();
    echo $view->render('views/home.html');
});

//Breakfast route
$f3->route('GET /breakfast', function() {
   //echo '<h1>Welcome to my Breakfast Page</h1>';

    $view = new Template();
    echo $view->render('views/bfast.html');

});

//Breakfast / green eggs & ham route
$f3->route('GET /breakfast/green-eggs', function() {
    //echo '<h1>Welcome to my Breakfast Page</h1>';

    $view = new Template();
    echo $view->render('views/greenEggsAndHam.html');

});

//Reuben route
$f3->route('GET /lunch/sandwiches/reuben', function() {
    //echo '<h1>Welcome to my Breakfast Page</h1>';

    $view = new Template();
    echo $view->render('views/reuben.html');

});

//Run F3
$f3->run();