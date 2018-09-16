<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vs_Brands
 *
 * @author RENAN PECANHA
 */
class vs_Brands extends model {
    //put your code here
    public function getNameById($id) {
	
	$sql = "SELECT name FROM vs_brands WHERE id = :id";
	$sql = $this->db->prepare($sql);
	$sql->bindValue(":id", $id);
	$sql->execute();
	
	if($sql->rowCount() > 0){
	   $data = $sql->fetch();
	   
	   return $data['name'];
	}
	else{
	    return '';
	}
    }
}
