<?php
require_once(SYSTEM_PATH . 'controller/Controller.php');
require_once(APPLICATION_PATH . 'model/CategoryMapper.php');


class CategoryController extends Controller{

private $_categoryMapper;
private $_category;

public function __construct () {
	parent::__construct();
	$this->_categoryMapper = new CategoryMapper();
}

public function index() {
	$this->_category = $this->_categoryMapper->getAll();

	$this->_template->category = $this->_category;
	$this->_template->setPagetitle('category overzicht');  
    $this->_template->render('category_overview');
}

public function add(){
	$this->_template->setPagetitle('voeg categorie toe');  
    $this->_template->render('category_detail');
}

public function detail(){
	$this->_template->setPagetitle('wijzig categorie');  
	$this->_template->category = $this->_category;
    $this->_template->render('category_detail');
}

public function delete($id){
	$this->_categoryMapper->delete($id);
	$this->_category = $this->_categoryMapper->getAll();

	$this->_template->category = $this->_category;
	$this->_template->setPagetitle('category overzicht');  
    $this->_template->render('category_overview');
}

}
?>