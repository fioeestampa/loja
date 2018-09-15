<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of langcontroller
 *
 * @author RENAN PECANHA
 */
class langController extends controller {
    //put your code here
    private $user;
    
    public function __construct() {
	parent::__construct();
    }
    
    public function index() {
	
    }
    
    public function set($lang) {
	$_SESSION['lang'] = $lang;
	header("Location: ".BASE_URL);
    }
    
}
