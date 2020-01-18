<?php

class Database extends PDO {


	protected $dizi=array();
	
	
	function __construct() {
			
		parent::__construct('mysql:host=localhost:3306 ;dbname=mvcprojegelistir','root','1234');
		
		
		$this->bilgi= new Bilgi();
		
	}
	
	
	function Ekle($tabloisim,$sutunadlari,$veriler) {		
		
		$sutunsayi=count($sutunadlari);	
		for ($i=0; $i<$sutunsayi; $i++) :		
		$this->dizi[]='?';
		endfor;
		
		$sonVal=join (",",$this->dizi);					
		$sonhal=join (",",$sutunadlari);		
		
		$sorgu=$this->prepare('insert into '.$tabloisim.' ('.$sonhal.') 	
		VALUES('.$sonVal.')'); 
		
		
		if ($sorgu->execute($veriler)) : 
		return $this->bilgi->basarili("EKLEME BAŞARILI","/kayit/kayitekle");	
		else:		
		return $this->bilgi->hata("VERİ TABANI HATASI","/kayit/kayitekle");	
		
		endif;
		
		
	}
	

	
}




?>