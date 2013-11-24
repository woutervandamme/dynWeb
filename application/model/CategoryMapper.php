<?php
require_once(APPLICATION_PATH . 'model/Category.php');
require_once(SYSTEM_PATH . 'model/Mapper.php');

class CategoryMapper extends Mapper
{


	public function __construct(){
		parent::__construct('category', 'Category');
	}

	public function getAll(){
		return parent::getAll();
	}

	public function delete($id){
		return parent::delete($id);
	}

}
?>
