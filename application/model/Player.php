<?php

class Player{

private $id;
private $email;
private $naam;
private $password;
private $isadmin;
private $isblocked;

public function __construct(){
	
}

public function __toString(){
	return 'naam: ' . $this->getNaam(); 
}

public function setNaam($naam){
	$this->naam = $naam;
}
public function getNaam(){
	return $this->naam;
}

public function setId($id){
	$this->id = $id;
}
public function getId(){
	return $this->id;
}

public function setEmail($email){
	$this->email = $email;
}
public function getEmail(){
	return $this->email;
}

public function setPassword($password){
	$this->password = $password;
}
public function getPassword(){
	return $this->password;
}

public function setBlocked($isblocked){
	$this->isblocked = $isblocked;
}
public function isBlocked(){
	return $this->isBlocked;
}

public function setAdmin($isadmin){
	$this->isadmin = $isadmin;
}
public function isAdmin(){
	return $this->isAdmin;
}




}


?>