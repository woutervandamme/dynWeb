<?php
require_once(SYSTEM_PATH . 'model/Identifiable.php');

class Category extends Identifiable{

private $categorynaam;

public function __construct(){
}

public function __toString(){
	return 'naam: ' . $this->getCategorynaam(); 
}

public function setCategorynaam($naam){
	$this->categorynaam = $naam;
}
public function getCategorynaam(){
	return $this->categorynaam;
}

public function toArray(){
    $fields['categoryname'] = $this->_categoryname;
    return $fields;
}

}


?>