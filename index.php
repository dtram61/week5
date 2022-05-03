<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    //echo "Diner Project";

    $view = new Template();
    echo $view->render('views/info.html');

}
);


//Define a breakfast route
    $f3->route('GET /breakfast', function() {
      //echo "Breakfast project";

        $view = new Template();
        echo $view->render('views/breakfast.html');

    }
    );

//Define a order route
$f3->route('GET /orderForm1', function() {
    echo "Order page";

    $view = new Template();
    echo $view->render('views/orderForm1.html');

}
);

// Define an order 2 route
$f3->route('GET /order2', function() {
    echo "Order page";

    $view = new Template();
    echo $view->render('views/orderForm2.html');

}
);

    //Run fat free
$f3->run();