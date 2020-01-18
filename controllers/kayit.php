<?php

class kayit extends Controller  {
	
	
	function __construct() {
		parent::__construct();
	
	$this->Modelyukle('kayit');
	
	
		
	}
	
	
	
	function kayitekle() {
	$this->view->goster("form/index");	
	}
	
	
	
	
	function kontrol() {
	
	
	$ad=$this->form->get("ad")->bosmu();
	$soyad=$this->form->get("soyad")->bosmu();
	$yas=$this->form->get("yas")->bosmu();
	
	if (!empty($this->form->error)) :
	// bir hata var demektir.

	$this->view->goster("form/sonuc",$this->form->error);
	else:
$sonuc=$this->model->kontrolet("ogrenci",array("ad","soyad","yas"),array($ad,$soyad,$yas));

	
$this->view->goster("form/sonuc",$sonuc);
	
	
	endif;
	

	
	

		
	}
	

	
}




?>