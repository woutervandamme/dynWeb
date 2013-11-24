<?php
require_once(SYSTEM_PATH . 'model/Identifiable.php');

class Player extends Identifiable{

private $email;
private $naam;
private $password;
private $isadmin;
private $isblocked;

public function __construct(){
	
}

public function toArray(){
    $fields['email'] = $this->email;
    $fields['naam'] = $this->naam;
    $fields['password'] = $this->password;
    $fields['isadmin'] = $this->isadmin;
    $fields['isblocked'] = $this->isblocked;

    return $fields;
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
	return $this->isblocked;
}

public function setAdmin($isadmin){
	$this->isadmin = $isadmin;
}
public function isAdmin(){
	return $this->isadmin;
}




}


?>