<?php
class controller {

	protected $db;
	protected $lang;
	private $cms_Settings;

	public function __construct() {
		global $config;
		$stgs = new cms_Settings();
		
		$this->cms_Settings = $stgs->getSettings();
		$this->lang = new Language;
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/templates/ecommerce/'.$this->cms_Settings['template'].'/tpl/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/templates/ecommerce/'.$this->cms_Settings['template'].'/tpl/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/templates/ecommerce/'.$this->cms_Settings['template'].'/tpl/'.$viewName.'.php';
	}
	
	public function loadMenuPrincipal() {
	$menu = new vs_categories;
	$m = array();
	$m['menu'] = $menu->getCategoriesMain();
	
	$this->loadView("menu_principal", $m);
    }

}