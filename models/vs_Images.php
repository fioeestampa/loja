<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vs_Images
 *
 * @author RENAN PECANHA
 */
class vs_Images extends model {
    //put your code here
    
    public function getImagesByProductId($id) {
	$array = array();
	
	$sql = "SELECT url FROM vs_products_images WHERE id_product = :id";
	$sql = $this->db->prepare($sql);
	$sql->bindValue(":id", $id);
	$sql->execute();
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetchAll();
	}
	
	return $array;
    }
}
