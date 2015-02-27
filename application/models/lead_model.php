<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends MY_Model {

	protected $return_type = 'array';

	public function insert($lead) {

		// Insert into ht_form
		$lead['ht_date'] = date("Y-m-d");

		$remote_db = $this->load->database('remote', TRUE);
		$result  = $remote_db->insert('ht_form', $lead);

	}

	public function update($lead_id, $update) {

	}

}