<?php

$texto1 = "Eu preciso aprender programação";
$texto2 = "pois será bom para minha vida";
$data = 24032020;

function texto1(){
	global $texto1;
	echo $texto1;
}

function texto2(){
	global $texto2;
	echo $texto2;
}

function data(){

	global $data;
	echo $data;
}
texto1();
echo '<br/>';
texto2();
echo '<br/>';
data();

?>