<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);	
function autoload($class) {

$application = ('application/'.strtolower($class).'.class.php');
$models = ('application/models/'.strtolower($class).'.class.php');
$controllers = ('application/controllers/'.strtolower($class).'.class.php');

        if (file_exists($application)) {
            require_once $application;
        } 
		else if (file_exists($models)) {
			require_once $models;
		}
		else if (file_exists($controllers)) {
			require_once $controllers;
		}
    } 

spl_autoload_register ('autoload');


	new Controller();


?>