<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	abstract class  MY_Controller extends CI_Controller{

		public $login_user;

		public function __construct(){
			parent::__construct();
			

		}

	}
?>