<?php
function configDB(){
	$db = Array(
	"host" => "localhost",
	"name" => "ofertometro",
	"user" => "root",
	"password" => ""
	);
    $con = mysqli_connect($db['host'],$db['user'],$db['password'],$db['name']);
	
	if(!$con){
		echo"erro";
		die();
	}else{
        mysqli_set_charset($con,"utf8");
		return $con;
	}
}

