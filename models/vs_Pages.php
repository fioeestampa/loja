<?php
class vs_Pages extends model {
    
    public function getPages() {
	$array = array();
	
	$sql = "SELECT id, url, title FROM vs_pages";
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetchAll();
	}
	return $array;
    }
    
    public function getPage($url){
	$array = array();
	
	$sql = "SELECT title, body FROM vs_pages WHERE url='$url'";
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetch();
	} 
	return $array;
    }
    
    public function getPageById($id){
	$array = array();
	
	$sql = "SELECT title, url, body FROM vs_pages WHERE id='$id'";
	$sql = $this->db->query($sql);
	
	if($sql->rowCount() > 0){
	    $array = $sql->fetch();
	}
	return $array;
    }
    
    public function delete($id) {
	$this->db->query("DELETE FROM vs_pages WHERE id = '$id'");
    }
    
    public function update($title, $url, $body, $id) {
	$this->db->query("UPDATE vs_pages SET title = '$title', url = '$url', body = '$body' WHERE id = '$id'");
    }
    
     public function insert($title, $url, $body) {
	$this->db->query("INSERT INTO vs_pages SET title = '$title', url = '$url', body = '$body'");
	//return $this->db->lastInsertId();
    }
}

