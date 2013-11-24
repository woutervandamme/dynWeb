<?php
   
require_once(SYSTEM_PATH . 'view/Template.php');
 
require_once(APPLICATION_PATH . 'model/MenuMapper.php');
   
   
class Controller
  
{
  
    protected $_template;
  
    public function __construct () {
  
        $this->_template = new Template();
  
        $menuMapper = new MenuMapper();
  
        $this->_template->menuItems = $menuMapper->getMenuItems();
  
        $this->_template->setPartial('navbar');
  
        $this->_template->setPartial('headermeta');
  
        $this->_template->setPartial('footer');
    }
  
}