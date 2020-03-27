<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	use CiPug;
	public function __construct (){
		parent::__construct();
		$this->settings([
	      'cache' => true
	    ]);
		date_default_timezone_set('Asia/Makassar');
	}
}
