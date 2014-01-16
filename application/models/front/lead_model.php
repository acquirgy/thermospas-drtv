<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends CI_Model {

	public function insert($lead) {

		// Insert into local db
		$lead['date'] = date("Y-m-d");
		$lead_id = $this->db->insert('leads', $lead);

		// Insert into remote db
		if($lead_id) {

			// Update lead array to match required structure/naming of remote db
			$lead['ht_leadid'] = $lead_id;
			$lead['ht_date'] = $lead['date'];
			unset($lead['date']);  // Remote db does not have a date column
			$this->secondDB = $this->load->database('remote', TRUE);
			$remote_lead_id = $this->secondDB->insert('ht_form', $lead);
		}

	}

}