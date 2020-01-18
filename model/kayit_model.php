<?php

class kayit_model extends Model {
	
	
	function __construct() {		
		parent:: __construct();
	}
	
	
	
	function kontrolet($tabload,$sutunlarim,$veri) {		
		return $this->db->Ekle($tabload,$sutunlarim,$veri); 
		
	}
	
	
	
	

	
	

	
}




?>