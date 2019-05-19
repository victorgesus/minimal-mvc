<?php

/*
|---------------------------------------------
| Example of a Home controller
|---------------------------------------------
| Loading view pages using the view method on Controller.php class
| @usage:   $this->view('nameofviewfile');
| 
| @warning: View files extension are set as .php, if you want to use .hmtl
| or other extension, please change the view method on Controller.php */

class Home extends Controller{

	public function index(){
		
		$this->view('templates/head');
		$this->view('example');
		$this->view('templates/footer');
	}
}
