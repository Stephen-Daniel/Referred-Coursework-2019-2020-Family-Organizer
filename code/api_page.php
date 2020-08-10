<?php 


include "includes/autoloader.inc.php";

$output = new UsersView();


header('Content-Type: application/json');



echo $output->showAllFamily();




