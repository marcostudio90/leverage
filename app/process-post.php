<?php

if (isset($_POST['name'])) {
	
	$name=$_POST['name'];
	$check=loginNew($name);
	if($check){
		echo "entra";
	}else{
		echo "fuori";
	}
}

function login (string $name){
	if($name === 'marco'){
		
		return true;
	} else{
		return false;
	}
}

function loginNew (string $name){
	if($name === 'marco'){
		
		return true;
	} 
	return false;
}