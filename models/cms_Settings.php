<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cms_setting
 *
 * @author RENAN PECANHA
 */
class cms_Settings extends model {
    //put your code here
    
    public function getSettings() {
	$array = array();
	
	$sql = "SELECT * FROM cms_settings";
	$sql = $this->db->query($sql);
	$count = $sql->rowcount();
	
	if($count > 0){
	    foreach ($sql->fetchall() as $c){
		$array[$c['name']] = $c['value'];
	    }
	    
	}
	return $array;
    }
    
    public function setSettings($name, $value){
	$this->db->query("UPDATE cms_settings SET value = '$valuename' WHERE name = '$name' ");
    }
}
