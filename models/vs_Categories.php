<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vs_categories
 *
 * @author RENAN PECANHA
 */
class vs_Categories extends model {
    //put your code here
    public function getCategories($id=0){
	$array = array();
	
	$sql = "SELECT * FROM vs_categories";
	if($id > 0){
	    $sql.= " WHERE id = '$id'";
	}
	
	
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    if($id > 0){
		$array = $sql->fetch();
	    }else{
		$array = $sql->fetchAll();
	    }
	}
	
	return $array;
    }
    
    public function getCategoriesMain(){
	$array = array();
	
	$sql = "SELECT * FROM vs_categories WHERE main = 'true' AND active = 'true' AND sub is null ORDER BY id_order ASC";
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetchAll();
	}
	return $array;
    }
    
    public function getCategoriesMainUrl($url){
	$array = array();
	
	$sql = "SELECT name, url FROM vs_categories WHERE url = '$url' ORDER BY id_order ASC";
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetchAll();
	}
	return $array;
    }
    
}
