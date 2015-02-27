<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends MY_Model {

	protected $return_type = 'array';

	public function insert($lead) {

		$lead['ht_date'] = date("Y-m-d");

		$db = $this->load->database('default', TRUE);
		$result  = $db->insert('ht_form', $lead);
		$insert_id = $db->insert_id();

		return $insert_id;

	}

	public function update($lead_id, $update) {

		$db = $this->load->database('default', TRUE);
		$db->where('ht_id', $lead_id);
		$result = $db->update('ht_form', $update);

	}

}