<?php
require_once(SYSTEM_PATH . 'controller/Controller.php');

class HomeController extends Controller
{	

	public function __construct () {
		parent::__construct();
	}

    public function index()
    { 
        $this->_template->setPagetitle('Home');  
        $this->_template->render('home');
    }

}