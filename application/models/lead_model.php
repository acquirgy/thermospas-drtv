<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends MY_Model {

	public function insert($lead) {

		// Insert into local db
		$lead['date'] = date("Y-m-d");
		$result = $this->db->insert('leads', $lead);
		$lead_id = $this->db->insert_id();

		// Insert into remote db
		if($result) {

			// Update lead array to match required structure/naming of remote db
			$lead['ht_leadid'] = $lead_id;
			$lead['ht_date'] = $lead['date'];
			unset($lead['date']);  // Remote db does not have a date column
			$this->secondDB = $this->load->database('remote', TRUE);
			$remote_lead_id = $this->secondDB->insert('ht_form', $lead);

			return $lead_id;

		} else {

			return false;

		}

	}

}