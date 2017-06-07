<?php 
require_once APPPATH.'/models/item_parts_model.php';

/**
 * Model class for the item_sensors table
 */
class item_sensors_model extends item_parts_model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_sensors($id = NULL) {
		return $this->get_parts('sensor', $id);
	}
}