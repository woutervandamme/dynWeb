<?php
require_once(APPLICATION_PATH . 'model/Player.php');
require_once(SYSTEM_PATH . 'model/Mapper.php');

class PlayerMapper extends Mapper
{


	public function __construct(){
		parent::__construct('player', 'Player');
	}

	public function getAll(){
		return parent::getAll();
	}

	//TODO parameters invulle
	public function addPlayer(){
		return parent::add();
	}
	
	public function update($object){
		return parent::update($object);
	}

	public function delete($id){
		return parent::delete($id);
	}

}
?>
