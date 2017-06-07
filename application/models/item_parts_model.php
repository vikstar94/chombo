<?php 

/**
 * Parent model class for the item_sensors_model and item_actuators_model table
 */
class item_parts_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	public function get_parts($type = NULL, $id = NULL) {
		if ($type !== NULL && in_array($type, array('sensor', 'actuator'))) {
			if (!empty($id)) {
				$this->db->where('id', $id);
			}
			$this->db->from('item_'.$type.'s');

			$query = $this->db->get();
			return $query->result_array();
		}

		$query = $this->db->get('item_sensors');
		$parts_data['sensors'] = $query->result_array();

		$query = $this->db->get('item_actuators');
		$parts_data['actuators'] = $query->result_array();

		return $parts_data;
	}
}
