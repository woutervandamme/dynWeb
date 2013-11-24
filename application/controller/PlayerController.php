<?php
require_once(SYSTEM_PATH . 'controller/Controller.php');
require_once(APPLICATION_PATH . 'model/PlayerMapper.php');


class PlayerController extends Controller{

private $_playerMapper;
private $_player;

public function __construct () {
	parent::__construct();
	$this->_playerMapper = new PlayerMapper();
}

public function index() {
	$this->_player = $this->_playerMapper->getAll();

	$this->_template->player = $this->_player;
	$this->_template->setPagetitle('player overzicht');  
    $this->_template->render('player_overview');
}

public function detail($id){
	$this->_player = $this->_playerMapper->get($id);

	$this->_template->player = $this->_player;
	$this->_template->setPagetitle('player detail');  
    $this->_template->render('player_detail');
}


public function register() {


	$this->_template->player = $this->_player;
    $this->_template->render('home');
}

public function logIn(){

}

public function blokkeer($id){
	$this->_player = $this->_playerMapper->get($id);
	$this->_player->setBlocked(true);

	$this->_playerMapper->update($this->_player);


	$this->_player = $this->_playerMapper->getAll();

	$this->_template->player = $this->_player;
	$this->_template->setPagetitle('player overzicht');  
    $this->_template->render('player_overview');
}

public function delete($id){
	$this->_playerMapper->delete($id);
	$this->_player = $this->_playerMapper->getAll();

	$this->_template->player = $this->_player;
	$this->_template->setPagetitle('player overzicht');  
    $this->_template->render('player_overview');
}

}
?>