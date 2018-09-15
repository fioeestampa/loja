<?php
class Language {
  
    private $l;
    private $ini;

    public function __construct() {
	global $config;
	$this->l = $config['default_lang'];
	
	if(!empty($_SESSION['lang']) && file_exists('assets/lang/'.$_SESSION['lang'].'.ini')){
	    $this->l = $_SESSION['LANG'];
	}
	$this->ini = parse_ini_file('assets/lang/'.$this->l.'.ini');
    }
    
    public function get($word, $return = false){
	$text = $word;
	
	if(isset($this->ini[$word])){
	    $text = $this->ini[$word];
	}
	
	if($return){
	    return $text;
	} else {
	    echo $text;
	}
    }
}
