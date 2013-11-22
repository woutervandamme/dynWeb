<?php
class LoginController{

private $_playerMapper;
private $_player;

public function __construct() {
	require_once(APPLICATION_PATH . 'model/PlayerMapper.php');
	$this->_playerMapper = new PlayerMapper();
}

public function index() {
	$this->$players = $this->_playerMapper->getAll();
	require_once(APPLICATION_PATH . 'view/player_overview.php');
}

public function detail($id){
	$this->_player = $this->_playerMapper->get($id);
	require_once(APPLICATION_PATH .'view/player_detail.php');
}

public function register(){
	require_once(APPLICATION_PATH .'view/register.php');
}

}
 
?>