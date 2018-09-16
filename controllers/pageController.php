<?php
class pageController extends controller {
    
    public function __contruct(){
	parent::__construct();
    }
    
    public function index($url){
	$data = array();
	
	$p = new vs_Pages;
	$data = $p->getPage($url);
		
	$this->loadTemplate('pagina', $data);
    }
}
