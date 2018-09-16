<?php
class Core {

	public function run() {
        $url = '/'.(isset($_GET['q'])?$_GET['q']:'');

		$params = array();
		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && $url[0] != '/') {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		
		
		// Caso exita o "Controll" com o nome digitado faça:
		if(file_exists('controllers/'.$currentController.'.php')){
		    $c = new $currentController();
		}
		// Caso não exista o "Controlle" digitado faça:
		else{
		    $pName = explode("Controller", $currentController);
		    $pName = $pName[0];
		    // Caso não exista o Controlle digitado
		    // Mas exista uma categoria digitada faça:
		    $categories = new vs_Categories;
		    $m = array($categories->getCategoriesMainUrl($pName));
		    
		    if(!empty($m)){
			$c = new categoriesController();
			$currentAction = "index";
			$params = array($pName);
		    }
		    else{
		    // Caso não exista o "Controlle" digitado faça:
		    $c = new pageController();
		    $currentAction = "index";
		    $params = array($pName);
		    }
		}
		
		call_user_func_array(array($c, $currentAction), $params);
	}

}