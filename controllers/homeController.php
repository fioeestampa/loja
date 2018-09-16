<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();

	$products = new vs_Products();
	$data['list'] = $products->getList();
        $this->loadTemplate('home', $data);
    }

}