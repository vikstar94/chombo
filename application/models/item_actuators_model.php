<?php 
require_once APPPATH.'/models/item_parts_model.php';

/**
 * Model class for the item_actuators table
 */
class item_actuators_model extends item_parts_model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_actuators($id = NULL) {
		return $this->get_parts('actuator', $id);
	}

}