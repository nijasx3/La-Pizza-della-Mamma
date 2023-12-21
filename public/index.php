<?php

include '../Core/Routeur.php';
include '../Controllers/Controller.php';
include '../Controllers/HomeController.php';



include '../Controllers/PizzaController.php';

include '../Controllers/PanierController.php';
include '../Controllers/ClientController.php';
include '../Controllers/ContactController.php';


$route = new Router();
$route->routes();
