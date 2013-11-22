<?php
class HomeController
{	
	public function __construct() {
    }

    public function index()
    {
        require_once(APPLICATION_PATH . 'view/home.php');
    }

    public function display($text = 'no text')
    {
        require_once(APPLICATION_PATH . 'view/display.php');
    }
}