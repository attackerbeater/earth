<?php 

require realpath('vendor/autoload.php');

// Controller
use \App\Controller\EarthController;

// Api
// use \App\Api\HumanRepositoryInterface;
use \App\Api\HumanRepositoryInterfaceFactory;
// use \App\Api\Data\HumanInterface;

// Model 
use \App\Model\HumanFactory;
use \App\Model\Human;


// var_dump(new Human instanceof HumanInterface);

// die();
$obj = new EarthController(
	new HumanRepositoryInterfaceFactory,
	new HumanFactory(new Human)
);

$obj->execute();