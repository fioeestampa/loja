<?php
class categoriesController extends controller {
    
    public function __contruct(){
	parent::__construct();
    }
    
    public function index($url){
	$data = array();
	
	$p = new vs_Categories();
	$products = new vs_Products();
	
	$currentPage = 1;
	$offset = 0;
	$limit = 3;
	
	if(!empty($_GET['p'])){
	    $currentPage = $_GET['p'];
	}
	
	$offset = ($currentPage * $limit) - $limit;
	
	$data['categories'] = $p->getCategoriesMainUrl($url);
	$data['list'] = $products->getList($offset, $limit);
	$data['totalItens'] = $products->getTotal();
	$data['numberOfPages'] = ceil($data['totalItens']/$limit);
	$data['currentPage'] = $currentPage;
	$data['url'] = $url;
	
	$this->loadTemplate('categories', $data);
    }
}
