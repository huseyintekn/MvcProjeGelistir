<?php

class  View {
	
	
	function __construct() {		
		
	}
	
	
	public function goster ($dosyaad,$data=null) {
		
		require 'views/'.$dosyaad.'.php';
		
	}
	
	
	

	
}




?>