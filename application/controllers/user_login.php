<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class User_login extends MY_Controller {


	public functton __construct(){
		parent::__construct();

	}

	function main(){



	}

	function forget_password() {
		var_dump("hello");
		$this->view("users/forget_password");

	}

	function register() {

	}

}



?>