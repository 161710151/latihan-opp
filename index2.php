<?php

require_once 'index3.php';

$robot1 			= new robot ('ngok ngok ngek ngek',66);

$robot1->set_suara('ngek ngek');
$robot1->set_berat(50); 

echo 				"	suara robot adalah 		: " 	.$robot1->get_suara(). '<br>';
echo 				"	suara robot adalah 		: " 	.$robot1->get_berat(). '<br>';
?>