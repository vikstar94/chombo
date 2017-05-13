<?php

/**
* model class for Users table
*/
class Users_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
}