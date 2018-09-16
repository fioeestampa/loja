<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vs_productts
 *
 * @author RENAN PECANHA
 */
class vs_Products extends model {
     
    public function getList($offset =0, $limit = 3){
	$array = array();
	
	$sql = "SELECT *, (select vs_brands.name from vs_brands where vs_brands.id = vs_products.id_brand) as brand_name,(select vs_categories.name from vs_categories where vs_categories.id = vs_products.id_category) as category_name FROM vs_products LIMIT $offset,$limit";
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetchAll();
	    
	    //$brands = new vs_Brands;
	    /*foreach($array as $key => $item){
		
		$array[$key]['brand_name'] = $brands->getNameById($item['id_brand']);
	    }*/
	 $images = new vs_Images;
	 foreach ($array as $key => $value) {
	     
	     $array[$key]['images'] = $images->getImagesByProductId($value['id']);
	 }
	}
	return $array;	
    }  
    
    public function getTotal() {
	
	$sql = "SELECT COUNT(*) as c FROM vs_products";
	$sql = $this->db->query($sql);
	$sql = $sql->fetch();
	
	return $sql['c'];
    }
}
