<?php

use Symfony\Component\Routing\Route;
use App\Controllers\StudentController;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('/', new Route("/", [
    "_controller" => [StudentController::class, "index"]
]));

$routes->add('show', new Route("/show/{id}", [
    "_controller" => [StudentController::class, "show"]
]));

$routes->add('create', new Route("/create", [
    "_controller" => [StudentController::class, "create"]
]));

$routes->add('store', new Route("/store", [
    "_controller" => [StudentController::class, "store"]
]));

$routes->add('edit', new Route("/edit", [
    "_controller" => [StudentController::class, "edit"]
]));

$routes->add('update', new Route("/update/{id}", [
    "_controller" => [StudentController::class, "update"]
]));

$routes->add('update_store', new Route("/update_store", [
    "_controller" => [StudentController::class, "update_store"]
]));

$routes->add('destroy', new Route("/destroy/{id}", [
    "_controller" => [StudentController::class, "destroy"]
]));
